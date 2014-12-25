<?php 
/*
*single services page
*/

get_header(); ?>
		<!--HEADER START-->
        <?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HEADER END-->
		
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
                	
					<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    	<i class="head-icon fa <?php echo get_post_meta($post->ID, 'sv_icon', true) ?>"></i>
                    	<h3 class="small-title"><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <div class="spacing40"></div>
                    </div><!--/.col-md-4-->
                	
                    
                   
                    
                </div><!--/.row-->

            </div><!--/.container-->
        </div><!--/services-detail-->

 <?php  get_footer(); ?> 