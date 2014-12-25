<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  
  /* OptionTree is not loaded yet */
  if ( ! function_exists( 'ot_settings_id' ) )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => __( 'General Setting', 'beuh' )
      ),
      array(
        'id'          => 'slider_sectio',
        'title'       => __( 'Slider Setting', 'beuh' )
      ),
	  array(
        'id'          => 'video_bg_setting_section',
        'title'       => __( 'Video Background Setting', 'beuh' )
      ),
	  array(
        'id'          => 'yt_bg_setting_section',
        'title'       => __( 'Youtube Background Setting', 'beuh' )
      ),
	  array(
        'id'          => 'sections_setting',
        'title'       => __( 'Sections Setting', 'beuh' )
      ),
      array(
        'id'          => 'clients_list_section',
        'title'       => __( 'Clients Section Setting', 'beuh' )
      ),
      array(
        'id'          => 'parallax_section_big_background_image',
        'title'       => __( 'Parallax Section/Big Background Image', 'beuh' )
      ),
	  array(
        'id'          => 'footer_section',
        'title'       => __( 'Footer Setting', 'beuh' )
      ),
	  
	  array(
        'id'          => 'custom_layout_sec',
        'title'       => __('Homepage Custom Layout', 'beuh' )
      ),
	  
    ),
    'settings'        => array( 

	  array(
        'id'          => 'style_tab',
        'label'       => __( 'Style Setting', 'beuh' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'id'          => 'color_scheme',
        'label'       => __( 'Hyperlink Color', 'beuh' ),
        'desc'        => __( 'Pick your color scheme. Default color is black #999999', 'beuh' ),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'custom_hovers',
        'label'       => __( 'Hyperlink color on hover state', 'beuh' ),
        'desc'        => __( 'Pick your color scheme for hover state. Default color is black/grey #8888', 'beuh' ),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'heading_color',
        'label'       => __( 'Color on Heading', 'beuh' ),
        'desc'        => __( 'Pick your color for heading text. Default color is black #1F1F1F', 'beuh' ),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'general_color',
        'label'       => __( 'Color on General Paragraph', 'beuh' ),
        'desc'        => __( 'Pick your color for general paragraph text. Default color is black #1F1F1F', 'beuh' ),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'footer_color',
        'label'       => __( 'Footer Background color', 'beuh' ),
        'desc'        => __( 'Pick your background color for footer. Default color is black #1F1F1F', 'beuh' ),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'custom_css_box',
        'label'       => __( 'Custom Css Box', 'beuh' ),
        'desc'        => __( 'Insert your own css/style code here.', 'beuh' ),
        'std'         => '',
        'type'        => 'css',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'logo_tab',
        'label'       => __( 'Logo', 'beuh' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'logo_img',
        'label'       => __( 'Logo Upload', 'beuh' ),
        'desc'        => __( 'Upload your logo here.<br> Recommended size 149x80px', 'beuh' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'favicon_logo',
        'label'       => __( 'Favicon Logo', 'beuh' ),
        'desc'        => __( 'Upload your favicon here. Recommended size 30x30px', 'beuh' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'touch_logo',
        'label'       => __( 'Touch Logo', 'beuh' ),
        'desc'        => __( 'Upload your touch logo here. Recommended size 129x129px', 'beuh' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'preload_tab',
        'label'       => __( 'Preloader', 'beuh' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'preloader_set',
        'label'       => __( 'Preloader Setting', 'beuh' ),
        'desc'        => __( 'Choose Loader setting', 'beuh' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'show_home',
            'label'       => __( 'Show in Homepage only', 'beuh' ),
            'src'         => ''
          ),
          array(
            'value'       => 'show_all',
            'label'       => __( 'Show in All pages', 'beuh' ),
            'src'         => ''
          ),
          array(
            'value'       => 'hide_in_all',
            'label'       => __( 'Hide in All Pages', 'beuh' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'loader_logo',
        'label'       => __( 'Preloader Logo Image', 'beuh' ),
        'desc'        => __( 'Insert preloader logo image here.', 'beuh' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'loader_image',
        'label'       => __( 'Preloader Image', 'beuh' ),
        'desc'        => __( 'Upload your preloader image here<br />
Recommended size 128x128px', 'beuh' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'loader_color',
        'label'       => __( 'Preloader Background Color', 'beuh' ),
        'desc'        => __( 'Choose your background color for preloader', 'beuh' ),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'slider_home_tab',
        'label'       => __( 'Homepage/Main Slider', 'beuh' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'slider_sectio',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'slider_list',
        'label'       => __( 'Slider List', 'beuh' ),
        'desc'        => __( 'Create your slider list for main/homepage slider. <br> You can leave <b>the slider image blank</b> if you\'re using <b>homepage with video/youtube background</b>.', 'beuh' ),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'slider_sectio',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'slider_image',
            'label'       => __( 'Slider Image', 'beuh' ),
            'desc'        => __( 'Upload your slider image here. You can leave it blank if you are using homepage background video template.', 'beuh' ),
            'std'         => '',
            'type'        => 'upload',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'top_text',
            'label'       => __( 'Slide Bottom Text', 'beuh' ),
            'desc'        => __( 'Input your slider bottom text here. eg. Talented People', 'beuh' ),
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'slider_delay',
        'label'       => __( 'Slider Delay', 'beuh' ),
        'desc'        => __( 'Set your slider delay here.', 'beuh' ),
        'std'         => '',
        'type'        => 'numeric-slider',
        'section'     => 'slider_sectio',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,10000,1',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'slider_team_tab',
        'label'       => __( 'Team Slider', 'beuh' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'slider_sectio',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'slider_team_delay',
        'label'       => __( 'Slider Team Delay', 'beuh' ),
        'desc'        => __( 'Set your slider delay here.', 'beuh' ),
        'std'         => '',
        'type'        => 'numeric-slider',
        'section'     => 'slider_sectio',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,10000,1',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	   array(
        'id'          => 'fot_text_tab',
        'label'       => __( 'Footer Text', 'beuh' ),
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'footer_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'fot_text',
        'label'       => __( 'Footer Text', 'beuh' ),
        'desc'        => __( 'Input footer text here. You can use HTML tag here.', 'beuh' ),
        'std'         => '',
        'type'        => 'textarea-simple',
		'rows'        => '3',
        'section'     => 'footer_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'fot_soc_tab',
        'label'       => __( 'Footer Social Icon', 'beuh' ),
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'footer_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	   array(
        'id'          => 'fb_foot',
        'label'       => __( 'Facebook Link', 'beuh' ),
        'desc'        => __( 'Input facebook link here', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'gp_foot',
        'label'       => __( 'Google Plus Link', 'beuh' ),
        'desc'        => __( 'Input google plus link here', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'twit_foot',
        'label'       => __( 'Twitter Link', 'beuh' ),
        'desc'        => __( 'Input twitter link here', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pint_foot',
        'label'       => __( 'Pinterest Link', 'beuh' ),
        'desc'        => __( 'Input pinterest link here', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'insta_link',
        'label'       => __( 'Instagram Link', 'beuh' ),
        'desc'        => __( 'Input instagram link here', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'xing_foot',
        'label'       => __( 'Xing Link', 'beuh' ),
        'desc'        => __( 'Input xing link here', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'foot_as_icon',
        'label'       => __( 'Another Social Icon', 'beuh' ),
        'desc'        => __( 'Create list for another social icon.', 'beuh' ),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'footer_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'foot_soc_icon',
            'label'       => __( 'Social Icon', 'beuh' ),
            'desc'        => __( 'Input your social icon here. <br /> You can check <a target="_blank" href="http://fontawesome.io/icons/">Here</a> for icon list. eg. fa-github', 'beuh' ),
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'foot_as_link',
            'label'       => __( 'Social Icon Link', 'beuh' ),
            'desc'        => __( 'Input social icon link here', 'beuh' ),
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
	  array(
        'id'          => 'home_setting',
        'label'       => __('Home Section Background Setting', 'beuh'),
        'desc'        => __('You can set the slider/video background at slider and video background settings.', 'beuh'),
        'std'         => 'slider_bg_home',
        'type'        => 'select',
        'section'     => 'custom_layout_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'slider_bg_home',
            'label'       => __('Slider Background', 'beuh'),
            'src'         => ''
          ),
          array(
            'value'       => 'video_bg_home',
            'label'       => __('Video Background', 'beuh'),
            'src'         => ''
          ),
		  array(
            'value'       => 'youtube_bg_home',
            'label'       => __('Youtube Video Background', 'beuh'),
            'src'         => ''
          )
        ),
      ),
	  array(
        'id'          => 'text_block_video_section',
        'label'       => __( 'THE SETTING ONLY FOR VIDEO BACKGROUND IN HOMEPAGE VIDEO TEMPLATE', 'beuh' ),
        'desc'        => __( 'You can set your video here. This is only affect on homepage with <strong> Homepage Video</strong> template', 'beuh' ),
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'video_bg_setting_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'video_link',
        'label'       => __( 'Video Source', 'beuh' ),
        'desc'        => __( 'Insert your video source here (only directlink). eg. http://yoursite.com/video.mp4', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'video_bg_setting_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'video_mute',
        'label'       => __( 'Video Mute', 'beuh' ),
        'desc'        => __( 'You can turn on/off video audio (mute)', 'beuh' ),
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'video_bg_setting_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'video_img',
        'label'       => __( 'Video Image', 'beuh' ),
        'desc'        => __( 'Upload/insert your image to replace the video in mobile/tablet view here.', 'beuh' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'video_bg_setting_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'home_setting_box',
        'label'       => 'box text home setting',
        'desc'        => __( 'THIS SETTING ONLY APPLIES ON PAGE WITH  "HOMEPAGE CUSTOM LAYOUT" TEMPLATE','beuh'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'custom_layout_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'custom_layout',
        'label'       => __( 'Section List','beuh'),
        'desc'        => __( 'Create your sections list here.<br/> Noted: <b>The title</b> on custom section will be the <b>id/anchor</b> to put in your homepage menu. <br/>
		Make sure <b>the title</b> doesn\'t have <b>space/white area</b> or <b>any special character</b>.','beuh'),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'custom_layout_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'settings'    => array( 
			array(
            'id'          => 'section_type',
            'label'       => __( 'Select Section','beuh'),
            'desc'        => __( 'Select the section that you want to add in homepage','beuh'),
            'std'         => '',
            'type'        => 'select',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'choices'     => array( 
              array(
                'value'       => 'about_content',
                'label'       => __('About Section', 'beuh'),
                'src'         => ''
              ),
			  array(
                'value'       => 'portfolio_content',
                'label'       => __('Works Section', 'beuh'),
                'src'         => ''
              ),
			  array(
                'value'       => 'services_content',
                'label'       => __('Services Section', 'beuh'),
                'src'         => ''
              ),
			  array(
                'value'       => 'contact_content',
                'label'       => __('Contact Section', 'beuh'),
                'src'         => ''
              ),
			  array(
                'value'       => 'gmap_content',
                'label'       => __('Google Map Section', 'beuh'),
                'src'         => ''
              ),
			  array(
                'value'       => 'para1_content',
                'label'       => __('Parallax One Section', 'beuh'),
                'src'         => ''
              ),
			  array(
                'value'       => 'para2_content',
                'label'       => __('Parallax Two/Testimonial Section', 'beuh'),
                'src'         => ''
              ),
			  array(
                'value'       => 'para3_content',
                'label'       => __('Parallax Three Section', 'beuh'),
                'src'         => ''
              ),
			  array(
                'value'       => 'custom_content',
                'label'       => __('Custom Section', 'beuh'),
                'src'         => ''
              ),
            ),
          ),
			array(
				'id'          => 'custom_section',
				'label'       => __( 'Custom Section', 'beuh' ),
				'desc'        => __( 'Choose your custom section post here.', 'beuh' ),
				'std'         => '',
				'type'        => 'custom-post-type-select',
				'section'     => 'custom_layout_sec',
				'rows'        => '',
				'post_type'   => 'custom-section',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'section_type:is(custom_content)',
				'operator'    => 'and'
			),	
        )
      ),
	  array(
        'id'          => 'about_section_tab',
        'label'       => __( 'About Section', 'beuh' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'about_big_title',
        'label'       => __( 'About Big Title', 'beuh' ),
        'desc'        => __( 'Insert your big title for about section here(big title on black background). eg. The Story', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'about_subtitle',
        'label'       => __( 'About Subtitle', 'beuh' ),
        'desc'        => __( 'Insert your subtitle/small title for about section here(subtitle/small title on black background). eg. About Us', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'about_detail',
        'label'       => __( 'About Detail', 'beuh' ),
        'desc'        => __( 'Insert the detail for about section here (detail text on black background).', 'beuh' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'works_portfolio_setting_tab',
        'label'       => __( 'Works/Portfolio Section', 'beuh' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'works_big_title',
        'label'       => __( 'Works Big Title', 'beuh' ),
        'desc'        => __( 'Insert your big title for works section here(big title on black background). eg. The Story', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'works_subtitle',
        'label'       => __( 'Works Subtitle', 'beuh' ),
        'desc'        => __( 'Insert your subtitle/small title for works section here(subtitle/small title on black background). eg. About Us', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'works_detail',
        'label'       => __( 'Works Detail', 'beuh' ),
        'desc'        => __( 'Insert the detail for works section here (detail text on black background).', 'beuh' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'services_section_tab',
        'label'       => __( 'Services Section', 'beuh' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'services_big_title',
        'label'       => __( 'Services Big Title', 'beuh' ),
        'desc'        => __( 'Insert your big title for services section here(big title on black background). eg. The Story', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'services_subtitle',
        'label'       => __( 'Services Subtitle', 'beuh' ),
        'desc'        => __( 'Insert your subtitle/small title for services section here(subtitle/small title on black background). eg. About Us', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'services_detail',
        'label'       => __( 'Services Detail', 'beuh' ),
        'desc'        => __( 'Insert the detail for services section here (detail text on black background).', 'beuh' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_section_tab',
        'label'       => __( 'Contact Section', 'beuh' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_big_title',
        'label'       => __( 'Contact Big Title', 'beuh' ),
        'desc'        => __( 'Insert your big title for contact section here(big title on black background). eg. The Story', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_subtitle',
        'label'       => __( 'Contact Subtitle', 'beuh' ),
        'desc'        => __( 'Insert your subtitle/small title for contact section here(subtitle/small title on black background). eg. About Us', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_detail',
        'label'       => __( 'Contact Detail', 'beuh' ),
        'desc'        => __( 'Insert the detail for contact section here (detail text on black background).', 'beuh' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'pricing_table_tab',
        'label'       => __( 'Pricing Table Section', 'beuh' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'pt_subtitle',
        'label'       => __( 'Pricing Table Subtitle', 'beuh' ),
        'desc'        => __( 'Insert your subtitle/small title for pricing table section here(subtitle/small title on gray background).<br/>You can leave it blank if you don\'t want it.', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pt_detail',
        'label'       => __( 'Pricing Table Detail', 'beuh' ),
        'desc'        => __( 'Insert the detail for pricing table section here (detail text on gray background).', 'beuh' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'pt_col',
        'label'       => __( 'Client List Column', 'beuh' ),
        'desc'        => __( 'Select how many columns you want to use for client list. Default is 4 columns.', 'beuh' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'sections_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'col_3',
            'label'       => __( '3 Columns', 'beuh' ),
            'src'         => ''
          ),
		  array(
            'value'       => 'col_4',
            'label'       => __( '4 Columns', 'beuh' ),
            'src'         => ''
          ),
        )
      ),
      array(
        'id'          => 'client_list',
        'label'       => __( 'Client List', 'beuh' ),
        'desc'        => __( 'Create your client list here.', 'beuh' ),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'clients_list_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'client_image',
            'label'       => __( 'Client Image', 'beuh' ),
            'desc'        => __( 'Upload your client images here.', 'beuh' ),
            'std'         => '',
            'type'        => 'upload',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'client_list_column',
        'label'       => __( 'Client List Column', 'beuh' ),
        'desc'        => __( 'Select how many columns you want to use for client list. Default is 4 columns.', 'beuh' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'clients_list_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'col_4',
            'label'       => __( '4 Columns', 'beuh' ),
            'src'         => ''
          ),
          array(
            'value'       => 'col_3',
            'label'       => __( '3 Columns', 'beuh' ),
            'src'         => ''
          ),
          array(
            'value'       => 'col_2',
            'label'       => __( '2 Columns', 'beuh' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'parallax_one_',
        'label'       => __( 'Parallax One Setting', 'beuh' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'parallax_section_big_background_image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'parallax_image_one',
        'label'       => __( 'Parallax Image', 'beuh' ),
        'desc'        => __( 'Upload your background image for parallax one here.', 'beuh' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'parallax_section_big_background_image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'parallax_subtitle_one',
        'label'       => __( 'Parallax Subtitle', 'beuh' ),
        'desc'        => __( 'Insert your subtitle here. eg. Our Culture', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'parallax_section_big_background_image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'parallax_text_one',
        'label'       => __( 'Parallax Text', 'beuh' ),
        'desc'        => __( 'Insert your parallax text here.', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'parallax_section_big_background_image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'parallax_icon_one',
        'label'       => __( 'Parallax Icon', 'beuh' ),
        'desc'        => __( 'Insert your parallax icon here. <br />
You can view icon list in here <a href="http://fontawesome.io/icons/">http://fontawesome.io/icons/</a><br /> 
eg. fa-heart-o', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'parallax_section_big_background_image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'parallax_two_setting',
        'label'       => __( 'Parallax Two/Testimonial Setting', 'beuh' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'parallax_section_big_background_image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'parallax_image_two',
        'label'       => __( 'Parallax Image', 'beuh' ),
        'desc'        => __( 'Upload your background image for parallax two here.', 'beuh' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'parallax_section_big_background_image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'testimonial_list',
        'label'       => __( 'Testimonial List', 'beuh' ),
        'desc'        => __( 'Create your testimonial list here.<br>
Title in the list is for testimonial author.', 'beuh' ),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'parallax_section_big_background_image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'testi_text',
            'label'       => __( 'Testimonial Text', 'beuh' ),
            'desc'        => __( 'Insert your testimonial text here.', 'beuh' ),
            'std'         => '',
            'type'        => 'textarea-simple',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'testi_icon',
            'label'       => __( 'Testimonial Icon', 'beuh' ),
            'desc'        => __( 'Insert your testimonial icon here.<br />
Insert your parallax icon here. <br />
You can view icon list in here <a href="http://fontawesome.io/icons/">http://fontawesome.io/icons/</a><br /> 
eg. fa-quote-left', 'beuh' ),
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
	  
	  array(
        'id'          => 'parallax_three',
        'label'       => __( 'Parallax Three/Quote Setting', 'beuh' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'parallax_section_big_background_image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
      array(
        'id'          => 'parallax_image_three',
        'label'       => __( 'Parallax Image', 'beuh' ),
        'desc'        => __( 'Upload your background image for parallax three here.', 'beuh' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'parallax_section_big_background_image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'parallax_subtitle_three',
        'label'       => __( 'Parallax Subtitle', 'beuh' ),
        'desc'        => __( 'Insert your subtitle here. eg. Eleanor Roosevelt', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'parallax_section_big_background_image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'parallax_text_three',
        'label'       => __( 'Parallax Subtitle', 'beuh' ),
        'desc'        => __( 'Insert your parallax text here.', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'parallax_section_big_background_image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'parallax_icon_three',
        'label'       => __( 'Parallax Icon', 'beuh' ),
        'desc'        => __( 'Insert your parallax icon here. <br />
You can view icon list in here <a href="http://fontawesome.io/icons/">http://fontawesome.io/icons/</a><br /> 
eg. fa-heart-o', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'parallax_section_big_background_image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'text_block_yt_section_rec',
        'label'       => __( 'THE SETTING ONLY FOR YOUTUBE VIDEO BACKGROUND IN HOMEPAGE YOUTUBE TEMPLATE', 'beuh' ),
        'desc'        => __( 'You set your video here. This is only affect on homepage with <strong> Homepage Youtube</strong>', 'beuh' ),
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'yt_bg_setting_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'yt_id',
        'label'       => __( 'Youtube Id', 'beuh' ),
        'desc'        => __( 'Input your youtube ID here. <br /><strong>Remember only input the ID!</strong>. eg. c9MnSeYYtYY', 'beuh' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'yt_bg_setting_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'yt_mute',
        'label'       => __( 'Youtube Video Mute', 'beuh' ),
        'desc'        => __( 'You can turn on/off youtube video audio (mute)', 'beuh' ),
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'yt_bg_setting_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'yt_img',
        'label'       => __( 'Youtube Image', 'beuh' ),
        'desc'        => __( 'Upload/insert your image to replace the youtube video in mobile/tablet view here.', 'beuh' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'yt_bg_setting_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}