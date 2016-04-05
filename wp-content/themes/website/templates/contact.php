<?php
/**
 * Template Name: Contact
 *
 *  @package:   Huecis Wordpress
 *  @author :   Huecis Team
 *  @link   :   http://www.huecis.com
 *  @since  :   1.0
 *  User    :   Tuan Nguyen 
 *  Date    :
 */

get_header(); ?>

	<div class="contact-us-one container">
					
		<div class="contact-map">
			<!-- Map Link -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.210688277135!2d107.59937241408474!3d16.464866033088658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a116ef8a99a1%3A0x9169eaa66a7efd84!2zSMOgIEh1eSBU4bqtcCwgWHXDom4gUGjDuiwgdHAuIEh14bq_LCBUaOG7q2EgVGhpw6puIEh14bq_LCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1457630531093" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		
		<br />
		
		<div class="container">
			
			<div class="row">
				<div class="col-md-2 col-sm-6 col-xs-6">
					<!-- Contact Item -->
					<div class="text-center">
						<!-- Contact No -->
						<div class="contact-item">
							<!-- Icon -->
							<i class="fa fa-phone bg-lblue circle-3"></i>
							<!-- Heading -->
							<h5>Hotline</h5>
							<!-- Paragraph -->
							<p>Mobile: 01208.000012 </br/>
							Phone: 09171.88009</p>
						</div>
						<!-- Contact Mail -->
						<div class="contact-item">
							<i class="fa fa-envelope bg-green circle-3"></i>
							<h5>Mail Us</h5>
							<p>trungtamkidsmusic@gmail.com</p>										
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<!-- Contact Item -->
					<div class="text-center">
						<!-- Contact Address -->
						<div class="contact-item">
							<i class="fa fa-building-o bg-red circle-3"></i>
							<h5>Địa chỉ</h5>
							<p>03 – Hà Huy Tập – Huế</p>
						</div>
						<!-- contact Info -->
						<div class="contact-item">
							<i class="fa fa-calendar bg-purple circle-3"></i>
							<h5>Giờ mở cửa</h5>
							<p> Sáng : 7:30 to 11:30 <br />
								Chiều : 1:30 to 5:00<br />
								Tất cả các ngày trong tuần
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-6">
					<div class="contact-item">
						<!-- Contact Form -->
						<div class="contact-form">
							<h5>Gửi Email Liên Hệ</h5>
							<!-- Form -->
							<form class="form" role="form">
								<!-- Form Group -->
								<div class="form-group">
									<input type="text" class="form-control" id="name" placeholder="Họ và Tên">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="email" placeholder="Email">
								</div>
								<div class="form-group">
									<textarea class="form-control" id="comments" rows="7" placeholder="Nội dung"></textarea>
								</div>
								<!-- Button -->
								<button type="button" class="btn btn-red">Gửi</button>&nbsp;
								<button type="button" class="btn btn-default">Cancel</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-6">
					<div class="contact-item">
						<!-- Social -->
						<div class="brand-bg">
							<!-- Heading -->
							<h5>Tìm chúng tôi</h5>
							<!-- Order List -->
							<ul class="list-unstyled">
								<!-- Social Media Icons -->
								<li><a href="#" class="facebook"><i class="fa fa-facebook circle-2"></i> Facebook</a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter circle-2"></i> Twitter</a></li>
								<li><a href="#" class="google-plus"><i class="fa fa-youtube circle-2"> </i> Youtube</a></li>
								<li><a href="#" class="linkedin"><i class="fa fa-linkedin circle-2"></i> Youtube</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
							
		</div>
	</div>

<?php get_footer(); ?>