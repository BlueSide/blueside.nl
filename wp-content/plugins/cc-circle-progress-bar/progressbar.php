<?php
/*
Plugin Name: CC Circle Progress Bar
Plugin URI: http://wordpress.org/plugins/cc-circle-progress-bar/
Description: It will show animated circle on your website. You can use it with a simple shortcode.
Author: Harun R. Rayhan (Cr@zy Coder)
Version: 1.0.0
Author URI: http://www.crazy-coder.com
*/
function cc_circle_progressbar_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'cc_circle_progressbar_jquery'); 
function cc_circle_progressbar_js() {
    wp_enqueue_script( 'lazy-news-js', plugins_url( '/js/jquery.circliful.min.js', __FILE__ ), array('jquery'), 1.0, false);
    wp_enqueue_style( 'lazy-news-css', plugins_url( '/css/jquery.circliful.css', __FILE__ ), array(), 1.0, false);
}
add_action('init','cc_circle_progressbar_js');



function cc_progressbar_shortcode($atts){
	extract( shortcode_atts( array(
		'id' => '1',
		'dimen' => '250',
		'text' => '90%',
		'info' => 'Photoshop',
		'width' => '10',
		'fontsize' => '25',
		'percent' => '90',
		'fgcolor' => 'red',
		'bgcolor' => '#000',
		'fillcolor' => '',
		'type' => 'full',
		'border' => 'outline',
	), $atts, 'progressbar' ) );
	return '<div id="ccprogress-'.$id.'" data-dimension="'.$dimen.'" data-text="'.$text.'" data-info="'.$info.'" data-width="'.$width.'" data-fontsize="'.$fontsize.'" data-percent="'.$percent.'" data-fgcolor="'.$fgcolor.'" data-bgcolor="'.$bgcolor.'" data-fill="'.$fillcolor.'" data-type="'.$type.'" data-border="'.$border.'" ></div>
	<script>
		jQuery( document ).ready(function() {
			jQuery("#ccprogress-'.$id.'").circliful();
		});
	</script>';
}
add_shortcode('progressbar', 'cc_progressbar_shortcode');	
?>