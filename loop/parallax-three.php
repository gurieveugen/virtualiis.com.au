<?php
/*
* Parallax Three
*/
?>      	   
	   
	   <div class="bg bg3 clearfix">
			<div class="bg-mask"></div>
			<div class="para-img"></div>
			<div class="container big-text">
				<p><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'parallax_subtitle_three' ) ) { echo ot_get_option( 'parallax_subtitle_three' );} ?></p>
				<h3><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'parallax_text_three' ) ) { echo ot_get_option( 'parallax_text_three' );} ?></h3>
				<div class="liner"></div>
				<div class="clearboth"></div><i class="fa <?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'parallax_icon_three' ) ) { echo ot_get_option( 'parallax_icon_three' );} ?>"></i>
			</div><!--/.big-text-->
		</div><!--/.big-background-->