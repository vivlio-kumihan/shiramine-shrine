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
  </div>
</main>

<footer>
  <div class="wrapper">
    <a class="logo-space" href="<?php echo esc_url(home_url()); ?>">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
      <p>スポーツの守護神・武道上達の神・上昇気運氣運の神<br /><span>白峯神宮</span></p>
    </a>
    <div class="wrapper-grid">
      <div class="footer-left-links">
        <ul>
          <li>【鎮座地】<br />〒602-0054 京都市上京区飛鳥井町261番地</li>
          <li class="access-tel-fax"><span>電話</span>：<a href="tel:075-441-3810">075-441-3810</a></li>
          <li class="access-tel-fax"><span class="en-tume01">FAX</span>：075-441-3820</li>
        </ul>
        <ul>
          <li>交通（アクセス）</li>
          <li>|</li>
          <li>お問い合わせ</li>
        </ul>
        <ul>
          <li><a href="" class="icon-instagram"></a></li>
          <li><a href="" class="icon-twitter"></a></li>
        </ul>
      </div>

      <div class="footer-center-links">
        <ul>
          <li>
            <h2>白峯神宮について</h2>
            <div><a href="">白峯神宮 由緒</a></div>
            <div><a href="">御祭神と御聖徳崇敬の意義</a></div>
            <div><a href="">崇徳天皇御廟所</a></div>
            <div><a href="">略年表</a></div>
          </li>
          <li>
            <h2>境内のご案内</h2>
            <div><a href="">地主社</a></div>
            <div><a href="">潜龍社</a></div>
            <div><a href="">伴緒社</a></div>
            <div><a href="">蹴鞠碑</a></div>
            <div><a href="">手水舎</a></div>
            <div><a href="">霊木</a></div>
          </li>
          <li>
            <h2><a href="">ご祈祷</a></h2>
          </li>
          <li>
            <h2>お守り・授与品</h2>
            <div><a href="">一覧</a></div>
          </li>
        </ul>
        <ul>
          <li>
            <h2>年中行事・祭事</h2>
            <div><a href="">春季例大祭&emsp;淳仁天皇祭</a></div>
            <div><a href="">蹴鞠奉納</a></div>
            <div><a href="">子供の日<br />祭武道繁栄祭・古武道奉納奉告祭</a></div>
            <div><a href="">茅の輪くぐり神事</a></div>
            <div><a href="">精大明神例祭「七夕祭」</a></div>
            <div><a href="">小町をどり</a></div>
            <div><a href="">春季例大祭&emsp;崇徳天皇祭</a></div>
            <div><a href="">薪能</a></div>
            <div><a href="">観月祭（献燈講祭）</a></div>
            <div><a href="">七五三詣</a></div>
            <div><a href="">献茶祭</a></div>
            <div><a href="">御火焚祭</a></div>
          </li>
          <li>
            <h2>お知らせ／トピックス</h2>
            <div><a href="">一覧</a></div>
          </li>
        </ul>
      </div>

      <div class="footer-right-links">
        <ul class="banner">
          <li><a href="http://www.arimura.tv/" target="_blank"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/banner-03.png" alt=""></a></li>
          <li><a href="https://www.eonet.ne.jp/~hakamaya/" target="_blank"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/banner-01.png" alt=""></a></li>
          <li><a href="https://www.oe-co.jp/" target="_blank"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/banner-02.png" alt=""></a></li>
          <li><a href="https://www.kodama-sekizai.net/" target="_blank"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/banner-04.png" alt=""></a></li>
        </ul>
      </div>
    </div>

    <div class="copyright">Copyright &#169; SHIRAMINE JINGU SHRINE All Rights Reserved.</div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>

<!-- <?php get_footer(); ?> -->