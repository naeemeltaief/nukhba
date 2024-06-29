<?php
defined('ABSPATH') || die();

class WLSBP_ServiceShowcase_Shortcode {
	public static function create_ServiceShowcase_shortcode($attr) {
		ob_start(); ?>
		<?php
		if (isset($attr['id']) && !empty($attr['id'])) {
			$id = absint($attr['id']);

			$general_service_settings = get_post_meta($id, 'wlsbp_general_service_setting', true);
			$services                 = get_post_meta($id, 'wlsbp_service', true);
			require WLSBP_PLUGIN_DIR_PATH . 'admin/inc/metaboxes/ServiceShowcase_default_settings.php';

			if (is_array($general_service_settings)) {
				if (isset($general_service_settings['style']) && !empty($general_service_settings['style'])) {
					$ServiceShowcase_style = esc_attr($general_service_settings['style']);
				}

				if (isset($general_service_settings['display_service_title'])) {
					$display_service_title = (bool) $general_service_settings['display_service_title'];
				}

				if ('style1' === $ServiceShowcase_style) {
					require WLSBP_PLUGIN_DIR_PATH . 'public/inc/style-layouts/style1/style1.php';
				} elseif ('style2' === $ServiceShowcase_style) {
					require WLSBP_PLUGIN_DIR_PATH . 'public/inc/style-layouts/style2/style2.php';
				} elseif ('style3' === $ServiceShowcase_style) {
					require WLSBP_PLUGIN_DIR_PATH . 'public/inc/style-layouts/style3/style3.php';
				} elseif ('style4' === $ServiceShowcase_style) {
					require WLSBP_PLUGIN_DIR_PATH . 'public/inc/style-layouts/style4/style4.php';
				} elseif ('style5' === $ServiceShowcase_style) {
					require WLSBP_PLUGIN_DIR_PATH . 'public/inc/style-layouts/style5/style5.php';
				} elseif ('style6' === $ServiceShowcase_style) {
					require WLSBP_PLUGIN_DIR_PATH . 'public/inc/style-layouts/style6/style6.php';
				} else {
					esc_html_e('Layout is not set for this ServiceShowcase.', 'service-showcase');
				}
			} else {
				esc_html_e('Settings not found for this ServiceShowcase.', 'service-showcase');
			}
		} else {
			esc_html_e('Please provide a valid ServiceShowcase shortcode ID.', 'service-showcase');
		}
		?>
		<?php
		return ob_get_clean();
	}

	public static function shortcode_assets() {
		global $post;
		if (is_a($post, 'WP_Post')) {
			if (has_shortcode($post->post_content, 'SSW')) {
				wp_enqueue_style('bootstrap', WLSBP_PLUGIN_URL . 'assets/css/bootstrap.min.css', array(), true, 'all');
				wp_enqueue_style('font-awesome', WLSBP_PLUGIN_URL . 'assets/css/all.min.css', array(), true, 'all');
				wp_enqueue_script('bootstrap', WLSBP_PLUGIN_URL . 'assets/js/bootstrap.min.js', array('jquery'), true, true);
			}
		}
	}
}
