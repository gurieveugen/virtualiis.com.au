<?php
/*
* Template Name: Homepage Custom Layout
* Description: Homepage style with custom layout
*/

	get_header(); 
   	get_template_part( 'loop/homepage', 'menu' );
	
	 if ( function_exists( 'ot_get_option' ) ) {
		if (ot_get_option( 'home_setting') == 'slider_bg_home' ){
			get_template_part( 'loop/homepage', 'slider' );
		} else
		if (ot_get_option( 'home_setting') == 'video_bg_home' || ot_get_option( 'home_setting') == 'youtube_bg_home' ){
			get_template_part( 'loop/homeoverlay', 'slider' );
		} 
	}
    	//BUILDER START
	if ( function_exists( 'ot_get_option' ) ) {
      
      /* get the slider array */
      $sections = ot_get_option( 'custom_layout', array() );
      
      if ( ! empty( $sections ) ) {
        foreach( $sections as $section ) {
            if ( $section['section_type'] == 'about_content' ) {
               get_template_part( 'loop/about', 'loop' ); 
            } else
			if ( $section['section_type'] == 'team_content' ) {
               get_template_part( 'loop/team', 'loop' ); 
            } else
			if ( $section['section_type'] == 'services_content' ) {
               get_template_part( 'loop/services', 'loop' ); 
            } else
			if ( $section['section_type'] == 'portfolio_content' ) {
               get_template_part( 'loop/works', 'loop' ); 
            } else
			if ( $section['section_type'] == 'para1_content' ) {
               get_template_part( 'loop/parallax', 'one' ); 
            } else
			if ( $section['section_type'] == 'para2_content' ) {
               get_template_part( 'loop/parallax', 'two' ); 
            } else
			if ( $section['section_type'] == 'para3_content' ) {
               get_template_part( 'loop/parallax', 'three' ); 
            } else
			if ( $section['section_type'] == 'gmap_content' ) {
               get_template_part( 'loop/google', 'map' ); 
            } else
			if ( $section['section_type'] == 'contact_content' ) {
               get_template_part( 'loop/contact', 'loop' ); 
            } else
			if ( $section['section_type'] == 'custom_content' ) {
               		$customsec = new WP_Query(array(  
							'post_type' =>  'custom-section',  
							'posts_per_page'  =>'1' ,
							'p' => $section['custom_section']
						)  
					);  
					
					if ($customsec->have_posts()) : while  ($customsec->have_posts()) : $customsec->the_post(); 
						if (get_post_meta($post->ID, 'cs_format', true) == 'cs_black') {?>
						<div id="<?php echo strtolower(preg_replace('/\s+/', '-',$section['title'])); ?>" class="content black-bg">
							<div class="container">
								<div class="row">
									<div class="col-md-8 align-center col-md-offset-2">
										<h2 class="head-title"><?php the_title(); ?></h2>
										<p class="sub-title"><?php echo get_post_meta($post->ID, 'cs_subtitle', true); ?></p>
										<div class="liner"></div>
										<?php the_content(); ?>
										<div class="spacing40"></div>
									</div><!--/.col-md-8-->
								</div><!--/.row-->
							</div><!--/.container-->
						</div><!--/.black-bg-->
						
						<?php } else if (get_post_meta($post->ID, 'cs_format', true) == 'cs_white') { ?>
						<div id="<?php echo strtolower(preg_replace('/\s+/', '-',$section['title'])); ?>" class="content align-center">
							<div class="container">
								<?php the_content(); ?>
							</div><!--/.container-->
						</div><!--/.content-->
						
						<?php } else if (get_post_meta($post->ID, 'cs_format', true) == 'cs_gray') { ?>
						<div id="<?php echo strtolower(preg_replace('/\s+/', '-',$section['title'])); ?>" class="content grey-bg align-center">
							<div class="container">
								<?php the_content(); ?>
							</div><!--/.container-->
						</div><!--/.content-->
						
						<?php } else if (get_post_meta($post->ID, 'cs_format', true) == 'cs_para') { ?>
						<div class="bg <?php echo strtolower(preg_replace('/\s+/', '-',$section['title'])); ?> clearfix">
							<div class="bg-mask"></div>
							<div class="para-img img-bg" data-background="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>"></div>
							<div class="container big-text">
								<p><?php the_title(); ?></p>
								<h3><?php echo get_the_content(); ?></h3>
								<div class="liner"></div>
								<div class="clearboth"></div><i class="fa <?php echo get_post_meta($post->ID, 'cs_p_icon', true); ?>"></i>
							</div><!--/.big-text-->
						</div><!--/.bg-->
						<?php }
					endwhile; endif; wp_reset_postdata(); 	
			} 
        }
      }
      
    }
    //BUILDER END
  
  	get_footer(); ?> 