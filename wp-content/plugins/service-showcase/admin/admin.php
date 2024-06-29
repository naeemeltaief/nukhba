<?php

/**
 * Admin file for all actions, filters and shortcodes.
 *
 * @package Service Showcase 1.0
 */

defined( 'ABSPATH' ) || die();

require_once WLSBP_PLUGIN_DIR_PATH . 'admin/inc/WLSBP_ServiceShowcase_Admin.php';

/* Add metaboxes */
add_action( 'add_meta_boxes', array( 'WLSBP_ServiceShowcase_Admin', 'service_meta_boxes' ) );

/* save metaboxes */
add_action( 'save_post', array( 'WLSBP_ServiceShowcase_Admin', 'save_service_metaboxes' ), 10, 2 );

/* Enqueue scripts and styles */
add_action( 'admin_enqueue_scripts', array( 'WLSBP_ServiceShowcase_Admin', 'enqueue_scripts_styles' ) );

/* Change title text */
add_filter( 'enter_title_here', array( 'WLSBP_ServiceShowcase_Admin', 'change_title_text' ) );

/* Set Testimonial columns */
add_filter( 'manage_service_showcase_posts_columns', array( 'WLSBP_ServiceShowcase_Admin', 'sbp_set_columns' ) );
add_action( 'manage_service_showcase_posts_custom_column', array( 'WLSBP_ServiceShowcase_Admin', 'sbp_manage_col' ), 10, 2 );
