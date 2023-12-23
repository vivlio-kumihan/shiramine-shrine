<?php get_header(); ?>

<main>
  <?php if (is_home() || is_front_page()) : ?>
    <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/_sample_import_616540e4897b26.24217861.mp4"></video>
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
    </ul>

    <div class="flex-wrapper">
      <div class="mune-list">
        <div class="category-link-menu">
          <div class="link-title">記事カテゴリー</div>
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
        <div class="monthry-archive">

          <ul class="monthly-list">
            <?php
            // 月別アーカイブのリンクを表示
            wp_get_archives(array(
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
            ));
            ?>
          </ul>


        </div>
      </div>
      <div class="contents">
        <h1 class="part-title">お知らせ</h1>
        <div class="blogs">
          <ul class="post-contents">
            <?php
            $recent_page = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 10,
              'paged' => $recent_page,
              'cat' => 'all'
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
            ?>
                <li class="post-item">
                  <div class="post-title"><?php the_title(); ?></div>
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
            <?php endwhile;
            endif; ?>
          </ul>
          <div class="breadcrumbs">
            <?php
            $args = array(
              'type' => 'list',
              'current' => $recent_page,
              'total' => $my_query->max_num_pages,
              'prev_text' => '前のページ',
              'next_text' => '次のページ',
            );
            echo paginate_links($args);
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>