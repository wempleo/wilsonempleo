<?php
/**
* The Header for our theme.
*/
?><!DOCTYPE html>
<?php global $foodeez_lite_shortname, $foodeez_lite_themename; ?>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<!--[if IE 9]>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
<![endif]-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div id="wrapper" class="skepage">
	
<div class="slider-top clearfix">
		<div class="header-topbar clearfix" >
			<div class="container">      
					<div class="row-fluid">   
						<!-- #logo -->
						<div id="logo" class="span3">
							<?php if(foodeez_lite_get_option($foodeez_lite_shortname."_logo_img")){ ?>
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" ><img class="logo" src="<?php echo foodeez_lite_get_option($foodeez_lite_shortname."_logo_img"); ?>" alt="<?php echo foodeez_lite_get_option($foodeez_lite_shortname."_logo_alt"); ?>" /></a>
							<?php } else{ ?>
							<!-- #description -->
							<div id="site-title" class="logo_desp">
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" ><?php bloginfo('name'); ?></a> 
								<div id="site-description"><?php bloginfo( 'description' ); ?></div>
							</div>
							<!-- #description -->
							<?php } ?>
						</div>
						<!-- #logo -->
						<div class="span4">
							<!-- Top Contact Info -->
							<div class="topbar_info">
								<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_topbar_contact')){?><i class="fa fa-phone"></i><span class="head-phone-txt"><?php _e('Call Us&nbsp;:','foodeez-lite'); ?></span>&nbsp;<span class="head-phone"><a href="tel:<?php echo foodeez_lite_get_option($foodeez_lite_shortname.'_topbar_contact','foodeez-lite'); ?>"><?php echo foodeez_lite_get_option($foodeez_lite_shortname.'_topbar_contact','foodeez-lite'); ?></a></span><?php } ?>
							</div>
							<!-- Top Contact Info -->
						</div>
						<div class="span5">
							<!-- Social Links Section -->
							<div class="social_icon">
								<ul class="clearfix">
									<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_fbook_link')){?><li class="fb-icon"><a target="_blank" href="<?php echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_fbook_link','timeliner')); ?>"><span class="fa fa-facebook" title="Facebook"></span></a></li><?php } ?>
									<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_twitter_link')){?><li class="tw-icon"><a target="_blank" href="<?php echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_twitter_link','timeliner')); ?>"><span class="fa fa-twitter" title="Twitter"></span></a></li><?php } ?>
									<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_gplus_link')){ ?><li class="gplus-icon"><a target="_blank" href="<?php echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_gplus_link','timeliner')); ?>"><span class="fa fa-google-plus" title="Google Plus"></span></a></li><?php } ?>
									<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_pinterest_link')){ ?><li class="pinterest-icon"><a target="_blank" href="<?php echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_pinterest_link','timeliner')); ?>"><span class="fa fa-pinterest" title="Pinterest"></span></a></li><?php } ?>
									<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_linkedin_link')){ ?><li class="linkedin-icon"><a target="_blank" href="<?php echo foodeez_lite_get_option($foodeez_lite_shortname.'_linkedin_link','timeliner'); ?>"><span class="fa fa-linkedin" title="Linkedin"></span></a></li><?php } ?>
									<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_foursquare_link')){ ?><li class="foursquare-icon"><a target="_blank" href="<?php echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_foursquare_link','timeliner')); ?>"><span class="fa fa-foursquare" title="Foursquare"></span></a></li><?php } ?>
									<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_flickr_link')){ ?><li class="flickr-icon"><a target="_blank" href="<?php echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_flickr_link','timeliner')); ?>"><span class="fa fa-flickr" title="Flickr"></span></a></li><?php } ?>
									<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_youtube_link')){ ?><li class="youtube-icon"><a target="_blank" href="<?php echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_youtube_link','timeliner')); ?>"><span class="fa fa-youtube-play" title="Youtube"></span></a></li><?php } ?>
									<li><a href="javascript:void(0);" class="strip-icon search-strip" title="search"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
							<!-- Social Links Section -->
						</div>
					</div>
			</div>					
		</div><!-- header-topbar -->
		<!-- search-strip -->
		<div class="hsearch" >
			<div class="container">
					<div class="row-fluid">
						<div class="skt-s-form">
							<form method="get" id="header-searchform" action="<?php echo esc_url(home_url('/')); ?>">
								<fieldset>
									<input type="text" value="" placeholder="Search Here ..." id="s" name="s">
									<input type="submit" value="Search" id="header-searchsubmit">
								</fieldset>
							</form>
							<div class="hsearch-close"><i class="fa fa-times"></i></div>
						</div>
					</div>
			</div>
		</div>
		<div id="header" class="skehead-headernav clearfix">
				<div id="skehead">
					<div class="container">      
						<div class="row-fluid"> 
							<!-- navigation-->
							<div class="top-nav-menu span10">
							<?php 
								if( function_exists( 'has_nav_menu' ) && has_nav_menu( 'Header' ) ) {
									wp_nav_menu(array( 'container_class' => 'ske-menu', 'container_id' => 'skenav', 'menu_id' => 'menu-main','menu' => 'Primary Menu','theme_location' => 'Header' )); 
								} else {
								?>
								<div class="ske-menu" id="skenav">
									<ul id="menu-main" class="menu">
										<?php wp_list_pages('title_li=&depth=0'); ?>
									</ul>
								</div>
								<?php } ?>
							</div>
							<!-- #navigation --> 
							<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_rbtn_link')){ ?>
								<div class="span2">
									<a href="<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_rbtn_link')){ echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_rbtn_link','foodeez-lite')); } ?>" class="res-button"><?php _e('Reserve Now','foodeez-lite'); ?></a>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<!-- #skehead -->
		</div>
<!-- #header -->
		<div class="header-clone"></div>
</div>		
<!-- header image section -->
  <?php $classes = get_body_class(); ?>
  <?php if(in_array('front-page',$classes)) {  include("includes/front-header-image-section.php");} ?>



<div id="main" class="clearfix">