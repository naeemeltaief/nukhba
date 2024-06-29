<?php
defined( 'ABSPATH' ) || die();
require WLSBP_PLUGIN_DIR_PATH . 'includes/sr_helper.php';
$post_id = $post->ID;

$general_service_settings = get_post_meta( $post_id, 'wlsbp_general_service_setting', true );
$style1_service_settings  = get_post_meta( $post_id, 'wlsbp_style1_service_setting', true );
$style2_service_settings  = get_post_meta( $post_id, 'wlsbp_style2_service_setting', true );
$style3_service_settings  = get_post_meta( $post_id, 'wlsbp_style3_service_setting', true );
$style4_service_settings  = get_post_meta( $post_id, 'wlsbp_style4_service_setting', true );
$style5_service_settings  = get_post_meta( $post_id, 'wlsbp_style5_service_setting', true );
$style6_service_settings  = get_post_meta( $post_id, 'wlsbp_style6_service_setting', true );

require_once WLSBP_PLUGIN_DIR_PATH . 'admin/inc/metaboxes/ServiceShowcase_default_settings.php';

/* General Service Settings: */
if ( is_array( $general_service_settings ) ) {
	if ( isset( $general_service_settings['style'] ) && ! empty( $general_service_settings['style'] ) ) {
		$ServiceShowcase_style = $general_service_settings['style'];
	}

	if ( isset( $general_service_settings['display_service_title'] ) ) {
		$display_service_title = (bool) $general_service_settings['display_service_title'];
	}
}

/* Service Settings: Layout 1 */
if ( is_array( $style1_service_settings ) ) {

	if ( isset( $style1_service_settings['display_service_icon'] ) ) {
		$s1_display_service_icon = (bool) $style1_service_settings['display_service_icon'];
	}
	if ( isset( $style1_service_settings['display_service_rmlink'] ) ) {
		$s1_display_service_rmlink = (bool) $style1_service_settings['display_service_rmlink'];
	}
	if ( isset( $style1_service_settings['service_icon_color'] ) ) {
		$s1_service_icon_color = $style1_service_settings['service_icon_color'];
	}
	if ( isset( $style1_service_settings['service_bg_color'] ) ) {
		$s1_service_bg_color = $style1_service_settings['service_bg_color'];
	}
	if ( isset( $style1_service_settings['service_hover_bg_color'] ) ) {
		$s1_service_hover_bg_color = $style1_service_settings['service_hover_bg_color'];
	}
	if ( isset( $style1_service_settings['service_icon_bg_color'] ) ) {
		$s1_service_icon_bg_color = $style1_service_settings['service_icon_bg_color'];
	}
	if ( isset( $style1_service_settings['service_title_color'] ) ) {
		$s1_service_title_color = $style1_service_settings['service_title_color'];
	}
	if ( isset( $style1_service_settings['service_desc_color'] ) ) {
		$s1_service_desc_color = $style1_service_settings['service_desc_color'];
	}
	if ( isset( $style1_service_settings['service_readmore_text_color'] ) ) {
		$s1_service_readmore_text_color = $style1_service_settings['service_readmore_text_color'];
	}
	if ( isset( $style1_service_settings['service_readmore_bg_color'] ) ) {
		$s1_service_readmore_bg_color = $style1_service_settings['service_readmore_bg_color'];
	}
	if ( isset( $style1_service_settings['service_title_fontsize'] ) ) {
		$s1_service_title_fontsize = $style1_service_settings['service_title_fontsize'];
	}
	if ( isset( $style1_service_settings['service_desc_fontsize'] ) ) {
		$s1_service_desc_fontsize = $style1_service_settings['service_desc_fontsize'];
	}
	if ( isset( $style1_service_settings['service_rmlink_fontsize'] ) ) {
		$s1_service_rmlink_fontsize = $style1_service_settings['service_rmlink_fontsize'];
	}
	if ( isset( $style1_service_settings['service_font_family'] ) ) {
		$s1_service_font_family = $style1_service_settings['service_font_family'];
	}
	if ( isset( $style1_service_settings['service_grid_layout'] ) ) {
		$s1_service_grid_layout = $style1_service_settings['service_grid_layout'];
	}
}

/* Service Settings: Layout 2 */
if ( is_array( $style2_service_settings ) ) {

	if ( isset( $style2_service_settings['service_icon_color'] ) ) {
		$s2_service_icon_color = $style2_service_settings['service_icon_color'];
	}
	if ( isset( $style2_service_settings['service_icon_bg_color'] ) ) {
		$s2_service_icon_bg_color = $style2_service_settings['service_icon_bg_color'];
	}
	if ( isset( $style2_service_settings['service_title_color'] ) ) {
		$s2_service_title_color = $style2_service_settings['service_title_color'];
	}
	if ( isset( $style2_service_settings['service_desc_color'] ) ) {
		$s2_service_desc_color = $style2_service_settings['service_desc_color'];
	}
	if ( isset( $style2_service_settings['service_readmore_text_color'] ) ) {
		$s2_service_readmore_text_color = $style2_service_settings['service_readmore_text_color'];
	}
	if ( isset( $style2_service_settings['service_readmore_bg_color'] ) ) {
		$s2_service_readmore_bg_color = $style2_service_settings['service_readmore_bg_color'];
	}
	if ( isset( $style2_service_settings['display_service_icon'] ) ) {
		$s2_display_service_icon = (bool) $style2_service_settings['display_service_icon'];
	}
	if ( isset( $style2_service_settings['display_service_rmlink'] ) ) {
		$s2_display_service_rmlink = (bool) $style2_service_settings['display_service_rmlink'];
	}
	if ( isset( $style2_service_settings['service_bg_color'] ) ) {
		$s2_service_bg_color = $style2_service_settings['service_bg_color'];
	}
	if ( isset( $style2_service_settings['service_hover_bg_color'] ) ) {
		$s2_service_hover_bg_color = $style2_service_settings['service_hover_bg_color'];
	}
	if ( isset( $style2_service_settings['service_title_fontsize'] ) ) {
		$s2_service_title_fontsize = $style2_service_settings['service_title_fontsize'];
	}
	if ( isset( $style2_service_settings['service_desc_fontsize'] ) ) {
		$s2_service_desc_fontsize = $style2_service_settings['service_desc_fontsize'];
	}
	if ( isset( $style2_service_settings['service_rmlink_fontsize'] ) ) {
		$s2_service_rmlink_fontsize = $style2_service_settings['service_rmlink_fontsize'];
	}
	if ( isset( $style2_service_settings['service_font_family'] ) ) {
		$s2_service_font_family = $style2_service_settings['service_font_family'];
	}
	if ( isset( $style2_service_settings['service_grid_layout'] ) ) {
		$s2_service_grid_layout = $style2_service_settings['service_grid_layout'];
	}
}

