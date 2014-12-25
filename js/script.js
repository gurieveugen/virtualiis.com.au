(function ($) {
    "use strict";

	//Page scrolling
    $('.for-sticky .navigation').onePageNav({
        filter: ':not(.external a)',
        scrollThreshold: 0.25,
        scrollOffset: 92
    });
    //sticky navigation
    $(".for-sticky").sticky({
        topSpacing: 0,
        className: 'shrink'
    });
	
	//script for navigation(superfish)
	$('.menu-box ul').superfish({
		delay: 400, //delay on mouseout
		animation: {
			opacity: 'show',
			height: 'show'
		}, // fade-in and slide-down animation
		animationOut: {
			opacity: 'hide',
			height: 'hide'
		},
		speed: 200, //  animation speed
		speedOut: 200,
		autoArrows: false // disable generation of arrow mark-up
	})
	//create menu for tablet/mobile
	$(".menu-box .navigation").clone(false).find("ul,li").removeAttr("id").remove(".sub-menu").appendTo($(".mobile-menu"));
	$(".mobile-menu .sub-menu").remove();
	$('.mobile-menu').on('show.bs.collapse', function () {
		$('body').on('click', function () {
			$('.mobile-menu').collapse('hide');
		})
	})
	
	//toggle menu
	$('.menu-btn').on('click', function () {
		$('.mobile-menu').collapse({
			toggle: false
		});
	})
	//menu for tablet/mobile scrolling
	$('.mobile-menu a').bind('click', function (event) {
		var $anchor = $(this);
	
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top -92
		}, 800, 'linear');
		event.preventDefault();
	});

    //slider homepage setting
	if ($(".home-slider").find('.slide').length > 1) {
		$(".home-slider").owlCarousel({
			navigation: false, // Hide next and prev buttons
			slideSpeed: 300,
			autoplay: true,
			autoHeight: true,
			pagination: true,
			paginationSpeed: 300,
			singleItem: true,
			transitionStyle: "fade"
		});
	}

    //slider team setting
	if ($(".team-slider").find('.team-inner').length > 1) {
		$(".team-slider").owlCarousel({
			navigation: false, // Hide next and prev buttons
			slideSpeed: 300,
			autoplay: true,
			autoHeight: true,
			pagination: true,
			paginationSpeed: 300,
			singleItem: true,
			mouseDrag: false,
			stopOnHover: true,
			transitionStyle: "fade"
		});
	}
	
	//slider about section and blog slider setting
	if ($(".blog-slider").find('.slide').length > 1) {
		$(".blog-slider").owlCarousel({
			navigation: true,
			navigationText: ['<span class="slide-nav inleft"><i class="fa fa-caret-left"></i></span >', '<span class="slide-nav inright"><i class="fa fa-caret-right"></i></span >'],
			slideSpeed: 300,
			autoplay: true,
			pagination: false,
			paginationSpeed: 300,
			singleItem: true,
			transitionStyle: "fade"
		});
	}
    // script prettyphoto
    $(document).ready(function () {
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
            hook: 'data-rel',
            deeplinking: false
        });
    });



    // Video responsive
    $("body").fitVids();



    //replace the data-background into background image
    $(".img-bg").each(function () {
        var imG = $(this).data('background');
        $(this).css('background-image', "url('" + imG + "') "

        );
    });


    //move to hash after loading
    $(window).bind("load", function () {
        if (window.location.hash) {
            $('html, body').stop().animate({
                scrollTop: $(window.location.hash).offset().top - 93
            }, 300, 'linear');
        }
    });

	//background ticker
    $('.big-ticker:has(>div:eq(1))').list_ticker({
        speed: 5000,
        effect: 'fade'
    });
	
	//add class on touch device
	if (Modernizr.touch) {
	$('body').addClass('no-para');		
	}
	
})(jQuery);