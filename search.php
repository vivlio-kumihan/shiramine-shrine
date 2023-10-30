<ul class="search-result">
  <?php if (empty(get_search_query())) : ?>
    <li>
      <?php echo '検索ワードを入力してください。'; ?>
    </li>
  <?php else : ?>
    <?php if (have_posts()) : ?>
      <li class="result-lenght">
        <?php echo '【' . $_GET['s'] . '】の検索結果: ' . '<span>' . $wp_query->found_posts . '</span>' . '件'; ?>
      </li>
      <?php while (have_posts()) : the_post(); ?>
        <li class="result-content">
          <a href="<?php the_permalink(); ?>">
            <div class="title"><?php echo get_the_title(); ?></div>
            <div class="content"><?php the_excerpt(); ?></div>
          </a>
        </li>
      <?php endwhile; ?>
    <?php else : ?>
      <li>
        検索されたキーワードにマッチする記事はありませんでした。
      </li>
    <?php endif; ?>
  <?php endif; ?>
</ul>