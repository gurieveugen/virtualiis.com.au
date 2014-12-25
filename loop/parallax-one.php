<?php
/*
* Parallax One 
*/
?>	

        
        <div class="bg bg1 clearfix">
			<div class="bg-mask"></div>
			<div class="para-img"></div>
			<div class="container big-text">
				<p><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'parallax_subtitle_one' ) ) { echo ot_get_option( 'parallax_subtitle_one' );} ?></p>
				<h3><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'parallax_text_one' ) ) { echo ot_get_option( 'parallax_text_one' );} ?></h3>
				<div class="liner"></div>
				<div class="clearboth"></div><i class="fa <?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'parallax_icon_one' ) ) { echo ot_get_option( 'parallax_icon_one' );} ?>"></i>
			</div><!--/.big-text-->
		</div><!--/.bg-->