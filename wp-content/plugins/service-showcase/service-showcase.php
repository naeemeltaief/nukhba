<?php
/**
 * Plugin Name: Service Showcase
 * Plugin URI: https://weblizar.com/service-showcase/
 * Description: Service Showcase plugin is display the service box on wordpress website pages and posts. It come with 6 different layouts and create unlimited service showcases with ulimited color scheme.
 * Version: 2.8
 * Author: Weblizar
 * Author URI: https://weblizar.com
 * Text Domain: service-showcase
 */

defined('ABSPATH') || die();
if (!defined('WLSBP_PLUGIN_URL')) {
	define('WLSBP_PLUGIN_URL', plugin_dir_url(__FILE__));
}

if (!defined('WLSBP_PLUGIN_DIR_PATH')) {
	define('WLSBP_PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
}

add_action('plugins_loaded', 'wlsbp_textdomain');
function wlsbp_textdomain() {
	load_plugin_textdomain('service-showcase', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}

final class WLSBP_Service_Showcase {
	private static $instance = null;

	private function __construct() {
		$this->initialize_hooks();
	}
	public static function get_instance() {
		if (is_null(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	private function initialize_hooks() {
		if (is_admin()) {
			require_once WLSBP_PLUGIN_DIR_PATH . 'admin/admin.php';
		}
		require_once WLSBP_PLUGIN_DIR_PATH . 'public/public.php';
	}
}
WLSBP_Service_Showcase::get_instance();