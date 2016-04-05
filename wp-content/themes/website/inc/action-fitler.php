<?php
/**
 * 	Custom action and fitler used in fontend
 *
 *	@package: 	Huecis Wordpress
 * 	@author :   Huecis Team
 * 	@link 	:   http://www.huecis.com
 * 	@since 	:	1.0
 * 	User 	: 	Tuan Nguyen	
 * 	Date 	:
 *
 */

/**
	Add Fitler
 */
	

// ***************************************************************************************************




/**
	All Action 
 */
	add_action( 'pre_get_posts', 'modify_archive_query' );
	add_action( 'wp_head', 'author_tag' );


// ***************************************************************************************************
	//	Query get rand post in archive and main
	function modify_archive_query( $query ) { 
		if( $query->is_archive() && $query->is_main_query() ) :
			$query->set('orderby', 'rand'); 
			$query->set('posts_per_page', '1'); 
		endif;
	}

	//	Custom affter header
	function author_tag(){
		echo "<link rel=\"Team\" href=\"http://tvgroup15.com\" />\n";
		echo "<link rel=\"Author\" href=\"http://tvgroup15.com\" />\n";
	}



	

