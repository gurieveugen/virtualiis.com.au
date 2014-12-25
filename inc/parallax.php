<?php 
//parallax  background setting
function rdn_parallax_bg() {
	if  ( function_exists( 'ot_get_option' )){
        $para_1 =  ot_get_option( 'parallax_image_one' );
        $para1_bg = "
		.bg1 .para-img{background-image: url('$para_1');}
		"; 
		if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'parallax_image_one' )) {           
        wp_add_inline_style( 'custom-style', $para1_bg );
		} 
		$para_2 =  ot_get_option( 'parallax_image_two' );
        $para2_bg = "
		.bg2 .para-img{background-image: url('$para_2');}
		"; 
		if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'parallax_image_two' )) {           
        wp_add_inline_style( 'custom-style', $para2_bg );
		}
		$para_3 =  ot_get_option( 'parallax_image_three' );
        $para3_bg = "
		.bg3 .para-img{background-image: url('$para_3');}
		"; 
		if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'parallax_image_three' )) {           
        wp_add_inline_style( 'custom-style', $para3_bg );
		}
	}
		 
}
