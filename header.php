<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
	<div class="wraper" >

  <header class="wk-header">
    <div class="wk-header-wrapper">
      <div class="wk-header__logo-wrapper">
        <a href="<?php echo home_url(); ?>" class="wk-header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
        </a>
      </div>
      <div class="wk-header__menu">
        <nav class="wk-header__nav">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'header_menu',
              'container' => false,
              'menu_class' => 'wk-header__nav-list',
              'items_wrap' => '<ul class="%2$s">%3$s</ul>'
            ));
          ?>
        </nav>
        <div class="wk-header__button">
          <span class="wk-header__button--closed">
            <?php
            echo file_get_contents(get_theme_file_path('/assets/svg/hamburguer.svg'));
            ?>
          </span>
          <span class="wk-header__button--open">
            <?php
            echo file_get_contents(get_theme_file_path('/assets/svg/x.svg'));
            ?>
          </span>
        </div>
    </div>
  </header>