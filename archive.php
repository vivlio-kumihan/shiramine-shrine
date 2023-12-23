<?php get_header(); ?>

<main>
  <div class="contents">
    <?php if (is_home() || is_front_page()) : ?>
      <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/_sample_import_616540e4897b26.24217861.mp4"></video>
    <?php else : ?>
      <div class="frame">
        <h1>交通（アクセス）</h1>
      </div>
    <?php endif; ?>

    <div class="container">
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
              <a href="<?php echo esc_url(home_url('/informaiton/')); ?>">お知らせ</a>
            </li>
          </ul>

          <div class="contents">
            <div class="gradually-appear">
              <h3 id="place" class="place">お知らせ</h3>
            </div>

            <div class="wrapper">
              <h3>タイトル</h3>
              <div class="leading-square-header">お車でお越しの場合</div>
              <div class="posts">
                <h1><?php echo get_the_title(); ?></h1>
                <div class="container">
                  <ul class="post-archive">
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
                          <a href="<?php the_permalink(); ?>">
                            <div class="frame">
                              <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="header-sub">
                              <ul class="post-category">
                                <?php
                                $category = get_the_category();
                                foreach ($category as $attr) {
                                  echo '<li>' . $attr->name . '</li>';
                                }
                                ?>
                              </ul>
                              <time datetime="<?php echo get_the_date("Y-m-d") ?>"><?php echo get_the_date("Y年m月d日") ?></time>
                            </div>
                            <div class="post-title"><?php the_title(); ?></div>
                            <?php
                            add_filter('excerpt_length', function ($length) {
                              return 100; //表示する文字数
                            }, 999);
                            ?>
                            <p><?php the_excerpt(); ?></p>
                          </a>
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
        </section>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>