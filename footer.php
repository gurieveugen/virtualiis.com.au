        <div class="transparent clearfix"><!--to create margin bottom on contact section--></div>
        <footer id="footer" class="content black-bg">
        	<div class="container align-center">
            	<ul class="footer-icon">
                    		<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'fb_foot')) :  ?>
                            	<li><a href="<?php  echo ot_get_option( 'fb_foot' ); ?>"><i class="fa fa-facebook"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'gp_foot')) :  ?>
                            	<li><a href="<?php  echo ot_get_option( 'gp_foot' ); ?>"><i class="fa fa-google-plus"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'twit_foot')) :  ?>
                            	<li><a href="<?php  echo ot_get_option( 'twit_foot' ); ?>"><i class="fa fa-twitter"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'insta_link')) :  ?>
                            	<li><a href="<?php  echo ot_get_option( 'insta_link' ); ?>"><i class="fa fa-instagram"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'pint_foot')) :  ?>
                            	<li><a href="<?php  echo ot_get_option( 'pint_foot' ); ?>"><i class="fa fa-pinterest"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'xing_foot')) :  ?>
                            	<li><a href="<?php  echo ot_get_option( 'xing_foot' ); ?>"><i class="fa fa-xing"></i></a></li>
                            <?php endif ; endif; ?>
                            <!--ANOTHER SOCIAL ICON LIST-->
                            <?php
								if  ( function_exists( 'ot_get_option' )){
								 /* get the icon list */
								 $hsocials = ot_get_option( 'foot_as_icon', array() );
								 
								 if ( ! empty( $hsocials ) ) {
									 foreach( $hsocials as $hsocial ) {
										 echo '
										 <li><a href="' . $hsocial['foot_as_link'] . '"><i class="fa ' . $hsocial['foot_soc_icon'] . '"></i></a></li>
										';
									 }
								 }
								}				
							?>
                            <!--ANOTHER SOCIAL ICON LIST END-->
                </ul><!--/.team-icon-->
                <div class="spacing40"></div>
            	<p><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'fot_text' ) ) { echo  ot_get_option( 'fot_text' );} ?></p>
            </div><!--/.container-->
        </footer><!--/footer-->        
        
        
  	<?php wp_footer(); ?>
	</body>
</html>