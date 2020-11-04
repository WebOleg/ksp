<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ); ?></title>
  <meta name="description" content="<?php bloginfo('description') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <?php wp_head(); ?>
  <!-- styles -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style-rtl.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/wp-style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/reset.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
</head>
<body>
  
  <header>
    <div class="header-top">
      <div class="container">
        <a href="https://2gis.ua/dp/geo/14778071932471340/35.048035%2C48.470482?m=35.048512%2C48.470345%2F18.38" class="header-adress">
          <div class="header-icon"><img src="<?php bloginfo('template_directory') ?>/img/h_geo.png" alt="geo"></div>
          <span>49000, Украина, г. Днепр, ул. Сичеславская Набережная, 27а</span>
        </a>
        <a href="tel:+380970017016" class="header-phone">
          <div class="header-icon"><img src="<?php bloginfo('template_directory') ?>/img/h_phone.png" alt="phone"></div>
          <span>097 001 70 16</span>
        </a>
        <a href="" class="header-btn">Задать вопрос юристу</a>
      </div>
    </div>

    <div class="header-bottom">
      <div class="container">
        <a href=" <?php echo get_site_url() ?> " class="logo">
          <img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="KS partners">
          <h1>Адвокатское <span>Объединение</span></h1>
        </a>
        <nav class="navbar navbar-expand-lg navbar-dark">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav" aria-controls="header-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <?php
              wp_nav_menu( array(
                  'menu'              => 'main',
                  'theme_location'    => '',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_id'      => 'navbarNavDropdown',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'header-nav',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker())
              );
            ?>

          
        </nav>
      </div>
    </div>
  </header>