/* Service Settings: Layout 3 */
if ( is_array( $style3_service_settings ) ) {

	if ( isset( $style3_service_settings['service_icon_color'] ) ) {
		$s3_service_icon_color = $style3_service_settings['service_icon_color'];
	}
	if ( isset( $style3_service_settings['service_icon_bg_color'] ) ) {
		$s3_service_icon_bg_color = $style3_service_settings['service_icon_bg_color'];
	}
	if ( isset( $style3_service_settings['service_title_color'] ) ) {
		$s3_service_title_color = $style3_service_settings['service_title_color'];
	}
	if ( isset( $style3_service_settings['service_desc_color'] ) ) {
		$s3_service_desc_color = $style3_service_settings['service_desc_color'];
	}
	if ( isset( $style3_service_settings['service_readmore_text_color'] ) ) {
		$s3_service_readmore_text_color = $style3_service_settings['service_readmore_text_color'];
	}
	if ( isset( $style3_service_settings['service_readmore_bg_color'] ) ) {
		$s3_service_readmore_bg_color = $style3_service_settings['service_readmore_bg_color'];
	}
	if ( isset( $style3_service_settings['display_service_icon'] ) ) {
		$s3_display_service_icon = (bool) $style3_service_settings['display_service_icon'];
	}
	if ( isset( $style3_service_settings['display_service_rmlink'] ) ) {
		$s3_display_service_rmlink = (bool) $style3_service_settings['display_service_rmlink'];
	}
	if ( isset( $style3_service_settings['service_bg_color'] ) ) {
		$s3_service_bg_color = $style3_service_settings['service_bg_color'];
	}
	if ( isset( $style3_service_settings['service_title_fontsize'] ) ) {
		$s3_service_title_fontsize = $style3_service_settings['service_title_fontsize'];
	}
	if ( isset( $style3_service_settings['service_desc_fontsize'] ) ) {
		$s3_service_desc_fontsize = $style3_service_settings['service_desc_fontsize'];
	}
	if ( isset( $style3_service_settings['service_rmlink_fontsize'] ) ) {
		$s3_service_rmlink_fontsize = $style3_service_settings['service_rmlink_fontsize'];
	}
	if ( isset( $style3_service_settings['service_font_family'] ) ) {
		$s3_service_font_family = $style3_service_settings['service_font_family'];
	}
	if ( isset( $style3_service_settings['service_grid_layout'] ) ) {
		$s3_service_grid_layout = $style3_service_settings['service_grid_layout'];
	}
}

/* Service Settings: Layout 4 */
if ( is_array( $style4_service_settings ) ) {

	if ( isset( $style4_service_settings['service_icon_color'] ) ) {
		$s4_service_icon_color = $style4_service_settings['service_icon_color'];
	}
	if ( isset( $style4_service_settings['service_icon_color_bg_color'] ) ) {
		$s4_service_icon_color_bg_color = $style4_service_settings['service_icon_color_bg_color'];
	}
	if ( isset( $style4_service_settings['service_title_color'] ) ) {
		$s4_service_title_color = $style4_service_settings['service_title_color'];
	}
	if ( isset( $style4_service_settings['service_desc_color'] ) ) {
		$s4_service_desc_color = $style4_service_settings['service_desc_color'];
	}
	if ( isset( $style4_service_settings['service_readmore_text_color'] ) ) {
		$s4_service_readmore_text_color = $style4_service_settings['service_readmore_text_color'];
	}
	if ( isset( $style4_service_settings['service_readmore_bg_color'] ) ) {
		$s4_service_readmore_bg_color = $style4_service_settings['service_readmore_bg_color'];
	}
	if ( isset( $style4_service_settings['display_service_icon'] ) ) {
		$s4_display_service_icon = (bool) $style4_service_settings['display_service_icon'];
	}
	if ( isset( $style4_service_settings['display_service_rmlink'] ) ) {
		$s4_display_service_rmlink = (bool) $style4_service_settings['display_service_rmlink'];
	}
	if ( isset( $style4_service_settings['service_bg_color'] ) ) {
		$s4_service_bg_color = $style4_service_settings['service_bg_color'];
	}
	if ( isset( $style4_service_settings['service_title_fontsize'] ) ) {
		$s4_service_title_fontsize = $style4_service_settings['service_title_fontsize'];
	}
	if ( isset( $style4_service_settings['service_desc_fontsize'] ) ) {
		$s4_service_desc_fontsize = $style4_service_settings['service_desc_fontsize'];
	}
	if ( isset( $style4_service_settings['service_rmlink_fontsize'] ) ) {
		$s4_service_rmlink_fontsize = $style4_service_settings['service_rmlink_fontsize'];
	}
	if ( isset( $style4_service_settings['service_font_family'] ) ) {
		$s4_service_font_family = $style4_service_settings['service_font_family'];
	}
	if ( isset( $style4_service_settings['service_grid_layout'] ) ) {
		$s4_service_grid_layout = $style4_service_settings['service_grid_layout'];
	}
}

