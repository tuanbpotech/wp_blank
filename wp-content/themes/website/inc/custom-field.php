<?php
/**
 * 	Custom field ( Advance custom field Plugin )
 *
 *	@package: 	Huecis Wordpress
 * 	@author :   Huecis Team
 * 	@link 	:   http://www.huecis.com
 * 	@since 	:	1.0
 * 	User 	: 	Tuan Nguyen	
 * 	Date 	:
 *
 */


if(function_exists("register_field_group")){

	
	register_field_group(array (
		'id' => 'acf_contact',
		'title' => 'Contact',
		'fields' => array (
			array (
				'key' => 'field_57031d5da4423',
				'label' => 'Map',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_57031bc2aa4fb',
				'label' => 'Enter embed google map.',
				'name' => 'google_map',
				'type' => 'textarea',
				'instructions' => 'You can get link embed <a href="http://map.google.com">here.</a<',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d61224.10147580038!2d107.52733031752445!3d16.449879412914914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zQW4gRMawxqFuZyBWxrDGoW5nLCBUaOG7q2EgVGhpw6puIEh14bq_LCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1459821818831" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_57031d32a4422',
				'label' => 'Our Location',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_57031ddfb84b0',
				'label' => 'Address',
				'name' => 'address',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57031df1b84b1',
				'label' => 'Phone',
				'name' => 'phone',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57031dfab84b2',
				'label' => 'Email',
				'name' => 'email',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57031e00b84b3',
				'label' => 'Facebook',
				'name' => 'facebook',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'templates/contact.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'id' => 'acf_license',
		'title' => 'License',
		'fields' => array (
			array (
				'key' => 'field_57031b19743b7',
				'label' => 'Author',
				'name' => 'author',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57031b38743b8',
				'label' => 'Source article',
				'name' => 'source_article',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


function my_register_fields(){

    include_once('lib/cf7/acf-cf7.php');
    
}

add_action('acf/register_fields', 'my_register_fields');