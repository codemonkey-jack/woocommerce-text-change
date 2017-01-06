<?php

/*
Plugin Name: WooCommerce Text Change
Plugin URI: #
Description: Modifies No Products were found matching your selection text
Version: 1.0
Author: Jack Kitterhing
Author URI: https://github.com/codemonkey-jack
*/

add_filter( 'gettext', 'woocommerce_text_change_cm', 20, 3 );
function woocommerce_text_change_cm( $translated_text, $text, $domain ) {

	if ( $translated_text == 'No products were found matching your selection.' ) {
		$translated_text = 'Your Custom Text here';
	}
	return $translated_text;
}