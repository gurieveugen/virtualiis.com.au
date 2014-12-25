<?php
/*
* Works Loop 
*/
?>	
        <div id="works" class="content black-bg">
        	<div class="container">
                <div class="row">
                    <div class="col-md-8 align-center col-md-offset-2">
						<h2 class="head-title"><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'works_big_title' ) ) { echo ot_get_option( 'works_big_title' );} else {
							_e('The Works','beuh'); } ?></h2>
						<p class="sub-title"><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'works_subtitle' ) ) { echo ot_get_option( 'works_subtitle' );} else {
							_e('Our Portfolio','beuh'); } ?></p>
						<div class="liner"></div>
						<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'works_detail' ) ) { echo ot_get_option( 'works_detail' );} ?>
						<div class="spacing40"></div>
                    </div><!--/.col-md-8-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/works-->
        
		<!--AJAX CONTENT HERE-->
        <div id="work-ajax"  class="clearfix">
        	<div class="worksajax clearfix"></div>
        </div>
		
        <div id="works-detail" class="content grey-bg">
        	<div class="container">
            	<ul class="port-filter">
                	<li><a class="active" href="#" data-filter="*"><?php _e('All', 'beuh'); ?></a></li>
                    <?php
						$taxonomy = 'portfolio_category';
						$terms = get_terms($taxonomy); // Get all terms of a taxonomy
						if ( $terms && !is_wp_error( $terms ) ) :
							foreach ( $terms as $term ) { ?>
                                	<li><a data-filter=".<?php echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $term->name)); ?>" href="#">
									<?php echo $term->name; ?></a></li>
								<?php } 
					endif;?>
                </ul>
                <div class="row">
                    <div class="spacing40"></div>
                    <div class="portfolio-body clearfix">
                    	<!--PORTFOLIO LOOP START-->
						<?php  
						$ports = new WP_Query(array(  
								'post_type' =>  'portfolio',  
								'posts_per_page'  =>'-1'  
							)  
						);  
						
						if ($ports->have_posts()) : while  ($ports->have_posts()) : $ports->the_post();
						?>
						<?php $terms = get_the_terms( get_the_ID(), 'portfolio_category' ); ?> 
						<div class="col-md-4 col-sm-6 port-item <?php foreach ($terms as $term) { echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $term->name)). ' '; } ?>
							<?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . " "; } ?>" id="post-<?php the_ID(); ?>">
							<a class="port-ajax" href="#" data-link="<?php the_permalink(); ?>">
                            	<div class="port-hov">
                                	<div class="port-content">
                                        <p class="port-client"><?php echo get_post_meta($post->ID, 'port_client', true); ?></p>
                                        <h3><?php the_title(); ?></h3>
                                    </div><!--/.port-content-->
                                </div><!--/.port-hov-->
                            	<?php the_post_thumbnail(); ?>
                            </a><!--/.port-ajax-->
                            <div class="spacing30"></div>
						</div><!--/.col-md-4-->
						<?php endwhile; endif; wp_reset_postdata(); ?>
                        <!--PORTFOLIO LOOP END-->
						
                    </div><!--/.portfolio-body-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.works-detail-->