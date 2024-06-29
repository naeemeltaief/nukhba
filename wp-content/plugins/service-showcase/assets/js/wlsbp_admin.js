(function(jQuery) {
	'use strict';
	jQuery(document).ready(function() {
		jQuery('#wlsbp_s1_service_font_family').fontselect();
		jQuery('#wlsbp_s2_service_font_family').fontselect();
		jQuery('#wlsbp_s3_service_font_family').fontselect();
		jQuery('#wlsbp_s4_service_font_family').fontselect();
		jQuery('#wlsbp_s5_service_font_family').fontselect();
		jQuery('#wlsbp_s6_service_font_family').fontselect();
		jQuery('#add_new_sbp').on('click',function(e) {
			e.preventDefault();

			var services 		= jQuery('#wlsbp_ServiceShowcase_rows');
			var serviceIcon 	= jQuery(this).data('service-icon');
			var serviceTitle 	= jQuery(this).data('service-title');
			var serviceDesc 	= jQuery(this).data('service-desc');
			var serviceLink 	= jQuery(this).data('service-link');

			services.append('<div class="col-md-4 wlsbp_ServiceShowcase"><div class="wlsbp_ServiceShowcase_inner">'+
				'<button type="button" class="wlsbp_ServiceShowcase_remove_label btn btn-sm btn-outline-dark mb-1">'+
				'<a class="remove_button" href="#delete" id="remove_button"><i class="fas fa-trash-alt"></i></a></button>'+
				'<label>'+ serviceIcon +'</label><div class="form-group input-group wlsbp-icon">'+
				'<input type="text" name="service_showcase_icon[]" id="service_showcase_icon[]" class="form-control icon_pick" value="fas fa-suitcase" placeholder="Service Icon" data-placement="bottomRight" readonly="readonly"><span class="wlsbp-icon-btn input-group-addon"><i class="fas fa-suitcase"></i></span></div>'+
				'<div class="form-group wlsbp-title"><label>'+ serviceTitle +'</label>'+
				'<input type="text" id="service_showcase_title[]" name="service_showcase_title[]" value="" class="form-control" placeholder="Enter Service Title"></div>'+
				'<div class="form-group wlsbp-description"><label>'+ serviceDesc +'</label>'+
				'<textarea rows="3" cols="50" id="service_showcase_description[]" name="service_showcase_description[]" placeholder="Enter Service Description" class="form-control wlsbp-description"></textarea></div>'+
				'<div class="wlsbp-ServiceShowcase_link"><label>'+ serviceLink +'</label>'+
				'<input type="text" id="service_showcase_link[]" name="service_showcase_link[]" value="" placeholder="Enter Service Link" class="form-control"></div>'+
				'</div></div>');
			jQuery('.icon_pick').iconpicker();

		});
		jQuery('#wlsbp_ServiceShowcase_rows').sortable({
			placeholder: '',
			revert: true
		});

		jQuery(document).on('click', '.wlsbp_ServiceShowcase_remove_label', function() {
			jQuery(this).parent().fadeOut(300, function() {
				jQuery(this).parent().remove();
			});
		});

		jQuery(document).on('click', '#sbp_delete_all', function() {
			if(confirm(('Are You Sure? This Will Delete All!'))) {
				jQuery('#wlsbp_ServiceShowcase_rows').html('');
			}
		});

		var smoothUp = jQuery('.wlsbp-smooth-up');
		jQuery(window).on('scroll', function() {
			var scrollTop = jQuery(this).scrollTop();
			if(scrollTop < 1000) {
				smoothUp.fadeOut();
			} else {
				smoothUp.fadeIn();
			}
		});

		var style1 = jQuery('.wlsbp-setting-style1');
		var style2 = jQuery('.wlsbp-setting-style2');
		var style3 = jQuery('.wlsbp-setting-style3');
		var style4 = jQuery('.wlsbp-setting-style4');
		var style5 = jQuery('.wlsbp-setting-style5');
		var style6 = jQuery('.wlsbp-setting-style6');
		var style  = jQuery('.wlsbp-general-setting input[name="style"]:checked').val();

		jQuery('.wlsbp-setting-style').hide();
		jQuery( '.wlsbp-setting-'+style ).show();

		jQuery(document).on('change', '.wlsbp-general-setting input[name="style"]', function() {
			var styles = this.value;
			var style = jQuery('.wlsbp-setting-style').val();
				jQuery('.wlsbp-setting-style').hide();
				jQuery( '.wlsbp-setting-'+styles ).fadeIn();

		});

		// font size js style layout 1

			jQuery('#wlsbp_s1_service_title_fontsize').on('change', function () {
		    var ftitle1 = jQuery(this).val();
		    jQuery('.ftitle1').html(ftitle1);
		});
			jQuery('#wlsbp_s1_service_desc_fontsize').on('change', function () {
		    var fdesc1 = jQuery(this).val();
		    jQuery('.fdesc1').html(fdesc1);
		});
			jQuery('#wlsbp_s1_service_rmlink_fontsize').on('change', function () {
		    var frmlink1 = jQuery(this).val();
		    jQuery('.frmlink1').html(frmlink1);
		});

		// font size js style layout 2

			jQuery('#wlsbp_s2_service_title_fontsize').on('change', function () {
		    var ftitle2 = jQuery(this).val();
		    jQuery('.ftitle2').html(ftitle2);
		});
			jQuery('#wlsbp_s2_service_desc_fontsize').on('change', function () {
		    var fdesc2 = jQuery(this).val();
		    jQuery('.fdesc2').html(fdesc2);
		});
			jQuery('#wlsbp_s2_service_rmlink_fontsize').on('change', function () {
		    var frmlink2 = jQuery(this).val();
		    jQuery('.frmlink2').html(frmlink2);
		});

		// font size js style layout 3

			jQuery('#wlsbp_s3_service_title_fontsize').on('change', function () {
		    var ftitle3 = jQuery(this).val();
		    jQuery('.ftitle3').html(ftitle3);
		});
			jQuery('#wlsbp_s3_service_desc_fontsize').on('change', function () {
		    var fdesc3 = jQuery(this).val();
		    jQuery('.fdesc3').html(fdesc3);
		});
			jQuery('#wlsbp_s3_service_rmlink_fontsize').on('change', function () {
		    var frmlink3 = jQuery(this).val();
		    jQuery('.frmlink3').html(frmlink3);
		});

		// font size js style layout 4

			jQuery('#wlsbp_s4_service_title_fontsize').on('change', function () {
		    var ftitle4 = jQuery(this).val();
		    jQuery('.ftitle4').html(ftitle4);
		});
			jQuery('#wlsbp_s4_service_desc_fontsize').on('change', function () {
		    var fdesc4 = jQuery(this).val();
		    jQuery('.fdesc4').html(fdesc4);
		});
			jQuery('#wlsbp_s4_service_rmlink_fontsize').on('change', function () {
		    var frmlink4 = jQuery(this).val();
		    jQuery('.frmlink4').html(frmlink4);
		});

		// font size js style layout 5

			jQuery('#wlsbp_s5_service_title_fontsize').on('change', function () {
		    var ftitle5 = jQuery(this).val();
		    jQuery('.ftitle5').html(ftitle5);
		});
			jQuery('#wlsbp_s5_service_desc_fontsize').on('change', function () {
		    var fdesc5 = jQuery(this).val();
		    jQuery('.fdesc5').html(fdesc5);
		});
			jQuery('#wlsbp_s5_service_rmlink_fontsize').on('change', function () {
		    var frmlink5 = jQuery(this).val();
		    jQuery('.frmlink5').html(frmlink5);
		});

		// font size js style layout 6

			jQuery('#wlsbp_s6_service_title_fontsize').on('change', function () {
		    var ftitle6 = jQuery(this).val();
		    jQuery('.ftitle6').html(ftitle6);
		});
			jQuery('#wlsbp_s6_service_desc_fontsize').on('change', function () {
		    var fdesc6 = jQuery(this).val();
		    jQuery('.fdesc6').html(fdesc6);
		});
			jQuery('#wlsbp_s6_service_rmlink_fontsize').on('change', function () {
		    var frmlink6 = jQuery(this).val();
		    jQuery('.frmlink6').html(frmlink6);
		});

		jQuery('.color-picker').wpColorPicker();

		jQuery(document).on('click', '.wlsbp-smooth-up', function() {
			jQuery('html, body').animate({ scrollTop: 0 }, 'fast');
			return false;
		});

	  		// Create instance if not exists (returns a jQuery object)
			jQuery('.icon_pick').iconpicker();
	});
})(jQuery);


