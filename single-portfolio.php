<?php 
/*
*single portfolio page
*/

get_header(); ?>
		<!--HEADER START-->
        <?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HEADER END-->
		
    	<div class="worksajax clearfix">
     		<div class="content align-center clearfix">
                <div class="container work-content">
                    <!--if portfolio is standard-->
                    <?php  if ( get_post_meta($post->ID, 'port_format', true) == 'port_standard'){ ?>
					<?php  if ( get_post_meta($post->ID, 'port_image_setting', true)!= ''){ ?>
                    <img alt="" src="<?php echo get_post_meta($post->ID, 'port_image_setting', true) ?>">
                    <!--show featured image if no big image-->
					<?php } else { the_post_thumbnail(); }?>
                    
                     <!--if portfolio is gallery-->
                    <?php } else if ( get_post_meta($post->ID, 'port_format', true) == 'port_gallery'){ 
					echo '<div class="portfolio-gallery clearboth clearfix">';
						$image_ids = get_post_meta(get_the_ID(), 'port_gallery_setting', true);
						$image_ids = explode( ',', $image_ids );
						foreach( $image_ids as $image_id ) {
							$image_title  = get_the_title( $image_id );
							$image_port = wp_get_attachment_image( $image_id, 'full' );
							$imageurl     = wp_get_attachment_url( $image_id ); 
							echo '<div>
									<a data-rel="prettyPhoto[gallery]" href="' . $imageurl . '">
										<span>
										<i class="fa fa-search"></i>
										</span>
										' . $image_port . '
									</a>
								</div>';
					} echo'</div>';
					
					//if portfolio is slider
					}else if ( get_post_meta($post->ID, 'port_format', true) == 'port_slider'){
						echo'<div class="slider owl-carousel owl-theme">';
						$simage_ids = get_post_meta(get_the_ID(), 'port_slider_setting', true);
						$simage_ids = explode( ',', $simage_ids );
						foreach( $simage_ids as $simage_id ) {
							$simage_port = wp_get_attachment_image( $simage_id, 'full' );
							echo '<div class="slide">' . $simage_port . '</div>';
						}
						echo'</div>'; 
						
					//if portfolio video	
					} else if ( get_post_meta($post->ID, 'port_format', true) == 'port_video'){ 
					echo'<div class="video"><iframe width="570" height="300" 
					src="'.get_post_meta($post->ID, 'port_video_setting', true).'?wmode=opaque;rel=0;showinfo=0;controls=0;iv_load_policy=3"></iframe></div>';
					
					//if portfolio audio
					} else if ( get_post_meta($post->ID, 'port_format', true) == 'port_audio'){ 
					echo'<div class="audio">'.get_post_meta($post->ID, 'port_audio_setting', true).'</div>';
					}?>
                    <div class="spacing40"></div>
                    <h3 class="port-title"><?php the_title(); ?></h3>
					<p  class="pd-client"><strong><?php _e('Client:', 'gedebvge'); ?></strong> <i><?php echo get_post_meta($post->ID, 'port_client', true); ?></i></p>
                    <?php $taxonomy = 'portfolio_category'; $terms = wp_get_post_terms($post->ID,$taxonomy);  ?> 
                    <p class="pd-category"><strong><?php _e('Category:', 'gedebvge'); ?></strong>  
					<i><?php $cats = array();  foreach ( $terms as $term ) { $cats[] =   $term->name ;   } echo implode(', ', $cats);?></i></p>
                    
                    <?php the_content(); ?>
                    <div class="spacing40"></div>
                    <?php if ( get_post_meta($post->ID, 'port_item_btn_text', true) !='' && get_post_meta($post->ID, 'port_item_btn_link', true) != ''){?>
                    <a class="go-btn" href="<?php echo  get_post_meta($post->ID, 'port_item_btn_link', true); ?>">
                    	<?php echo  get_post_meta($post->ID, 'port_item_btn_text', true); ?>
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                    <div class="spacing40"></div>
                    <?php } ?>
                    <a class="close"><i class="fa fa-times"></i></a>
                </div><!--/.container-->
                <div class="spacing40"></div>
                
        	</div>
        </div><!--/.worksajax-->

 <?php  get_footer(); ?> 