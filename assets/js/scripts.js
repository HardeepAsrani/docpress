jQuery(document).ready(function($) {
	/* Apply matchHeight to match docs grid */
	var byRow = $('body').hasClass('page-template-template-home');
	$('.row').each(function() {
		$(this).children('.docpress-box').matchHeight(byRow);
	});
});
