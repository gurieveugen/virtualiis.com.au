<?php
/*
* Parallax Two 
*/
?>			
		<div class="bg bg2 clearfix">
			<div class="bg-mask"></div>
			<div class="para-img"></div>
			<div class="big-ticker clearfix">
				<?php
          
				  /* get the slider array */
				  $tickers = ot_get_option( 'testimonial_list', array() );
				  
				  if ( ! empty( $tickers ) ) {
					foreach( $tickers as $ticker ) { ?>
					  <div class="container big-text">
							<p><?php echo $ticker['title'] ?></p>
							<h3><?php echo $ticker['testi_text'] ?></h3>
							<div class="liner"></div>
							<div class="clearboth"></div><i class="fa <?php echo $ticker['testi_icon'] ?>"></i>
					  </div><!--/.big-text-->
					<?php }
				 } ?>
				
			</div><!--/.big-ticker-->
		</div><!--/.big-background-->