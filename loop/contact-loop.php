<?php
/*
* Contact Loop
*/
?> 
        <div id="contact" class="content black-bg">
        	<div class="container">
                <div class="row">
                    <div class="col-md-8 align-center col-md-offset-2">
						<h2 class="head-title"><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'contact_big_title' ) ) { echo ot_get_option( 'contact_big_title' );} else {
							_e('The Contact','beuh'); } ?></h2>
						<p class="sub-title"><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'contact_subtitle' ) ) { echo ot_get_option( 'contact_subtitle' );} else {
							_e('Let\'s Talk','beuh'); } ?></p>
						<div class="liner"></div>
						<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'contact_detail' ) ) { echo ot_get_option( 'contact_detail' );} ?>
						<div class="spacing40"></div>
                    </div><!--/.col-md-8-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/contact-->
		
        <div id="contact-form" class="content">
        	<div class="container">
				<?php  
					$contacts = new WP_Query(array(  
							'post_type' =>  'contact',  
							'posts_per_page'  =>'1'  
						)  
					);  
					
					if ($contacts->have_posts()) : while  ($contacts->have_posts()) : $contacts->the_post();
			 	?>
            	<div class="col-md-8 align-center col-md-offset-2">
					<?php the_content(); ?>	
                    <div class="spacing40"></div>
                </div><!--/.col-md-8-->
				<?php endwhile; endif; wp_reset_postdata();?>
            </div><!--/.container-->
        </div><!--/.contact-form-->