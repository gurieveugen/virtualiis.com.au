(function ($) {
    "use strict";

    //preloader
    $(window).bind("load", function () { // makes sure the whole site is loaded
        $("#status").fadeOut(); // will first fade out the loading animation
        $("#preloader").delay(450).fadeOut("slow"); // will fade out the white DIV that covers the website.
    });
	
})(jQuery);