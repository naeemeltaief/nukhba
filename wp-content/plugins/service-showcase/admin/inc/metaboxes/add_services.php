<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;}

$post_id  = $post->ID;
$services = get_post_meta( $post_id, 'wlsbp_service', true );

wp_nonce_field( 'save_service_meta_' . $post_id, 'service_meta_' . $post_id );
?>
<div class="wlsbp">
	<div class="wlsbp_service" id="wlsbp_service_showcase">
		<div class="row" id="wlsbp_ServiceShowcase_rows">
		<?php
		if ( is_array( $services ) && count( $services ) ) {
			foreach ( $services as $key => $service ) {
				?>
				<div class="col-md-4 wlsbp_ServiceShowcase">
					<div class="wlsbp_ServiceShowcase_inner">
						<button type="button" class="wlsbp_ServiceShowcase_remove_label btn btn-sm btn-outline-dark mb-1"><a class="remove_button" href="#delete" id="remove_button" ><i class="fas fa-trash-alt"></i></a></button>
						<input type="hidden" name="service[]" value="<?php echo esc_attr( $service['id'] ); ?>">
						<label><?php esc_html_e( 'Service Icon', 'service-showcase' ); ?>:</label>
						<div class="form-group input-group wlsbp-icon">
							<input type="text" name="service_showcase_icon[]" id="service_showcase_icon[]" class="form-control icon_pick" value="<?php echo esc_attr( $service['icon'] ); ?>" placeholder="Service Icon" data-placement="bottomRight" readonly="readonly">
							<span class="wlsbp-icon-btn input-group-addon"></span>
						</div>

						<div class="form-group wlsbp-title">
							<label><?php esc_html_e( 'Service Title', 'service-showcase' ); ?>:</label>
							<input type="text" name="service_showcase_title[]" class="form-control" value="<?php echo esc_attr( $service['title'] ); ?>" placeholder="Enter Service Title">
						</div>
						<div class="form-group wlsbp-description">
							<label><?php esc_html_e( 'Service Description', 'service-showcase' ); ?>:</label>
							<textarea rows="3" cols="50" type="text" name="service_showcase_description[]" class="form-control" placeholder="Enter Service Description"><?php esc_html_e( $service['desc'] ); ?></textarea>
						</div>
						<div class="wlsbp-ServiceShowcase_link">
							<div class="form-group">
								<label><?php esc_html_e( 'Read More link', 'service-showcase' ); ?>:</label>
								<input type="text" name="service_showcase_link[]" class="form-control" value="<?php echo esc_attr( $service['link'] ); ?>" placeholder="Enter Service Link">
							</div>
						</div>
					</div>
				</div>
				<?php
			}
		} else {
			for ( $i = 1; $i <= 3; $i++ ) {
				?>
		<div class="col-md-4 wlsbp_ServiceShowcase">
			<div class="wlsbp_ServiceShowcase_inner">
				<button type="button" class="wlsbp_ServiceShowcase_remove_label btn btn-sm btn-outline-dark mb-1"><a class="remove_button" href="#delete" id="remove_button" ><i  class="fas fa-trash-alt"></i></a></button>
				<input type="hidden" name="service[]" value="">
				<label><?php esc_html_e( 'Service Icon ', 'service-showcase' ); ?>:</label>
				<div class="form-group input-group wlsbp-icon">
					<input type="text" name="service_showcase_icon[]" id="service_showcase_icon[]" class="form-control icon_pick" value="fas fa-suitcase" placeholder="<?php esc_attr_e( 'Service Icon', 'service-showcase' ); ?>" data-placement="bottomRight" readonly="readonly">
					<span class="wlsbp-icon-btn input-group-addon"><i class="fas fa-suitcase"></i></span>
				</div>

				<div class="form-group wlsbp-title">
					<label><?php esc_html_e( 'Service Title ', 'service-showcase' ); ?>:</label>
					<input type="text" name="service_showcase_title[]" class="form-control" value="<?php esc_attr_e( 'Service Title', 'service-showcase' ); ?>" placeholder="<?php esc_attr_e( 'Enter Service Title', 'service-showcase' ); ?>">
				</div>
				<div class="form-group wlsbp-description">
					<label><?php esc_html_e( 'Service Description ', 'service-showcase' ); ?>:</label>
					<textarea rows="3" cols="50" type="text" name="service_showcase_description[]" class="form-control" placeholder="<?php esc_attr_e( 'Enter Service Description', 'service-showcase' ); ?>"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat.', 'service-showcase') ?></textarea>
				</div>
				<div class="wlsbp-ServiceShowcase_link">
					<div class="form-group">
						<label><?php esc_html_e( 'Read More link ', 'service-showcase' ); ?>:</label>
						<input type="text" name="service_showcase_link[]" class="form-control" value="#" placeholder="<?php esc_attr_e( 'Enter Service Link', 'service-showcase' ); ?>">
					</div>
				</div>
			</div>
			</div>
				<?php
			}
		}
		?>
		</div>
		<div class="row">
			<div class="col-md-6">
				<a class="sbp-panel add_new_sbp" id="add_new_sbp" data-service-icon="<?php esc_attr_e( 'Service Icon :', 'service-showcase' ); ?>" data-service-title="<?php esc_attr_e( 'Service Title :', 'service-showcase' ); ?>" data-service-desc="<?php esc_attr_e( 'Service Description :', 'service-showcase' ); ?>" data-service-link="<?php esc_attr_e( 'Read More link :', 'service-showcase' ); ?>"><i class="fas fa-plus-square"></i>
					<?php esc_html_e( 'Add New service showcase', 'service-showcase' ); ?>
				</a>
			</div>
			<div class="col-md-6">
				<a class="add_new_sbp sbp_delete_all" id="sbp_delete_all"><i class="fas fa-trash"></i>
					<span><?php esc_html_e( 'Delete All', 'service-showcase' ); ?></span>
				</a>
			</div>
		</div>
	</div>
	<a href="#" class="wlsbp-smooth-up" title="<?php esc_attr_e( 'Back to top', 'service-showcase' ); ?>"></a>
</div>