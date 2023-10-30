<?php
$ogType = is_front_page() || is_home() ? "website" : "article";
?>
<!DOCTYPE html>
<html lang="ja">

<!-- <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# <?php echo $ogType; ?>: http://ogp.me/ns/<?php echo $ogType; ?>#"> -->

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
  <header>
    <div class="upper">
      <div class="logo">
        <!-- <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-square.jpg" alt="北斗書房のロゴ画像">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="組織名">
        </a> -->
      </div>
      <!-- <ul class="upper-link">
        <li><span>お電話でのお問い合わせ</span><br>075-791-6125</li>
        <li class="to-link-simple-round"><a href="">お問い合わせ→</a></li>
      </ul> -->
    </div>
    <nav class="global-nav">
      gloval navigation
      hogehogehoge
      
      <?php
      // wp_nav_menu(array(
      //   'theme_location' => 'global-menu',
      //   'container'      => '',
      //   'depth'          => 1,
      // ));
      ?>
    </nav>

  </header>