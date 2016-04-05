<?php
/**
 *  @package:   Huecis Wordpress
 *  @author :   Huecis Team
 *  @link   :   http://www.huecis.com
 *  @since  :   1.0
 *  User    :   Tuan Nguyen 
 *  Date    :
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  
  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'header',
        'title'       => __( 'Header', 'option-tree' )
      ),
      array(
        'id'          => 'footer',
        'title'       => __( 'Footer', 'option-tree' )
      ),
      array(
        'id'          => 'home',
        'title'       => __( 'Home', 'option-tree' )
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'contact',
        'label'       => __( 'Hotline và Số điện thoại', 'option-tree' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'list_social',
        'label'       => __( 'List Icon ( Mạng xã hội )', 'option-tree' ),
        'desc'        => __( 'Thêm hoặc sửa tại đây.', 'option-tree' ),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'img_logo',
        'label'       => __( 'Hình ảnh Logo', 'option-tree' ),
        'desc'        => __( 'Upload hình ảnh logo.', 'option-tree' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'text_logo',
        'label'       => __( 'Text Logo', 'option-tree' ),
        'desc'        => __( 'Nhập text logo.', 'option-tree' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'list_social_img',
        'label'       => __( 'Hình ảnh ( Hotline và Phone )', 'option-tree' ),
        'desc'        => __( 'Hình ảnh ( Hotline và Phone )', 'option-tree' ),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'copyright',
        'label'       => __( 'Copyright', 'option-tree' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'slideshow',
        'label'       => __( 'Slideshow - Video Youtube', 'option-tree' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'tab',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'list_slide',
        'label'       => __( 'Thêm/Sửa slideshow', 'option-tree' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'slider',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'video',
        'label'       => __( 'Thêm/Sửa link video', 'option-tree' ),
        'desc'        => __( 'Chèn link video, ví dụ: https://www.youtube.com/embed/EVSxRKyPjGs', 'option-tree' ),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'home',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}