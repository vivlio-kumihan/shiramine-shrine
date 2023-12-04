<?php /* Template Name: page　*/ ?>

<?php get_header(); ?>


<main>
  <?php if (is_home() || is_front_page()) : ?>
    <!-- <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/_sample_import_61a86920b1a021.47856856.mp4"></video> -->
    <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/_sample_import_616540e4897b26.24217861.mp4"></video>
  <?php else : ?>
    <!-- トップページ以外に表示させたい内容を記述 -->
  <?php endif; ?>

  <div class="contents">
    <section class="title">
      <img src="<?php echo get_template_directory_uri(); ?>/img/title.png" alt="ページのタイトル">
    </section>
    <div class="bg">
      <section class="information">

      </section>
    </div>
  </div>
</main>


<?php get_footer(); ?>