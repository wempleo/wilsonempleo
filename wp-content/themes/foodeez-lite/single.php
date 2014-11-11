<?php 
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<?php global $foodeez_lite_shortname; ?>
<div class="main-wrapper-item">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
	<div class="bread-title-holder">
		<div class="bread-title-bg-image full-bg-breadimage-fixed"></div>
		<div class="container">
			<div class="row-fluid">
				<div class="container_inner clearfix">
					<h1 class="title"><?php the_title(); ?></h1>
					<?php if ((class_exists('foodeez_lite_breadcrumb_class'))) {$foodeez_lite_breadcumb->custom_breadcrumb();} ?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">	
		<div class="container post-wrap">
			<div class="row-fluid">
				<div id="container" class="span8">
					<div id="content">  
							<div class="post" id="post-<?php the_ID(); ?>">
						
								<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
								<div class="featured-image-shadow-box">
									<?php the_post_thumbnail('full'); ?>
								</div>
								<?php } ?>

								<div class="bread-title">
									<h1 class="title">
										<?php the_title(); ?>
									</h1>
									<div class="clearfix"></div>
								</div>

								<div class="skepost-meta clearfix">
									<span class="author-name"><i class="fa fa-user">&nbsp;</i><?php _e('','foodeez-lite'); the_author_posts_link(); ?> </span>
									<?php if (has_category()) { ?><span class="category"><i class="fa fa-folder">&nbsp;</i><?php _e('','foodeez-lite');?><?php the_category(','); ?></span><?php } ?>
									<?php the_tags('<span class="tags"><i class="fa fa-tag"></i> ',',','</span>'); ?>
									<span class="date"><i class="fa fa-clock-o">&nbsp;</i><?php _e('','foodeez-lite');?> <?php the_time('F j, Y') ?></span>
									<span class="comments"><i class="fa fa-comments">&nbsp;</i><?php _e('','foodeez-lite');?><?php comments_popup_link(__('No Comments ','foodeez-lite'), __('1 Comment ','foodeez-lite'), __('% Comments ','foodeez-lite')) ; ?></span>
								</div>
								<!-- skepost-meta -->

								<div class="skepost clearfix">
									<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'foodeez-lite' ) ); ?>
									<?php wp_link_pages(__('<p><strong>Pages:</strong> ','foodeez-lite'), '</p>', __('number','foodeez-lite')); ?>
								</div>
								<!-- skepost -->

								<div class="navigation"> 
									<span class="nav-previous"><?php previous_post_link( __('&larr; %link','foodeez-lite')); ?></span>
									<span class="nav-next"><?php next_post_link( __('%link &rarr;','foodeez-lite')); ?></span> 
								</div>
								<div class="clearfix"></div>
								<div class="comments-template">
									<?php comments_template( '', true ); ?>
								</div>
							</div>
						<!-- post -->
						<?php endwhile; ?>
						<?php else :  ?>

						<div class="post">
							<h2><?php _e('Post Does Not Exist','foodeez-lite'); ?></h2>
						</div>
						<?php endif; ?>
					</div><!-- content --> 
				</div><!-- container --> 

				<!-- Sidebar -->
				<div id="sidebar" class="span4">
					<?php get_sidebar(); ?>
				</div>
				<!-- Sidebar --> 

			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>