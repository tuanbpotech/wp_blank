<?php
/**
 *  @package:   Huecis Wordpress
 *  @author :   Huecis Team
 *  @link   :   http://www.huecis.com
 *  @since  :   1.0
 *  User    :   Tuan Nguyen 
 *  Date    :
 *
 *	========= List item in function ===============
 *
 *	1. 	Sidebar main
 *	2. 	Sidebar left
 *	3. 	Sidebar right
 *	4. 	Footer 1
 *	5. 	Footer 2
 *	6. 	Footer 3
 *	7. 	Footer 4
 *
 *	===============================================*/

function theme_widgets_init() {

	// Sidebar main
	register_sidebar( array(
		'name'          => __( 'Sidebar main', 'theme' ),
		'id'            => 'sidebar-main',
		'description'   => __( 'Add widgets here to appear in your sidebar main.', 'TuanNguyen_theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// Sidebar left
	register_sidebar(array(
		'name'			=> __( 'Sidebar left', 'theme' ),
		'id'			=> 'sidebar-left',
		'description'	=> __( 'Widgets in this area are used in the sidebar left.', 'TuanNguyen_theme' ),
		'before_widget'	=> '<div class="sidebar-widget %2$s clr">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	));

	// Sidebar right
	register_sidebar(array(
		'name'			=> __( 'Sidebar right', 'theme' ),
		'id'			=> 'sidebar-right',
		'description'	=> __( 'Widgets in this area are used in the sidebar right.', 'TuanNguyen_theme' ),
		'before_widget'	=> '<div class="sidebar-widget %2$s clr">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	));

	// Footer 1
	register_sidebar(array(
		'name'			=> __( 'Footer 1', 'theme' ),
		'id'			=> 'footer-one',
		'description'	=> __( 'Widgets in this area are used in the first footer one.', 'TuanNguyen_theme' ),
		'before_widget'	=> '<div class="footer-widget %2$s clr">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	));
	// Footer 2
	register_sidebar(array(
		'name'			=> __( 'Footer 2', 'theme' ),
		'id'			=> 'footer-two',
		'description'	=> __( 'Widgets in this area are used in the second footer two.', 'TuanNguyen_theme' ),
		'before_widget'	=> '<div class="footer-widget %2$s clr">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	));

	// Footer 3
	register_sidebar(array(
		'name'			=> __( 'Footer 3', 'theme' ),
		'id'			=> 'footer-three',
		'description'	=> __( 'Widgets in this area are used in the third footer three.', 'TuanNguyen_theme' ),
		'before_widget'	=> '<div class="footer-widget %2$s clr">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	));

	// Footer 4
	register_sidebar(array(
		'name'			=> __( 'Footer 4', 'theme' ),
		'id'			=> 'footer-four',
		'description'	=> __( 'Widgets in this area are used in the third footer four.', 'TuanNguyen_theme' ),
		'before_widget'	=> '<div class="footer-widget %2$s clr">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	));
}
add_action( 'widgets_init', 'theme_widgets_init' );