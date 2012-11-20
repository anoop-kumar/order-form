<?php
/*
Plugin Name: Quick Order Form
Plugin URI: http://anoop4u.wordpress.com/get-product-quote
Description: Let the visoty to get a price quote for various products
Version: 1.0
Author: Anoop Kumar Srivastava
Author URI: http://anoop4u.wordpress.com/
License: GPL2
*/


if(!defined('PQ_ROOT_PATH')){
		define('PQ_ROOT_PATH', plugin_dir_path(__FILE__).'/');
		define('PQ_PLUGIN_URL',plugins_url().'/order-form');
}
// Adding all the required file
require(PQ_ROOT_PATH."lib/constant.php");
require(PQ_ROOT_PATH."lib/utility.php");	
require(PQ_ROOT_PATH."lib/db_tables.php");	
require(PQ_ROOT_PATH."lib/shortcode.php");
/* Runs when plugin is activated */
register_activation_hook(__FILE__, 'of_install');
/* Runs when plugin is de-activated */
register_deactivation_hook( __FILE__ , 'of_deactivate' );

add_action('activated_plugin','save_error');
function save_error(){
    update_option('plugin_error',  ob_get_contents());
}
?>