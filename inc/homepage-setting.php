<?php 
function beuh_homepage_script() {

	if ( is_page_template( 'homepage-video.php' ) 
	|| is_page_template( 'homepage-custom-layout.php' ) && function_exists( 'ot_get_option' ) && ot_get_option( 'home_setting') == 'video_bg_home' ){
		wp_enqueue_script( 'video', get_template_directory_uri() . '/js/video.js',array(),'', 'in_footer');
		wp_enqueue_script( 'bigvideo', get_template_directory_uri() . '/js/bigvideo.js',array(),'', 'in_footer');
	} 
	if ( is_page_template( 'homepage-youtube.php' )|| 
	is_page_template( 'homepage-custom-layout.php' ) && function_exists( 'ot_get_option' ) && ot_get_option( 'home_setting') == 'youtube_bg_home' ){
		wp_enqueue_script( 'ytPlayer', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.js',array(),'', 'in_footer');
	}
}

function beuh_home_bg () {
	if ( is_page_template( 'homepage-video.php' ) 
	|| is_page_template( 'homepage-custom-layout.php' ) && function_exists( 'ot_get_option' ) && ot_get_option( 'home_setting') == 'video_bg_home' ){?>
		<script type="text/javascript">
			(function ($) {
			"use strict";
				//video background setting  
				var BV = new $.BigVideo({
					container: $('#home')
				});
				BV.init();
				if (Modernizr.touch) {
					BV.show('<?php if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'video_img' )) { echo ot_get_option( 'video_img' ); } ?>');
				} else {
					BV.show('<?php if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'video_link' )) { echo ot_get_option( 'video_link' ); } ?>', {
						doLoop:true, <?php if  (  ot_get_option( 'video_mute' ) != 'off') {  ?> ambient: true <?php } ?>
					});
				
				}
			})(jQuery);
		</script>
		<?php
	}
	if ( is_page_template( 'homepage-youtube.php' ) || 
	is_page_template( 'homepage-custom-layout.php' ) && function_exists( 'ot_get_option' ) && ot_get_option( 'home_setting') == 'youtube_bg_home' ){
		?>
		<script type="text/javascript">
			(function ($) {
			"use strict";
				//load youtube document loaded		
				if (Modernizr.touch) {
					$('.videobackground').hide();
				} else {
					$('.yt-bg').hide();
					$(".bg-youtube").mb_YTPlayer();
				}
			})(jQuery);
		</script>
		<?php
	}
}