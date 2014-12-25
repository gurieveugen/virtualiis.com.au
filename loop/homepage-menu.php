<?php
/*
* Homepage menu 
*/
?>

		
        <div class="header">
            <div class="for-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-xs-6 logo">
                        	<a href="<?php  echo home_url(); ?>">
								<img alt="logo" src="<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'logo_img' ) ) { echo ot_get_option( 'logo_img' ); } 
								else { echo get_template_directory_uri(); ?>/images/logo.png <?php } ?>">
							</a>
                        </div><!--/.logo-->
                        <div class="col-md-10 menu-box hidden-xs hidden-sm">
                            <?php wp_nav_menu( array( 'items_wrap' => '<ul id="%1$s" class="navigation desktop-menu %2$s">%3$s</ul>', 'theme_location' => 'homepage-menu' ) ); ?>
                        </div><!--/.menu-box-->
                        <div class="box-mobile hidden-lg hidden-md">
                            <div class="menu-btn" data-toggle="collapse" data-target=".nav-collapse">
                            	<span class="fa fa-bars"></span>
                            </div>
                            <ul class="nav-collapse mobile-menu hidden-lg hidden-md"></ul>
                        </div><!--/.box-mobile-->
                    </div><!--/.row-->
                </div><!--/.container-->
            </div><!--/.for-sticky-->
        </div><!--/.header-->
        