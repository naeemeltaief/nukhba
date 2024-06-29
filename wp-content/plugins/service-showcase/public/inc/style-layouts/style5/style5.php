<?php
defined( 'ABSPATH' ) || die();
require_once WLSBP_PLUGIN_DIR_PATH . 'includes/sr_helper.php';

wp_enqueue_style( 'style5', WLSBP_PLUGIN_URL . 'public/inc/style-layouts/style5/css/style-layout5.css', array(), true, 'all' );
wp_register_script( 'style5', '' );
wp_enqueue_script( 'style5' );

$style5_service_settings = get_post_meta( $id, 'wlsbp_style5_service_setting', true );

if ( is_array( $style5_service_settings ) ) {
	if ( isset( $style5_service_settings['custom_css'] ) && ! empty( $style5_service_settings['custom_css'] ) ) {
		$s2_service_custom_css = $style5_service_settings['custom_css'];
	}
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

	if ( $green !== $s5_service_icon_color ) {
		$css                   = '.wlsbp-style5-service-icon-' . esc_attr( $id ) . ' i { color: ' . sanitize_hex_color( $s5_service_icon_color ) . '!important; } ';
		$s5_service_custom_css = $css . $s5_service_custom_css;
	}
	if ( $gray5 !== $s5_service_title_color ) {
		$css                   = '.wlsbp-style5-service-title-' . esc_attr( $id ) . ' { color: ' . sanitize_hex_color( $s5_service_title_color ) . '!important; } ';
		$s5_service_custom_css = $css . $s5_service_custom_css;
	}
	if ( $black1 !== $s5_service_desc_color ) {
		$css                   = '.wlsbp-style5-service-desc-' . esc_attr( $id ) . ' { color: ' . sanitize_hex_color( $s5_service_desc_color ) . '!important; } ';
		$s5_service_custom_css = $css . $s5_service_custom_css;
	}
	if ( $green !== $s5_service_readmore_text_color ) {
		$css                   = '.wlsbp-style5-service-readmore-' . esc_attr( $id ) . ' { color: ' . sanitize_hex_color( $s5_service_readmore_text_color ) . '!important; } ';
		$s5_service_custom_css = $css . $s5_service_custom_css;
	}
	if ( $white !== $s5_service_bg_color ) {
		$css                   = '.wlsbp-style5-service-bg-color-' . esc_attr( $id ) . ' { background-color: ' . sanitize_hex_color( $s5_service_bg_color ) . '!important; } ';
		$s5_service_custom_css = $css . $s5_service_custom_css;
	}
	if ( 16 !== $s5_service_title_fontsize ) {
		$css                   = '.wlsbp-style5-service-title-' . esc_attr( $id ) . ' { font-size: ' . abs( $s5_service_title_fontsize ) . 'px!important; } ';
		$s5_service_custom_css = $css . $s5_service_custom_css;
	}
	if ( 14 !== $s5_service_desc_fontsize ) {
		$css                   = '.wlsbp-style5-service-desc-' . esc_attr( $id ) . ' { font-size: ' . abs( $s5_service_desc_fontsize ) . 'px!important; } ';
		$s5_service_custom_css = $css . $s5_service_custom_css;
	}
	if ( 16 !== $s5_service_rmlink_fontsize ) {
		$css                   = '.wlsbp-style5-service-readmore-' . esc_attr( $id ) . ' { font-size: ' . abs( $s5_service_rmlink_fontsize ) . 'px!important; } ';
		$s5_service_custom_css = $css . $s5_service_custom_css;
	}

	if ( ! empty( $s5_service_custom_css ) ) {
		wp_register_style( 'wlsbp-style5', '' );
		wp_enqueue_style( 'wlsbp-style5' );
		wp_add_inline_style( 'wlsbp-style5', $s5_service_custom_css );
	}
	if ( '' !== $s5_service_font_family ) {
		wp_enqueue_style( 'google-font-' . esc_attr( $s5_service_font_family ), esc_url( "https://fonts.googleapis.com/css?family=$s5_service_font_family" ), false );
	}

	$js = '
    (function(jQuery) {
        "use strict";
        jQuery(document).ready(function() {

            var font = "' . esc_attr( $s5_service_font_family ) . '";
            if("" !== font) {
                font = font.replace(/\+/g, " ");
                font = font.split(":");
                jQuery(".wlsbp-service-' . esc_attr( $id ) . '").css("font-family", font[0]);
            }
        });
    })(jQuery);';
	wp_add_inline_script( 'style5', $js );
}
?>
<div class="container service_style5 wlsbp-service-<?php echo esc_attr( $id ); ?>">
	<?php if ( $display_service_title ) { ?>
	<h2 class="wlsbp-ServiceShowcase-title"><?php echo esc_html( get_the_title( $id ) ); ?></h2>
	<?php } ?>
   <div class="row">
		<?php
			$i = 1;
		if ( is_array( $services ) && count( $services ) ) {
			foreach ( $services as $key => $service ) {
				?>
		<div class="wlsbp <?php echo esc_attr( $s5_service_grid_layout ); ?> col-sm-6 sbp_grid">
			<div class="ServiceShowcase wlsbp-style5-service-bg-color-<?php echo esc_attr( $id ); ?>">
				<?php if ( $s5_display_service_icon ) { ?>
				<div class="wlsbp-style5-service-icon wlsbp-style5-service-icon-<?php echo esc_attr( $id ); ?>"><i class="<?php echo esc_attr( $service['icon'] ); ?>"></i>
				</div>
				<?php } ?>
				<?php if ( ! empty( $service['title'] ) ) { ?>
					<h3 class="wlsbp-style5-service-title wlsbp-style5-service-title-<?php echo esc_attr( $id ); ?>"><?php esc_html_e( $service['title'] ); ?></h3>
				<?php } ?>
				<?php if ( ! empty( $service['desc'] ) ) { ?>
					<p class="wlsbp-style5-service-desc wlsbp-style5-service-desc-<?php echo esc_attr( $id ); ?>"><?php echo wp_kses_post( $service['desc'] ); ?></p>
				<?php } ?>
				<?php if ( $s5_display_service_rmlink ) { ?>
				<a target="_blank" href="<?php echo esc_url( $service['link'] ); ?>" class="wlsbp-style5-service-readmore wlsbp-style5-service-readmore-<?php echo esc_attr( $id ); ?>"><?php esc_html_e( 'Read More', 'service-showcase' ); ?></a>
				<?php } ?>
			</div>
		</div>
				<?php
			}
			$i++;
		}
		?>
	</div>
</div>