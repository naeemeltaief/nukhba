<?php
defined( 'ABSPATH' ) || die();
require_once WLSBP_PLUGIN_DIR_PATH . 'includes/sr_helper.php';

wp_enqueue_style( 'style3', WLSBP_PLUGIN_URL . 'public/inc/style-layouts/style3/css/style-layout3.css', array(), true, 'all' );

wp_register_script( 'style3', '' );
wp_enqueue_script( 'style3' );

$style3_service_settings = get_post_meta( $id, 'wlsbp_style3_service_setting', true );

if ( is_array( $style3_service_settings ) ) {
	if ( isset( $style3_service_settings['custom_css'] ) && ! empty( $style3_service_settings['custom_css'] ) ) {
		$s2_service_custom_css = $style3_service_settings['custom_css'];
	}
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

	if ( $white !== $s3_service_icon_color ) {
		$css                   = '.wlsbp-style3-service-icon-' . esc_attr( $id ) . ' span> i{ color: ' . sanitize_hex_color( $s3_service_icon_color ) . '!important; } ';
		$s3_service_custom_css = $css . $s3_service_custom_css;
	}
	if ( $red !== $s3_service_icon_bg_color ) {
		$css                   = '.wlsbp-style3-service-icon-' . esc_attr( $id ) . ' span:before{ background: ' . sanitize_hex_color( $s3_service_icon_bg_color ) . '!important; } ';
		$s3_service_custom_css = $css . $s3_service_custom_css;
	}
	if ( $black1 !== $s3_service_title_color ) {
		$css                   = '.wlsbp-style3-service-title-' . esc_attr( $id ) . ' { color: ' . sanitize_hex_color( $s3_service_title_color ) . '!important; } ';
		$s3_service_custom_css = $css . $s3_service_custom_css;
	}
	if ( $gray4 !== $s3_service_desc_color ) {
		$css                   = '.wlsbp-style3-service-desc-' . esc_attr( $id ) . ' { color: ' . sanitize_hex_color( $s3_service_desc_color ) . '!important; } ';
		$s3_service_custom_css = $css . $s3_service_custom_css;
	}
	if ( $gray4 !== $s3_service_readmore_text_color ) {
		$css                   = '.wlsbp-style3-service-readmore-' . esc_attr( $id ) . ' { color: ' . sanitize_hex_color( $s3_service_readmore_text_color ) . '!important; } ';
		$s3_service_custom_css = $css . $s3_service_custom_css;
	}
	if ( $white !== $s3_service_readmore_bg_color ) {
		$css                   = '.wlsbp-style3-service-readmore-' . esc_attr( $id ) . ' { background-color: ' . sanitize_hex_color( $s3_service_readmore_bg_color ) . '!important; } ';
		$s3_service_custom_css = $css . $s3_service_custom_css;
	}
	if ( $white !== $s3_service_bg_color ) {
		$css                   = '.wlsbp-style3-service-bg-color-' . esc_attr( $id ) . ' { background-color: ' . sanitize_hex_color( $s3_service_bg_color ) . '!important; } ';
		$s3_service_custom_css = $css . $s3_service_custom_css;
	}
	if ( 16 !== $s3_service_title_fontsize ) {
		$css                   = '.wlsbp-style3-service-title-' . esc_attr( $id ) . ' { font-size: ' . abs( $s3_service_title_fontsize ) . 'px!important; } ';
		$s3_service_custom_css = $css . $s3_service_custom_css;
	}
	if ( 14 !== $s3_service_desc_fontsize ) {
		$css                   = '.wlsbp-style3-service-desc-' . esc_attr( $id ) . ' { font-size: ' . abs( $s3_service_desc_fontsize ) . 'px!important; } ';
		$s3_service_custom_css = $css . $s3_service_custom_css;
	}
	if ( 16 !== $s3_service_rmlink_fontsize ) {
		$css                   = '.wlsbp-style3-service-readmore-' . esc_attr( $id ) . ' { font-size: ' . abs( $s3_service_rmlink_fontsize ) . 'px!important; } ';
		$s3_service_custom_css = $css . $s3_service_custom_css;
	}

	if ( ! empty( $s3_service_custom_css ) ) {
		wp_register_style( 'wlsbp-style3', '' );
		wp_enqueue_style( 'wlsbp-style3' );
		wp_add_inline_style( 'wlsbp-style3', $s3_service_custom_css );
	}
	if ( '' !== $s3_service_font_family ) {
		wp_enqueue_style( 'google-font-' . esc_attr( $s3_service_font_family ), esc_url( "https://fonts.googleapis.com/css?family=$s3_service_font_family" ), false );
	}

	$js = '
    (function(jQuery) {
        "use strict";
        jQuery(document).ready(function() {

            var font = "' . esc_attr( $s3_service_font_family ) . '";
            if("" !== font) {
                font = font.replace(/\+/g, " ");
                font = font.split(":");
                jQuery(".wlsbp-service-' . esc_attr( $id ) . '").css("font-family", font[0]);
            }
        });
    })(jQuery);';
	wp_add_inline_script( 'style3', $js );
}

?>
<div class="container service_style3 wlsbp-service-<?php echo esc_attr( $id ); ?>">
	<?php if ( $display_service_title ) { ?>
	<h2 class="wlsbp-ServiceShowcase-title"><?php echo esc_html( get_the_title( $id ) ); ?></h2>
	<?php } ?>
   <div class="row">
		<?php
			$i = 1;
		if ( is_array( $services ) && count( $services ) ) {
			foreach ( $services as $key => $service ) {
				?>
		<div class="wlsbp <?php echo esc_attr( $s3_service_grid_layout ); ?> col-sm-6 sbp_grid">
			<div class="ServiceShowcase wlsbp-style3-service-bg-color-<?php echo esc_attr( $id ); ?>">
				<?php if ( ! empty( $service['title'] ) ) { ?>
					<h3 class="wlsbp-style3-service-title wlsbp-style3-service-title-<?php echo esc_attr( $id ); ?>"><?php esc_html_e( $service['title'] ); ?></h3>
				<?php } ?>
				<?php if ( $s3_display_service_icon ) { ?>
				<div class="wlsbp-style3-service-icon wlsbp-style3-service-icon-<?php echo esc_attr( $id ); ?>"><span><i class="<?php echo esc_attr( $service['icon'] ); ?>"></i></span>
				</div>
				<?php } ?>
				<?php if ( ! empty( $service['desc'] ) ) { ?>
					<p class="wlsbp-style3-service-desc wlsbp-style3-service-desc-<?php echo esc_attr( $id ); ?>"><?php echo wp_kses_post( $service['desc'] ); ?></p>
				<?php } ?>
				<?php if ( $s3_display_service_rmlink ) { ?>
				<a target="_blank" href="<?php echo esc_url( $service['link'] ); ?>" class="wlsbp-style3-service-readmore wlsbp-style3-service-readmore-<?php echo esc_attr( $id ); ?>"><?php esc_html_e( 'Read More', 'service-showcase' ); ?></a>
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