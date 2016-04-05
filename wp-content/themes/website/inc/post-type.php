<?php
/**
 *  Defin Custo Post Type and Taxonomy Website
 *
 *  @package:   Huecis Wordpress
 *  @author :   Huecis Team
 *  @link   :   http://www.huecis.com
 *  @since  :   1.0
 *  User    :   Tuan Nguyen 
 *  Date    :
 */


/****************************************************************
 *  Define Custom Post Type
 ****************************************************************/
function custom_post_type(){

    /* Video */
    $label = array(
        'name'                => _x( 'Video', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Video', 'text_domain' ),
        'parent_item_colon'   => __( 'Video:', 'text_domain' ),
        'all_items'           => __( 'All Video', 'text_domain' ),
        'view_item'           => __( 'View Video', 'text_domain' ),
        'add_new_item'        => __( 'Add New Video', 'text_domain' ),
        'add_new'             => __( 'Add Video', 'text_domain' ),
        'edit_item'           => __( 'Edit Video', 'text_domain' ),
        'update_item'         => __( 'update Video', 'text_domain' ),
        'search_items'        => __( 'Search Video', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'labels' => $label, 
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail'
        ),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-video-alt3',
        'can_export' => true, 
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('video', $args);

 
}
add_action('init', 'custom_post_type');


/****************************************************************
 *  Define Custom Post Type
 ****************************************************************/
function toxonomy_int() {

    /* Type Video */
    $labels = array( 'name' => 'Category Video', 'singular' => 'Category Video', 'menu_name' => 'Category Video');
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy('category-video', 'video', $args);

}
add_action( 'init', 'toxonomy_int', 0 );