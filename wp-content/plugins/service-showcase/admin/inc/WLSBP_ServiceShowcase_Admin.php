<?php

/**
 * ServiceShowcase  admin file for meta boxes and for saving data.
 *
 * @package Service Showcase
 */
defined( 'ABSPATH' ) || die();

/**
 * Class for callback all functions.
 */
class WLSBP_ServiceShowcase_Admin {

	public static function create_menu() {

		$wl_admin_menu = add_menu_page( esc_html__( 'Service Showcase', 'service-showcase' ), esc_html__( 'Service Showcase', 'service-showcase' ), 'manage_options', 'ServiceShowcase-pro-license', array( 'WLSBP_ServiceShowcase_Admin', 'admin_menu' ), 'dashicons-slides', 27 );
		add_action( 'admin_print_styles-' . $wl_admin_menu, array( 'WLSBP_ServiceShowcase_Admin', 'admin_menu_assets' ) );
	}

	public static function service_meta_boxes() {
		add_meta_box( 'wlsbp-service-showcase', esc_html__( 'ServiceShowcase', 'service-showcase' ), array( 'WLSBP_ServiceShowcase_Admin', 'service_showcase_html' ), 'service_showcase', 'normal' );

		add_meta_box( 'wlsbp-settings', esc_html__( 'Apply Settings On Service Showcase', 'service-showcase' ), array( 'WLSBP_ServiceShowcase_Admin', 'service_meta_box_settings' ), 'service_showcase', 'normal', 'low' );

		add_meta_box( 'wlsbp-service-showcase-shortcode', esc_html__( 'ServiceShowcase Shortcode', 'service-showcase' ), array( 'WLSBP_ServiceShowcase_Admin', 'service_showcase_shortcode_html' ), 'service_showcase', 'side' );

		add_meta_box( 'wlsbp-do-shortcode', esc_html__( 'Display Service showcase in your Theme', 'service-showcase' ), array( 'WLSBP_ServiceShowcase_Admin', 'do_shortcode_metabox' ), 'service_showcase', 'side', 'low' );
	}

	public static function service_showcase_html( $post ) {
		require_once WLSBP_PLUGIN_DIR_PATH . 'admin/inc/metaboxes/add_services.php';
	}

	public static function do_shortcode_metabox( $post ) {
		require_once WLSBP_PLUGIN_DIR_PATH . 'admin/inc/metaboxes/theme_shortcode.php';
	}

	public static function service_showcase_shortcode_html( $post ) {
		require_once WLSBP_PLUGIN_DIR_PATH . 'admin/inc/metaboxes/meta_shortcode.php';
	}

	public static function service_meta_box_settings( $post ) {
		require_once WLSBP_PLUGIN_DIR_PATH . 'admin/inc/metaboxes/wlsbp_settings.php';
	}

	public static function enqueue_scripts_styles( $hook_suffix ) {
		if ( in_array( $hook_suffix, array( 'post.php', 'post-new.php' ) ) ) {
			$screen = get_current_screen();
			if ( is_object( $screen ) && 'service_showcase' == $screen->post_type ) {
				/* Enqueue styles */
				wp_enqueue_style( 'wp-color-picker' );
				wp_enqueue_style( 'jquery-ui-core' );

				wp_enqueue_style( 'font-awesome-icon', WLSBP_PLUGIN_URL . 'assets/css/fontawesome-iconpicker.min.css', array(), true, 'all' );
				wp_enqueue_style( 'bootstrap', WLSBP_PLUGIN_URL . 'assets/css/bootstrap.min.css', array(), true, 'all' );
				wp_enqueue_style( 'jquery-fontselect', WLSBP_PLUGIN_URL . 'assets/css/jquery.fontselect.min.css' );
				wp_enqueue_style( 'font-awesome', WLSBP_PLUGIN_URL . 'assets/css/all.min.css', array(), true, 'all' );
				wp_enqueue_style( 'admin-style', WLSBP_PLUGIN_URL . 'assets/css/wlsbp_style.css', array(), true, 'all' );

				/* Enqueue scripts */
				wp_enqueue_script( 'jquery' );
				wp_enqueue_script( 'wp-color-picker' );
				wp_enqueue_script( 'popper', WLSBP_PLUGIN_URL . 'assets/js/popper.min.js', array( 'jquery' ), true, true );
				wp_enqueue_script( 'bootstrap', WLSBP_PLUGIN_URL . 'assets/js/bootstrap.min.js', array( 'jquery' ), true, true );
				wp_enqueue_script( 'jquery-fontselect', WLSBP_PLUGIN_URL . 'assets/js/jquery.fontselect.min.js', array( 'jquery' ), true, true );
				wp_enqueue_script( 'admin-main', WLSBP_PLUGIN_URL . 'assets/js/wlsbp_admin.js', array( 'jquery' ), true, true );
				wp_enqueue_script( 'font-awesome-icon', WLSBP_PLUGIN_URL . 'assets/js/fontawesome-iconpicker.min.js', array(), true, 'all' );
			}
		}
	}

