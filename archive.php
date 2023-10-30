<?php /* Template Name: 北斗書房ブログ　*/ ?>

<?php get_header(); ?>

<div class="container">

  <main>
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
  </main>

  <div class="side-bar">
    <?php get_search_form(); ?>
    <!-- <?php echo get_day_link($year, $month, $day); ?>
    <?php echo get_bloginfo($show); ?> -->
    <?php dynamic_sidebar('sidebar'); ?>
  </div>
</div>

<?php get_footer(); ?>

<!-- 
<div class="category-link">
  <header>記事カテゴリー</header>
  <ul class="sub-menu">
    <li><a href="/news/">すべて</a></li>
    // <?php
        // $categories = get_categories();
        // if ($categories) {
        //   foreach ($categories as $category) {
        //     echo '<li><a href="/category/' . $category->slug . '">' . $category->name . '</a></li>';
        //   }
        // }
        // 
        ?>
  </ul>
</div>
-->