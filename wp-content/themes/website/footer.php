<?php
/**
 * 	The template for displaying the footer
 *	
 * 	Contains the closing of the "site-content" div and all content after.
*	@package: 	TVGroup Wordpress
* 	@author :   TvGroup Team
* 	@link 	:   http://www.tvgroup15.com
* 	@since 	:	1.0
* 	User 	: 	Tuan Nguyen	
* 	Date 	:	130316-1000 PM	
 */
?>	


	

		<div class="container magazine">
			<div class="row">
				<div class="col-md-12">
					<h4 class="mag-head"><i class="fa fa-calendar color"></i> </h4>
							
					<div id="class-music" class="row">

							<div class="col-md-12">
								<!-- Magazine item one starts -->
								<div class="magazine-item mag-1">
									<!-- Image -->
									<?php $title = get_the_title(); ?>
									<a href="<?php the_permalink(); ?>" class="lightbox"></a>
									<!-- Heading -->
									<h4 class="text-center"><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h4>
									
								</div>
								<!-- Magazine item one ends -->
							</div>
					</div>
				</div>
			</div>	
		</div>
	

	</div>
	<!-- Main content ends -->

		<div class="foot">
			<div class="container">
				<div class="row">
					<div class="foot-top">
						<div class="col-md-9 col-sm-6"></div>
						<div class="col-md-3 col-sm-6">
							<!-- Foot Item -->
							<div class="foot-item">
								<!-- Heading -->
								<h5 class="bold"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Liên hệ với chúng tôi</h5>
								<!-- Foot Item Content -->
								<div class="foot-item-content address">
									<!-- Heading -->
									<h6 class="bold"><i class="fa fa-home"></i>&nbsp;&nbsp;KIDS MUSIC – STUDIO THÁI THỊNH</h6>
									<!-- Paragraph -->
									<p class="add">Địa chỉ: 03 – Hà Huy Tập – Huế</p>
									<p class="tel"> <i class="fa fa-phone"></i> Tel : 01208.000012 – 09171.88009<br />
										<i class="fa fa-envelope"></i>  Mail : <a href="#">trungtamkidsmusic@gmail.com</a><br />
										<i class="fa fa-calendar"></i> Website : <a href="http://trungtamkidsmusic.com/">trungtamkidsmusic.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- .foot-top -->
					<div class="foot-bot">
						<p class="pull-left">Copyright &copy; 2016 Trung tâm Kids Music & Studio Thái Thịnh - Developed By <a href="http://tvgroup15.com">TVGroup Team</a></p>
						<ul class="list-inline pull-right">
							<li><a href="index.html">Trang chủ</a><li>
							<li><a href="service.html">Dịch vụ</a></li>
							<li><a href="feature.html">Tuyển dụng</a></li>
							<li><a href="about-us.html">Giới thiệu</a></li>
							<li><a href="contact-us.html">Liên hệ</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<!-- .foot-bot -->
				</div>
			</div>
			<!-- .container -->
		</div>
		<!-- .foot -->
	</div>

	<!-- Outer Ends -->		

	<!-- Scroll to top -->
	<span class="totop"><a href="#"><i class="fa fa-angle-up bg-color"></i></a></span>

	<!-- Javascript files -->

	<!-- javascript -->
	<?php wp_footer(); ?>


</body>
</html>
