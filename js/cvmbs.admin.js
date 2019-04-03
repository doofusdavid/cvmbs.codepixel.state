jQuery(document).ready(function($) {

	$(document).on('hover', '.acf-fc-popup li a', function() {

		var flexContentItem = $(this);
		var parent = flexContentItem.parents('.acf-fc-popup');
		var layoutName = flexContentItem.attr('data-layout');

		if (parent.find('.preview').length > 0) {
			parent.find('.preview').html('<div class="inner-preview"><img src="' + theme_var.upload + layoutName + '.jpg"/></div>');
		} else {
			parent.append('<div class="preview"><div class="inner-preview"><img src="' + theme_var.upload + layoutName + '.jpg"/></div></div>');
		}

	});

});
