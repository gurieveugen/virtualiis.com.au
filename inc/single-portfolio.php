<?php 
	


			

//script for single portfolio	
function beuh_single_portfolio() {
	if( is_page_template( 'homepage-slider.php' ) || is_page_template( 'homepage-youtube.php' )|| is_page_template( 'homepage-video.php' )|| is_page_template( 'homepage-custom-layout.php' )){
?>
		<script type="text/javascript">
					(function ($) {
					"use strict";
					
						//portfolio ajax setting
						$(document).ready(function () {
							$('.port-ajax').click(function () {
								
								var toLoad = $(this).attr('data-link') + ' .worksajax > *';
								$('.worksajax').slideUp('slow', loadContent);
					
								function loadContent() {
									$('.worksajax').load(toLoad, '', showNewContent)
								}
					
								function showNewContent() {
									$.getScript("<?php echo get_template_directory_uri(); ?>/js/portfolio.js");
									$('.worksajax').slideDown('slow');
								}
								return false;
							});
					
						});
						//portfolio scrolling
						$(function () {
							$('.port-ajax').bind('click', function (event) {
								var $anchor = $('#work-ajax');
					
								$('html, body').stop().animate({
									scrollTop: $($anchor).offset().top - 93
								}, 1000, 'linear');
								event.preventDefault();
							});
						});
					
						//isotope setting(portfolio)
						var $container = $('.portfolio-body');
						$container.imagesLoaded(function () {
							$container.isotope();
						});
					
						// filter items when filter link is clicked
						$('.port-filter a').click(function () {
							var selector = $(this).attr('data-filter');
							$container.isotope({
								itemSelector: '.port-item',
								filter: selector
							});
							return false;
						});
						//adding active state to portfolio filtr
						$(".port-filter a").click(function (e) {
							$(".port-filter a").removeClass("active");
							$(this).addClass("active");
						});
	
					})(jQuery);
		</script>
<?php }
}