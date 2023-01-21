<?php
/**
 * Template loading functions.
 */

namespace GikWp;

function get_front_page_teplate() {
  $template = array();
  return get_query_template('front_page', $template);
}
