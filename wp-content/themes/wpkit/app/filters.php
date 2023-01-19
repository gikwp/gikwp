<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Read more" to the excerpt.
 *
 * @return string
 */
add_filter( 'excerpt_more', function () {
	return sprintf( ' &hellip; <a href="%s">%s</a>', get_permalink(), __( 'Read more', 'wpkit' ) );
} );

/**
 * Replace contact form html <span> and <p> tags.
 */
add_filter( 'wpcf7_form_elements', function ( $content ) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
	
	return $content;
} );

add_filter('wpcf7_autop_or_not', '__return_false');