<?php
/**
 * 	Custom Query Wordpress.
 *
 *	@package: 	Huecis Wordpress
 * 	@author :   Huecis Team
 * 	@link 	:   http://www.huecis.com
 * 	@since 	:	1.0
 * 	User 	: 	Tuan Nguyen	
 * 	Date 	:
 */


/**
	1. Edit file name when upload server.
 */

	
if( !function_exists('tvgroup_custom_query') ){

	function tvgroup_custom_query($post_type, $cat, $limit){

		$args = array(
		  	'post_type'			=> $post_type,
		  	'posts_per_page'	=>$limit,
		  	'cat' 				=>$cat,
			'order'     		=> 'DESC',
		);

		$query 	= new WP_Query( $args );
		return $query;
	}
}

/*****************************************************************
 	1. LOOP QUERY POST.
 ******************************************************************/

function get_post_category($cat, $limit){

	$args = array(
		'post_type'			=> 'post',
		'cat' 				=> $cat,
		'posts_per_page'	=> $limit,
		'orderby'			=> 'ASC'
	);

	$query = new WP_Query( $args);

	return $query;
}



/******************************************************************************
 	2	LOOP GET CATEGORE CHILD BY CATEGORY PARENT
*******************************************************************************/
function tvgroup_custom_query_cat_child($cat_parent){

	$args = array(

		'child_of'      => $cat_parent,

		'hide_empty'	=> FALSE

	); 

	return  $categories_child = get_categories($args);

}

function query_taxonomy($taxonomy,$post_type,$slug,$limit){

	$args = array(

		'post_type' => $post_type,

		'posts_per_page' => $limit,

		'tax_query' => array(

			array(

				'taxonomy' => $taxonomy,

				'field'    => 'slug',

				'terms'    => $slug

			),
		),
	);

	$query = new WP_Query( $args );

	return $query;
}

/******************************************************************************
 	3	QUERY POST TYPE
*******************************************************************************/

function query_post_type($post_type, $limit, $paged){

	if (is_numeric($paged) && isset($paged)) {

		$paged = $paged;

	}else {

		return null;
	}
	
	$args = array(

		'post_type' => $post_type,

		'posts_per_page' => $limit,

		'paged' =>$paged
	);

	$query = new WP_Query( $args );

	return $query;
}

/******************************************************************************
 	3	QUERY SEARCH
*******************************************************************************/
function query_search(){

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

	$args = array(

		'post_type' => 'post',

		'posts_per_page' => get_option('posts_per_page'),

		'lang'	=>get_languages(),

		'paged' =>$paged,

		's' =>$_GET['s']
	);

	$query = new WP_Query( $args );

	return $query;
}
/******************************************************************************
 	3	GET TAXONOMY SQL
*******************************************************************************/
function get_taxonomy_custom($taxonomy='category'){

	global $wpdb;

	$sql="SELECT t.*,tt.parent,tt.count

		  FROM $wpdb->term_taxonomy AS tt

		  INNER JOIN $wpdb->terms AS t ON (tt.term_id = t.term_id)

		  WHERE tt.taxonomy ='$taxonomy' 

		  ORDER BY t.name ASC;";

	$terms = $wpdb->get_results($sql,ARRAY_A);

	return  $terms;
}



function get_post_relead($cat, $id_post, $limit){

	$args = array(
		'post_type'			=> 'post',
		'cat' 				=> $cat,
		'post__not_in'		=> array( $id_post ),
		'posts_per_page'	=> $limit,
		'orderby'			=> 'ASC'
	);

	$query = new WP_Query( $args);

	return $query;
}