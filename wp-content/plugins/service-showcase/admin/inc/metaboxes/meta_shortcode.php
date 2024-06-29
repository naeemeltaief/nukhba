<?php
defined( 'ABSPATH' ) || die();
?>
<p><?php esc_html_e( 'Use below shortcode to publish your Service Showcase in any post/pages', 'service-showcase' ); ?></p>
<input readonly="readonly" type="text" value="<?php echo esc_attr( '[SSW id=' . get_the_ID() . ']' ); ?>">