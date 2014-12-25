<?php
/*
* Homepage Slider 
*/
?>

		
		<div id="home"> 
			<div class="slider home-slider clearfix" data-auto-play="<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'slider_delay' ) ) { echo  ot_get_option( 'slider_delay' );} 
            else {echo '6000';}?>">
                <?php
          
				  /* get the slider array */
				  $slides = ot_get_option( 'slider_list', array() );
				  
				  if ( ! empty( $slides ) ) {
					foreach( $slides as $slide ) { ?>
					  
					  <div class="slide">
							<div class="slider-mask"></div>
							<div class="caption-box">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<div class="liner"></div>
											<h3><?php echo $slide['title'] ?></h3>
											<p><?php echo $slide['top_text'] ?></p>
											<div class="liner"></div>
										</div><!--/.col-md-8-->
									</div><!--/.row-->
									
								</div>
							</div>
					  </div>
					<?php }
				  } ?>
                
            </div><!--/.slider-->  
        </div><!--/home-->
        
		<?php if ( is_page_template( 'homepage-youtube.php' ) || is_page_template( 'homepage-custom-layout.php' )&&  function_exists( 'ot_get_option' ) && ot_get_option( 'home_setting') == 'youtube_bg_home') { ?>
        <div class="yt-bg img-bg" data-background='<?php  echo ot_get_option( 'yt_img' ) ?>'></div> 
		<!--YOUTUBE BACKGROUND-->
		<div class="bg-youtube" data-property="{
													videoURL:'http://www.youtube.com/watch?v=<?php echo ot_get_option( 'yt_id' ); ?>', 
													opacity:1, 
													autoPlay:true, 
													containment:'#home', 
													<?php if  (  ot_get_option( 'yt_mute' ) == 'on') { echo ' mute:true, '; } ?> 
													optimizeDisplay:true, 
													showControls:false, 
													loop:true, 
													addRaster:false, 
													quality:'large', 
													realfullscreen:'true', 
													ratio:'auto'
												}">
		</div>
		<!--YOUTUBE BACKGROUND END-->
        <?php } ?>