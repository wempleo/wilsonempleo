<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
*/
global $foodeez_lite_shortname;
?>

<div class="footer-top-border"></div>
	<div class="clearfix"></div>
</div>
<!-- #main --> 

<!-- #footer -->
<div id="footer">
	<div class="container">
		<div class="row-fluid">
			<div class="second_wrapper">
				<?php dynamic_sidebar( 'Footer Sidebar' ); ?>
				<div class="clearfix"></div>
			</div><!-- second_wrapper -->
		</div>
	</div>

	<div class="third_wrapper">
		<div class="container">
			<div class="row-fluid">
				<?php $sktURL = 'http://www.sketchthemes.com/'; ?>
				<div class="copyright span6 alpha omega"> <?php if(foodeez_lite_get_option($foodeez_lite_shortname."_copyright")){ echo stripslashes(foodeez_lite_get_option($foodeez_lite_shortname."_copyright")); } else { echo 'Copyright Text';} ?> </div>
				<div class="owner span6 alpha omega"><?php _e('Foodeez Theme by','foodeez-lite'); ?> <a href="<?php echo $sktURL; ?>" ><?php _e('SketchThemes','foodeez-lite'); ?></a></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div><!-- third_wrapper --> 
</div>
<!-- #footer -->

</div>
<!-- #wrapper -->
	<a href="JavaScript:void(0);" title="Back To Top" id="backtop"></a>
	<?php wp_footer(); ?>
</body>
</html>