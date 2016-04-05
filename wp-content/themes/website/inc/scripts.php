<?php
/**
 * 	Load script (css, js) main website
 *
 *	@package: 	TVGroup Wordpress
 * 	@author :   TvGroup Team
 * 	@link 	:   http://www.tvgroup15.com
 * 	@since 	:	1.0
 * 	User 	: 	Tuan Nguyen	
 * 	Date 	:	06032016-1500 PM	
 */
	
/**
	1. Show favicon Fontend
 */
	function blog_favicon() {

		echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';

	}
	add_action('wp_head', 'blog_favicon');

/**
	2. Show favicon Bckend
*/
	function admin_favicon() {

		echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.png" />';

	}
	add_action('admin_head', 'admin_favicon');	

/**
	3. Include JS and CSS Fontend.
 */
	function theme_scripts() {

		// Define URL library.
		$cssUrl = get_template_directory_uri() . '/assets/css';

		$jsUrl	= get_template_directory_uri() . '/assets/js';

		// Load CSS library.

		// Load our main stylesheet.
		wp_enqueue_style( 'style', get_stylesheet_uri() );

		// Add css bootstrap
		wp_enqueue_style( 'bootstrap.min', $cssUrl . '/bootstrap.min.css' , array() );

		wp_enqueue_style( 'font-awesome', $cssUrl . '/font-awesome.min.css' , array() );

		wp_enqueue_style( 'owl.carousel', $cssUrl . '/owl.carousel.css' , array() );

		wp_enqueue_style( 'magnific-popup', $cssUrl . '/magnific-popup.css' , array() );

		wp_enqueue_style( 'style-theme', $cssUrl . '/style.css' , array() );

		wp_enqueue_style( 'skin-lblue-theme', $cssUrl . '/skin-lblue.css' , array() );

		wp_enqueue_style( 'custom-theme', $cssUrl . '/custom.css' , array() );
		
		wp_enqueue_style( 'YouTubePopUp', $cssUrl . '/YouTubePopUp.css' , array() );


		// Load Javascript library.

		wp_enqueue_script( 'jquery', $jsUrl . '/jquery.js', array( 'jquery' ), '1.11.1', true );

		wp_enqueue_script( 'bootstrap-min', $jsUrl . '/bootstrap.min.js', array( 'jquery' ), '1.0', true );

		wp_enqueue_script( 'jquery-placeholders', $jsUrl . '/placeholders.js', array( 'jquery' ), '1.2.1', true );
		
		wp_enqueue_script( 'respond', $jsUrl . '/respond.min.js', array( 'jquery' ), '1.0', true );
		
		wp_enqueue_script( 'magnific-popup', $jsUrl . '/jquery.magnific-popup.min.js', array( 'jquery' ), '1.0', true );
		
		wp_enqueue_script( 'owl-carousel-min', $jsUrl . '/owl.carousel.min.js', array( 'jquery' ), '1.0', true );
		
		wp_enqueue_script( 'html5shiv', $jsUrl . '/html5shiv.js', array( 'jquery' ), '1.0', true );

		wp_enqueue_script( 'main', $jsUrl . '/main.js', array( 'jquery' ), '1.0', true );
		
		wp_enqueue_script( 'custom', $jsUrl . '/custom.js', array( 'jquery' ), '1.0', true );
		
		wp_enqueue_script( 'masonry', $jsUrl . '/masonry.js', array( 'jquery' ), '1.0', true );
		
		wp_enqueue_script( 'YouTubePopUp', $jsUrl . '/YouTubePopUp.jquery.js', array( 'jquery' ), '1.0', true );

		//	Load Jquery comment-reply
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'theme_scripts' );

