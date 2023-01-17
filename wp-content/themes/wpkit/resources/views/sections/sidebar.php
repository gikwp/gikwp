<?php

/**
 * Displays the site sidebar.
 */

$site_name        = get_bloginfo( 'name' );
$site_description = get_bloginfo( 'description', 'display' );
$social_icons     = get_field( 'social_icons', 'options' );
$copyright        = get_field( 'copyright', 'options' );
?>
<div class="sidebar position-fixed d-flex flex-column start-0 top-0 bottom-0 bg-cinder">
  <div class="sidebar-block d-flex justify-content-center align-items-center px-4 py-3 my-3">
    <a href="<?php echo esc_url( home_url( '/' ) ) ?>">
      <img src="<?php echo esc_url( asset( 'images/logo.svg' ) ) ?>" alt="<?php echo $site_name; ?>"/>
      <span class="visually-hidden"><?php echo esc_html( $site_name ) ?></span>
    </a>
  </div>

  <?php if ( has_nav_menu( 'primary_navigation' ) ): ?>
    <div class="sidebar-block d-flex flex-column px-4 py-3">
      <?php wp_nav_menu( [
        'theme_location' => 'primary_navigation',
        'menu_class'     => 'menu',
        'container'      => false,
        'items_wrap'     => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
        'fallback_cb'    => false,
      ] ); ?>
    </div>
  <?php endif; ?>

  <div class="sidebar-block d-flex flex-column px-4 py-3 mt-auto">
    <?php if ( $social_icons ): ?>
      <ul class="social-icons list-unstyled d-flex align-items-center gap-3 mb-1">
        <?php foreach ( $social_icons as $social_icon ): ?>
          <li>
            <a href="<?php echo esc_url( $social_icon['link'] ); ?>" target="_blank" rel="noreferrer nofollow">
              <?php echo sprintf( '<i class="bi bi-%s"></i>', esc_attr( $social_icon['icon'] ) ); ?>
              <span class="visually-hidden"><?php echo esc_html( $social_icon['name'] ); ?></span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <?php if ( ! empty( $copyright ) ) : ?>
      <p class="mb-0 fs-13 fw-lighter"><?php echo esc_html( $copyright ); ?></p>
    <?php endif; ?>
  </div>

</div>
