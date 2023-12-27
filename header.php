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
    <div class="wrapper">
      <a class="logo-space" href="<?php echo esc_url(home_url()); ?>">
        <img class="logo header" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
        <div>
          <p>スポーツの守護神<span>・</span><br />武道上達の神<span>・</span><br />上昇気運の神</p>
          <p class="shrine-name">白峯神宮</p>
        </div>
      </a>
      <nav id="global-menu" class="global-menu">
        <div class="upper">
          <ul>
            <li><a href="<?php echo esc_url(home_url('/access/')); ?>">交通（アクセス）</a></li>
            <!-- <li>|</li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li> -->
            <li class="language">
              <button id="language" type="button">
                <span>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon-global-middle.png" alt="">
                </span>
                Language
              </button>
              <ul>
                <li><a href="<?php echo home_url(); ?>">日本語</a></li>
                <li><a href="<?php echo esc_url(home_url('/english/')); ?>">English</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="lower">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'global-menu',
            'container'      => '',
            'depth'          => 2,
          ));
          ?>
        </div>
      </nav>
      <button id="menu-toggle-btn" class="menu-toggle-btn">
        <span></span><span></span><span></span>
      </button>
      <a href="#" class="to-page-top">
        <div class="page-top-arrow"></div>
      </a>

    </div>
  </header>