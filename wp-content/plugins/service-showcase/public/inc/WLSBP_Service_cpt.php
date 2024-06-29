<?php
defined('ABSPATH') || die();

class WL_SBP_ServiceShowcase {

	/**
	 * Register ServiceShowcase post type
	 *
	 * @return void
	 */
	public static function register_ServiceShowcase_post_type() {

		$labels = array(
			'name'                  => esc_html_x('Service Showcase', 'Post Type General Name', 'service-showcase'),
			'singular_name'         => esc_html_x('Service Showcase', 'Post Type Singular Name', 'service-showcase'),
			'menu_name'             => esc_html__('Service Showcase', 'service-showcase'),
			'name_admin_bar'        => esc_html__('Service Showcase', 'service-showcase'),
			'archives'              => esc_html__('Service Showcase Archives', 'service-showcase'),
			'attributes'            => esc_html__('Service Showcase Attributes', 'service-showcase'),
			'all_items'             => esc_html__('All Service Showcase', 'service-showcase'),
			'add_new_item'          => esc_html__('Add New Service Showcase', 'service-showcase'),
			'add_new'               => esc_html__('Add New', 'service-showcase'),
			'new_item'              => esc_html__('New ServiceShowcase', 'service-showcase'),
			'edit_item'             => esc_html__('Edit ServiceShowcase', 'service-showcase'),
			'update_item'           => esc_html__('Update ServiceShowcase', 'service-showcase'),
			'view_item'             => esc_html__('View ServiceShowcase', 'service-showcase'),
			'view_items'            => esc_html__('View ServiceShowcase', 'service-showcase'),
			'search_items'          => esc_html__('Search ServiceShowcase', 'service-showcase'),
			'not_found'             => esc_html__('Not found', 'service-showcase'),
			'not_found_in_trash'    => esc_html__('Not found in Trash', 'service-showcase'),
			'items_list'            => esc_html__('ServiceShowcase list', 'service-showcase'),
			'items_list_navigation' => esc_html__('ServiceShowcase list navigation', 'service-showcase'),
			'filter_items_list'     => esc_html__('Filter ServiceShowcase list', 'service-showcase'),
		);
		$args   = array(
			'label'               => esc_html__('ServiceShowcase', 'service-showcase'),
			'labels'              => $labels,
			'supports'            => array('title'),
			'hierarchical'        => true,
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-slides',
			'menu_position'       => 28,
			'show_in_admin_bar'   => false,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => true,
			'publicly_queryable'  => false,
			'capability_type'     => 'page',
			'map_meta_cap'        => true,
			'rewrite'             => array('slug' => 'service_showcase'),
		);
		register_post_type('service_showcase', $args);
	}
}
