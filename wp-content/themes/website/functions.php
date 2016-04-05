<?php
/**
 * 	Theme functions and definitions.
 *
 *	@package: 	Huecis Wordpress
 * 	@author :   Huecis Team
 * 	@link 	:   http://www.huecis.com
 * 	@since 	:	1.0
 * 	User 	: 	Tuan Nguyen	
 * 	Date 	:
 *
 *	========= List item in function file ===============
 *
 *
 *	===============================================*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/*
 1. Define action and filter.
 */
// Define Contstants
add_action( 'after_setup_theme', 'constants' );
/*
 2. Define Constants.
 */
function constants() {
	define( 'INC_DIR', get_template_directory() .'/inc/' );
	define( 'ASSETS_DIR', get_template_directory() .'/assets/' );
}

/*
 3. Include file
*/
include_once( 'inc/scripts.php');
include_once( 'inc/theme-setup.php');
include_once( 'inc/widgets.php');
include_once( 'inc/functions.php');
include_once( 'inc/post-type.php');
include_once( 'inc/query.php');
include_once( 'inc/admin.php');
include_once( 'inc/shortcode.php');
include_once( 'inc/welcome.php');
include_once( 'inc/action-fitler.php');
//include_once( 'inc/custom-field.php');
