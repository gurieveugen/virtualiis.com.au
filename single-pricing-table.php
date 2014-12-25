<?php 
/*
*single pricing table page
*/

get_header(); ?>
		<!--HEADER START-->
        <?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HEADER END-->
		
		<div id="pricing-table" class="content grey-bg">
        	<div class="container">
            	<div class="col-md-8 align-center col-md-offset-2">
					<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'pt_subtitle' ) ) { echo '<h3 class="small-title">'. ot_get_option( 'pt_subtitle' ).'</h3>';} ?>
                    
                    <?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'pt_detail' ) ) { echo ot_get_option( 'pt_detail' );} ?>
                    <div class="spacing40"></div>
                </div><!--/.col-md-8-->
                
				<div class="col-md-4 col-md-offset-4">
                    	<div class="p-table clearfix">
                        	<h3><?php the_title(); ?><span>.</span></h3>
                            <p class="p-price"><?php echo get_post_meta($post->ID, 'pt_price', true); ?></p>
                            <i class="fa <?php echo get_post_meta($post->ID, 'pt_icon', true); ?>"></i>
                            <?php the_content(); ?>
                            <a href="<?php echo get_post_meta($post->ID, 'pt_btn_link', true); ?>"><?php echo get_post_meta($post->ID, 'pt_btn_text', true); ?></a>
                        </div><!--/.pricing-table-->
						<div class="spacing40"></div>
                </div>
				
                
            </div>
        </div><!--/.pricing-table-->

 <?php  get_footer(); ?> 