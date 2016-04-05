<?php
/**
 * 	The template for displaying pages
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

	<div class="page-heading-two">

		<div class="container">

			<h2><?php the_title(); ?></h2>

			<?php if ( function_exists('yoast_breadcrumb') ) : ?>

				<?php yoast_breadcrumb('<ol class="breads">','</ol>'); ?>

			<?php endif; ?>

			<div class="clearfix"></div>
		</div>
	</div>

	<div class="blog-one">

		<div class="container">

			<div class="row">
				<!-- Start Content Archive -->
				<div class="col-md-8 col-sm-8 col-xs-12">

					<?php 

						while ( have_posts() ) : the_post();

							get_template_part( 'content', 'page' );

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
