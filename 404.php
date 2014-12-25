<?php
/*
* Search Page
*/

	get_header(); 
	//HEADER/MENU SECTION START
    get_template_part( 'loop/other', 'menu' );
    //HEADER/MENU SECTION END 
	?>
	<div class="content blog">  
        <div class="container clearfix">
             <div class="row clearfix">
                <div class="col-md-8 blog-content align-center">
                    <h2 class="error-title"><?php _e('404', 'beuh'); ?></h2>
                    <h3 class="title-strong"><?php _e('I\'m sorry, page not found!','beuh') ?></h3>
                	<h3 class="title-strong"><a href="<?php echo home_url(); ?>"><?php _e('Go Back Now!','beuh') ?></a>
                </div><!--/.col-md-8-->
                
                <?php get_sidebar(); ?>
             </div><!--/.row-->
        </div><!--/.container-->
	</div><!--/.content-->
    
    

    
<?php get_footer(); ?> 