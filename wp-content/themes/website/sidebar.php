<?php
/**
 * 	The sidebar containing the main widget area
 *
 *	@package: 	Huecis Wordpress
 * 	@author :   Huecis Team
 * 	@link 	:   http://www.huecis.com
 * 	@since 	:	1.0
 * 	User 	: 	Tuan Nguyen	
 * 	Date 	:	
 */


if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>

	<div class="s-widget">
		<?php $list_video = ot_get_option('video'); ?>

		<?php if(isset($list_video) && !empty($list_video)): ?>

			<?php foreach($list_video as $value): ?>

				<div class="magazine-item mag-1">
					<iframe width="100%" height="200" src="<?php echo $value['link']; ?>" frameborder="0" allowfullscreen></iframe>
					<h4><a href="<?php echo $value['link']; ?>"><?php echo $value['title']; ?></a></h4>
					<div class="magazine-meta"><?php echo $value['description']; ?></div>
				</div>
				<!-- Magazine item one ends -->

			<?php endforeach; ?>

		<?php endif; ?>
	</div>	
	<hr>

	<!-- Nav tab widget - popular, recent and comments -->
	<div class="s-widget">
		<h5><i class="fa fa-table color"></i> Xem nhiều nhất</h5>
		<div class="widget-content tabs">
			<div class="nav-tabs-two">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li class="active"><a href="#popular" data-toggle="tab">Video</a></li>
					<li><a href="#recent" data-toggle="tab">Hình ảnh</a></li>
					<li><a href="#comments" data-toggle="tab">Tin tức &amp; Sự kiện</a></li>
				</ul>
				<!-- Tab content -->
				<div class="tab-content">
					<!-- Popular posts -->
					<div class="tab-pane fade in active" id="popular">
						<ul>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/1.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/2.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Temporibus autem quibusdam et aut officiis  aut rerum</span>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/3.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Voluptates repudiandae sint et molestiae non recusand</span>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/4.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/1.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/2.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Temporibus autem quibusdam et aut officiis  aut rerum</span>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/3.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Voluptates repudiandae sint et molestiae non recusand</span>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/4.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/3.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Voluptates repudiandae sint et molestiae non recusand</span>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/4.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
									<div class="clearfix"></div>
								</a>
							</li>
						</ul>
					</div>
					<!-- Recent posts -->
					<div class="tab-pane fade" id="recent">
						<div class="widget-content gallery">
							<a href="img/gallery/small/1.jpg" class="lightbox"><img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail"></a>
							<a href="img/gallery/small/2.jpg" class="lightbox"><img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail"></a>
							<a href="img/gallery/small/3.jpg" class="lightbox"><img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/gallery/small/3.jpg" alt="" class="img-responsive img-thumbnail"></a>
							<a href="img/gallery/small/1.jpg" class="lightbox"><img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail"></a>
							<a href="img/gallery/small/2.jpg" class="lightbox"><img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail"></a>
							<a href="img/gallery/small/3.jpg" class="lightbox"><img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/gallery/small/3.jpg" alt="" class="img-responsive img-thumbnail"></a>
							<a href="img/gallery/small/1.jpg" class="lightbox"><img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail"></a>
							<a href="img/gallery/small/2.jpg" class="lightbox"><img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail"></a>
						</div>													
					</div>
					<!-- Recent comments -->
					<div class="tab-pane fade" id="comments">
						<ul>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/1.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/2.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Temporibus autem quibusdam et aut officiis  aut rerum</span>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/3.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Voluptates repudiandae sint et molestiae non recusand</span>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<!-- Item image -->
									<img src="http://trungtamkidsmusic.com/wp-content/themes/website/assets/img/user/4.jpg" alt="" class="img-responsive img-thumbnail">
									<!-- Item title -->
									<span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
									<div class="clearfix"></div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Tag Widget -->

<?php endif; ?>
