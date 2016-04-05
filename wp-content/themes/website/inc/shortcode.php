<?php
/**
 * 	This file create shortcode
 *
 *	@package: 	Huecis Wordpress
 * 	@author :   Huecis Team
 * 	@link 	:   http://www.huecis.com
 * 	@since 	:	1.0
 * 	User 	: 	Tuan Nguyen	
 * 	Date 	:	
 */

/*
 *	=========================== List and Guide =========================================
 *
 *	1.	Define action and filter.
 *	2. 	Get Youtube iframe 	: 	[\youtube width="500" height="300" id="0KJ60uJZ3-Q"]
 *	3. 	Get Facebook info 	:	[\facebook-info username="thachpham92"]
 *	
 *
 *	If you want to insert php code: <?php echo do_shortcode('[name_shortcode]'); ?>
 * 	
 */



/**
 1. Define action and filter.
 */
	add_shortcode('youtube', 'create_youtube_shortcode');
	add_shortcode( 'facebook-info', 'create_fbgraph_shortcode' );

/**
 2.	youtube_shortcode
 */
function create_youtube_shortcode( $args, $content ) {

	$content = '<iframe src="//www.youtube.com/embed/'.$args['id'].'" height=" '.$args['height'].'" width="'.$args['width'].'" allowfullscreen="" frameborder="0"></iframe>';

	return $content;

}

/**
 3.	facebook_shortcode
 */
function create_fbgraph_shortcode($args, $content) {

	$get_info = wp_remote_get('https://graph.facebook.com/'.$args['username']);
	$get_avatar = "https://graph.facebook.com/".$args['username']."/picture?type=large";
	$dc_info = json_decode($get_info['body'], true);
	$dc_avatar = json_decode($get_avatar['data'], true);

	// Tạo biến cho dễ xử lý.
	$fb_id = $dc_info['id'];
	$fb_username = $dc_info['username'];
	$fb_url = $dc_info['link'];
	$fb_name = $dc_info['first_name'];
	// Ghi giới tính thành tiếng Việt
	if ($dc_info['gender'] == 'male') {
		$fb_gender = "Nam";
	} else if ($dc_info['gender'] == female) {
		$fb_gender = "Nữ";
	} else {
		$fb_gender = "Chưa xác định giới tính!";
	}

	ob_start();?>
	<div class="fb-info">
		<h5>Thông tin của <?php echo $fb_name; ?></h5>
		<div class="avatar"><img alt="" src="<?php echo $get_avatar; ?>" /></div>
		<div class="info"><strong>ID của bạn: </strong> <?php echo $fb_id; ?>
			<strong>Username: </strong> <?php echo $fb_username; ?>
			<strong>Giới tính: </strong> <?php echo $fb_gender; ?>
		</div>
	</div>
	<?php
	$result = ob_get_contents();
	ob_end_clean();

	return $result;

}







