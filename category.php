<?php get_header(); ?>

<main>
  <?php if (is_home() || is_front_page()) : ?>
    <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/shiramine_imgmov3.mp4"></video>
  <?php else : ?>
    <div class="frame">
      <h1 class="part-main-title">お知らせ</h1>
    </div>
  <?php endif; ?>

  <div class="container">
    <ul class="bread-crumb">
      <li>
        <a href="<?php echo home_url(); ?>">ホーム</a>
      </li>
      <li>
        >
      </li>
      <li>
        <a href="<?php echo esc_url(home_url('/information/')); ?>">お知らせ</a>
      </li>
      <li>
        >
      </li>
      <li>
        <a href="<?php echo esc_url(home_url('/whats-new/')); ?>">新着情報</a>
      </li>
    </ul>

    <div class="flex-wrapper">
      <div class="menu-list">
        <div class="category-link-menu">
          <div class="headline-title">記事カテゴリー</div>
          <ul>
            <?php
            $categories = get_categories();
            if ($categories) {
              foreach ($categories as $category) {
                echo '<li><a href="/category/' . $category->slug . '">' . $category->name . '</a></li>';
              }
            }
            ?>
          </ul>
        </div>
        <div class="year-monthry-archive">
          <div class="headline-title">記事カテゴリー</div>
          <ul class="year-monthry-list">
            <?php wp_get_archives(array(
              'post_type' => 'post',
              'type' => 'monthly',
              'show_post_count' => 1,
              'format' => 'custom',
              'before' => '<li>',
              'after' => '</li>',
              'echo' => 1,
              'show_post_count' => true,
              'echo' => true,
              'order' => 'DESC',
            )); ?>
          </ul>
        </div>
      </div>
      <div class="contents">
        <?php if (is_date()) : ?>
          <h1 class="part-title"><?php echo get_the_date('Y年n月'); ?> 記事</h1>
        <?php else : ?>
          <h1 class="part-title">新着情報</h1>
        <?php endif; ?>
        <div class="blogs">
          <ul class="post-contents">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li class="post-item">
                  <div class="post-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </div>
                  <div class="content"><?php echo the_content(); ?></div>
                  <div class="date-category">
                    <time datetime="<?php echo get_the_date("Y-m-d") ?>"><?php echo get_the_date("Y-m-d") ?></time>
                    <span>|</span><span>カテゴリー</span><span>:</span>
                    <?php
                    $category = get_the_category();
                    foreach ($category as $attr) {
                      echo '<div class="category">' . $attr->name . '</div>';
                    }
                    ?>
                  </div>
                </li>
              <?php endwhile; ?>
          </ul>
        </div>
      <?php
              // Previous/next page navigation.
              the_posts_pagination(array(
                'prev_text'        => __('前のページ'),
                'next_text'        => __('次のページ'),
              ));
            endif; ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>