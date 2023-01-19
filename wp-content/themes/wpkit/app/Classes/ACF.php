<?php

namespace App;

class ACF {
  
  public function __construct() {
    add_action( 'acf/init', [ $this, 'acf_register_options_page' ] );
  }
  
  /**
   * ACF Register Options Page.
   *
   * @return array|false
   */
  public function acf_register_options_page(): bool|array {
    if ( ! function_exists( 'acf_add_options_page' ) ) {
      return false;
    }
    
    $option_pages = [
      [
        'page_title' => 'General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'general-settings',
        'capability' => 'edit_posts',
        'redirect'   => true,
        'sub_page'   => false,
      ],
      [
        'page_title'  => 'Footer Settings',
        'menu_title'  => 'Footer',
        'parent_slug' => 'general-settings',
        'sub_page'    => true,
      ],
    ];
    
    foreach ( $option_pages as $option ) {
      if ( ! $option['sub_page'] ) {
        $option_page = acf_add_options_page( $option );
      } else {
        $option_page = acf_add_options_sub_page( $option );
      }
    }
    
    return $option_page;
  }
}
