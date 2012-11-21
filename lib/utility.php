<?php
if(!function_exists("of_getProductDetails")){
	function of_getProductDetails($pid){
		global $wpdb;
		$sql = "SELECT * FROM ".PRODUCT_TABLE." WHERE id='$pid'";
		$product = $wpdb->get_row($sql, ARRAY_A);
		return $product;
	}
}