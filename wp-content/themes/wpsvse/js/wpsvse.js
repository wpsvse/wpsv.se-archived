// *************************
// WPSVSE JS v. 20140809
// *************************
jQuery(document).ready(function($) {

	// ***************************
	// Tooltips
	// ***************************
	$('.wpsvse-tooltip').tooltip()
	
	// ***************************
	// Popover
	// ***************************
	$('[data-toggle="popover"]').popover()
	
	// ***************************
	// Head slider
	// ***************************
	$('#header-slider').carousel({
  		interval: 10000
	})
});