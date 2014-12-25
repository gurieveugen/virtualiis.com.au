<?php 
/*
*single team page
*/

get_header(); ?>
		<!--HEADER START-->
        <?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HEADER END-->
		
		<div id="team" class="clearfix">
        	<div class="container">
                <div class="row">
                	<div class="team-slider" data-auto-play="<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'slider_team_delay' ) ) { echo  ot_get_option( 'slider_team_delay' );} 
            else {echo '6000';}?>">
					
                        <div class="team-inner clearfix">
                            <div class="col-md-5">
                                <div class="team-spacing"></div>
                                <h3 class="small-title"><?php the_title(); ?></h3>
                                <p class="team-post"><?php echo get_post_meta($post->ID, 'tp_post', true); ?></p>
                                <?php the_content(); ?>
                                <div class="spacing40"></div>
                                <ul class="team-social">
									<?php if ( get_post_meta($post->ID, 'fb_si', true) != "") { ?>
									<li>
										<a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'fb_si', true)); ?>">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<?php } ?>
									<?php if ( get_post_meta($post->ID, 'twit_si', true) != "") { ?>
									<li>
										<a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'twit_si', true)); ?>">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<?php } ?>
									<?php if ( get_post_meta($post->ID, 'pinterest_si', true) != "") { ?>
									<li>
										<a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'pinterest_si', true)); ?>">
											<i class="fa fa-pinterest"></i>
										</a>
									</li>
									<?php } ?>
									<?php if ( get_post_meta($post->ID, 'gp_si', true) != "") { ?>
									<li>
										<a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'gp_si', true)); ?>">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
									<?php } ?>
									<?php if ( get_post_meta($post->ID, 'instagram_si', true) != "") { ?>
									<li>
										<a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'instagram_si', true)); ?>">
											<i class="fa fa-instagram"></i>
										</a>
									</li>
									<?php } ?>
									<?php if ( get_post_meta($post->ID, 'xing_si', true) != "") { ?>
									<li>
										<a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'xing_si', true)); ?>">
											<i class="fa fa-xing"></i>
										</a>
									</li>
									<?php } ?>
									<!--ANOTHER SOCIAL ICON LIST-->
									<?php
										 /* get the icon list */
										 $socials =  get_post_meta($post->ID, 'another_si',  true);
										 
										 if ( ! empty( $socials ) ) {
											 foreach( $socials as $social ) {
												 echo '
												 <li><a href="' . $social['si_icon_link'] . '"><i class="fa ' . $social['si_icon'] . '"></i></a></li>
												';
											 }
										 }				
									?>
									<!--ANOTHER SOCIAL ICON LIST END-->
								
									<?php if ( get_post_meta($post->ID, 'email_si', true) != "") { ?>
									<li>
										<a href="mailto:<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'email_si', true)); ?>">
											<i class="fa fa-envelope-o"></i>
										</a>
									</li>
									<?php } ?>
                                </ul>
                                <div class="spacing40 clearboth"></div>
                            </div><!--/.col-md-4-->
                            
                            <div class="col-md-7">
                                <?php the_post_thumbnail(); ?>
                            </div><!--/.col-md-7-->
                        </div><!--/.team-inner-->
                    
                    </div><!--/.team-slider-->
					
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/team-->
    	

 <?php  get_footer(); ?> 