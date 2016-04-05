<?php
/**
 * 	The template for displaying all single posts and attachments
 *
 *	@package: 	Huecis Wordpress
 * 	@author :   Huecis Team
 * 	@link 	:   http://www.huecis.com
 * 	@since 	:	1.0
 * 	User 	: 	Tuan Nguyen	
 * 	Date 	:
 */
?>

<?php get_header(); ?>
	
	<!-- Start Breadcrum -->
	<div class="page-heading-two">

		<div class="container">

			<h2><?php foreach((get_the_category()) as $category) { echo $category->cat_name; } ?></h2>

			<?php if ( function_exists('yoast_breadcrumb') ) : ?>

				<?php yoast_breadcrumb('<ol class="breads">','</ol>'); ?>

			<?php endif; ?>

			<div class="clearfix"></div>
		</div>
	</div>
	<!-- End Breadcrum -->
	
	<div class="single">

		<div class="container">

			<div class="row">
				<!-- Start Content Archive -->
				<div class="col-md-8 col-sm-8 col-xs-12">

					<?php 

						while ( have_posts() ) : the_post();

							get_template_part( 'content' );

						endwhile;
					?>

				</div>
				<!-- Start Content Archive -->
				
				<!-- Start Sidebar -->
				<div class="sidebar col-md-4 col-sm-4 col-xs-12">
					
					<?php get_sidebar(); ?>

				</div>
				<!-- End Sidebar -->
			</div>
		
		</div>

	</div>
		
<?php get_footer(); ?>