/* Service Settings: Layout 5 */
if ( is_array( $style5_service_settings ) ) {

	if ( isset( $style5_service_settings['service_icon_color'] ) ) {
		$s5_service_icon_color = $style5_service_settings['service_icon_color'];
	}
	if ( isset( $style5_service_settings['service_title_color'] ) ) {
		$s5_service_title_color = $style5_service_settings['service_title_color'];
	}
	if ( isset( $style5_service_settings['service_desc_color'] ) ) {
		$s5_service_desc_color = $style5_service_settings['service_desc_color'];
	}
	if ( isset( $style5_service_settings['service_readmore_text_color'] ) ) {
		$s5_service_readmore_text_color = $style5_service_settings['service_readmore_text_color'];
	}
	if ( isset( $style5_service_settings['display_service_icon'] ) ) {
		$s5_display_service_icon = (bool) $style5_service_settings['display_service_icon'];
	}
	if ( isset( $style5_service_settings['display_service_rmlink'] ) ) {
		$s5_display_service_rmlink = (bool) $style5_service_settings['display_service_rmlink'];
	}
	if ( isset( $style5_service_settings['service_bg_color'] ) ) {
		$s5_service_bg_color = $style5_service_settings['service_bg_color'];
	}
	if ( isset( $style5_service_settings['service_title_fontsize'] ) ) {
		$s5_service_title_fontsize = $style5_service_settings['service_title_fontsize'];
	}
	if ( isset( $style5_service_settings['service_desc_fontsize'] ) ) {
		$s5_service_desc_fontsize = $style5_service_settings['service_desc_fontsize'];
	}
	if ( isset( $style5_service_settings['service_rmlink_fontsize'] ) ) {
		$s5_service_rmlink_fontsize = $style5_service_settings['service_rmlink_fontsize'];
	}
	if ( isset( $style5_service_settings['service_font_family'] ) ) {
		$s5_service_font_family = $style5_service_settings['service_font_family'];
	}
	if ( isset( $style5_service_settings['service_grid_layout'] ) ) {
		$s5_service_grid_layout = $style5_service_settings['service_grid_layout'];
	}
}

/* Service Settings: Layout 6 */
if ( is_array( $style6_service_settings ) ) {

	if ( isset( $style6_service_settings['service_icon_color'] ) ) {
		$s6_service_icon_color = $style6_service_settings['service_icon_color'];
	}
	if ( isset( $style6_service_settings['service_title_color'] ) ) {
		$s6_service_title_color = $style6_service_settings['service_title_color'];
	}
	if ( isset( $style6_service_settings['service_desc_color'] ) ) {
		$s6_service_desc_color = $style6_service_settings['service_desc_color'];
	}
	if ( isset( $style6_service_settings['service_readmore_text_color'] ) ) {
		$s6_service_readmore_text_color = $style6_service_settings['service_readmore_text_color'];
	}
	if ( isset( $style6_service_settings['display_service_icon'] ) ) {
		$s6_display_service_icon = (bool) $style6_service_settings['display_service_icon'];
	}
	if ( isset( $style6_service_settings['display_service_rmlink'] ) ) {
		$s6_display_service_rmlink = (bool) $style6_service_settings['display_service_rmlink'];
	}
	if ( isset( $style6_service_settings['service_bg_color'] ) ) {
		$s6_service_bg_color = $style6_service_settings['service_bg_color'];
	}
	if ( isset( $style6_service_settings['service_title_fontsize'] ) ) {
		$s6_service_title_fontsize = $style6_service_settings['service_title_fontsize'];
	}
	if ( isset( $style6_service_settings['service_desc_fontsize'] ) ) {
		$s6_service_desc_fontsize = $style6_service_settings['service_desc_fontsize'];
	}
	if ( isset( $style6_service_settings['service_rmlink_fontsize'] ) ) {
		$s6_service_rmlink_fontsize = $style6_service_settings['service_rmlink_fontsize'];
	}
	if ( isset( $style6_service_settings['service_font_family'] ) ) {
		$s6_service_font_family = $style6_service_settings['service_font_family'];
	}
	if ( isset( $style6_service_settings['service_grid_layout'] ) ) {
		$s6_service_grid_layout = $style6_service_settings['service_grid_layout'];
	}
}
?>

