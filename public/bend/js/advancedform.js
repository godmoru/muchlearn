(function($) {
	"use strict";
	
	//accordion-wizard
	var options = {
		mode: 'wizard',
		autoButtonsNextClass: 'btn btn-primary float-end',
		autoButtonsPrevClass: 'btn btn-primary',
		stepNumberClass: 'badge badge-pill badge-primary me-1',
		onSubmit: function() {
		  alert('Form submitted!');
		  return true;
		}
	}
	$( "#form" ).accWizard(options);
	
})(jQuery);      