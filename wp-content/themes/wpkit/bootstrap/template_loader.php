<?php
/**
 * Loads the correct template based on the visitor's url
 */

// https://wp-kama.ru/hook/wp_using_themes

add_filter( 'wp_using_themes', function () {
  //  if ( is_front_page() ) {
  //    include get_template_directory() . '/resources/views/front-page.php';
  //  }
  
  $template = false;
  
  if ( ! $template ) {
    $template = get_index_template();
  }
  
  return;
} );
