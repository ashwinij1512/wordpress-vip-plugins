<?php
/**
 * @package Facebook
 * @version 1.0
 */
/*
Plugin Name: Facebook
Plugin URI: http://wordpress.org/extendplugins/facebook/
Description: Facebook for WordPress. Make your site deeply social in just a couple of clicks.
Author: Facebook
Author URI: https://developers.facebook.com/wordpress/
Version: 1.0
License: GPL2
License URI: license.txt
*/

global $fb_ver;
$fb_ver = '1.0';

$facebook_plugin_directory = dirname(__FILE__);

// incldue the Facebook PHP SDK
if ( ! class_exists( 'Facebook_WP' ) )
	require_once( $facebook_plugin_directory . '/includes/facebook-php-sdk/class-facebook-wp.php' );

require_once( $facebook_plugin_directory . '/fb-core.php' );
require_once( $facebook_plugin_directory . '/fb-admin-menu.php');
require_once( $facebook_plugin_directory . '/fb-open-graph.php');
require_once( $facebook_plugin_directory . '/social-plugins/fb-social-plugins.php');
require_once( $facebook_plugin_directory . '/fb-login.php' );
require_once( $facebook_plugin_directory . '/fb-social-publisher.php' );
require_once( $facebook_plugin_directory . '/fb-wp-helpers.php' );
unset( $facebook_plugin_directory );

add_action( 'init', 'fb_init' );
add_action( 'admin_notices', 'fb_install_warning' );
add_action( 'wp_enqueue_scripts', 'fb_style' );
?>
