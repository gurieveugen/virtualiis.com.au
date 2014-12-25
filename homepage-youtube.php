<?php
/*
* Template Name: Homepage Youtube
* Description: Homepage style with youtube video background
*/

	get_header(); ?>
	
		<!--HEADER START-->
        <?php get_template_part( 'loop/homepage', 'menu' ); ?>
        <!--HEADER END-->
		
        <!--HOME START-->
        <?php get_template_part( 'loop/homeoverlay', 'slider' ); ?>
        <!--HOME END-->
        
        <!--ABOUT START-->
        <?php get_template_part( 'loop/about', 'loop' ); ?>
        <!--ABOUT END-->
        
        <!--PARALLAX ONE START-->
        <?php get_template_part( 'loop/parallax', 'one' ); ?>
        <!--PARALLAX ONE END-->

        <!--WORKS START-->
        <?php get_template_part( 'loop/works', 'loop' ); ?>
        <!--WORKS END-->
		
		<!--PARALLAX TWO START-->
        <?php get_template_part( 'loop/parallax', 'two' ); ?>
        <!--PARALLAX TWO END-->
		
		<!--SERVICES START-->
        <?php get_template_part( 'loop/services', 'loop' ); ?>
        <!--SERVICES END-->

		<!--PARALLAX THREE START-->
        <?php get_template_part( 'loop/parallax', 'three' ); ?>
        <!--PARALLAX THREE END-->
        
        <!--CONTACT START-->
        <?php get_template_part( 'loop/contact', 'loop' ); ?>
        <!--CONTACT END-->
		
		<!--GOOGLEMAP START-->
        <?php get_template_part( 'loop/google', 'map' ); ?>
        <!--GOOGLEMAP END-->

	
<?php get_footer();  ?>