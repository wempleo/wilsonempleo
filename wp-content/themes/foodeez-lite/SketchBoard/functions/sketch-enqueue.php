<?php
global $foodeez_lite_themename;
global $foodeez_lite_shortname;

/***********************************************
*  ENQUQUE CSS AND JAVASCRIPT
************************************************/
//ENQUEUE JQUERY 
function foodeez_lite_script_enqueqe() {
	global $foodeez_lite_shortname;
	if(!is_admin()) {
		wp_enqueue_script('foodeez_lite_componentssimple_slide', get_template_directory_uri() .'/js/custom.js',array('jquery'),'1.0',1 );
		wp_enqueue_script("comment-reply");
	}

}
add_action('init', 'foodeez_lite_script_enqueqe');


//ENQUEUE STYLE FOR IE BROWSER
function foodeez_lite_IE_enqueue_scripts() {
	global $is_IE;
	if($is_IE ) {
		if ( !is_admin() ) {
			wp_register_style( 'ie-style', get_template_directory_uri().'/css/ie-style.css', false, $theme->Version );
			wp_enqueue_style( 'ie-style' );
			wp_register_style( 'awesome-theme-stylesheet', get_template_directory_uri().'/css/font-awesome-ie7.css', false, $theme->Version );
			wp_enqueue_style( 'awesome-theme-stylesheet' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'foodeez_lite_IE_enqueue_scripts' );

//ENQUEUE FRONT SCRIPTS
function foodeez_lite_theme_stylesheet()
{
	global $foodeez_lite_themename;
	global $foodeez_lite_shortname;
	if ( !is_admin() ) 
	{
		$theme = wp_get_theme();
		wp_enqueue_script('hoverIntent');
		wp_enqueue_script('foodeez_lite_superfish', get_template_directory_uri().'/js/superfish.js',array('jquery'),true,'1.0');
		wp_enqueue_script('foodeez_lite_AnimatedHeader', get_template_directory_uri().'/js/cbpAnimatedHeader.js',array('jquery'),true,'1.0');
		wp_enqueue_script('foodeez_lite_easing_slide',get_template_directory_uri().'/js/jquery.easing.1.3.js',array('jquery'),'1.0',true);
		wp_enqueue_script('foodeezt_waypoints',get_template_directory_uri().'/js/waypoints.min.js',array('jquery'),'1.0',true );
		
		wp_enqueue_style('foodeez-style', get_stylesheet_uri());
		wp_enqueue_style('foodeez-animation-stylesheet', get_template_directory_uri().'/css/skt-animation.css', false, $theme->Version);
		wp_enqueue_style('sktawesome-theme-stylesheet', get_template_directory_uri().'/css/font-awesome.css', false, $theme->Version);

		
		/*SUPERFISH*/
		wp_enqueue_style( 'sktddsmoothmenu-superfish-stylesheet', get_template_directory_uri().'/css/superfish.css', false, $theme->Version);
		wp_enqueue_style( 'bootstrap-responsive-theme-stylesheet', get_template_directory_uri().'/css/bootstrap-responsive.css', false, $theme->Version);
		
		
		/*GOOGLE FONTS*/
		wp_enqueue_style( 'googleFontsDancing','//fonts.googleapis.com/css?family=Dancing+Script', false, $theme->Version);
		wp_enqueue_style( 'googleFontsMuli','//fonts.googleapis.com/css?family=Muli', false, $theme->Version);
	}
}
add_action('wp_enqueue_scripts', 'foodeez_lite_theme_stylesheet');

function foodeez_lite_head() {
	global $foodeez_lite_shortname;
	$foodeez_lite_favicon = "";
	$foodeez_lite_meta = '<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">'."\n";

	if(foodeez_lite_get_option($foodeez_lite_shortname.'_favicon')) {
		$foodeez_lite_favicon = esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_favicon','bizstudio'));
		$foodeez_lite_meta .= "<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"$foodeez_lite_favicon\"/>\n";
	}
	echo $foodeez_lite_meta;

	if(!is_admin()) {
		require_once(get_template_directory().'/includes/foodeez-custom-css.php');
	}
 
}
add_action('wp_head', 'foodeez_lite_head');

//ENQUEUE FOOTER SCRIPT 
function foodeez_lite_footer_script() {
	global $foodeez_lite_shortname;	
	
}
add_action('wp_footer', 'foodeez_lite_footer_script');