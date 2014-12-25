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
					  
					  <div class="slide img-bg" data-background="<?php echo $slide['slider_image'] ?>">
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
        