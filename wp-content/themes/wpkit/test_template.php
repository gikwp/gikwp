<?php
// https://wordpress.stackexchange.com/questions/227006/how-to-move-page-templates-to-custom-folder
add_filter( 'page_template', function () {
  $id = get_queried_object_id();
  $template = get_page_template_slug();
  $page_name = get_query_var('pagename');
  
  if (!$page_name && $id) {
    $post = get_queried_object();
    
    if ($post) {
      $page_name = $post->post_name;
    }
    
  }
  print_r( $page_name );
  
  
} );
