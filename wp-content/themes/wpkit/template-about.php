<?php
/**
 * Template Name: About Me
 */

get_header();

while ( have_posts() ) { the_post();
  wk_template( 'partials/content', 'about' );
}

get_footer();
