<?php
if ( ! defined( 'ABSPATH' ) ) exit;

?>
<div class="wcfacc-data-fields">
<?php
    if($doc_id = get_post_meta($post->ID, $this->post_meta_key, true)){

        $link = get_post_meta($post->ID, $this->post_meta_key.'_link', true);
        if(!($link) || empty($link)){
            $link = $this->api_cash_invoices_get_link($doc_id);
            update_post_meta($post->ID, $this->post_meta_key.'_link', $link);
        }
?>
        <a href="<?php echo esc_url($link);?>" class="button" target="_blank" alt="View Invoice"><?php _e( 'View Invoice', 'flowaccount-api' )?></a>
<?php
    }
    else{
        $order = new WC_Order($post->ID);
        if($order->get_date_paid()){
?>
        <a class="button button-primary wcfacc-send-api" data-orderid="<?php esc_attr_e($post->ID)?>" data-nonce="<?php esc_attr_e(wp_create_nonce( "wcfacc_send-api" ));?>" alt="Create Invoice"><?php _e( 'Create Invoice', 'flowaccount-api' );?></a>
<?php
        }
    }
?>
</div>
