<?php
/**
 * Plugin Name: Flowaccount API
 * Description: Open cash invoice on FlowAccount when order on WooCommerce is complete
 * Version: 1.1
 * Author: FlowAccount
 * Author URI: https://flowaccount.com/
 * Requires at least: 5.2
 * Requires PHP: 7.0
 * Text Domain: flowaccount-api
*/
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WooFlowaccount', false ) ) 
{
    include_once 'WooFlowaccount.class.php';
}
  
define('FLOWACCOUNT_API_PLUGIN_VERSION','1.0');
define('FLOWACCOUNT_API_PLUGIN_URL',plugin_dir_url( __FILE__ ));
// Instantiate Class
$WooFlowaccount = new WooFlowaccount();

?>
