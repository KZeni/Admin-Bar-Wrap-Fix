<?php
/*
 * Plugin name: Admin Bar Wrap Fix
 * Plugin URI: https://wordpress.org/plugins/admin-bar-wrap-fix/
 * Description: Fixes the wrap behavior of the WordPress admin bar when it has too many items. Keep it neat; don't spill/overflow into the content.
 * Author: KZeni
 * Author URI: https://kzeni.com
 * License: GPLv3
 * Version: 1.0.7
 * Requires at least: 4.6
 * Tested up to: 5.7
 */

define('ADMIN_BAR_WRAP_FIX_PLUGIN_VERSION', '1.0.7');
define('ADMIN_BAR_WRAP_FIX_PLUGIN_PRIMARY_FILE', __FILE__);
define('ADMIN_BAR_WRAP_FIX_PLUGIN_DIR_PATH', plugin_dir_path(ADMIN_BAR_WRAP_FIX_PLUGIN_PRIMARY_FILE));
define('ADMIN_BAR_WRAP_FIX_PLUGIN_DIR_URL', plugin_dir_url(ADMIN_BAR_WRAP_FIX_PLUGIN_PRIMARY_FILE));

function add_wp_adminbar_wrap_fix_css()
{
	if (is_admin_bar_showing()) {
		// Only bother to include stylesheet when the admin bar is being shown
		wp_register_style('admin-bar-wrap-fix', plugins_url('/admin-bar-wrap-fix.css', __FILE__), [], ADMIN_BAR_WRAP_FIX_PLUGIN_VERSION, 'screen');
		wp_enqueue_style('admin-bar-wrap-fix');
	}
}
add_action('wp_enqueue_scripts', 'add_wp_adminbar_wrap_fix_css');
add_action('admin_enqueue_scripts', 'add_wp_adminbar_wrap_fix_css');
?>