	public static function save_service_metaboxes( $post_id, $post ) {
		if ( ! isset( $_POST[ 'service_meta_' . $post_id ] ) || ! wp_verify_nonce( $_POST[ 'service_meta_' . $post_id ], 'save_service_meta_' . $post_id ) ) {
			return;
		}
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}
		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
			return;
		}
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
		if ( wp_is_post_revision( $post ) ) {
			return;
		}
		if ( 'service_showcase' !== $post->post_type ) {
			return;
		}
		/* services */
		$service_showcase_icon        = ( isset( $_POST['service_showcase_icon'] ) && is_array( $_POST['service_showcase_icon'] ) ) ? array_map( 'sanitize_text_field', $_POST['service_showcase_icon'] ) : array();
		$service_showcase_title       = ( isset( $_POST['service_showcase_title'] ) && is_array( $_POST['service_showcase_title'] ) ) ? $_POST['service_showcase_title'] : array();
		$service_showcase_description = ( isset( $_POST['service_showcase_description'] ) && is_array( $_POST['service_showcase_description'] ) ) ? array_map( 'wp_kses_post', $_POST['service_showcase_description'] ) : array();
		$service_showcase_link        = ( isset( $_POST['service_showcase_link'] ) && is_array( $_POST['service_showcase_link'] ) ) ? array_map( 'esc_url_raw', $_POST['service_showcase_link'] ) : array();

		if ( count( $service_showcase_icon ) > 0 && ( count( $service_showcase_icon ) === count( $service_showcase_title ) ) && ( count( $service_showcase_icon ) === count( $service_showcase_description ) ) && ( count( $service_showcase_icon ) === count( $service_showcase_link ) ) ) {

			$data_services = array();
			foreach ( $service_showcase_icon as $key => $services ) {
				array_push(
					$data_services,
					array(
						'id'    => absint( $services ),
						'icon'  => ( isset( $service_showcase_icon[ $key ] ) && ! empty( $service_showcase_icon[ $key ] ) ) ? sanitize_text_field( $service_showcase_icon[ $key ] ) : 'fas fa-suitcase',
						'title' => ( isset( $service_showcase_title[ $key ] ) && ! empty( $service_showcase_title[ $key ] ) ) ?sanitize_text_field( $service_showcase_title[ $key ] ) : '',
						'desc'  => ( isset( $service_showcase_description[ $key ] ) && ! empty( $service_showcase_description[ $key ] ) ) ? wp_kses_post( $service_showcase_description[ $key ] ) : '',
						'link'  => ( isset( $service_showcase_link[ $key ] ) && ! empty( $service_showcase_link[ $key ] ) ) ? esc_url_raw( $service_showcase_link[ $key ] ) : '',
					)
				);
			}

			update_post_meta( $post_id, 'wlsbp_service', $data_services );
		}

		// /* General Settings: */

		$ServiceShowcase_style = isset( $_POST['style'] ) ? sanitize_text_field( $_POST['style'] ) : 'style1';
		$display_service_title = isset( $_POST['display_service_title'] ) ? (bool) $_POST['display_service_title'] : true;

		if ( ! in_array( $ServiceShowcase_style, array( 'style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8', 'style9', 'style10' ) ) ) {
			$ServiceShowcase_style = 'style1';
		}

		$data_general_settings = array(
			'style'                 => $ServiceShowcase_style,
			'display_service_title' => $display_service_title,
		);

		update_post_meta( $post_id, 'wlsbp_general_service_setting', $data_general_settings );

		// /*  Style Layout 1 Settings: */

		$s1_display_service_icon        = isset( $_POST['s1_display_service_icon'] ) ? (bool) ( $_POST['s1_display_service_icon'] ) : true;
		$s1_display_service_rmlink      = isset( $_POST['s1_display_service_rmlink'] ) ? (bool) ( $_POST['s1_display_service_rmlink'] ) : true;
		$s1_service_icon_color          = isset( $_POST['s1_service_icon_color'] ) ? sanitize_hex_color( $_POST['s1_service_icon_color'] ) : '#ffffff';
		$s1_service_bg_color            = isset( $_POST['s1_service_bg_color'] ) ? sanitize_hex_color( $_POST['s1_service_bg_color'] ) : '#ffffff';
		$s1_service_hover_bg_color      = isset( $_POST['s1_service_hover_bg_color'] ) ? sanitize_hex_color( $_POST['s1_service_hover_bg_color'] ) : '#40d4f5';
		$s1_service_icon_bg_color       = isset( $_POST['s1_service_icon_bg_color'] ) ? sanitize_hex_color( $_POST['s1_service_icon_bg_color'] ) : '#40d4f5';
		$s1_service_title_color         = isset( $_POST['s1_service_title_color'] ) ? sanitize_hex_color( $_POST['s1_service_title_color'] ) : '#343434';
		$s1_service_desc_color          = isset( $_POST['s1_service_desc_color'] ) ? sanitize_hex_color( $_POST['s1_service_desc_color'] ) : '#64676b';
		$s1_service_readmore_text_color = isset( $_POST['s1_service_readmore_text_color'] ) ? sanitize_hex_color( $_POST['s1_service_readmore_text_color'] ) : '#444444';
		$s1_service_readmore_bg_color   = isset( $_POST['s1_service_readmore_bg_color'] ) ? sanitize_hex_color( $_POST['s1_service_readmore_bg_color'] ) : '#dcdcdc';
		$s1_service_title_fontsize      = isset( $_POST['s1_service_title_fontsize'] ) ? abs( $_POST['s1_service_title_fontsize'] ) : 16;
		$s1_service_desc_fontsize       = isset( $_POST['s1_service_desc_fontsize'] ) ? abs( $_POST['s1_service_desc_fontsize'] ) : 14;
		$s1_service_rmlink_fontsize     = isset( $_POST['s1_service_rmlink_fontsize'] ) ? abs( $_POST['s1_service_rmlink_fontsize'] ) : 16;
		$s1_service_font_family         = isset( $_POST['s1_service_font_family'] ) ? sanitize_text_field( $_POST['s1_service_font_family'] ) : '';
		$s1_service_grid_layout         = isset( $_POST['s1_service_grid_layout'] ) ? sanitize_text_field( $_POST['s1_service_grid_layout'] ) : 'col-md-4';

		$data_service_style1 = array(
			'display_service_icon'        => $s1_display_service_icon,
			'display_service_rmlink'      => $s1_display_service_rmlink,
			'service_icon_color'          => $s1_service_icon_color,
			'service_bg_color'            => $s1_service_bg_color,
			'service_hover_bg_color'      => $s1_service_hover_bg_color,
			'service_icon_bg_color'       => $s1_service_icon_bg_color,
			'service_title_color'         => $s1_service_title_color,
			'service_desc_color'          => $s1_service_desc_color,
			'service_readmore_text_color' => $s1_service_readmore_text_color,
			'service_readmore_bg_color'   => $s1_service_readmore_bg_color,
			'service_title_fontsize'      => $s1_service_title_fontsize,
			'service_desc_fontsize'       => $s1_service_desc_fontsize,
			'service_rmlink_fontsize'     => $s1_service_rmlink_fontsize,
			'service_font_family'         => $s1_service_font_family,
			'service_grid_layout'         => $s1_service_grid_layout,
		);

		update_post_meta( $post_id, 'wlsbp_style1_service_setting', $data_service_style1 );

		// /*  Style Layout 2 Settings: */
		$s2_service_icon_color          = isset( $_POST['s2_service_icon_color'] ) ? sanitize_hex_color( $_POST['s2_service_icon_color'] ) : '#3db39e';
		$s2_service_icon_bg_color       = isset( $_POST['s2_service_icon_bg_color'] ) ? sanitize_hex_color( $_POST['s2_service_icon_bg_color'] ) : '#ffffff';
		$s2_service_title_color         = isset( $_POST['s2_service_title_color'] ) ? sanitize_hex_color( $_POST['s2_service_title_color'] ) : '#343434';
		$s2_service_desc_color          = isset( $_POST['s2_service_desc_color'] ) ? sanitize_hex_color( $_POST['s2_service_desc_color'] ) : '#64676b';
		$s2_service_readmore_text_color = isset( $_POST['s2_service_readmore_text_color'] ) ? sanitize_hex_color( $_POST['s2_service_readmore_text_color'] ) : '#64676b';
		$s2_service_readmore_bg_color   = isset( $_POST['s2_service_readmore_bg_color'] ) ? sanitize_hex_color( $_POST['s2_service_readmore_bg_color'] ) : '#ffffff';
		$s2_display_service_icon        = isset( $_POST['s2_display_service_icon'] ) ? (bool) ( $_POST['s2_display_service_icon'] ) : true;
		$s2_display_service_rmlink      = isset( $_POST['s2_display_service_rmlink'] ) ? (bool) ( $_POST['s2_display_service_rmlink'] ) : true;
		$s2_service_bg_color            = isset( $_POST['s2_service_bg_color'] ) ? sanitize_hex_color( $_POST['s2_service_bg_color'] ) : '#ffffff';
		$s2_service_hover_bg_color      = isset( $_POST['s2_service_hover_bg_color'] ) ? sanitize_hex_color( $_POST['s2_service_hover_bg_color'] ) : '#3db39e';
		$s2_service_title_fontsize      = isset( $_POST['s2_service_title_fontsize'] ) ? abs( $_POST['s2_service_title_fontsize'] ) : 16;
		$s2_service_desc_fontsize       = isset( $_POST['s2_service_desc_fontsize'] ) ? abs( $_POST['s2_service_desc_fontsize'] ) : 14;
		$s2_service_rmlink_fontsize     = isset( $_POST['s2_service_rmlink_fontsize'] ) ? abs( $_POST['s2_service_rmlink_fontsize'] ) : 16;
		$s2_service_font_family         = isset( $_POST['s2_service_font_family'] ) ? sanitize_text_field( $_POST['s2_service_font_family'] ) : '';
		$s2_service_grid_layout         = isset( $_POST['s2_service_grid_layout'] ) ? sanitize_text_field( $_POST['s2_service_grid_layout'] ) : 'col-md-4';

		$data_service_style2 = array(
			'service_icon_color'          => $s2_service_icon_color,
			'service_icon_bg_color'       => $s2_service_icon_bg_color,
			'service_title_color'         => $s2_service_title_color,
			'service_desc_color'          => $s2_service_desc_color,
			'service_readmore_text_color' => $s2_service_readmore_text_color,
			'service_readmore_bg_color'   => $s2_service_readmore_bg_color,
			'display_service_icon'        => $s2_display_service_icon,
			'display_service_rmlink'      => $s2_display_service_rmlink,
			'service_bg_color'            => $s2_service_bg_color,
			'service_hover_bg_color'      => $s2_service_hover_bg_color,
			'service_title_fontsize'      => $s2_service_title_fontsize,
			'service_desc_fontsize'       => $s2_service_desc_fontsize,
			'service_rmlink_fontsize'     => $s2_service_rmlink_fontsize,
			'service_font_family'         => $s2_service_font_family,
			'service_grid_layout'         => $s2_service_grid_layout,
		);

		update_post_meta( $post_id, 'wlsbp_style2_service_setting', $data_service_style2 );

		// /*  Style Layout 3 Settings: */
		$s3_service_icon_color          = isset( $_POST['s3_service_icon_color'] ) ? sanitize_hex_color( $_POST['s3_service_icon_color'] ) : '#ffffff';
		$s3_service_icon_bg_color       = isset( $_POST['s3_service_icon_bg_color'] ) ? sanitize_hex_color( $_POST['s3_service_icon_bg_color'] ) : '#fa5f69';
		$s3_service_title_color         = isset( $_POST['s3_service_title_color'] ) ? sanitize_hex_color( $_POST['s3_service_title_color'] ) : '#000000';
		$s3_service_desc_color          = isset( $_POST['s3_service_desc_color'] ) ? sanitize_hex_color( $_POST['s3_service_desc_color'] ) : '#505050';
		$s3_service_readmore_text_color = isset( $_POST['s3_service_readmore_text_color'] ) ? sanitize_hex_color( $_POST['s3_service_readmore_text_color'] ) : '#505050';
		$s3_service_readmore_bg_color   = isset( $_POST['s3_service_readmore_bg_color'] ) ? sanitize_hex_color( $_POST['s3_service_readmore_bg_color'] ) : '#ffffff';
		$s3_display_service_icon        = isset( $_POST['s3_display_service_icon'] ) ? (bool) ( $_POST['s3_display_service_icon'] ) : true;
		$s3_display_service_rmlink      = isset( $_POST['s3_display_service_rmlink'] ) ? (bool) ( $_POST['s3_display_service_rmlink'] ) : true;
		$s3_service_bg_color            = isset( $_POST['s3_service_bg_color'] ) ? sanitize_hex_color( $_POST['s3_service_bg_color'] ) : '#ffffff';
		$s3_service_title_fontsize      = isset( $_POST['s3_service_title_fontsize'] ) ? abs( $_POST['s3_service_title_fontsize'] ) : 16;
		$s3_service_desc_fontsize       = isset( $_POST['s3_service_desc_fontsize'] ) ? abs( $_POST['s3_service_desc_fontsize'] ) : 14;
		$s3_service_rmlink_fontsize     = isset( $_POST['s3_service_rmlink_fontsize'] ) ? abs( $_POST['s3_service_rmlink_fontsize'] ) : 16;
		$s3_service_font_family         = isset( $_POST['s3_service_font_family'] ) ? sanitize_text_field( $_POST['s3_service_font_family'] ) : '';
		$s3_service_grid_layout         = isset( $_POST['s3_service_grid_layout'] ) ? sanitize_text_field( $_POST['s3_service_grid_layout'] ) : 'col-md-4';

		$data_service_style3 = array(
			'service_icon_color'          => $s3_service_icon_color,
			'service_icon_bg_color'       => $s3_service_icon_bg_color,
			'service_title_color'         => $s3_service_title_color,
			'service_desc_color'          => $s3_service_desc_color,
			'service_readmore_text_color' => $s3_service_readmore_text_color,
			'service_readmore_bg_color'   => $s3_service_readmore_bg_color,
			'display_service_icon'        => $s3_display_service_icon,
			'display_service_rmlink'      => $s3_display_service_rmlink,
			'service_bg_color'            => $s3_service_bg_color,
			'service_title_fontsize'      => $s3_service_title_fontsize,
			'service_desc_fontsize'       => $s3_service_desc_fontsize,
			'service_rmlink_fontsize'     => $s3_service_rmlink_fontsize,
			'service_font_family'         => $s3_service_font_family,
			'service_grid_layout'         => $s3_service_grid_layout,
		);

		update_post_meta( $post_id, 'wlsbp_style3_service_setting', $data_service_style3 );

		// /*  Style Layout 4 Settings: */
		$s4_service_icon_color          = isset( $_POST['s4_service_icon_color'] ) ? sanitize_hex_color( $_POST['s4_service_icon_color'] ) : '#4ca8e8';
		$s4_service_icon_color_bg_color = isset( $_POST['s4_service_icon_color_bg_color'] ) ? sanitize_hex_color( $_POST['s4_service_icon_color_bg_color'] ) : '#4ca8e8';
		$s4_service_title_color         = isset( $_POST['s4_service_title_color'] ) ? sanitize_hex_color( $_POST['s4_service_title_color'] ) : '#777777';
		$s4_service_desc_color          = isset( $_POST['s4_service_desc_color'] ) ? sanitize_hex_color( $_POST['s4_service_desc_color'] ) : '#8e8e8e';
		$s4_service_readmore_text_color = isset( $_POST['s4_service_readmore_text_color'] ) ? sanitize_hex_color( $_POST['s4_service_readmore_text_color'] ) : '#777777';
		$s4_service_readmore_bg_color   = isset( $_POST['s4_service_readmore_bg_color'] ) ? sanitize_hex_color( $_POST['s4_service_readmore_bg_color'] ) : '#4ca8e8';
		$s4_display_service_icon        = isset( $_POST['s4_display_service_icon'] ) ? (bool) ( $_POST['s4_display_service_icon'] ) : true;
		$s4_display_service_rmlink      = isset( $_POST['s4_display_service_rmlink'] ) ? (bool) ( $_POST['s4_display_service_rmlink'] ) : true;
		$s4_service_bg_color            = isset( $_POST['s4_service_bg_color'] ) ? sanitize_hex_color( $_POST['s4_service_bg_color'] ) : '#ffffff';
		$s4_service_title_fontsize      = isset( $_POST['s4_service_title_fontsize'] ) ? abs( $_POST['s4_service_title_fontsize'] ) : 16;
		$s4_service_desc_fontsize       = isset( $_POST['s4_service_desc_fontsize'] ) ? abs( $_POST['s4_service_desc_fontsize'] ) : 14;
		$s4_service_rmlink_fontsize     = isset( $_POST['s4_service_rmlink_fontsize'] ) ? abs( $_POST['s4_service_rmlink_fontsize'] ) : 16;
		$s4_service_font_family         = isset( $_POST['s4_service_font_family'] ) ? sanitize_text_field( $_POST['s4_service_font_family'] ) : '';
		$s4_service_grid_layout         = isset( $_POST['s4_service_grid_layout'] ) ? sanitize_text_field( $_POST['s4_service_grid_layout'] ) : 'col-md-4';

		$data_service_style4 = array(
			'service_icon_color'          => $s4_service_icon_color,
			'service_icon_color_bg_color' => $s4_service_icon_color_bg_color,
			'service_title_color'         => $s4_service_title_color,
			'service_desc_color'          => $s4_service_desc_color,
			'service_readmore_text_color' => $s4_service_readmore_text_color,
			'service_readmore_bg_color'   => $s4_service_readmore_bg_color,
			'display_service_icon'        => $s4_display_service_icon,
			'display_service_rmlink'      => $s4_display_service_rmlink,
			'service_bg_color'            => $s4_service_bg_color,
			'service_title_fontsize'      => $s4_service_title_fontsize,
			'service_desc_fontsize'       => $s4_service_desc_fontsize,
			'service_rmlink_fontsize'     => $s4_service_rmlink_fontsize,
			'service_font_family'         => $s4_service_font_family,
			'service_grid_layout'         => $s4_service_grid_layout,
		);

		update_post_meta( $post_id, 'wlsbp_style4_service_setting', $data_service_style4 );

		// /*  Style Layout 5 Settings: */
		$s5_service_icon_color          = isset( $_POST['s5_service_icon_color'] ) ? sanitize_hex_color( $_POST['s5_service_icon_color'] ) : '#008b8b';
		$s5_service_title_color         = isset( $_POST['s5_service_title_color'] ) ? sanitize_hex_color( $_POST['s5_service_title_color'] ) : '#777777';
		$s5_service_desc_color          = isset( $_POST['s5_service_desc_color'] ) ? sanitize_hex_color( $_POST['s5_service_desc_color'] ) : '#000000';
		$s5_service_readmore_text_color = isset( $_POST['s5_service_readmore_text_color'] ) ? sanitize_hex_color( $_POST['s5_service_readmore_text_color'] ) : '#008b8b';
		$s5_display_service_icon        = isset( $_POST['s5_display_service_icon'] ) ? (bool) ( $_POST['s5_display_service_icon'] ) : true;
		$s5_display_service_rmlink      = isset( $_POST['s5_display_service_rmlink'] ) ? (bool) ( $_POST['s5_display_service_rmlink'] ) : true;
		$s5_service_bg_color            = isset( $_POST['s5_service_bg_color'] ) ? sanitize_hex_color( $_POST['s5_service_bg_color'] ) : '#ffffff';
		$s5_service_title_fontsize      = isset( $_POST['s5_service_title_fontsize'] ) ? abs( $_POST['s5_service_title_fontsize'] ) : 16;
		$s5_service_desc_fontsize       = isset( $_POST['s5_service_desc_fontsize'] ) ? abs( $_POST['s5_service_desc_fontsize'] ) : 14;
		$s5_service_rmlink_fontsize     = isset( $_POST['s5_service_rmlink_fontsize'] ) ? abs( $_POST['s5_service_rmlink_fontsize'] ) : 16;
		$s5_service_font_family         = isset( $_POST['s5_service_font_family'] ) ? sanitize_text_field( $_POST['s5_service_font_family'] ) : '';
		$s5_service_grid_layout         = isset( $_POST['s5_service_grid_layout'] ) ? sanitize_text_field( $_POST['s5_service_grid_layout'] ) : 'col-md-4';

		$data_service_style5 = array(
			'service_icon_color'          => $s5_service_icon_color,
			'service_title_color'         => $s5_service_title_color,
			'service_desc_color'          => $s5_service_desc_color,
			'service_readmore_text_color' => $s5_service_readmore_text_color,
			'display_service_icon'        => $s5_display_service_icon,
			'display_service_rmlink'      => $s5_display_service_rmlink,
			'service_bg_color'            => $s5_service_bg_color,
			'service_title_fontsize'      => $s5_service_title_fontsize,
			'service_desc_fontsize'       => $s5_service_desc_fontsize,
			'service_rmlink_fontsize'     => $s5_service_rmlink_fontsize,
			'service_font_family'         => $s5_service_font_family,
			'service_grid_layout'         => $s5_service_grid_layout,
		);

		update_post_meta( $post_id, 'wlsbp_style5_service_setting', $data_service_style5 );

		// /*  Style Layout 6 Settings: */
		$s6_service_icon_color          = isset( $_POST['s6_service_icon_color'] ) ? sanitize_hex_color( $_POST['s6_service_icon_color'] ) : '#008b8b';
		$s6_service_title_color         = isset( $_POST['s6_service_title_color'] ) ? sanitize_hex_color( $_POST['s6_service_title_color'] ) : '#777777';
		$s6_service_desc_color          = isset( $_POST['s6_service_desc_color'] ) ? sanitize_hex_color( $_POST['s6_service_desc_color'] ) : '#000000';
		$s6_service_readmore_text_color = isset( $_POST['s6_service_readmore_text_color'] ) ? sanitize_hex_color( $_POST['s6_service_readmore_text_color'] ) : '#008b8b';
		$s6_display_service_icon        = isset( $_POST['s6_display_service_icon'] ) ? (bool) ( $_POST['s6_display_service_icon'] ) : true;
		$s6_display_service_rmlink      = isset( $_POST['s6_display_service_rmlink'] ) ? (bool) ( $_POST['s6_display_service_rmlink'] ) : true;
		$s6_service_bg_color            = isset( $_POST['s6_service_bg_color'] ) ? sanitize_hex_color( $_POST['s6_service_bg_color'] ) : '#ffffff';
		$s6_service_title_fontsize      = isset( $_POST['s6_service_title_fontsize'] ) ? abs( $_POST['s6_service_title_fontsize'] ) : 16;
		$s6_service_desc_fontsize       = isset( $_POST['s6_service_desc_fontsize'] ) ? abs( $_POST['s6_service_desc_fontsize'] ) : 14;
		$s6_service_rmlink_fontsize     = isset( $_POST['s6_service_rmlink_fontsize'] ) ? abs( $_POST['s6_service_rmlink_fontsize'] ) : 16;
		$s6_service_font_family         = isset( $_POST['s6_service_font_family'] ) ? sanitize_text_field( $_POST['s6_service_font_family'] ) : '';
		$s6_service_grid_layout         = isset( $_POST['s6_service_grid_layout'] ) ? sanitize_text_field( $_POST['s6_service_grid_layout'] ) : 'col-md-4';

		$data_service_style6 = array(
			'service_icon_color'          => $s6_service_icon_color,
			'service_title_color'         => $s6_service_title_color,
			'service_desc_color'          => $s6_service_desc_color,
			'service_readmore_text_color' => $s6_service_readmore_text_color,
			'display_service_icon'        => $s6_display_service_icon,
			'display_service_rmlink'      => $s6_display_service_rmlink,
			'service_bg_color'            => $s6_service_bg_color,
			'service_title_fontsize'      => $s6_service_title_fontsize,
			'service_desc_fontsize'       => $s6_service_desc_fontsize,
			'service_rmlink_fontsize'     => $s6_service_rmlink_fontsize,
			'service_font_family'         => $s6_service_font_family,
			'service_grid_layout'         => $s6_service_grid_layout,
		);

		update_post_meta( $post_id, 'wlsbp_style6_service_setting', $data_service_style6 );
	}
	public static function change_title_text( $title ) {
		$screen = get_current_screen();
		if ( 'service_showcase' == $screen->post_type ) {
			$title = esc_html__( 'Enter Service Showcase Name', 'service-showcase' );
		}
		return $title;
	}

	public static function sbp_set_columns( $columns ) {

		$columns = array(
			'cb'           => '<input type="checkbox" />',
			'title'        => esc_html__( 'Service showcase', 'service-showcase' ),
			'shortcode'    => esc_html__( 'Service showcase Shortcode', 'service-showcase' ),
			'do_shortcode' => esc_html__( 'Display Service showcase in Theme', 'service-showcase' ),
			'author'       => esc_html__( 'Author', 'service-showcase' ),
			'date'         => esc_html__( 'Date', 'service-showcase' ),
		);
		return $columns;
	}

	public static function sbp_manage_col( $column, $post_id ) {
		global $post;
		switch ( $column ) {
			case 'shortcode':
				echo '<input type="text" value="[SSW id=' . esc_attr( $post_id ) . ']" readonly="readonly" />';
				break;
			case 'do_shortcode':
				echo '<input type="text" value="<?php echo do_shortcode( \'[SSW id=' . esc_attr( $post_id ) . ']\' ); ?>" readonly="readonly" />';
				break;
			default:
				break;
		}
	}
}
