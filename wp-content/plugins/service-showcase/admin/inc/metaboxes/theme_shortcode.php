<?php
 defined( 'ABSPATH' ) || die
?>

</p><?php esc_html_e( 'Use below code in your theme to display the Service Showcase', 'service-showcase' ); ?></p>
<input class="short_text" readonly="readonly" type="text" value="<?php echo '<?php echo do_shortcode( \'[SSW id=' . esc_attr( get_the_ID() ) . ']\' ); ?>'; ?>">