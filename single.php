<?php get_header(); ?>

<main>
  <?php if (is_home() || is_front_page()) : ?>
    <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/shiramine_imgmov3.mp4"></video>
  <?php else : ?>
    <div class="frame">
      <h1 class="part-main-title">最新情報</h1>
    </div>
  <?php endif; ?>
  <div class="flex-wrapper">
    <div class="menu-list">
      <div class="category-link-menu">
        <div class="headline-title">カテゴリー</div>
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
        <div class="headline-title">アーカイブ</div>
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
        <h1 class="part-title date"><?php echo get_the_date('Y年n月'); ?> 記事</h1>
      <?php else : ?>
        <h1 class="part-title">お知らせ</h1>
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
</main>

<?php get_footer(); ?>



<!-- 
  <div class="container">
    <ul class="bread-crumb">
      <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
      <li>></li>
      <?php if (is_date()) : ?>
        <li><a href="<?php echo esc_url(home_url('/information/')); ?>">お知らせ</a></li>
        <li>></li>
        <li><a href="<?php echo esc_url(home_url('/' . get_the_date('Y/n') . '/')); ?>"><?php echo get_the_date('Y年n月'); ?> 記事</a></li>
      <?php else : ?>
        <li><a href="<?php echo esc_url(home_url('/information/')); ?>">お知らせ</a></li>
      <?php endif; ?>
    </ul>
-->
<!-- 
<?php if (has_post_thumbnail()) : ?>
  <div class="thumbnail" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)"></div>
<?php endif; ?>
-->

<!-- 
<?php if (have_posts()) : the_post(); ?>
  <section class="section" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    <div class="singleinformations">
      <div class="lastupdate">
        最終更新日：<time><?php the_modified_date('Y/m/d') ?></time>
      </div>
      <div class="categories">
        <p class="categoriesTitle">カテゴリー：</p>
        <?php if (has_category()) : ?>
          <ul class="categorieslist">
            <?php
            $category = get_the_category();
            for ($i = 0; $i < count($category); $i++) {
              $listStrings = '';
              $listStrings .= '<li class="' . esc_attr($category[$i]->slug) . '">';
              $listStrings .= '<a href="' . esc_url(get_category_link($category[$i]->cat_ID)) . '">';
              $listStrings .= esc_html($category[$i]->cat_name);
              $listStrings .= '</a></li>';
              echo $listStrings;
            }
            ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>

    <div class="contents">
      <?php the_content(); ?>
      <?php
      $defaults = array(
        'before'           => '<ol class="pager"><li>',
        'after'            => '</li></ol>',
        'separator'        => '</li><li>',
        'nextpagelink'     => '次のページへ',
        'previouspagelink' => '前のページへ',
        'pagelink'         => '%' // %は必須で、数値に置き換わる
      );
      wp_link_pages($defaults);
      ?>
    <?php endif; ?>
    </div>
  </section>
  </div> 
-->