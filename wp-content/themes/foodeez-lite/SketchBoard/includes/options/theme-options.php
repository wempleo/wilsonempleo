<?php

global $foodeez_lite_themename;
global $foodeez_lite_shortname;

/**
 * Initialize the options before anything else. 
 */
add_action( 'admin_init', '_custom_theme_options', 1 );

/**
 * Theme Mode demo code of all the available option types.
 *
 * @return    void
 *
 * @access    private
 * @since     2.0
 */
function _custom_theme_options() {

global $foodeez_lite_themename;
global $foodeez_lite_shortname;
  
   /**
    * Get a copy of the saved settings array. 
    */
	$saved_settings = get_option( 'option_tree_settings', array() );

	
	// If using image radio buttons, define a directory path
	$imagepath  =  get_template_directory_uri() . '/images/';
	$sktsiteurl = home_url();
	$sktsitenm  = get_bloginfo('name');
	
	// BACKGROUND DEFAULTS
	$background_defaults = array(
		'background-color'     => '#000000',
		'background-image'     => '',
		'background-repeat'    => 'repeat-y',
		'background-position'  => 'center top',
		'background-attachment'=>'fixed' 
	);

  /**
   * Create a custom settings array that we pass to 
   * the OptionTree Settings API Class.
   */
  $custom_settings = array(
    'contextual_help' => array(
		'content'       => array( 
			array(
				'id'        => 'general_help',
				'title'     => 'General',
				'content'   => '<p>Help content goes here!</p>'
			)
		),
		'sidebar'     => '<p>Sidebar content goes here!</p>'
    ),
    'sections'        => array(
		array(
			'title'   => 'General Settings',
			'id'      => 'general_default'
		),
		array(
			'title'   => 'Header Settings',
			'id'      => 'header_settings'
		),  		
		array(
			'title'   => 'Blog Settings',
			'id'      => 'blog_settings'
		), 			
		array(
			'title'   => 'Home Page Featured Section',
			'id'      => 'home_feature_settings'
		), 		
		array(
			'title'   => 'Home Page Parallax Section',
			'id'      => 'home_parallax_settings'
		), 		
		array(      
			'title'   => 'Social Links',
			'id'      => 'social_links'
		), 		
		array(      
			'title'   => 'Footer Section ',
			'id'      => 'footer_section'
		)
    ),
    'settings'        => array(
	
		//==================================================================
		// GENERAL SETTINGS SECTION STARTS =================================
		//==================================================================
		
		array(
			'label'       => __( 'Color Scheme', 'foodeez-lite'),
			'id'          => $foodeez_lite_shortname.'_colorpicker',
			'type'        => 'colorpicker',
			'desc'        => 'Set color scheme',
			'std'         => '',
			'section'     => 'general_default'
		  ),
		array(
			'label'       => __( 'Upload Change Logo ', 'foodeez-lite'),
			'id'          => $foodeez_lite_shortname.'_logo_img',
			'type'        => 'upload',
			'desc'        => 'This creates a custom logo for your website.',
			'std'         => '',
			'section'     => 'general_default'
		),
		array(
			'id'          => $foodeez_lite_shortname.'_logo_alt',
			'label'       => __( 'Logo ALT Text', 'foodeez-lite'),
			'desc'        => 'Enter logo image alt attribute text.',
			'std'         => '',
			'type'        => 'text',
			'section'     => 'general_default'
		),
		array(
			'label'       => __( 'Upload Favicon', 'foodeez-lite'),
			'id'          => $foodeez_lite_shortname.'_favicon',
			'type'        => 'upload',
			'desc'        => 'This creates a custom favicon for your website.',
			'std'         => '',
			'section'     => 'general_default'
		),
		

		//------ END GENERAL SETTINGS SECTION ------------------------------
		
		//==================================================================
		// HEADER SETTINGS SECTION STARTS ==================================
		//==================================================================	

		array(
			'label'       => __( 'Top Bar Contact no.', 'foodeez-lite'),
			'id'          => $foodeez_lite_shortname.'_topbar_contact',
			'type'        => 'text',
			'desc'        => 'Add top bar contact no.',
			'std'         => '',
			'section'     => 'header_settings'
		),
		array(
			'label'       => __( 'Reservation Button Link', 'foodeez-lite'),
			'id'          => $foodeez_lite_shortname.'_rbtn_link',
			'type'        => 'text',
			'desc'        => 'Add Reservation button link',
			'std'         => '',
			'section'     => 'header_settings'
		),
		array(
			'label'       => __( 'Home page Image', 'foodeez-lite'),
			'id'          => $foodeez_lite_shortname.'_frontslider_stype',
			'type'        => 'upload',
			'desc'        => 'Choose image for home page. Size: Width 1600px and Height 500px.',
			'std'         => '',
			'section'     => 'header_settings'
		),
		array(
			'label'       => __( 'Inner Page Header Background', 'foodeez-lite'),
			'id'          => $foodeez_lite_shortname.'_innerheader_stype',
			'type'        => 'upload',
			'desc'        => 'Choose image for inner page header background.',
			'std'         => '',
			'section'     => 'header_settings'
		),
		
		//------ END HEADER SETTINGS SECTION -------------------------------
		
		//==================================================================
		// BLOG SETTINGS SECTION STARTS ==================================
		//==================================================================	

		array(
			'id'          => $foodeez_lite_shortname.'_blogpage_heading',
			'label'       => __( 'Enter Blog Page Title', 'foodeez-lite'),
			'desc'        => 'Enter Blog Page Title text.',
			'std'         => '',
			'type'        => 'text',
			'section'     => 'blog_settings'
		),
					
		//------ END BLOG SETTINGS SECTION -------------------------------
		
		
		//==================================================================
		// HOME FEATURED SETTINGS SECTION STARTS ========================s======
		//==================================================================	
		
		array(
			'id'          => $foodeez_lite_shortname.'_fb1_first_part_heading',
			'label'       => __( 'First Featured Box Heading', 'foodeez-lite'),
			'desc'        => 'Enter heading for first featured box.',
			'std'         => '',
			'type'        => 'text',
			'section'     => 'home_feature_settings'
		),
		array(
			'label'       => __( 'First Featured Box Image Path (size: width * height (270px * 150px) )', 'foodeez-lite'),
			'id'          => $foodeez_lite_shortname.'_fb1_first_part_image',
			'type'        => 'upload',
			'desc'        => 'Upload image for first featured box.',
			'std'         => '',
			'section'     => 'home_feature_settings'
		),
		array(
			'label'       => 'First Featured Box Content',
			'id'          => $foodeez_lite_shortname.'_fb1_first_part_content',
			'type'        => 'textarea',
			'desc'        => 'Enter content for first featured box.',
			'std'         => '',
			'section'     => 'home_feature_settings'
		),
		array(
			'id'          => $foodeez_lite_shortname.'_fb1_first_part_link',
			'label'       => __( 'First Featured Box Link', 'foodeez-lite'),
			'desc'        => 'Enter link for first featured box.',
			'std'         => '',
			'type'        => 'text',
			'section'     => 'home_feature_settings'
		),
		array(
			'id'          => $foodeez_lite_shortname.'_fb2_second_part_heading',
			'label'       => __( 'Second Featured Box Heading', 'foodeez-lite'),
			'desc'        => 'Enter heading for second featured box.',
			'std'         => '',
			'type'        => 'text',
			'section'     => 'home_feature_settings'
		),
		array(
			'label'       => __( 'Second Featured Box Image Path (size: width * height (270px * 150px) )', 'foodeez-lite'),
			'id'          => $foodeez_lite_shortname.'_fb2_second_part_image',
			'type'        => 'upload',
			'desc'        => 'Upload image for second featured box.',
			'std'         => '',
			'section'     => 'home_feature_settings'
		),
		array(
			'label'       => 'Second Featured Box Content',
			'id'          => $foodeez_lite_shortname.'_fb2_second_part_content',
			'type'        => 'textarea',
			'desc'        => 'Enter content for second featured box.',
			'std'         => '',
			'section'     => 'home_feature_settings'
		),
		array(
			'id'          => $foodeez_lite_shortname.'_fb2_second_part_link',
			'label'       => __( 'Second Featured Box Link', 'foodeez-lite'),
			'desc'        => 'Enter link for second featured box.',
			'std'         => '',
			'type'        => 'text',
			'section'     => 'home_feature_settings'
		),
		array(
			'id'          => $foodeez_lite_shortname.'_fb3_third_part_heading',
			'label'       => __( 'Third Featured Box Heading', 'foodeez-lite'),
			'desc'        => 'Enter heading for third featured box.',
			'std'         => '',
			'type'        => 'text',
			'section'     => 'home_feature_settings'
		),
		array(
			'label'       => __( 'Third Featured Box Image Path (size: width * height (270px * 150px) )', 'foodeez-lite'),
			'id'          => $foodeez_lite_shortname.'_fb3_third_part_image',
			'type'        => 'upload',
			'desc'        => 'Upload image for third featured box.',
			'std'         => '',
			'section'     => 'home_feature_settings'
		),
		array(
			'label'       => 'Third Featured Box Content',
			'id'          => $foodeez_lite_shortname.'_fb3_third_part_content',
			'type'        => 'textarea',
			'desc'        => 'Enter content for third featured box.',
			'std'         => '',
			'section'     => 'home_feature_settings'
		),
		array(
			'id'          => $foodeez_lite_shortname.'_fb3_third_part_link',
			'label'       => __( 'Third Featured Box Link', 'foodeez-lite'),
			'desc'        => 'Enter link for third featured box.',
			'std'         => '',
			'type'        => 'text',
			'section'     => 'home_feature_settings'
		),
		array(
			'id'          => $foodeez_lite_shortname.'_fb4_fourth_part_heading',
			'label'       => __( 'Fourth Featured Box Heading', 'foodeez-lite'),
			'desc'        => 'Enter heading for fourth featured box.',
			'std'         => '',
			'type'        => 'text',
			'section'     => 'home_feature_settings'
		),
		array(
			'label'       => __( 'Fourth Featured Box Image Path (size: width * height (270px * 150px) )', 'foodeez-lite'),
			'id'          => $foodeez_lite_shortname.'_fb4_fourth_part_image',
			'type'        => 'upload',
			'desc'        => 'Upload image for fourth featured box.',
			'std'         => '',
			'section'     => 'home_feature_settings'
		),
		array(
			'label'       => 'Fourth Featured Box Content',
			'id'          => $foodeez_lite_shortname.'_fb4_fourth_part_content',
			'type'        => 'textarea',
			'desc'        => 'Enter content for fourth featured box.',
			'std'         => '',
			'section'     => 'home_feature_settings'
		),
		array(
			'id'          => $foodeez_lite_shortname.'_fb4_fourth_part_link',
			'label'       => __( 'Fourth Featured Box Link', 'foodeez-lite'),
			'desc'        => 'Enter link for fourth featured box.',
			'std'         => '',
			'type'        => 'text',
			'section'     => 'home_feature_settings'
		),

	
		//------ END HOME FEATURED SETTINGS SECTION ---------------------
		
		
		//==================================================================
		// PARALLAX SETTINGS SECTION STARTS ==================================
		//==================================================================

		array(
			'label'       => __( 'Parallax Section Background Image (size: width * height (1600x * 1000px) )', 'foodeez-lite'),
			'id'          => $foodeez_lite_shortname.'_fullparallax_image',
			'type'        => 'upload',
			'desc'        => 'Upload background image for parallax section.',
			'std'         => '',
			'section'     => 'home_parallax_settings'
		),
		array(
			'label'       => 'Parallax Section Content',
			'id'          => $foodeez_lite_shortname.'_para_content_left',
			'type'        => 'textarea',
			'desc'        => 'Enter content for parallax section',
			'std'         => '',
			'section'     => 'home_parallax_settings'
		),
		
		
		//------ END PARALLAX SETTINGS SECTION -------------------------------
		
		
	  	//==================================================================
		// SOCIAL LINKS SETTINGS SECTION STARTS ============================
		//==================================================================
	  	array(
			'label'       => 'Facebook Link',
			'id'          => $foodeez_lite_shortname.'_fbook_link',
			'type'        => 'text',
			'desc'        => 'Enter Facebook Link.',
			'std'         => '',
			'section'     => 'social_links'
		),
		array(
			'label'       => 'Twitter Link',
			'id'          => $foodeez_lite_shortname.'_twitter_link',
			'type'        => 'text',
			'desc'        => 'Enter Twitter link.',
			'std'         => '',
			'section'     => 'social_links'
		),
		array(
			'label'       => 'Google Plus ID',
			'id'          => $foodeez_lite_shortname.'_gplus_link',
			'type'        => 'text',
			'desc'        => 'Enter Google plus Id.',
			'std'         => '',
			'section'     => 'social_links'
		),
		array(
			'label'       => 'Linkedin Link',
			'id'          => $foodeez_lite_shortname.'_linkedin_link',
			'type'        => 'text',
			'desc'        => 'Enter Linkedin link.',
			'std'         => '',
			'section'     => 'social_links'
		),	
		array(
			'label'       => 'Pinterest Link',
			'id'          => $foodeez_lite_shortname.'_pinterest_link',
			'type'        => 'text',
			'desc'        => 'Enter Pinterest link.',
			'std'         => '',
			'section'     => 'social_links'
		),	
		array(
			'label'       => 'Flickr Link',
			'id'          => $foodeez_lite_shortname.'_flickr_link',
			'type'        => 'text',
			'desc'        => 'Enter Flickr link.',
			'std'         => '',
			'section'     => 'social_links'
		),
		array(
			'label'       => 'Foursquare Link',
			'id'          => $foodeez_lite_shortname.'_foursquare_link',
			'type'        => 'text',
			'desc'        => 'Enter Foursquare link.',
			'std'         => '',
			'section'     => 'social_links'
		),		
		array(
			'label'       => 'Youtube Link',
			'id'          => $foodeez_lite_shortname.'_youtube_link',
			'type'        => 'text',
			'desc'        => 'Enter Youtube link.',
			'std'         => '',
			'section'     => 'social_links'
		),
	   
		//------ END SOCIAL LINKS SETTINGS SECTION -------------------------
	
		//==================================================================
		// FOOTER SETTINGS SECTION STARTS ==================================
		//==================================================================
		array(
			'label'       => 'Copyright Text',
			'id'          => $foodeez_lite_shortname.'_copyright',
			'type'        => 'textarea',
			'desc'        => 'You can use HTML for links etc..',
			'std'         => '',
			'section'     => 'footer_section'
		),		
		
		//------ END FOOTER SETTINGS SECTION -------------------------------
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}

?>