<?php
/**
 * Initialize the Post Post Meta Boxes. 
 */
add_action( 'admin_init', 'post_mb' );
function post_mb() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $post_mb = array(
    'id'          => 'post_meta_box',
    'title'       => __( 'Post Setting', 'beuh' ),
    'desc'        => '',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
	  array(
        'label'       => __( 'Choose Post Format Here', 'beuh' ),
        'id'          => 'post_format',
        'type'        => 'select',
		'std'		 => 'post_standard',
		'choices'     => array( 
			  array(
                'value'       => 'post_standard',
                'label'       => __( 'Post Standard', 'beuh' )
              ),
			  array(
                'value'       => 'post_gallery',
                'label'       => __( 'Post Gallery', 'beuh' )
              ),
			  array(
                'value'       => 'post_slider',
                'label'       => __( 'Post Slider', 'beuh' )
              ),
			  array(
                'value'       => 'post_video',
                'label'       => __( 'Post Video', 'beuh' )
              ),
			  array(
                'value'       => 'post_audio',
                'label'       => __( 'Post Audio', 'beuh' )
              ),
		)
      ),
	  array(
        'label'       => __( 'Big Image Setting', 'beuh' ),
        'id'          => 'post_image_setting',
        'type'        => 'upload',
        'desc'        => __( 'Upload your image here. Leave it blank if you want to used featured image.', 'beuh' ),
        'condition'   => 'post_format:is(post_standard)'
      ),
	  array(
        'label'       => __( 'Gallery Setting', 'beuh' ),
        'id'          => 'post_gallery_setting',
        'type'        => 'gallery',
        'desc'        => __( 'Create your Post gallery here. <br/>Try to use same ratio for each image.', 'beuh' ),
        'condition'   => 'post_format:is(post_gallery)'
      ),
	  array(
        'label'       => __( 'Slider Setting', 'beuh' ),
        'id'          => 'post_slider_setting',
        'type'        => 'gallery',
        'desc'        => __( 'Create your Post Slider here.', 'beuh' ),
        'condition'   => 'post_format:is(post_slider)'
      ),
	  array(
        'label'       => __( 'Video Setting', 'beuh' ),
        'id'          => 'post_video_setting',
        'type'        => 'text',
        'desc'        => __( 'Insert the link for video embed here.<br/> For video from youtube/vimeo just put the link without any attribute like ?wmode=opaque.<br/>eg: http://www.youtube.com/embed/nAuo7KEQHT4 or http://player.vimeo.com/video/64078587', 'beuh' ),
        'condition'   => 'post_format:is(post_video)'
      ),
	   array(
        'label'       => __( 'Audio Setting', 'beuh' ),
        'id'          => 'post_audio_setting',
        'type'        => 'textarea',
		'rows'        => '3',
        'desc'        => __( 'Insert your iframe/embedded code for audio here.<br/>
		You can input iframe/embed code from youtube/vimeo here too, if you don\'t like the default style of Post video.', 'beuh' ),
        'condition'   => 'post_format:is(post_audio)'
      )
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $post_mb );

}

