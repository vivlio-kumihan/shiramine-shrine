<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta meta name="description" content="">
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@4.0.0/destyle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php echo body_class(); ?>>
  <header id="header">
    <div class="logo">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_siramine.png" alt="白峯神宮のロゴ画像">
      </a>
    </div>
    <nav class="global-menu">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'global-menu',
        'container'      => '',
        'depth'          => 1,
      ));
      ?>
    </nav>
  </header>