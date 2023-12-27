<?php get_header(); ?>

<main>
  <?php if (is_home() || is_front_page()) : ?>
    <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/shiramine_imgmov3.mp4"></video>
  <?php else : ?>
    //トップページ以外に表示させたい内容を記述
    other contents
  <?php endif; ?>

  <div class="contents">
    <section class="title">
      <img src="<?php echo get_template_directory_uri(); ?>/img/title.png" alt="ページのタイトル">
      <p class="scroll-down-mark blink">scroll</p>
    </section>
    <div class="bg">
      <section class="information gradually-appear">
        <div class="topics">
          <h2>お知らせ／トピックス</h2>
          <div class="wrapper">
            <div class="index-to-information">
              <ul class="post-archive">
                <?php
                $recent_page = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 5,
                  'paged' => $recent_page,
                  'cat' => 'all'
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
                ?>
                    <li class="post-item">
                      <a href="<?php the_permalink(); ?>">
                        <div class="header-sub">
                          <time datetime="<?php echo get_the_date("Y-m-d") ?>"><?php echo get_the_date("Y/m/d/") ?></time>
                        </div>
                        <div class="post-title"><?php the_title(); ?></div>
                      </a>
                    </li>
                <?php endwhile;
                endif; ?>
              </ul>
            </div>

            <div class="sns">
              <div class="instagram">
              </div>
              <div class="twitter">
              </div>
            </div>
          </div>
          <a class="to-contents-page" href="<?php echo esc_url(home_url('/information/')); ?>">お知らせ／トピックス</a>
        </div>
        <div class="sns-post">
          <div class="instagram-post">
            {[instagram-feed feed=1]}

          </div>
          <div class="twitter-post">
            <!-- <a class="twitter-timeline" data-width="335" data-height="400" href="https://twitter.com/shiramine_jingu?ref_src=twsrc%5Etfw">Tweets by shiramine_jingu</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
            <a class="twitter-timeline" data-lang="ja" href="https://twitter.com/shiramine_jingu?ref_src=twsrc%5Etfw"></a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <!-- <a class="twitter-timeline" data-lang="ja" data-width="400" data-height="300" href="https://twitter.com/shiramine_jingu?ref_src=twsrc%5Etfw">Tweets by shiramine_jingu</a> -->
            <!-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
          </div>
        </div>
      </section>
      <section class="about">
        <div class="frame gradually-appear">
          <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/information-appearance@2x.png" alt="">
        </div>
        <div class="catch-copy ">
          <h2>
            スポーツの守護神<br />
            武道上達の神<br />
            上昇氣運の神<br />
          </h2>
          <p>当やしろは、代々、鞠と和歌の宗家である公家飛鳥井氏の邸宅で、「崇徳天皇」「淳仁天皇」「清大明神」が祀られており、御所にほど近く樹齢数百年の霊木たる小賀玉の木のもと、飛鳥井の井から清水が湧く古都京都のオアシスともなっています。</p>
        </div>
        <a href="<?php echo esc_url(home_url('/about/history/')); ?>" class="to-contents-page">白峯神宮について</a>
      </section>

      <section class="annual-event">
        <div class="frame gradually-appear">
          <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/annual-event-play-kemari@2x.png" alt="">
        </div>
        <div class="gradually-appear">
          <div class="catch-copy">
            <h2>年中行事・祭事</h2>
            <p>年間を通し四季折々に行う古来より受け継がれ続ける伝統行事をご紹介いたします。</p>
            <ul class="note">
              <li>
                当宮の諸祭事で撮影された写真・映像・画像等、使用することを禁じます。<br />
                It is forbidden to use photographs, images, images, etc. taken at various festivals of SHIRAMINE JINGU-Shrine.
              </li>
            </ul>
            <ul class="note">
              <li>
                使用の際は社務所（075-441-3810）迄ご連絡下さい。<br />
                When using, please contact the office of SHIRAMINE JINGU-Shrine. (tel. 075-441-3810)
              </li>
            </ul>
          </div>
          <a href="<?php echo esc_url(home_url('/annual-event/')); ?>" class="to-contents-page">年中行事・祭事</a>
        </div>
      </section>

      <section class="to-prayer-gift gradually-appear">
        <ul class="hover-bright">
          <li>
            <a href="<?php echo esc_url(home_url('/prayer/')); ?>">
              <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/index-page-link-to-prayer-image.jpg" alt="">
              <div class="catch">ご&emsp;祈&emsp;祷</div>
            </a>
          </li>
          <li>
            <a href="https://shiraminejingu.or.jp/omamori/">
              <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/index-page-link-to-omamori-image.jpg" alt="">
              <div class="catch">お守り・授与品</div>
            </a>
          </li>
        </ul>
      </section>

      <section class="access-map gradually-appear">
        <div class="frame">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.062849246738!2d135.75058587613765!3d35.0301575728044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010875465295bd%3A0xb8f1789b55585273!2z55m95bOv56We5a6u!5e0!3m2!1sja!2sjp!4v1701046947001!5m2!1sja!2sjp" width="100%" height="670px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <a href="<?php echo esc_url(home_url('/access/')); ?>" class="to-contents-page">交通（アクセス）</a>
      </section>
    </div>
  </div>
</main>


<?php get_footer(); ?>

<!-- 
<ul class="post-archive">
  <?php
  $recent_page = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
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
            <time datetime="<?php echo get_the_date("Y-m-d") ?>"><?php echo get_the_date("Y/m/d/") ?></time>
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
</ul> -->