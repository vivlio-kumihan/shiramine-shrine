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
    <a class="logo-space" href="<?php echo esc_url(home_url()); ?>">
      <img class="logo header" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
      <p>スポーツの守護神・武道上達の神・上昇気運氣運の神<br /><span>白峯神宮</span></p>
    </a>
    <nav class="global-menu">
      <div class="upper">
        <ul>
          <li>交通（アクセス）</li>
          <li>|</li>
          <li>お問い合わせ</li>
          <li class="language">
            <a href="">
              <span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-global-middle.png" alt="">
              </span>
              Language
            </a>
          </li>
        </ul>
      </div>
      <div class="lower">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'global-menu',
          'container'      => '',
          'depth'          => 1,
        ));
        ?>
      </div>
    </nav>
  </header>