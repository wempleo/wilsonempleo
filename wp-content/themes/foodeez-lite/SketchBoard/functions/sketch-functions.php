<?php
global $foodeez_lite_themename;
global $foodeez_lite_shortname;

if ( !class_exists( 'OT_Loader' )){	
	//THEME SHORTNAME	
	$foodeez_lite_shortname = 'foodeez';	
	$foodeez_lite_themename = 'Foodeez';	
	define('FOODEEZ_LITE_ADMIN_MENU_NAME','Foodeez');
}


/***************** EXCERPT LENGTH ************/
function foodeez_lite_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'foodeez_lite_excerpt_length');

/***************** READ MORE ****************/
function foodeez_lite_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'foodeez_lite_excerpt_more');

/************* CUSTOM PAGE TITLE ***********/
add_filter( 'wp_title', 'foodeez_lite_title' );
function foodeez_lite_title($title)
{
	$foodeez_lite_title = $title;
	if ( is_home() && !is_front_page() ) {
		$foodeez_lite_title .= get_bloginfo('name');
	}
	if ( is_front_page() ){
		$foodeez_lite_title .=  get_bloginfo('name');
		$foodeez_lite_title .= ' | '; 
		$foodeez_lite_title .= get_bloginfo('description');
	}
	if ( is_search() ) {
		$foodeez_lite_title .=  get_bloginfo('name');
	}
	if ( is_author() ) { 
		global $wp_query;
		$curauth = $wp_query->get_queried_object();	
		$foodeez_lite_title .= __('Author: ','foodeez-lite');
		$foodeez_lite_title .= $curauth->display_name;
		$foodeez_lite_title .= ' | ';
		$foodeez_lite_title .= get_bloginfo('name');
	}
	if ( is_single() ) {
		$foodeez_lite_title .= get_bloginfo('name');
	}
	if ( is_page() && !is_front_page() ) {
		$foodeez_lite_title .= get_bloginfo('name');
	}
	if ( is_category() ) {
		$foodeez_lite_title .= get_bloginfo('name');
	}
	if ( is_year() ) { 
		$foodeez_lite_title .= get_bloginfo('name');
	}
	if ( is_month() ) {
		$foodeez_lite_title .= get_bloginfo('name');
	}
	if ( is_day() ) {
		$foodeez_lite_title .= get_bloginfo('name');
	}
	if (function_exists('is_tag')) { 
		if ( is_tag() ) {
			$foodeez_lite_title .= get_bloginfo('name');
		}
		if ( is_404() ) {
			$foodeez_lite_title .= get_bloginfo('name');
		}					
	}
	return $foodeez_lite_title;
}


/*********************************************
*   LIMIT WORDS
*********************************************/

function foodeez_lite_slider_limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}

/********************************************************
	#DEFINE REQUIRED CONSTANTS HERE# &
	#OPTIONAL: SET 'OT_SHOW_PAGES' FILTER TO FALSE#.
	#THIS WILL HIDE THE SETTINGS & DOCUMENTATION PAGES.#
*********************************************************/

//CHECK AND FOUND OUT THE THEME VERSION AND ITS BASE NAME

if(function_exists('wp_get_theme')){
    $foodeez_lite_theme_data = wp_get_theme(get_option('template'));
    $foodeez_lite_theme_version = $foodeez_lite_theme_data->Version;  
}

define( 'FOODEEZ_LITE_OPTS_FRAMEWORK_DIRECTORY_URI', trailingslashit(get_template_directory_uri() . '/SketchBoard/includes/') );	
define( 'FOODEEZ_LITE_OPTS_FRAMEWORK_DIRECTORY_PATH', trailingslashit(get_template_directory() . '/SketchBoard/includes/') );
define( 'FOODEEZ_LITE_THEME_VERSION',$foodeez_lite_theme_version);	
	
add_filter( 'ot_show_pages', '__return_false' );

// REQUIRED: SET 'OT_THEME_MODE' FILTER TO TRUE.
add_filter( 'ot_theme_mode', '__return_true' );

// DISABLE ADD NEW LAYOUT SECTION FROM OPTIONS PAGE.
add_filter( 'ot_show_new_layout', '__return_false' );

// REQUIRED: INCLUDE OPTIONTREE.
require_once get_template_directory() . '/SketchBoard/includes/ot-loader.php';

// THEME OPTIONS
require_once get_template_directory() . '/SketchBoard/includes/options/theme-options.php';


/********************************************
	GET THEME OPTIONS VALUE FUNCTION
*********************************************/
function foodeez_lite_get_option( $option_id, $default = '' ){
	return ot_get_option( $option_id, $default = '' );
}

