<?php
// [orderform pids="1,2,3"]
function of_display_form( $atts ) {
	extract( shortcode_atts( array(
	'pids' => NULL	
	), $atts ) );
	$output = '';
	//product ids
	return $output;
}
add_shortcode( 'orderform', 'of_display_form' );