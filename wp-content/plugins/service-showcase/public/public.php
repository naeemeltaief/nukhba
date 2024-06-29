<?php

/**
 * ServiceShowcase Public file
 *
 * @package Service Showcase
 */
defined('ABSPATH') || die();

require_once(WLSBP_PLUGIN_DIR_PATH . 'public/inc/WLSBP_Service_cpt.php');
require_once(WLSBP_PLUGIN_DIR_PATH . 'public/inc/WLSBP_ServiceShowcase_Shortcode.php');

/* Register post types */
add_action('init', array('WL_SBP_ServiceShowcase', 'register_ServiceShowcase_post_type'));

/* Register taxonomies */
add_shortcode('SSW', array('WLSBP_ServiceShowcase_Shortcode', 'create_ServiceShowcase_shortcode'));

add_action('wp_enqueue_scripts', array('WLSBP_ServiceShowcase_Shortcode', 'shortcode_assets'));
