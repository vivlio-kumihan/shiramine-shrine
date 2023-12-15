<?php get_header(); ?>

<main>
  <div class="contents">
    <?php if (is_home() || is_front_page()) : ?>
      <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/_sample_import_616540e4897b26.24217861.mp4"></video>
    <?php else : ?>
      <div class="frame prayer">
        <h1>ご祈祷</h1>
      </div>
    <?php endif; ?>

    <div class="container prayer">
      <div class="bg">
        <section>
          <ul class="bread-crumb">
            <li>
              <a href="<?php echo home_url(); ?>">ホーム</a>
            </li>
            <li>
              >
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/prayer/')); ?>">ご祈祷</a>
            </li>
          </ul>

          <div class="contents guide-map">
            <div class="gradually-appear">
              <div class="header">
                <h3>ご祈祷</h3>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>