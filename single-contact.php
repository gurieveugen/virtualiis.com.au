<?php 
/*
*single contact page
*/

get_header(); ?>
		<!--HEADER START-->
        <?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HEADER END-->
		
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
            	<div class="col-md-8 align-center col-md-offset-2">
					<?php the_content(); ?>	
                    <div class="spacing40"></div>
                </div><!--/.col-md-8-->
            </div><!--/.container-->
        </div><!--/.contact-form-->
 <?php  get_footer(); ?> 