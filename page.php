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
                        <?php  the_post_thumbnail(); ?>
                         
                         
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

                </div><!--/.col-md-8-->
                

             </div><!--/.row-->
        </div><!--/.container-->
	</div><!--/.blog-wrapper-->

    <?php  get_footer(); ?> 