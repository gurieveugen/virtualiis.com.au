<?php

		add_action( 'after_setup_theme', 'beuh_theme_setup' );
		function beuh_theme_setup() {
			/* Add filters, actions, and theme-supported features. */
			//THEME SUPORT FUNCTION
			//add thumbnail
			add_theme_support( 'post-thumbnails' );
			//custom background
			add_theme_support( 'custom-background' );

			//automatic feed
			add_theme_support( 'automatic-feed-links' );
			//add menu homepage and blog
			add_action( 'init', 'register_beuh_menu' );
			add_action( 'init', 'register_beuh_menu_blog' );
			
			// Retrieve the directory for the localization files
			$lang_dir = ( get_template_directory() . '/lang');
			 
			// Set the theme's text domain using the unique identifier from above
			load_theme_textdomain('beuh', $lang_dir);
			
			//width content
			if ( ! isset( $content_width ) )$content_width = 1170;
			
			//theme styles
			//THEME SCRIPT AND STYLES
			//theme default script and styles
			add_action('wp_enqueue_scripts', 'beuh_theme_scripts');
			add_action('wp_enqueue_scripts', 'beuh_theme_styles');
			//parallax setting
			add_action('wp_enqueue_scripts', 'rdn_parallax_bg');
			//color_schecmes script
			add_action( 'wp_enqueue_scripts', 'beuh_color_scheme' );
			//script for portfolio ajax
			add_action( 'wp_footer', 'beuh_single_portfolio' , 100);
			//script for homepage setting 
			add_action('wp_enqueue_scripts','beuh_homepage_script' );
			add_action( 'wp_footer', 'beuh_home_bg' , 102);
			
			//CUSTOM FILTER
			//custom search setting
			add_filter( 'get_search_form', 'html5_search_form' );
			//custom excerpt
			add_filter( 'excerpt_length', 'rdn_excerpt_length', 10 );
			//remove [..] in excerpt
			add_filter('get_the_excerpt', 'trim_excerpt');
			//custom comment styles
			add_filter('comment_form_default_fields','beuh_modify_comment_form_fields');
			//preloader script and styles
			add_action( 'wp_enqueue_scripts', 'beuh_preloader_set' );
			add_action('wp_enqueue_scripts', 'beuh_preloader');
			//tag cloud
			add_filter( 'widget_tag_cloud_args', 'tag_cloud_beuh' );
			
			
	}
	
	//add menu for homepage
	function register_beuh_menu() {
		register_nav_menu('homepage-menu',__( 'Main Menu in Homepage','beuh' ));
	}
	
	//add menu for blog
	function register_beuh_menu_blog() {
		register_nav_menu('blog-menu',__( 'Menu in Blog and Pages','beuh' ));
	}
	//custom excerpt function
	function rdn_excerpt_length( $length ) {
		return 60;
	}
	// Remove [...]
	function trim_excerpt($text) {
		$text = str_replace('[', '', $text);
		$text = str_replace(']', '', $text);
		return $text;
	}
	//adding sidebar widget
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
		'name' => 'Default Sidebar',
		'id' => 'default-sidebar','description' => 'Appears as the sidebar on blog and pages',
		'before_widget' => '<div  id="%1$s" class="widget %2$s clearfix">','after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',));
	}
	/* Replacing the default WordPress search form with an HTML5 version */
	function html5_search_form( $form ) {
		$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" > 
		<input type="search" placeholder="'.__("Search and hit enter...").'" value="' . get_search_query() . '" name="s" id="s" />
		<input type="submit" id="searchsubmit" />
		</form>';
		return $form;
	}
	//custom comment form
	function beuh_modify_comment_form_fields($fields){
		$req = get_option('require_name_email');
		$commenter = wp_get_current_commenter();
		$aria_req = ( $req ? " aria-required='true'" : '' ); 
		
		$fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'beuh' ) . '</label> ' . 
		
		( $req ? '' : '' ) .
						
		'<input id="author" name="author" type="text" placeholder="Your Name ..." value="' . 
						
		esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>';
						
		$fields['email'] = '<p class="comment-form-email"><label for="email">' . __( 'Email', 'beuh' ) . '</label> ' .
		
		( $req ? '' : '' ) .
		
		'<input id="email" name="email" type="text" placeholder="Your Email ..." value="' . 
		
		esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>';
		
		$fields['url'] = '<p class="comment-form-url"><label for="url">' . __( 'Website', 'beuh' ) . '</label>' .
		
		'<input id="url" name="url" type="text" placeholder="Your Website ..." value="' . 
		
		esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>';
		
		return $fields;
	}
	
	//define tag cloud size
	function tag_cloud_beuh($in){
	return 'smallest=12&largest=12&number=25&orderby=name&unit=px';
	}
	
	//THEME SCRIPTS & STYLES
	// include theme-script
	include('inc/theme-style.php');
	include('inc/theme-script.php');
	
	// include portfolio script
	include('inc/single-portfolio.php');
	//included theme import
	include('inc/theme-import.php');
	
	//included parallax setting
	include('inc/parallax.php');
	//included homepage setting
	include('inc/homepage-setting.php');
	//included preloader setting
	include('inc/preloader.php');
	//pagination
	include('inc/pagination.php');
	//post metabox
	include('inc/post-metaboxes.php');
	//include comment template
	include('inc/comment-template.php');
	//include color schemes
	include('inc/color-schemes.php');
	//include TGM activation
	include('inc/plugin-install.php');


//adding optiontree into themes
/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */add_filter( 'ot_show_pages', '__return_false' );
	/**
 * Optional: set 'ot_show_new_layout' filter to false.
 * This will hide the "New Layout" section on the Theme Options page.
 */add_filter( 'ot_show_new_layout', '__return_false' );
	/**
 * Required: set 'ot_theme_mode' filter to true.
 */add_filter( 'ot_theme_mode', '__return_true' );
	/**
 * Required: include OptionTree.
 */load_template( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
	/**
 * Theme Options
 */load_template( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );