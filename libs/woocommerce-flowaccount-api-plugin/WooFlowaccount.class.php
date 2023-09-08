<?php
defined( 'ABSPATH' ) || exit;

class WooFlowaccount
{
    private $option;
    private $access_token;
    private $post_meta_key = '_wc_flowaccount_docID';
    private $option_key = 'wc_flowaccount_settings';
	public function __construct(){
        $this->option = get_option($this->option_key);

		add_action('admin_enqueue_scripts', array($this, 'load_admin_scripts') ); //load admin assets
        add_action('admin_menu', array($this, 'menu'), 999); //add admin setting menu
        add_action('admin_init', array($this, 'settings_init') ); //initialize setting page 
        add_action('admin_notices', array($this, 'admin_notice_tax'));

        add_filter( 'plugin_action_links_woo-flowaccount/woo-flowaccount.php', array($this, 'settings_link') ); //add setting link
        if ( is_admin() && ! defined( 'DOING_AJAX' ) ) {
			add_action( 'wp_loaded', array( $this, 'do_install' ) );
		}
        if( isset($this->option['auto_enabled']) && $this->option['auto_enabled']==1){ //add action if auto create invoice enabled
            add_action('woocommerce_payment_complete', array($this, 'create_cash_invoices_with_payment'), 10, 1);
            add_action('woocommerce_order_status_processing', array($this, 'create_cash_invoices_with_payment'), 10, 1);
            add_action('woocommerce_order_status_completed', array($this, 'create_cash_invoices_with_payment'), 10, 1);
        }
        // add order api column status
        add_filter('manage_edit-shop_order_columns', array($this, 'shop_order_column'), 20 );
        add_filter('manage_shop_order_posts_custom_column', array($this, 'orders_list_column_content'), 20, 2 );
        // add order meta box
        add_action('add_meta_boxes_shop_order', array( $this, 'add_meta_boxes' ) );
        add_action('wp_ajax_createCashInvoices', array($this, 'ajax_createCashInvoices'));
        
	}
    public function do_install(){
        $default_setting = array(
            'auto_enabled'=>0,
            'api_url'=>'https://openapi.flowaccount.com/v1',
            'client_id'=>'',
            'client_secret'=>'',
        );
        if( !get_option('wc_flowaccount_settings')){
            add_option( 'wc_flowaccount_settings', $default_setting, '', false );
        }
    }
    function admin_notice_tax(){
        global $pagenow;
        if($pagenow=='admin.php' && isset($_GET['page']) && $_GET['page']=='wc-settings' && isset($_GET['tab']) &&  $_GET['tab']=='tax'):
        ?>
        <div class="notice notice-info">
            <p><strong><?php _e( 'Flowaccount API', 'flowaccount-api' ); ?></strong> <?php _e( 'support only 7% vat.', 'flowaccount-api' ); ?></p>
        </div>
        <?php
        endif;
    }
    function settings_link( $links ) {
        $url = esc_url( add_query_arg(
            'page',
            'wc_flowaccount_options',
            get_admin_url() . 'admin.php'
        ) );
        $settings_link = "<a href='$url'>" . __( 'Settings' ) . '</a>';
        array_push(
            $links,
            $settings_link
        );
        return $links;
    }
    public function load_admin_scripts(){
        wp_enqueue_style('wcfacc_admin', FLOWACCOUNT_API_PLUGIN_URL . 'assets/css/admin.css', false, FLOWACCOUNT_API_PLUGIN_VERSION);
        wp_enqueue_script('wcfacc_admin', FLOWACCOUNT_API_PLUGIN_URL . 'assets/js/order-script.js',array( 'jquery', 'jquery-blockui' ), FLOWACCOUNT_API_PLUGIN_VERSION);
        wp_localize_script( 'wcfacc_admin', 'wcfacc_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' )) );
    }
    public function menu(){
        $parent_slug = 'woocommerce';
		
		$this->options_page_hook = add_submenu_page(
			$parent_slug,
			esc_html__( 'Flowaccount API Setting', 'flowaccount-api' ),
			esc_html__( 'Flowaccount API Setting', 'flowaccount-api' ),
			'manage_woocommerce',
			'wc_flowaccount_options',
			array( $this, 'settings_page' )
		);
    } 
    public function settings_page(){
        include plugin_dir_path( __FILE__ ).'template/setting.php';
    }
    public function settings_init(){
        register_setting( 'wc_flowaccount_setting', 'wc_flowaccount_settings' );
        add_settings_section(
            'wc_flowaccount_setting_section',
            __( 'General settings', 'flowaccount-api' ),
            array($this, 'setting_section_callback'),
            'wc_flowaccount_setting'
        );
    }
    public function setting_section_callback(){
        include plugin_dir_path( __FILE__ ).'template/setting_section.php';
    }
    public function shop_order_column($columns){
        $columns['wcfacc'] = __( 'Flowaccount API Status','flowaccount-api');
        return $columns;
    }
    public function orders_list_column_content( $column, $post_id ){
        switch ( $column ){
            case 'wcfacc' :
                if(!empty(get_post_meta($post_id, $this->post_meta_key, true))){
                    echo "<mark class=\"order-status status-completed\"><span>".__( 'Success','flowaccount-api')."</span></mark>";
                }
                break;
        }
    }
    public function add_meta_boxes(){
        add_meta_box(
			'wpo_wcfacc-box',
			__( 'Flowaccount API', 'flowaccount-api' ),
			array( $this, 'show_meta_box' ),
			'shop_order',
			'side',
			'default'
		);
    }
    public function show_meta_box( $post ) {
        include plugin_dir_path( __FILE__ ).'template/order_metabox_side.php';
    }
    public function ajax_createCashInvoices() {  
        if(isset($_POST['order_id']) && intval($_POST['order_id'])){
            $order_id = intval($_POST['order_id']);
            $this->create_cash_invoices_with_payment($order_id);

            if($doc_id = get_post_meta( $order_id, $this->post_meta_key, true)){
                wp_send_json_success( array(
                    'message'=> __( 'Cash Invoice Created.', 'flowaccount-api' )
                ) );
            }
            else{
                wp_send_json_error( array(
					'message' => __( 'Error!', 'flowaccount-api' ),
				) );
            }
        }
        exit;
    }

    public function create_cash_invoices_with_payment($order_id){
        $order = new WC_Order($order_id);
        
        if(!$order){ 
            return; //return when can't get order data.
        }
        if(!$order->get_date_paid()){
            return; //return when can't get order paid date.
        }
        if($order->get_currency()!='THB'){
            return; //check woocommerce currency
        }
        if(get_post_meta($order_id, $this->post_meta_key, true)){
            return; //return when order invoice created.
        }
        $is_include_tax = $order->get_prices_include_tax()==1;
        //genarate customer address
        $raw_address = $order->get_address( 'billing' );
        unset($raw_address['first_name']);
        unset($raw_address['last_name']);
        unset($raw_address['company']);
        unset($raw_address['postcode']);
        $address =  WC()->countries->get_formatted_address( $raw_address );

        //init data
        $post_data = array(
            'projectName' => get_bloginfo('name')." #".$order_id,
            'salesName'   => get_bloginfo('name'),
            'contactName' => !empty($order->get_billing_company()) ? $order->get_billing_company():$order->get_formatted_billing_full_name(),
            'contactAddress' => preg_replace( '#<br\s*/?>#i',"\n",$address),
            'contactPerson'  => $order->get_formatted_billing_full_name(),
            'contactEmail'   => $order->get_billing_email(),
            'contactNumber'  => $order->get_billing_phone(),
            'contactZipCode' => $order->get_billing_postcode(),
            'contactGroup'   => !empty($order->get_billing_company()) ? 3:1,
            'creditType'     => 3,
            'remarks'        => $order->get_customer_note(),

            'publishedOn' => date_i18n('Y-m-d'),
            'dueDate'     => date_i18n('Y-m-d'),
            'paymentDate' => $order->get_date_paid()->date_i18n('Y-m-d'),
            'documentPaymentStructureType' => 'SimpleDocumentWithPaymentReceivingCash',
            'paymentMethod' => 1,
            
            'isVatInclusive' => $is_include_tax,
            'isVat'        => floatval($order->get_total_tax())!=0,
            'useInlineVat' => floatval($order->get_total_tax())!=0,
            'useInlineDiscount' => true,
            'exemptAmount'=> 0,
            
            'vatAmount'   => round($order->get_total_tax(),2),
            'grandTotal'  => round($order->get_total(),2),
            'collected'   => round($order->get_total()),

            'items' => array(),

        );
       
        //add items
        $total_cart = 0;
        $total_discount = 0;
        foreach ( $order->get_items() as $item_id => $item ) {
            $item_data = array(
                'type'  => 3,
                'name'  => $item->get_name(),
                'quantity'     => $item->get_quantity(),
                'pricePerUnit' => $item->get_subtotal()/$item->get_quantity(),
                'discountAmount' => round(($item->get_subtotal()-$item->get_total())/$item->get_subtotal()*100,2),
                'vatRate' => round($item->get_subtotal_tax()/$item->get_subtotal()*100),
                'total' => $item->get_total()
            );
            $discount = $item->get_subtotal()-$item->get_total();
            if($is_include_tax){
                $item_data['pricePerUnit'] *= ($item_data['vatRate']+100)/100 ;
                $item_data['total']        *= ($item_data['vatRate']+100)/100 ;
                $discount                  *= ($item_data['vatRate']+100)/100 ;
            }
            $total_cart     += $item_data['pricePerUnit']*$item->get_quantity();
            $total_discount += $discount;
            $item_data['pricePerUnit'] = round($item_data['pricePerUnit'], 2);
            $item_data['total']        = round($item_data['total'], 2);
            
            $post_data['items'][] = $item_data;
        }
        //add fee
        $total_fee = 0;
        foreach ( $order->get_fees() as $item_id => $item ) {
            $item_data = array(
                'type'  => 1,
                'name'  => __( 'Fee', 'flowaccount-api' ),
                'description' => $item->get_name(),
                'quantity'     => 1,
                'pricePerUnit' => $item->get_total(),
                'vatRate' => round($item->get_total_tax()/$item->get_total()*100),
                'total' => $item->get_total()
            );
            if($is_include_tax){
                $item_data['pricePerUnit'] *= ($item_data['vatRate']+100)/100 ;
                $item_data['total']        *= ($item_data['vatRate']+100)/100 ;
            }
            $total_fee += $item_data['pricePerUnit'];
            $item_data['pricePerUnit'] = round($item_data['pricePerUnit'], 2);
            $item_data['total']        = round($item_data['total'], 2);

            
            $post_data['items'][] = $item_data;
        }
        //add shipping
        $total_ship = 0;
        if(floatval($order->get_shipping_total())!=0){
            $item_data = array(
                'type'  => 1,
                'name'  => __( 'Shipping', 'flowaccount-api' ),
                'description' => $order->get_shipping_method(),
                'quantity'     => 1,
                'pricePerUnit' => $order->get_shipping_total(),
                'vatRate' => round($order->get_shipping_tax()/$order->get_shipping_total()*100),
                'total' => $order->get_shipping_total(),
            );

            if($is_include_tax){
                $item_data['pricePerUnit'] *= ($item_data['vatRate']+100)/100 ;
                $item_data['total']        *= ($item_data['vatRate']+100)/100 ;
            }
            $total_ship += $item_data['total'];
            $item_data['pricePerUnit'] = round($item_data['pricePerUnit'], 2);
            $item_data['total']        = round($item_data['total'], 2);

            $post_data['items'][] = $item_data;
        }
        //calculate subtotal
        $sub_total = $total_cart+$total_fee+$total_ship;
        $post_data['subTotal'] = round($sub_total, 2);
        $post_data['discountAmount'] = round($total_discount, 2);
        $post_data['totalAfterDiscount'] = round($sub_total - $total_discount, 2);
        
        //calculate exemptAmount
        $post_data['exemptAmount'] = 0;
        foreach($post_data['items'] as $item){
            if($item['vatRate']<=0){
                $post_data['exemptAmount'] += $item['total'];
            }
        }
        $post_data['exemptAmount'] = round($post_data['exemptAmount'],2);
       
        //send data
        $response = $this->api_cash_invoices_with_payment($post_data);
        if(isset($response['status']) && $response['status']===true){
            if(isset($response['data']['documentId'])){
                add_post_meta($order_id, $this->post_meta_key, $response['data']['documentId'], true);
            }
        }
    }
    private function api_authen(){
        if(!$this->option){
            return false;
        }
        if(empty($this->option['api_url']) || empty($this->option['client_id']) || empty($this->option['client_secret'])){
            return false;
        }
        if(!empty($this->access_token)){
            return $this->access_token; //return exists token.
        }
       
        $post_data = array(
            'client_id'     => $this->option['client_id'],
            'client_secret' => $this->option['client_secret'],
            'grant_type' => 'client_credentials',
            'scope'      => 'flowaccount-api'
        );
        
        $args = array(
            'body' => $post_data,
            'timeout'     => '15',
            'redirection' => '5',
            'httpversion' => '1.0',
            'blocking'    => true,
            'headers'     => array(),
        );
        $response = wp_remote_post( rtrim($this->option['api_url'],"/")."/token", $args );
        if(empty($response['body'])){
            return false;
        }
        $response = json_decode($response['body'],true);

        if(isset($response['access_token'])){
            $this->access_token = $response['access_token'];
            return $this->access_token;
        }
       
        return false;
    }
    private function api_cash_invoices_with_payment(array $post_data){
        if(empty($this->api_authen())){
            return false;
        }
        $args = array(
            'body' => json_encode($post_data),
            'timeout'     => '15',
            'redirection' => '5',
            'httpversion' => '1.0',
            'blocking'    => true,
            'headers'     => array(
                'content-type'  => 'application/json',
                'Authorization' => 'Bearer '.$this->api_authen()
            ),
        );
        
        $response = wp_remote_post( rtrim($this->option['api_url'],"/")."/cash-invoices/inline/with-payment", $args );

        if(!empty($response['body'])){
            return json_decode($response['body'],true);
        }

        return false;
    }
    private function api_cash_invoices_get_link($documentId){
        if(empty($this->api_authen())){
            return false;
        }
        $post_data = array(
            'documentId'=>$documentId
        );
        $args = array(
            'body' => json_encode($post_data),
            'timeout'     => '15',
            'redirection' => '5',
            'httpversion' => '1.0',
            'blocking'    => true,
            'headers'     => array(
                'content-type'  => 'application/json',
                'Authorization' => 'Bearer '.$this->api_authen()
            ),
        );
        $response = wp_remote_post( rtrim($this->option['api_url'],"/")."/cash-invoices/sharedocument", $args );

        if(empty($response['body'])){
            return false;
        }
        
        if($response = json_decode($response['body'],true)){
            if( isset($response['status']) && $response['status']===true){
                return $response['data']['link'];
            }
        }
        return false;
    }
}
?>
