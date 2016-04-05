<?php
/**
 * 	The template for displaying the header
 *
 *	@package: 	Huecis Wordpress
 * 	@author :   Huecis Team
 * 	@link 	:   http://www.huecis.com
 * 	@since 	:	1.0
 * 	User 	: 	Tuan Nguyen	
 * 	Date 	:	
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<style>
		html{margin-top: 0px!important;}	
	</style>
	<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",38093]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script> 
</head>

<body <?php body_class(); ?>>

	<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '1702297433389536',
			xfbml      : true,
			version    : 'v2.5'
		});
	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<script src="https://apis.google.com/js/platform.js" async defer>{lang: 'vi'}</script>
<!-- Outer Starts -->
<div class="outer">

	<!-- Top bar starts -->
	<div class="top-bar">
		<div class="container">

			<!-- Contact starts -->
			<div class="tb-contact pull-left">
				
				
			</div>
			<!-- Contact ends -->

			<!-- Search section for responsive design -->
			<div class="tb-search pull-left">
				<a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
				<div class="b-dropdown-block">
					<form role="form">
						<!-- Input Group -->
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Nhập từ khóa">
							<span class="input-group-btn">
								<button class="btn btn-color" type="button">Tìm kiếm</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<!-- Search section ends -->

			<!-- Social media starts -->
			<div class="tb-social pull-right">
				<div class="brand-bg text-right">

					
				</div>
			</div>
			<!-- Social media ends -->

			<div class="clearfix"></div>
		</div>
	</div>

	<!-- Top bar ends -->

	<!-- Header One Starts -->
	<div class="header-1">

		<!-- Container -->
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<!-- Logo section -->
					<div class="logo">
						<h1><a href="<?php echo home_url(); ?>">
						</a></h1>
					</div>
				</div>
				<div class="col-md-4 text-right hidden-xs">
					<!-- Search Form -->
					<div class="header-search">
						<form role="form">
							<!-- Input Group -->
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Nhập từ khóa">
								<span class="input-group-btn">
									<button class="btn btn-color" type="button">Tìm kiếm</button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Navigation starts -->

		<div class="navi">
			<div class="container">
				<div class="navy">
				<?php 
					wp_nav_menu( array(
			            'theme_location'    => 'primary',
			            'container'         => FALSE
			        ));

				?>
				</div>
			</div>
		</div>

		<!-- Navigation ends -->

	</div>

	<!-- Header one ends -->

	<div class="main-block">
		
		
