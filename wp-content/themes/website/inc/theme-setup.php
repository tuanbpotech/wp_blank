<?php
/**
 * 	Main theme support functions
 *
 *  @package:   Huecis Wordpress
 *  @author :   Huecis Team
 *  @link   :   http://www.huecis.com
 *  @since  :   1.0
 *  User    :   Tuan Nguyen 
 *  Date    :
 *
 *
 *	========= List item in function ===============
 *
 *	1. 	Languages
 *	2. 	Add default posts and comments RSS feed links to head.
 *	3. 	Let WordPress manage the document title.
 *	4. 	Enable support for Post Thumbnails on posts and pages.
 *	5. 	Set post Thumbnail size
 *	6. 	This theme uses wp_nav_menu() in two locations.
 *	7. 	Switch default core markup for search form, comment form, and comments to output valid HTML5.
 *	8. 	Switch default core markup for search form, comment form, and comments to output valid HTML5.
 *	9. 	Enable support for Post Formats.
 *	10. Default color.
 *	11. Setup the WordPress core custom background feature.
 *	12. This theme styles the visual editor to resemble the theme style, specifically font, colors, icons, and column width.
 *	13. Anti spam autolink of WordPress.
 *
 *	===============================================*/

if ( ! function_exists( 'theme_setup' ) ) :

	function theme_setup() {

		//	Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		//	Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		//	Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		//	Set post Thumbnail size		
		set_post_thumbnail_size( 825, 510, true );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu','theme' ),
		));

		register_nav_menus( array(
			'footer' => __( 'Menu Footer','theme' ),
		));

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );

		//	Anti spam autolink of WordPress.
		remove_filter('comment_text', 'make_clickable', 9);

		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}

endif;


add_action( 'after_setup_theme', 'theme_setup' );

function wpdocs_filter_wp_title( $title, $sep ) {
    global $paged, $page;
 
    if ( is_feed() )
        return $title;
 
    // Add the site name.
    $title .= get_bloginfo( 'name' );
 
    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";
 
    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );
 
    return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );

// add shortcode in text widget
add_filter('widget_text', 'do_shortcode');
