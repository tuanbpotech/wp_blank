<?php
/**
 * 	The template for displaying category, archive.
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

	<?php
		$post_type = 'video';
		$taxonomy = 'chuyen-muc-video';

		$tax_id =  $wp_query->get_queried_object_id();
		$terms = get_term( $tax_id, $taxonomy, ARRAY_A );
		$per_page = '20';
		$query = query_taxonomy($taxonomy, $post_type, $terms['slug'], $per_page);
	?>
				
	<div class="page-heading-one">
		<h2><?php echo $terms['name']; ?></h2>
		<p class="bg-color"><?php echo $terms['description']; ?></p>
	</div>
	
<!-- Page heading one ends -->

<div class="container">
	<div class="blog-masonry">
		
	<?php if( count($query) > 0 ): ?>

		<?php while($query->have_posts()) : $query->the_post(); ?>		
		
			<div class="item">

				<div class="grid-entry">

					<div class="grid-img">
						<?php $link = get_field('link_video'); ?>
						<!-- Image -->
						<img src="<?php echo video_image($link); ?>" class="img-responsive" alt="<?php the_title(); ?>">
						
						<!-- Grid Image Hover Effect -->
						<span class="grid-img-hover"></span>
						<a id="video" href="<?php echo $link; ?>">
							<i class="fa fa-search hover-icon"></i>
						</a>

					</div>
					<div class="entry-info">
						<h4><?php the_title(); ?></h4>
					</div>
				</div>
			</div>

		<?php endwhile; wp_reset_postdata(); ?>	

	<?php endif; ?>	

		<script type="text/javascript">
			jQuery(function(){
				jQuery("a#video").YouTubePopUp();
			});
		</script>
		
		<div class="clearfix"></div>
	</div>
	
	<hr />
	
	<!-- Pagination -->
	<!-- <ul class="pagination">
		List
		<li><a href="#">&laquo;</a></li>
		<li class="active"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">&raquo;</a></li>
	</ul> -->
	
</div>
<?php get_footer(); ?>