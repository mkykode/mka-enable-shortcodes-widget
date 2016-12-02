<?php
/*
Plugin Name: Monkey Kode - Enable Shortcode in widgets
Plugin URI:
Description: Lets you use shortcodes inside widget text boxes.
Version:     1.0.0
Author:      Jull Weber
Author URI:  http://monkeykode.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: mka-enable-shortcode-widget.
Domain Path:
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists( 'mka_enable_shortcode_widget' ) ) :
	function mka_enable_shortcode_widget() {
		add_filter( 'widget_text', 'do_shortcode' );
	}

	mka_enable_shortcode_widget();
endif;
