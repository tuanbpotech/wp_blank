<?php
/**
 * 	Create function shortcode.
 *
 *	@package: 	Huecis Wordpress
 * 	@author :   Huecis Team
 * 	@link 	:   http://www.huecis.com
 * 	@since 	:	1.0
 * 	User 	: 	Tuan Nguyen	
 * 	Date 	:	
 *
 *	========= List function in class ===============
 *
 *	1. 	Construct
 *	2. 	Login Page
 *	3. 	Widget Custom.
 *	4. 	Dashboard Admin
 *	5.	Edit display custom.
 *
 *	================================================*/


if ( ! class_exists( 'theme_custom_admin' ) ) {

class theme_custom_admin {

/**
	1.	Class Constructor.
*/
	public function __construct() {

		//	Remove
		//remove_action('welcome_panel','wp_welcome_panel');
		remove_filter('authenticate', 'wp_authenticate_username_password', 20);

		//	Login Page
		add_action( 'authenticate', array( &$this, 'login_email' ), 20, 3);
		add_action( 'login_redirect', array( &$this, 'admin_login_redirect' ), 10, 3);
		add_action( 'login_head', array( &$this, 'login_css' ) );
		add_action( 'login_headerurl', array( &$this, 'my_login_logo_url' ) );
		add_action( 'login_headertitle', array( &$this, 'my_login_logo_url_title' ) );

		//	Widget Custom.
		add_action( 'widgets_init', array( &$this, 'off_widgets' ), 11 );
		add_filter( 'widget_text', array( &$this, 'insert_php_code_in_widget' ) );
		
		//	Dashboard Admin
		// add_action( 'admin_menu', array( &$this, 'remove_menus' ) );
		add_action( 'wp_dashboard_setup', array( &$this, 'remove_dashboard_widgets' ) );
		//add_action( 'welcome_panel', array( &$this, 'st_welcome_panel' ) );
		add_action( 'wp_before_admin_bar_render', array( &$this, 'remove_wp_admin_bar_logo' ) );

		//	Edit display custom.
		add_action( 'admin_enqueue_scripts', array( &$this, 'my_admin_theme_style' ) );
		add_action( 'wp_handle_upload_prefilter', array( &$this, 'custom_upload_filter' ) );
		add_action( 'admin_footer_text', array( &$this, 'remove_footer_admin' ) );
		add_action( 'manage_posts_columns', array( &$this, 'add_thumbnail_column' ), 5 );
		add_action( 'manage_posts_custom_column', array( &$this, 'display_thumbnail_column' ), 5, 2);
		add_action( 'manage_pages_columns', array( &$this, 'custom_pages_columns' ) );
		add_action( 'manage_pages_custom_column', array( &$this, 'custom_page_column_content' ), 10, 2);
		add_action( 'mce_buttons', array( &$this, 'enable_more_buttons' ) );

	}


/**
	2.	Login Page
*/
	//Login Email
	function login_email ($user, $email, $password){	

		if(empty($email) || empty ($password)){        
			$error = new WP_Error();

			if(empty($email)){

				$error->add('empty_username', __('<strong>ERROR</strong>: Email field is empty.'));

			}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

				$error->add('invalid_username', __('<strong>ERROR</strong>: Email is invalid.'));

			}

			if(empty($password)){

				$error->add('empty_password', __('<strong>ERROR</strong>: Password field is empty.'));
			}

			return $error;
		}

		$user = get_user_by('email', $email);

		if(!$user){

			$error = new WP_Error();

			$error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
			
			return $error;

		}else{ 

			if(!wp_check_password($password, $user->user_pass, $user->ID)){

				$error = new WP_Error();

				$error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
				
				return $error;

			}else{
				return $user;

			}
		}
	}

	//Redirect Url after login.
	function admin_login_redirect( $redirect_to, $request, $user ){

		global $user;

		if( isset( $user->roles ) && is_array( $user->roles ) ) {

			if( in_array( "administrator", $user->roles ) ) { return $redirect_to; } 

			else { return home_url(); }

		}else{ return $redirect_to; }

	}
	
	// Add custom css	
	function login_css() {
		wp_enqueue_style( 'login_css', get_template_directory_uri() . '/inc/assets/admin-style.css' );
	}
	
	// Change url Logo login
	function my_login_logo_url() {
	    return "http://huecis.com/";
	}
	
	// Change title Logo Login
	function my_login_logo_url_title() {
	    return 'Huecis Team Freelance';
	}

/**
	3.	Widget Custom
*/

	// Remove widget
	function off_widgets() {

		unregister_widget('WP_Widget_Pages');   //Page Widget
		unregister_widget('WP_Widget_Calendar');   //Calender Widget
		unregister_widget('WP_Widget_Archives');   //Archive Widget
		unregister_widget('WP_Widget_Links');   //Links Widget
		unregister_widget('WP_Widget_Meta');   //Meta Widget
		unregister_widget('WP_Widget_Search');   //Search Widget
		unregister_widget('WP_Widget_Text');   //Text Widget
		unregister_widget('WP_Widget_Categories');   //Categories Widget
		unregister_widget('WP_Widget_Recent_Posts');  //Recent Posts Widget
		unregister_widget('WP_Widget_Recent_Comments');  //Recent Comments Widget
		unregister_widget('WP_Widget_RSS');   //RSS Widget
		unregister_widget('WP_Widget_Tag_Cloud');   //Tag Cloud Widget
		unregister_widget('WP_Nav_Menu_Widget');   //Menus Widget

	}

	// Insert code PHP in widget
	function insert_php_code_in_widget() {

		if (strpos($text, '<' . '?') !== false) {
			ob_start();
			eval('?' . '>' . $text);
			$text = ob_get_contents();
			ob_end_clean();
		}
		return $text;

	}

/**
	4.	 Dashboard.
*/
	// Remove Menu Dashboard
	function remove_menus(){

		remove_menu_page( 'index.php' );                  //Dashboard
		remove_menu_page( 'edit.php' );                   //Posts
		remove_menu_page( 'upload.php' );                 //Media
		remove_menu_page( 'edit.php?post_type=page' );    //Pages
		remove_menu_page( 'edit-comments.php' );          //Comments
		remove_menu_page( 'themes.php' );                 //Appearance
		remove_menu_page( 'plugins.php' );                //Plugins
		remove_menu_page( 'users.php' );                  //Users
		remove_menu_page( 'tools.php' );                  //Tools
		remove_menu_page( 'options-general.php' );        //Settings

	}

	//Remove widget dashboard.
	function remove_dashboard_widgets() {

		global $wp_meta_boxes;
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
		//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
		//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	}

	// Add new widget welcome
	function st_welcome_panel() {
		echo
		'<div class="welcome-panel-content">'
		.'<h3>Welcome to Dashboard !</h3>'
		.'<ul>'
		.'<li>Web programmer by <a href="http://tuannguyen.tk/" target="_blank" title="TuanNguyen">TuanNguyen.</a> For more information, please! contact us.</li>'
		.'<li>Email: <a href="mailto:anhtuannguyen10590@gmail.com" title="anhtuannguyen10590@gmail.com">anhtuannguyen10590@gmail.com.</a></li>'
		.'<li>Phone: <a href="rel:+8401689938824" title="+84 01689938824">+84-0168.993.8824.</a></li>'
		.'<li>Skype: <a href="javascript:void(0)" title="natuan90">natuan90</a></li>'
		.'</ul>'
		.'</div>';
	}
	
	//	Remove logo admin bar wordpress
	function remove_wp_admin_bar_logo() {

		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');

	}

/**
	5.	Edit display custom.
*/
	
	// Include css file
	function my_admin_theme_style() {

		wp_enqueue_style('my-admin-style', get_template_directory_uri() . '/inc/assets/admin-style.css');

	}

	//	Edit file name when upload server.
	function custom_upload_filter( $file ){

	    $file['name'] = 'website-name' . $file['name'];
	    return $file;

	}

	//	Edit file name when upload server.
	function remove_footer_admin () {

		echo '&copy; 2016 - Huecis Team Freelance - <a href="https://huecis.com/" target="blank" title="Huecis Team">Website</a>';
	
	}

	//	How to Add a Featured Image Column to Post
	function add_thumbnail_column($columns){

		$columns['new_post_thumb'] = __('Featured Image');
		return $columns;
	}

	function display_thumbnail_column($column_name, $post_id){

		switch($column_name){
			case 'new_post_thumb':
			$post_thumbnail_id = get_post_thumbnail_id($post_id);
			if ($post_thumbnail_id) {
				$post_thumbnail_img = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail' );
				echo '<img width="100" src="' . $post_thumbnail_img[0] . '" />';
			}else{
				echo '<img width="100" src="' . get_template_directory_uri() . '/inc/assets/no-image.jpg" />';
			}
			break;
		}
	}

	//	How to Add a Featured Image Column to Page
	function custom_pages_columns( $columns ) {

		$columns['new_page_thumb'] = __('Featured Image');
		return $columns;
	}

	function custom_page_column_content( $column_name, $post_id ) {
		switch($column_name){
			case 'new_page_thumb':
			$post_thumbnail_id = get_post_thumbnail_id($post_id);
			if ($post_thumbnail_id) {
				$post_thumbnail_img = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail' );
				echo '<img width="100" src="' . $post_thumbnail_img[0] . '" />';
			}else{
				echo '<img width="100" src="' . get_template_directory_uri() . '/inc/assets/no-image.jpg" />';
			}
			break;
		}
	}


	//Display button MCE
	function enable_more_buttons($buttons) {

	    $buttons[] = 'hr';

	    $buttons[] = 'fontselect';

	    $buttons[] = 'backcolor';

	    return $buttons;
	}

}

/**
	Edit display custom.
*/


}
$theme_custom_admin = new theme_custom_admin;