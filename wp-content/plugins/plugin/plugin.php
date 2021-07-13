<?php
/*
 Plugin Name: Auto-Update Plugin
 Plugin URI: http://abc.com
 Description: Plugin with auto-updates
 Author: Ujjal
 Version: 1.0
 */

// Load the auto-update class
add_action( 'init', 'activate_au' );
function activate_au()
{
	require_once ( 'wp_autoupdate.php' );
	$plugin_current_version = '1.0';
	$plugin_remote_path = plugin_dir_url( __FILE__ ) . 'update.php';
	$plugin_slug = plugin_basename( __FILE__ );
	$license_user = 'user';
	$license_key = 'abcd';
	new WP_AutoUpdate ( $plugin_current_version, $plugin_remote_path, $plugin_slug, $license_user, $license_key );
}


add_shortcode('cr_test', 'test_page');

function test_page(){

  ob_start();

 test_page_code();

  return ob_get_clean();

}

function test_page_code() {
	echo "Updated";
}