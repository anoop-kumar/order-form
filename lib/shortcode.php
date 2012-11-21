<?php
// [orderform pids="1,2,3"]
function of_display_form( $atts ) {
	extract( shortcode_atts( array(
	'pids' => NULL	
	), $atts ) );
	$output = '';
	if(!empty($pids)){
		$product_ids = explode(',', $pids);
		foreach($product_ids as $pid){
			$product = of_getProductDetails($pid);
			if($product){
				
			}
		}		
	}
	//product ids
	return $output;
}
add_shortcode( 'orderform', 'of_display_form' );
?>