<div class="wlsbp-general-setting-container wlsbp">

	<!--General Settings: -->
	<div class="wlsbp-general-setting">
		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Layout', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $ServiceShowcase_style, 'style1', true ); ?> class="form-check-input" type="radio" name="style" id="wlsbp_style1" value="style1">
						<label class="form-check-label" for="wlsbp_style1"><?php esc_html_e( 'Style 1', 'service-showcase' ); ?></label>
					</div>
					<div class="form-check form-check-inline">
						<input <?php checked( $ServiceShowcase_style, 'style2', true ); ?> class="form-check-input" type="radio" name="style" id="wlsbp_style2" value="style2">
						<label class="form-check-label" for="wlsbp_style2"><?php esc_html_e( 'Style 2', 'service-showcase' ); ?></label>
					</div>
					<div class="form-check form-check-inline">
						<input <?php checked( $ServiceShowcase_style, 'style3', true ); ?> class="form-check-input" type="radio" name="style" id="wlsbp_style3" value="style3">
						<label class="form-check-label" for="wlsbp_style3"><?php esc_html_e( 'Style 3', 'service-showcase' ); ?></label>
					</div>
					<div class="form-check form-check-inline">
						<input <?php checked( $ServiceShowcase_style, 'style4', true ); ?> class="form-check-input" type="radio" name="style" id="wlsbp_style4" value="style4">
						<label class="form-check-label" for="wlsbp_style4"><?php esc_html_e( 'Style 4', 'service-showcase' ); ?></label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $ServiceShowcase_style, 'style5', true ); ?> class="form-check-input" type="radio" name="style" id="wlsbp_style5" value="style5">
						<label class="form-check-label" for="wlsbp_style5"><?php esc_html_e( 'Style 5', 'service-showcase' ); ?></label>
					</div>
					<div class="form-check form-check-inline">
						<input <?php checked( $ServiceShowcase_style, 'style6', true ); ?> class="form-check-input" type="radio" name="style" id="wlsbp_style6" value="style6">
						<label class="form-check-label" for="wlsbp_style6"><?php esc_html_e( 'Style 6', 'service-showcase' ); ?></label>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Display Service Title', 'service-showcase' ); ?>
				</span>
			</div>

			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $display_service_title, true, true ); ?> class="form-check-input" type="radio" name="display_service_title" id="wlsbp_display_service_title_1" value="<?php echo esc_attr('1');?>">
						<label class="form-check-label" for="wlsbp_display_service_title_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $display_service_title, false, true ); ?> class="form-check-input" type="radio" name="display_service_title" id="wlsbp_display_service_title_0" value="<?php echo esc_attr('0');?>">
						<label class="form-check-label" for="wlsbp_display_service_title_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide service showcase title above service showcase.', 'service-showcase' ); ?>
					</div>
				</span>
			</div>
		</div>
	</div>

	<!-- Settings: Layout 1 -->
	<div class="wlsbp-setting-style wlsbp-setting-style1">
				<hr>
		<div class="row">
			<img class="img-fluid rounded d-block" alt="style1_image" src="<?php echo esc_url( $style1_image ); ?>">
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">

				<p class="wlsbp-setting-style-message border-bottom border-top">
					<?php esc_html_e( 'Applied setting Service Shortcode', 'service-showcase' ); ?>:&nbsp;
					<strong>[SSW id=<?php echo esc_html( $post_id ); ?>]</strong>
				</p>

			</div>

		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Display Service Icon', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $s1_display_service_icon, true, true ); ?> class="form-check-input" type="radio" name="s1_display_service_icon" id="wlsbp_s1_display_service_icon_1" value="<?php echo esc_attr('1');?>">
						<label class="form-check-label" for="wlsbp_s1_display_service_icon_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $s1_display_service_icon, false, true ); ?> class="form-check-input" type="radio" name="s1_display_service_icon" id="wlsbp_s1_display_service_icon_0" value="<?php echo esc_attr('0');?>">
						<label class="form-check-label" for="wlsbp_s1_display_service_icon_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide service showcase Icon.', 'service-showcase' ); ?>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Display Service Read More Button', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $s1_display_service_rmlink, true, true ); ?> class="form-check-input" type="radio" name="s1_display_service_rmlink" id="wlsbp_s1_display_service_rmlink_1" value="<?php echo esc_attr('1');?>">
						<label class="form-check-label" for="wlsbp_s1_display_service_rmlink_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $s1_display_service_rmlink, false, true ); ?> class="form-check-input" type="radio" name="s1_display_service_rmlink" id="wlsbp_s1_display_service_rmlink_0" value="<?php echo esc_attr('0');?>">
						<label class="form-check-label" for="wlsbp_s1_display_service_rmlink_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide service showcase Read More Button.', 'service-showcase' ); ?>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Icon background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s1_service_icon_bg_color" type="text" class="color-picker" id="wlsbp_s1_service_icon_bg_color" value="<?php echo esc_attr( $s1_service_icon_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose background color for service icon.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s1_service_bg_color" type="text" class="color-picker" id="wlsbp_s1_service_bg_color" value="<?php echo esc_attr( $s1_service_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose background color for service.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Hover background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s1_service_hover_bg_color" type="text" class="color-picker" id="wlsbp_s1_service_hover_bg_color" value="<?php echo esc_attr( $s1_service_hover_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose background color on service hover .', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Icon Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s1_service_icon_color" type="text" class="color-picker" id="wlsbp_s1_service_icon_color" value="<?php echo esc_attr( $s1_service_icon_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service icon.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Title Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s1_service_title_color" type="text" class="color-picker" id="wlsbp_s1_service_title_color" value="<?php echo esc_attr( $s1_service_title_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service title.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Description Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s1_service_desc_color" type="text" class="color-picker" id="wlsbp_s1_service_desc_color" value="<?php echo esc_attr( $s1_service_desc_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service description.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Text Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s1_service_readmore_text_color" type="text" class="color-picker" id="wlsbp_s1_service_readmore_text_color" value="<?php echo esc_attr( $s1_service_readmore_text_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service read more text.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s1_service_readmore_bg_color" type="text" class="color-picker" id="wlsbp_s1_service_readmore_bg_color" value="<?php echo esc_attr( $s1_service_readmore_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service read more background.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Title Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s1_service_title_fontsize" type="range" id="wlsbp_s1_service_title_fontsize" value="<?php echo esc_attr( $s1_service_title_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="ftitle1"><?php echo esc_attr( $s1_service_title_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( '(Use arrow keys for exact numbers)', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Description Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s1_service_desc_fontsize" type="range" id="wlsbp_s1_service_desc_fontsize" value="<?php echo esc_attr( $s1_service_desc_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="fdesc1"><?php echo esc_attr( $s1_service_desc_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Text Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s1_service_rmlink_fontsize" type="range" id="wlsbp_s1_service_rmlink_fontsize" value="<?php echo esc_attr( $s1_service_rmlink_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="frmlink1"><?php echo esc_attr( $s1_service_rmlink_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Font Family', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s1_service_font_family" type="text" id="wlsbp_s1_service_font_family" value="<?php echo esc_attr( $s1_service_font_family ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Select service showcase font family.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Grid Layout', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<?php
						if ( $s1_service_grid_layout == '' ) {
							$s1_service_grid_layout = 'col-md-6';
						}
						?>
						<select name="s1_service_grid_layout" id="wlsbp_s1_service_grid_layout">
							<optgroup label="Select Service Grid Layout">
								<option value="<?php echo esc_attr("col-md-12");?>"
								<?php
								if ( $s1_service_grid_layout == 'col-md-12' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'One Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-6');?>"
								<?php
								if ( $s1_service_grid_layout == 'col-md-6' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Two Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-4');?>"
								<?php
								if ( $s1_service_grid_layout == 'col-md-4' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Three Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-3');?>"
								<?php
								if ( $s1_service_grid_layout == 'col-md-3' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Four Column', 'service-showcase' ); ?></option>
							</optgroup>
						</select>
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose a column layout for service showcase', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
	</div>

	<!-- Settings: Layout 2 -->
	<div class="wlsbp-setting-style wlsbp-setting-style2">
		<div class="row">
			<div class="col-xs-12 col-md-12 wlsbp-setting-col">
							<img class="img-fluid rounded d-block" alt="style1_image" src="<?php echo esc_url( $style2_image ); ?>">
				<p class="wlsbp-setting-style-message border-bottom border-top">
					<?php esc_html_e( 'Applied setting Service Shortcode', 'service-showcase' ); ?>:&nbsp;
					<strong>[SSW id=<?php echo esc_html( $post_id ); ?>]</strong>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Display Service Icon', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">


				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $s2_display_service_icon, true, true ); ?> class="form-check-input" type="radio" name="s2_display_service_icon" id="wlsbp_s2_display_service_icon_1" value="<?php echo esc_attr('1');?>">
						<label class="form-check-label" for="wlsbp_s2_display_service_icon_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $s2_display_service_icon, false, true ); ?> class="form-check-input" type="radio" name="s2_display_service_icon" id="wlsbp_s2_display_service_icon_0" value="<?php echo esc_attr('0');?>">
						<label class="form-check-label" for="wlsbp_s2_display_service_icon_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>
					<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide service showcase Icon.', 'service-showcase' ); ?>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Display Service Read More Button', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $s2_display_service_rmlink, true, true ); ?> class="form-check-input" type="radio" name="s2_display_service_rmlink" id="wlsbp_s2_display_service_rmlink_1" value="<?php echo esc_attr('1');?>">
						<label class="form-check-label" for="wlsbp_s2_display_service_rmlink_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $s2_display_service_rmlink, false, true ); ?> class="form-check-input" type="radio" name="s2_display_service_rmlink" id="wlsbp_s2_display_service_rmlink_0" value="<?php echo esc_attr('0');?>">
						<label class="form-check-label" for="wlsbp_s2_display_service_rmlink_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>
					<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide service showcase Read More Button.', 'service-showcase' ); ?>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Icon Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s2_service_icon_color" type="text" class="color-picker" id="wlsbp_s2_service_icon_color" value="<?php echo esc_attr( $s2_service_icon_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service icon.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Icon background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s2_service_icon_bg_color" type="text" class="color-picker" id="wlsbp_s2_service_icon_bg_color" value="<?php echo esc_attr( $s2_service_icon_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose background color for service icon.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s2_service_bg_color" type="text" class="color-picker" id="wlsbp_s2_service_bg_color" value="<?php echo esc_attr( $s2_service_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose background color for service.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Hover background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s2_service_hover_bg_color" type="text" class="color-picker" id="wlsbp_s2_service_hover_bg_color" value="<?php echo esc_attr( $s2_service_hover_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose background color on service hover .', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Title Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s2_service_title_color" type="text" class="color-picker" id="wlsbp_s2_service_title_color" value="<?php echo esc_attr( $s2_service_title_color ); ?>">
						<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Choose color for service title.', 'service-showcase' ); ?>
					</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Description Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s2_service_desc_color" type="text" class="color-picker" id="wlsbp_s2_service_desc_color" value="<?php echo esc_attr( $s2_service_desc_color ); ?>">
						<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Choose color for service description.', 'service-showcase' ); ?>
					</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Text Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s2_service_readmore_text_color" type="text" class="color-picker" id="wlsbp_s2_service_readmore_text_color" value="<?php echo esc_attr( $s2_service_readmore_text_color ); ?>">
						<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Choose color for service read more text.', 'service-showcase' ); ?>
					</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s2_service_readmore_bg_color" type="text" class="color-picker" id="wlsbp_s2_service_readmore_bg_color" value="<?php echo esc_attr( $s2_service_readmore_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Choose color for service read more background.', 'service-showcase' ); ?>
					</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Title Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s2_service_title_fontsize" type="range" id="wlsbp_s2_service_title_fontsize" value="<?php echo esc_attr( $s2_service_title_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="ftitle2"><?php echo esc_attr( $s2_service_title_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Description Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s2_service_desc_fontsize" type="range" id="wlsbp_s2_service_desc_fontsize" value="<?php echo esc_attr( $s2_service_desc_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="fdesc2"><?php echo esc_attr( $s2_service_desc_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Text Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s2_service_rmlink_fontsize" type="range" id="wlsbp_s2_service_rmlink_fontsize" value="<?php echo esc_attr( $s2_service_rmlink_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="frmlink2"><?php echo esc_attr( $s2_service_rmlink_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Font Family', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s2_service_font_family" type="text" id="wlsbp_s2_service_font_family" value="<?php echo esc_attr( $s2_service_font_family ); ?>">
						<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select service showcase font family.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Grid Layout', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<?php
						if ( $s2_service_grid_layout == '' ) {
							$s2_service_grid_layout = 'col-md-6';
						}
						?>
						<select name="s2_service_grid_layout" id="wlsbp_s2_service_grid_layout">
							<optgroup label="Select Service Grid Layout">
								<option value="<?php echo esc_attr('col-md-12');?>"
								<?php
								if ( $s2_service_grid_layout == 'col-md-12' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'One Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-6');?>"
								<?php
								if ( $s2_service_grid_layout == 'col-md-6' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Two Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-4');?>"
								<?php
								if ( $s2_service_grid_layout == 'col-md-4' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Three Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-3');?>"
								<?php
								if ( $s2_service_grid_layout == 'col-md-3' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Four Column', 'service-showcase' ); ?></option>
							</optgroup>
						</select>
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose a column layout for service showcase', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
	</div>

	<!-- Settings: Layout 3 -->
	<div class="wlsbp-setting-style wlsbp-setting-style3">
		<div class="row">
			<div class="col-xs-12 col-md-12 wlsbp-setting-col">
			<img class="img-fluid rounded d-block" alt="style1_image" src="<?php echo esc_url( $style3_image ); ?>">
				<p class="wlsbp-setting-style-message border-bottom border-top">
					<?php esc_html_e( 'Applied setting Service Shortcode', 'service-showcase' ); ?>:&nbsp;
					<strong>[SSW id=<?php echo esc_html( $post_id ); ?>]</strong>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">

				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Display Service Icon', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $s3_display_service_icon, true, true ); ?> class="form-check-input" type="radio" name="s3_display_service_icon" id="wlsbp_s3_display_service_icon_1" value="<?php echo esc_attr('1');?>">
						<label class="form-check-label" for="wlsbp_s3_display_service_icon_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $s3_display_service_icon, false, true ); ?> class="form-check-input" type="radio" name="s3_display_service_icon" id="wlsbp_s3_display_service_icon_0" value="<?php echo esc_attr('0');?>">
						<label class="form-check-label" for="wlsbp_s3_display_service_icon_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide service showcase Icon.', 'service-showcase' ); ?>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Display Service Read More Button', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $s3_display_service_rmlink, true, true ); ?> class="form-check-input" type="radio" name="s3_display_service_rmlink" id="wlsbp_s3_display_service_rmlink_1" value="<?php echo esc_attr('1');?>">
						<label class="form-check-label" for="wlsbp_s3_display_service_rmlink_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $s3_display_service_rmlink, false, true ); ?> class="form-check-input" type="radio" name="s3_display_service_rmlink" id="wlsbp_s3_display_service_rmlink_0" value="<?php echo esc_attr('0');?>">
						<label class="form-check-label" for="wlsbp_s3_display_service_rmlink_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide service showcase Read More Button.', 'service-showcase' ); ?>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Icon Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s3_service_icon_color" type="text" class="color-picker" id="wlsbp_s3_service_icon_color" value="<?php echo esc_attr( $s3_service_icon_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service icon.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Icon background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s3_service_icon_bg_color" type="text" class="color-picker" id="wlsbp_s3_service_icon_bg_color" value="<?php echo esc_attr( $s3_service_icon_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose background color for service icon.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s3_service_bg_color" type="text" class="color-picker" id="wlsbp_s3_service_bg_color" value="<?php echo esc_attr( $s3_service_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose background color for service.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Title Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s3_service_title_color" type="text" class="color-picker" id="wlsbp_s3_service_title_color" value="<?php echo esc_attr( $s3_service_title_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service title.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Description Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s3_service_desc_color" type="text" class="color-picker" id="wlsbp_s3_service_desc_color" value="<?php echo esc_attr( $s3_service_desc_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service description.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Text Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s3_service_readmore_text_color" type="text" class="color-picker" id="wlsbp_s3_service_readmore_text_color" value="<?php echo esc_attr( $s3_service_readmore_text_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service read more text.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s3_service_readmore_bg_color" type="text" class="color-picker" id="wlsbp_s3_service_readmore_bg_color" value="<?php echo esc_attr( $s3_service_readmore_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service read more background.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Title Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s3_service_title_fontsize" type="range" id="wlsbp_s3_service_title_fontsize" value="<?php echo esc_attr( $s3_service_title_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="ftitle3"><?php echo esc_attr( $s3_service_title_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Description Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s3_service_desc_fontsize" type="range" id="wlsbp_s3_service_desc_fontsize" value="<?php echo esc_attr( $s3_service_desc_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="fdesc3"><?php echo esc_attr( $s3_service_desc_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Text Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s3_service_rmlink_fontsize" type="range" id="wlsbp_s3_service_rmlink_fontsize" value="<?php echo esc_attr( $s3_service_rmlink_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="frmlink3"><?php echo esc_attr( $s3_service_rmlink_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Font Family', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s3_service_font_family" type="text" id="wlsbp_s3_service_font_family" value="<?php echo esc_attr( $s3_service_font_family ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Select service showcase font family.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Grid Layout', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<?php
						if ( $s3_service_grid_layout == '' ) {
							$s3_service_grid_layout = 'col-md-6';
						}
						?>
						<select name="s3_service_grid_layout" id="wlsbp_s3_service_grid_layout">
							<optgroup label="Select Service Grid Layout">
								<option value="<?php echo esc_attr('col-md-12');?>"
								<?php
								if ( $s3_service_grid_layout == 'col-md-12' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'One Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-6');?>"
								<?php
								if ( $s3_service_grid_layout == 'col-md-6' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Two Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-4');?>"
								<?php
								if ( $s3_service_grid_layout == 'col-md-4' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Three Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-3');?>"
								<?php
								if ( $s3_service_grid_layout == 'col-md-3' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Four Column', 'service-showcase' ); ?></option>
							</optgroup>
						</select>
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose a column layout for service showcase', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
	</div>

	<!-- Settings: Layout 4 -->
	<div class="wlsbp-setting-style wlsbp-setting-style4">
		<div class="row">
			<div class="col-xs-12 col-md-12 wlsbp-setting-col">
				<img class="img-fluid rounded d-block" alt="style1_image" src="<?php echo esc_url( $style4_image ); ?>">
				<p class="wlsbp-setting-style-message border-bottom border-top">
					<?php esc_html_e( 'Applied setting Service Shortcode', 'service-showcase' ); ?>:&nbsp;
					<strong>[SSW id=<?php echo esc_html( $post_id ); ?>]</strong>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Display Service Icon', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $s4_display_service_icon, true, true ); ?> class="form-check-input" type="radio" name="s4_display_service_icon" id="wlsbp_s4_display_service_icon_1" value="<?php echo esc_attr('1');?>">
						<label class="form-check-label" for="wlsbp_s4_display_service_icon_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $s4_display_service_icon, false, true ); ?> class="form-check-input" type="radio" name="s4_display_service_icon" id="wlsbp_s4_display_service_icon_0" value="<?php echo esc_attr('0');?>">
						<label class="form-check-label" for="wlsbp_s4_display_service_icon_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide service showcase Icon.', 'service-showcase' ); ?>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Display Service Read More Button', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $s4_display_service_rmlink, true, true ); ?> class="form-check-input" type="radio" name="s4_display_service_rmlink" id="wlsbp_s4_display_service_rmlink_1" value="<?php echo esc_attr('1');?>">
						<label class="form-check-label" for="wlsbp_s4_display_service_rmlink_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $s4_display_service_rmlink, false, true ); ?> class="form-check-input" type="radio" name="s4_display_service_rmlink" id="wlsbp_s4_display_service_rmlink_0" value="<?php echo esc_attr('0');?>">
						<label class="form-check-label" for="wlsbp_s4_display_service_rmlink_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide service showcase Read More Button.', 'service-showcase' ); ?>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Icon Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s4_service_icon_color" type="text" class="color-picker" id="wlsbp_s4_service_icon_color" value="<?php echo esc_attr( $s4_service_icon_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service icon.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Icon Color background color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s4_service_icon_color_bg_color" type="text" class="color-picker" id="wlsbp_s4_service_icon_color" value="<?php echo esc_attr( $s4_service_icon_color_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service icon background.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s4_service_bg_color" type="text" class="color-picker" id="wlsbp_s4_service_bg_color" value="<?php echo esc_attr( $s4_service_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose background color for service.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Title Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s4_service_title_color" type="text" class="color-picker" id="wlsbp_s4_service_title_color" value="<?php echo esc_attr( $s4_service_title_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service title.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Description Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s4_service_desc_color" type="text" class="color-picker" id="wlsbp_s4_service_desc_color" value="<?php echo esc_attr( $s4_service_desc_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service description.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Text Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s4_service_readmore_text_color" type="text" class="color-picker" id="wlsbp_s4_service_readmore_text_color" value="<?php echo esc_attr( $s4_service_readmore_text_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service read more text.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s4_service_readmore_bg_color" type="text" class="color-picker" id="wlsbp_s4_service_readmore_bg_color" value="<?php echo esc_attr( $s4_service_readmore_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service read more background.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Title Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s4_service_title_fontsize" type="range" id="wlsbp_s4_service_title_fontsize" value="<?php echo esc_attr( $s4_service_title_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="ftitle4"><?php echo esc_attr( $s4_service_title_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Description Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s4_service_desc_fontsize" type="range" id="wlsbp_s4_service_desc_fontsize" value="<?php echo esc_attr( $s4_service_desc_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="fdesc4"><?php echo esc_attr( $s4_service_desc_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Text Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s4_service_rmlink_fontsize" type="range" id="wlsbp_s4_service_rmlink_fontsize" value="<?php echo esc_attr( $s4_service_rmlink_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="frmlink4"><?php echo esc_attr( $s4_service_rmlink_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Font Family', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s4_service_font_family" type="text" id="wlsbp_s4_service_font_family" value="<?php echo esc_attr( $s4_service_font_family ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Select service showcase font family.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Grid Layout', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<?php
						if ( $s4_service_grid_layout == '' ) {
							$s4_service_grid_layout = 'col-md-6';
						}
						?>
						<select name="s4_service_grid_layout" id="wlsbp_s4_service_grid_layout">
							<optgroup label="Select Service Grid Layout">
								<option value="<?php echo esc_attr('col-md-12');?>"
								<?php
								if ( $s4_service_grid_layout == 'col-md-12' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'One Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-6');?>"
								<?php
								if ( $s4_service_grid_layout == 'col-md-6' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Two Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-4');?>"
								<?php
								if ( $s4_service_grid_layout == 'col-md-4' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Three Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-3');?>"
								<?php
								if ( $s4_service_grid_layout == 'col-md-3' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Four Column', 'service-showcase' ); ?></option>
							</optgroup>
						</select>
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose a column layout for service showcase', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
	</div>

	<!-- Settings: Layout 5 -->
	<div class="wlsbp-setting-style wlsbp-setting-style5">
		<div class="row">
			<div class="col-xs-12 col-md-12 wlsbp-setting-col">
				<img class="img-fluid rounded d-block" alt="style1_image" src="<?php echo esc_url( $style5_image ); ?>">

				<p class="wlsbp-setting-style-message border-bottom border-top">
					<?php esc_html_e( 'Applied setting Service Shortcode', 'service-showcase' ); ?>:&nbsp;
					<strong>[SSW id=<?php echo esc_html( $post_id ); ?>]</strong>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Display Service Icon', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $s5_display_service_icon, true, true ); ?> class="form-check-input" type="radio" name="s5_display_service_icon" id="wlsbp_s5_display_service_icon_1" value="<?php echo esc_attr('1');?>">
						<label class="form-check-label" for="wlsbp_s5_display_service_icon_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $s5_display_service_icon, false, true ); ?> class="form-check-input" type="radio" name="s5_display_service_icon" id="wlsbp_s5_display_service_icon_0" value="<?php echo esc_attr('0');?>">
						<label class="form-check-label" for="wlsbp_s5_display_service_icon_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide service showcase Icon.', 'service-showcase' ); ?>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Display Service Read More Button', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $s5_display_service_rmlink, true, true ); ?> class="form-check-input" type="radio" name="s5_display_service_rmlink" id="wlsbp_s5_display_service_rmlink_1" value="<?php echo esc_attr('1');?>">
						<label class="form-check-label" for="wlsbp_s5_display_service_rmlink_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $s5_display_service_rmlink, false, true ); ?> class="form-check-input" type="radio" name="s5_display_service_rmlink" id="wlsbp_s5_display_service_rmlink_0" value="<?php echo esc_attr('0');?>">
						<label class="form-check-label" for="wlsbp_s5_display_service_rmlink_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide service showcase Read More Button.', 'service-showcase' ); ?>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Icon Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s5_service_icon_color" type="text" class="color-picker" id="wlsbp_s5_service_icon_color" value="<?php echo esc_attr( $s5_service_icon_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service icon.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s5_service_bg_color" type="text" class="color-picker" id="wlsbp_s5_service_bg_color" value="<?php echo esc_attr( $s5_service_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose background color for service.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Title Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s5_service_title_color" type="text" class="color-picker" id="wlsbp_s5_service_title_color" value="<?php echo esc_attr( $s5_service_title_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service title.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Description Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s5_service_desc_color" type="text" class="color-picker" id="wlsbp_s5_service_desc_color" value="<?php echo esc_attr( $s5_service_desc_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service description.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Text Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s5_service_readmore_text_color" type="text" class="color-picker" id="wlsbp_s5_service_readmore_text_color" value="<?php echo esc_attr( $s5_service_readmore_text_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service read more text.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Title Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s5_service_title_fontsize" type="range" id="wlsbp_s5_service_title_fontsize" value="<?php echo esc_attr( $s5_service_title_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="ftitle5"><?php echo esc_attr( $s5_service_title_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Description Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s5_service_desc_fontsize" type="range" id="wlsbp_s5_service_desc_fontsize" value="<?php echo esc_attr( $s5_service_desc_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="fdesc5"><?php echo esc_attr( $s5_service_desc_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Text Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s5_service_rmlink_fontsize" type="range" id="wlsbp_s5_service_rmlink_fontsize" value="<?php echo esc_attr( $s5_service_rmlink_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="frmlink5"><?php echo esc_attr( $s5_service_rmlink_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Font Family', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s5_service_font_family" type="text" id="wlsbp_s5_service_font_family" value="<?php echo esc_attr( $s5_service_font_family ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Select service showcase font family.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Grid Layout', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<?php
						if ( $s5_service_grid_layout == '' ) {
							$s5_service_grid_layout = 'col-md-6';
						}
						?>
						<select name="s5_service_grid_layout" id="wlsbp_s5_service_grid_layout">
							<optgroup label="Select Service Grid Layout">
								<option value="<?php echo esc_attr('col-md-12');?>"
								<?php
								if ( $s5_service_grid_layout == 'col-md-12' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'One Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-6');?>"
								<?php
								if ( $s5_service_grid_layout == 'col-md-6' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Two Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-4');?>"
								<?php
								if ( $s5_service_grid_layout == 'col-md-4' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Three Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-3');?>"
								<?php
								if ( $s5_service_grid_layout == 'col-md-3' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Four Column', 'service-showcase' ); ?></option>
							</optgroup>
						</select>
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose a column layout for service showcase', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
	</div>
	<!-- Settings: Layout 6 -->
	<div class="wlsbp-setting-style wlsbp-setting-style6">
		<div class="row">
			<div class="col-xs-12 col-md-12 wlsbp-setting-col">
				<img class="img-fluid rounded d-block" alt="style6_image" src="<?php echo esc_url( $style6_image ); ?>">

				<p class="wlsbp-setting-style-message border-bottom border-top">
					<?php esc_html_e( 'Applied setting Service Shortcode', 'service-showcase' ); ?>:&nbsp;
					<strong>[SSW id=<?php echo esc_html( $post_id ); ?>]</strong>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Display Service Icon', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $s6_display_service_icon, true, true ); ?> class="form-check-input" type="radio" name="s6_display_service_icon" id="wlsbp_s6_display_service_icon_1" value="<?php echo esc_attr('1');?>">
						<label class="form-check-label" for="wlsbp_s6_display_service_icon_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $s6_display_service_icon, false, true ); ?> class="form-check-input" type="radio" name="s6_display_service_icon" id="wlsbp_s6_display_service_icon_0" value="<?php echo esc_attr('0');?>">
						<label class="form-check-label" for="wlsbp_s6_display_service_icon_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide service showcase Icon.', 'service-showcase' ); ?>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Display Service Read More Button', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $s6_display_service_rmlink, true, true ); ?> class="form-check-input" type="radio" name="s6_display_service_rmlink" id="wlsbp_s6_display_service_rmlink_1" value="<?php echo esc_attr('1');?>">
						<label class="form-check-label" for="wlsbp_s6_display_service_rmlink_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $s6_display_service_rmlink, false, true ); ?> class="form-check-input" type="radio" name="s6_display_service_rmlink" id="wlsbp_s6_display_service_rmlink_0" value="<?php echo esc_attr('0');?>">
						<label class="form-check-label" for="wlsbp_s6_display_service_rmlink_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="wlsbp-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide service showcase Read More Button.', 'service-showcase' ); ?>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Icon Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s6_service_icon_color" type="text" class="color-picker" id="wlsbp_s6_service_icon_color" value="<?php echo esc_attr( $s6_service_icon_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service icon.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service background Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s6_service_bg_color" type="text" class="color-picker" id="wlsbp_s6_service_bg_color" value="<?php echo esc_attr( $s6_service_bg_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose background color for service.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Title Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s6_service_title_color" type="text" class="color-picker" id="wlsbp_s6_service_title_color" value="<?php echo esc_attr( $s6_service_title_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service title.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Description Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s6_service_desc_color" type="text" class="color-picker" id="wlsbp_s6_service_desc_color" value="<?php echo esc_attr( $s6_service_desc_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service description.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Text Color', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s6_service_readmore_text_color" type="text" class="color-picker" id="wlsbp_s6_service_readmore_text_color" value="<?php echo esc_attr( $s6_service_readmore_text_color ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose color for service read more text.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Title Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s6_service_title_fontsize" type="range" id="wlsbp_s6_service_title_fontsize" value="<?php echo esc_attr( $s6_service_title_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="ftitle6"><?php echo esc_attr( $s6_service_title_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Description Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s6_service_desc_fontsize" type="range" id="wlsbp_s6_service_desc_fontsize" value="<?php echo esc_attr( $s6_service_desc_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="fdesc6"><?php echo esc_attr( $s6_service_desc_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Read More Text Font Size', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s6_service_rmlink_fontsize" type="range" id="wlsbp_s6_service_rmlink_fontsize" value="<?php echo esc_attr( $s6_service_rmlink_fontsize ); ?>" min="10" max="50">
						<div class="wlsbp-setting-helper fsize">
							<span class="frmlink6"><?php echo esc_attr( $s6_service_rmlink_fontsize ); ?></span>
							<?php esc_html_e( 'px', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Font Family', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<input name="s6_service_font_family" type="text" id="wlsbp_s6_service_font_family" value="<?php echo esc_attr( $s6_service_font_family ); ?>">
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Select service showcase font family.', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 wlsbp-setting-col">
				<span class="wlsbp_setting_key">
					<?php esc_html_e( 'Service Grid Layout', 'service-showcase' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 wlsbp-setting-col">
				<span class="wlsbp_setting_value">
					<div class="form-group">
						<?php
						if ( $s6_service_grid_layout == '' ) {
							$s6_service_grid_layout = 'col-md-6';
						}
						?>
						<select name="s6_service_grid_layout" id="wlsbp_s6_service_grid_layout">
							<optgroup label="Select Service Grid Layout">
								<option value="<?php echo esc_attr('col-md-12');?>"
								<?php
								if ( $s6_service_grid_layout == 'col-md-12' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'One Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-6');?>"
								<?php
								if ( $s6_service_grid_layout == 'col-md-6' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Two Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-4');?>"
								<?php
								if ( $s6_service_grid_layout == 'col-md-4' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Three Column', 'service-showcase' ); ?></option>
								<option value="<?php echo esc_attr('col-md-3');?>"
								<?php
								if ( $s6_service_grid_layout == 'col-md-3' ) {
									esc_html_e('selected=selected');
								}
								?>
								><?php esc_html_e( 'Four Column', 'service-showcase' ); ?></option>
							</optgroup>
						</select>
						<div class="wlsbp-setting-helper">
							<?php esc_html_e( 'Choose a column layout for service showcase', 'service-showcase' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
	</div>
	<a href="#" class="wlsbp-smooth-up" title="<?php esc_attr_e( 'Back to top', 'service-showcase' ); ?>"></a>
</div>