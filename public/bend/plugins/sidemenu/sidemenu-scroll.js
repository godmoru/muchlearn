(function($) {
	"use strict";

    const ps = new PerfectScrollbar('.app-sidebar', {
        useBothWheelAxes: true,
        suppressScrollX: true,
        suppressScrollY: false,
    });

	const ps1 = new PerfectScrollbar('.sidebar-right', {
	  useBothWheelAxes:true,
	  suppressScrollX:true,
	});
	
})(jQuery);