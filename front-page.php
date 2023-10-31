<?php get_header(); ?>

<div class="wrapper">
  <main>
    <?php if (is_home() || is_front_page()) : ?>
      <!-- //トップページのみ表示させたい内容を記述 -->
      movie
    <?php else : ?>
      //トップページ以外に表示させたい内容を記述
      other contents
    <?php endif; ?>


  </main>
</div>

<?php get_footer(); ?>