<?php
/*
Plugin Name: WP ShowHide Elements
Plugin URI: http://www.jenst.se
Description: Adds a Javascript for you to hide or show what ever ID you want with a mouse click. You need to add some code to your theme to make it work.
Version: 0.1
Author: Jens T&ouml;rnell
Author URI: http://www.jenst.se
*/

function wpsheAddJavascript(){
	echo '<script type="text/javascript" src="'.get_settings('siteurl').'/wp-content/plugins/wp-showhide-elements/wp-showhide-elements.js"></script>';
}
add_action('wp_head', 'wpsheAddJavascript');

?>