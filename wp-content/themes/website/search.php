<?php
/**
 * 	The template for displaying search results pages.
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

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'blank_theme' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'blank_theme' ),
				'next_text'          => __( 'Next page', 'blank_theme' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blank_theme' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
