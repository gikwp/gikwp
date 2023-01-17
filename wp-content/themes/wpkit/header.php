<!doctype html>
<html <?php language_attributes(); ?> <?php wk_the_theme_attributes('bs-'); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="app">
  <a class="visually-hidden-focusable" href="#main"><?php esc_html_e( 'Skip to content', 'wpkit' ); ?></a>
  
  <main id="main" class="content-area py-3 mt-3">
    <?php /*wk_template('sections/header'); */?>

    <div class="container px-lg-5">
