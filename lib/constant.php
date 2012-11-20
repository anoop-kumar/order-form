<?php
global $wpdb;

if(!defined('PRODUCT_TABLE'))
	define('PRODUCT_TABLE',$wpdb->prefix."products");

if(!defined('ORDER_TRANSACTION_TABLE'))
	define('ORDER_TRANSACTION_TABLE',$wpdb->prefix."order_transaction");