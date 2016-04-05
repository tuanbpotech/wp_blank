<?php
/**
 * 	The default template for displaying content
 *
 *	@package: 	Huecis Wordpress
 * 	@author :   Huecis Team
 * 	@link 	:   http://www.huecis.com
 * 	@since 	:	1.0
 * 	User 	: 	Tuan Nguyen	
 * 	Date 	:	
 */
?>


<?php if ( is_archive() ) :?> 
	
	<div class="blog-one-item">
		<!-- blog One Img -->
		<div class="blog-one-img">
			<!-- Image -->
			<?php $title = get_the_title(); ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium', array('class'=>'img-responsive img-thumbnail', 'alt' => $title )); ?></a>
		</div>
		<!-- blog One Content -->
		<div class="blog-one-content">
			<!-- Heading -->
			<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			<!-- Blog meta -->
			<div class="blog-meta">
				<!-- Date -->
				<a href="#"><i class="fa fa-calendar"></i> &nbsp; <?php the_date('d/m/Y'); ?></a> &nbsp; 
				<!-- Author -->
				<a href="#"><i class="fa fa-user"></i> &nbsp; <?php the_author() ?></a> &nbsp;
				<!-- Comments -->
				<a href="#"><i class="fa fa-comments"></i> &nbsp; <span class="fb-comments-count" xid="<?php the_ID(); ?>"></span> bình luận</a>
			</div>
			<!-- Paragraph -->
			<p><?php echo wp_trim_words( get_the_excerpt(), 55 ); ?></p>
		</div>
	</div>

<?php elseif( is_single() ):?>

	<article class="blog-one-content">

		<header class="entry-header">

			<?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>

			<div class="blog-meta">
				<!-- Date -->
				<a href="#"><i class="fa fa-calendar"></i> &nbsp; <?php the_date('d/m/Y'); ?></a> &nbsp; 
				<!-- Author -->
				<a href="#"><i class="fa fa-user"></i> &nbsp; <?php the_author() ?></a> &nbsp;
				<!-- Comments -->
				<a href="#"><i class="fa fa-comments"></i> &nbsp; <span class="fb-comments-count" xid="<?php the_ID(); ?>"></span> bình luận</a>
			</div>
		</header>

		<div class="entry-content">
			<div class="description">
				<?php if (get_field('source')) { echo "<span class='pull-left'>(".get_field('source')."):&nbsp;</span>"; } the_excerpt(); ?>
			</div>
			<?php the_content(); ?>
		</div>

		<foote>
			<p class="text-right"><b></b><?php if(get_field('actor')){ echo "<i>Tác giả: ". get_field('actor')."</i>"; } ?><br/><b></b><?php if(get_field('source')){ echo "<i>Nguồn: ".get_field('source')."</i>"; } ?></p>
		</footer><!-- .entry-footer -->
	
	</article><!-- #post-## -->

	<div class="well">
		<span class="brand-bg">
			<a href="#" class="facebook"><div class="fb-like" xid="<?php the_ID(); ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div></a>
			<a href="#"><div class="g-plusone" data-size="medium" data-annotation="none" data-width="100"></div></a>
		</span>
	</div>
	<div class="block-heading-two">
		<h3><span>Các tin khác</span></h3>
		<ul class="list-6">
			<?php  $postID = $wp_query->get_queried_object_id(); ?>

			<?php $categories = get_the_category(); ?>

			<?php foreach ( $categories as $category ) : ?>

			 	<?php $query = get_post_relead($category->term_id, $postID, 10);  ?> 
			    
		    	<?php while ($query->have_posts()) : $query->the_post(); ?>
			
					<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?> - <i>(<?php the_date('d/m/Y'); ?>)</i></a></li>
				
			<?php endwhile; ?>
		
			<?php endforeach; ?>
		</ul>

	</div>
	<hr>

	<div class="block-heading-two">
		<h3><span>Bình luận</span></h3>
		<div class="fb-comments" xid="<?php the_ID(); ?>" data-width="100%" data-numposts="3"></div>
	</div>
<?php endif; ?>

