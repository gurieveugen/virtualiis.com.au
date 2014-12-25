<?php get_header(); ?>
		<!--HEADER START-->
        <?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HEADER END-->

    <div class="content blog-wrapper">  
        <div class="container clearfix">
             <div class="row clearfix">
                <div class="col-md-8 blog-content">
                	<!--BLOG POST START-->
                	<article id="post-<?php  the_ID(); ?>" <?php  post_class('clearfix blog-post'); ?>>
                        <!--if post is standard-->
                         <?php  if ( get_post_meta($post->ID, 'post_format', true) == ''){ the_post_thumbnail(); }?>
						 <?php  if ( get_post_meta($post->ID, 'post_format', true) == 'post_standard'){ ?>
							 <?php  if ( get_post_meta($post->ID, 'post_image_setting', true)!= ''){ ?>
                             <img alt="" src="<?php echo get_post_meta($post->ID, 'post_image_setting', true) ?>">
                             <!--show featured image if no big image-->
                             <?php } else {  the_post_thumbnail(); }?>
                         	<!--if post is gallery-->
							<?php } else if ( get_post_meta($post->ID, 'post_format', true) == 'post_gallery'){ 
                            echo '<div class="portfolio-gallery clearboth clearfix">';
                                $image_ids = get_post_meta(get_the_ID(), 'post_gallery_setting', true);
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
                            
                            //if post is slider
                            }else if ( get_post_meta($post->ID, 'post_format', true) == 'post_slider'){
                                echo'<div class="blog-slider owl-carousel owl-theme" data-auto-play="6000">';
                                $simage_ids = get_post_meta(get_the_ID(), 'post_slider_setting', true);
                                $simage_ids = explode( ',', $simage_ids );
                                foreach( $simage_ids as $simage_id ) {
                                    $simage_port = wp_get_attachment_image( $simage_id, 'full' );
                                    echo '<div class="slide">' . $simage_port . '</div>';
                                }
                                echo'</div>'; 
                                
                            //if post video	
                            } else if ( get_post_meta($post->ID, 'post_format', true) == 'post_video'){ 
                            echo'<div class="video"><iframe width="570" height="300" 
                            src="'.get_post_meta($post->ID, 'post_video_setting', true).'?wmode=opaque;rel=0;showinfo=0;controls=0;iv_load_policy=3"></iframe></div>';
                            
                            //if post audio
                            } else if ( get_post_meta($post->ID, 'post_format', true) == 'post_audio'){ 
                            echo'<div class="audio">'.get_post_meta($post->ID, 'post_audio_setting', true).'</div>';
                            }?>
                         
                         <div class="post-detail">
                         	<div class="post-cat">
                            	<p><i><?php _e('Category:','beuh') ?></i> <?php the_category(', '); ?></p>
                            </div><!--/.post-cat-->
                            <div class="post-tags">
                            	<p><i><?php _e('Tags:','beuh') ?></i>  <?php the_tags('', ', '); ?></p>
                            </div><!--/.post-tags-->
                         </div><!--/.post-detail-->
                         
                         <div class="spacing40 clearfix"></div>
                         <div class="blog-box clearfix single-blog">
                             <p class="post-date"><?php echo the_time('M '); ?> <span><?php echo the_time('j '); ?></span></p>
                             <h2 class="blog-title"><?php the_title(); ?></h2>
                         </div><!--/blog-box-->
                         
                         <?php the_content(); ?>
                         <div class="spacing40 clearfix"></div>
                         <div class="post-pager clearfix">
						 	<?php wp_link_pages(); ?>
                         </div>
                         
                    </article><!--/.blog-post-->
                    
                    <!--BLOG POST END-->
                    <?php if ( comments_open() ) { ?>
                       <div id="comments" class="comments clearfix"><?php comments_template(); ?></div>
                    <?php } ?>
                    <ul class="pagination clearfix">
                        <li><?php previous_post_link('%link','&laquo; Previous Post', '0'); ?></li>
                        <li><?php next_post_link('%link','Next Post &raquo;', '0'); ?> </li>
                    </ul>
                    <div class="spacing40 clearfix"></div>
                </div><!--/.col-md-8-->
                <!--show sidebar if its in on state-->
                <?php get_sidebar(); ?>
                
             </div><!--/.row-->
        </div><!--/.container-->
	</div><!--/.blog-wrapper-->

    <?php  get_footer(); ?> 