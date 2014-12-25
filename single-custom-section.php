<?php 
/*
*single custom section page
*/

get_header(); ?>
		<!--HEADER START-->
        <?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HEADER END-->
		
    	<?php 
		
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
		<?php 		  }


 get_footer(); ?> 