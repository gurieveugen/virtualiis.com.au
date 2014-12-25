<?php 
//color scheme
function beuh_color_scheme() {
        $color =  ot_get_option( 'color_scheme' );
        $custom_css = "
		.contact-btn,.post-date,#searchform #searchsubmit:hover,.form-submit #submit{background-color:$color;}
		.close,.go-btn:hover,.tagcloud a:hover,.p-table a:hover{color:$color;}
		.go-btn:hover{border-color:$color;}
		.tagcloud a:hover,.tagcloud a:hover,.p-table a:hover{border-color:$color;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'color_scheme' )) {           
        wp_add_inline_style( 'custom-style', $custom_css );
		}
		
		$hovers =  ot_get_option( 'custom_hovers' );
        $custom_hovers = "
		.port-filter li a:hover, .port-filter li .active,.contact-btn:hover,#searchform #searchsubmit,.form-submit #submit:hover,.go-btn,.tagcloud a,.p-table a{background-color:$hovers;}
		.close:hover{color:$hovers;}
		.go-btn,.tagcloud a,.p-table a{border-color:$hovers;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'custom_hovers' )) {           
        wp_add_inline_style( 'custom-style', $custom_hovers );
		}
		
		$heading =  ot_get_option( 'heading_color' );
        $heading_color = "
		h1, h2, h3, h4, h5, h6{color:$heading;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'heading_color' )) {           
        wp_add_inline_style( 'custom-style', $heading_color );
		}
		
		$general =  ot_get_option( 'general_color' );
        $general_color = "
		body{color:$general;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'general_color' )) {           
        wp_add_inline_style( 'custom-style', $general_color );
		}
		
		$footer =  ot_get_option( 'footer_color' );
        $footer_color = "
		#footer{background-color:$footer;}
		.footer-icon > li a:hover{color:#fff;opacity:0.5;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'footer_color' )) {           
        wp_add_inline_style( 'custom-style', $footer_color );
		}
		 
}