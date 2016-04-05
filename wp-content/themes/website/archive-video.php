<?php
/**
 * 	The template for displaying category, archive.
 *
 *	@package: 	Huecis Wordpress
 * 	@author :   Huecis Team
 * 	@link 	:   http://www.huecis.com
 * 	@since 	:	1.0
 * 	User 	: 	Tuan Nguyen
 * 	Date 	:	06032016-1500 PM	
 */
?>

<?php get_header(); ?>


				
	<div class="page-heading-one">
		<h2><?php if(ot_get_option('video_title')){ echo ot_get_option('video_title'); }else{ echo "Video"; } ?></h2>
		<p class="bg-color"><?php if(ot_get_option('video_desc')){ echo ot_get_option('video_desc'); } ?></p>
	</div>
	
<!-- Page heading one ends -->

<div class="container">
	<div class="blog-masonry">
		
	<?php 
		$limit = 16;

		$query = query_post_type('video', $limit, $paged);
	?>
		
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