<?php
/*
Plugin Name: Admin Bar Wrap Fix
Plugin URI: https://wordpress.org/plugins/admin-bar-wrap-fix/
Description: Fixes the wrap behavior of the WordPress admin bar when it has too many items. Keep it neat; don't spill/overflow into the content.
Version: 1.0.2
Author: KZeni
Author URI: http://kzeni.com
*/
?>
<?php
function add_wp_adminbar_wrap_fix_css() {
	wp_register_style('admin-bar-wrap-fix',plugins_url('/admin-bar-wrap-fix.css',__FILE__),array(),'1.0.0','screen');
	wp_enqueue_style('admin-bar-wrap-fix');
}
add_action('wp_enqueue_scripts', 'add_wp_adminbar_wrap_fix_css');
add_action('admin_enqueue_scripts', 'add_wp_adminbar_wrap_fix_css');
?>
