<?php
/*
* About Loop 
*/
?>		
		<div id="about" class="content black-bg">
        	<div class="container">
                <div class="row">
                    <div class="col-md-8 align-center col-md-offset-2">
						<h2 class="head-title"><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'about_big_title' ) ) { echo ot_get_option( 'about_big_title' );} else {
							_e('The Story','beuh'); } ?></h2>
						<p class="sub-title"><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'about_subtitle' ) ) { echo ot_get_option( 'about_subtitle' );} else {
							_e('About Us','beuh'); } ?></p>
						<div class="liner"></div>
						<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'about_detail' ) ) { echo ot_get_option( 'about_detail' );} ?>
						<div class="spacing40"></div>
                    </div><!--/.col-md-8-->
						
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/about-->
		
        <div id="team" class="clearfix">
        	<div class="container">
                <div class="row">
                	<div class="team-slider" data-auto-play="<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'slider_team_delay' ) ) { echo  ot_get_option( 'slider_team_delay' );} 
            else {echo '6000';}?>">
					<?php  
					$teams = new WP_Query(array(  
							'post_type' =>  'team-post',  
							'posts_per_page'  =>'-1'  
						)  
					);  
					if ($teams->have_posts()) : while  ($teams->have_posts()) : $teams->the_post();
			 		?>
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
                    
					<?php endwhile; endif; wp_reset_query();?>
                    </div><!--/.team-slider-->
					
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/team-->
		
        <div id="client" class="content align-center grey-bg">
        	<div class="container">
            	<div class="row">
				   <!--client list start-->
                   <?php  /* get the clients array */
				   	  if ( function_exists( 'ot_get_option' )&& ot_get_option( 'client_list' ) ) { 
						  $clients = ot_get_option( 'client_list', array() );
						  
						  if ( ! empty( $clients ) ) {
							foreach( $clients as $client ) { 
								if ( function_exists( 'ot_get_option' )&& ot_get_option( 'client_list_column' ) == 'col_3' ) { 
								echo '<div class="col-md-4 col-sm-6">';
								} else if ( function_exists( 'ot_get_option' )&& ot_get_option( 'client_list_column' ) == 'col_2' ){
								echo '<div class="col-md-6 col-sm-6">';
								}else{
								echo '<div class="col-md-3 col-sm-6">';
								}?>  
							
								<img alt="client" src="<?php echo $client['client_image'] ?>">
								<div class="spacing40"></div>
							</div>
							<?php }
						  }
					} ?>
                    <!--client list end-->
                    
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/client-->