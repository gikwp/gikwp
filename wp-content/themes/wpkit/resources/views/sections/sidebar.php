<?php
/**
 * Displays the site sidebar.
 */

$site_name        = get_bloginfo( 'name' );
$site_description = get_bloginfo( 'description', 'display' );
?>
<div class="sidebar position-fixed d-flex flex-column start-0 top-0 bottom-0 bg-cinder">
  <div class="sidebar-block d-flex justify-content-center align-items-center px-4 py-3 mt-3">
    <a href="<?php esc_url( home_url( '/' ) ) ?>">
      <img src="<?php echo esc_url( asset( 'images/logo.svg' ) ) ?>" alt="<?php echo $site_name; ?>"/>
      <span class="visually-hidden"><?php echo esc_html( $site_name ) ?></span>
    </a>
  </div>

  <div class="sidebar-block d-flex px-4 py-3 mt-auto">
    <p class="mb-0 fs-14 fw-lighter">©2023 gik. private web developer.</p>
  </div>

</div>
