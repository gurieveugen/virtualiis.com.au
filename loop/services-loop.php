<?php
/*
* Services Loop
*/
?>        
        <div id="services" class="content black-bg">
        	<div class="container">
                <div class="row">
                    <div class="col-md-8 align-center col-md-offset-2">
						<h2 class="head-title"><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'services_big_title' ) ) { echo ot_get_option( 'services_big_title' );} else {
							_e('The Offer','beuh'); } ?></h2>
						<p class="sub-title"><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'services_subtitle' ) ) { echo ot_get_option( 'services_subtitle' );} else {
							_e('Our Services','beuh'); } ?></p>
						<div class="liner"></div>
						<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'services_detail' ) ) { echo ot_get_option( 'services_detail' );} ?>
						<div class="spacing40"></div>
                    </div><!--/.col-md-8-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/services-->
		
        <div id="services-detail" class="content align-center">
        	<div class="container">
            	<div class="row">
                	<?php  
					$services = new WP_Query(array(  
							'post_type' =>  'services',  
							'posts_per_page'  =>'-1'  
						)  
					);  
					
					if ($services->have_posts()) : while  ($services->have_posts()) : $services->the_post();
					?>
					<div class="col-md-4 col-sm-6">
                    	<i class="head-icon fa <?php echo get_post_meta($post->ID, 'sv_icon', true) ?>"></i>
                    	<h3 class="small-title"><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <div class="spacing40"></div>
                    </div><!--/.col-md-4-->
					<?php endwhile; endif; wp_reset_postdata();?>
                	
                    
                   
                    
                </div><!--/.row-->

            </div><!--/.container-->
        </div><!--/services-detail-->
		
        <div id="pricing-table" class="content grey-bg">
        	<div class="container">
            	<div class="col-md-8 align-center col-md-offset-2">
					<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'pt_subtitle' ) ) { echo '<h3 class="small-title">'. ot_get_option( 'pt_subtitle' ).'</h3>';} ?>
                    
                    <?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'pt_detail' ) ) { echo ot_get_option( 'pt_detail' );} ?>
                    <div class="spacing40"></div>
                </div><!--/.col-md-8-->
                
				<?php  
					$ptables = new WP_Query(array(  
							'post_type' =>  'pricing-table',  
							'posts_per_page'  =>'-1'  
						)  
					);  
					
					if ($ptables->have_posts()) : while  ($ptables->have_posts()) : $ptables->the_post();
					if ( function_exists( 'ot_get_option' ) && ot_get_option( 'pt_col' )  == 'col_4') { echo '<div class="col-sm-6 col-md-3">'; } 
						else {echo '<div class="col-md-4">'; } ?>
                    	<div class="p-table clearfix">
                        	<h3><?php the_title(); ?><span>.</span></h3>
                            <p class="p-price"><?php echo get_post_meta($post->ID, 'pt_price', true); ?></p>
                            <i class="fa <?php echo get_post_meta($post->ID, 'pt_icon', true); ?>"></i>
                            <?php the_content(); ?>
                            <a href="<?php echo get_post_meta($post->ID, 'pt_btn_link', true); ?>"><?php echo get_post_meta($post->ID, 'pt_btn_text', true); ?></a>
                        </div><!--/.pricing-table-->
						<div class="spacing40"></div>
                <?php echo '</div>'; endwhile; endif; wp_reset_postdata();?>
				
                
            </div>
        </div><!--/.pricing-table-->