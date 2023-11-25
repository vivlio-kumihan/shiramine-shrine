<?php get_header(); ?>


<main>
  <?php if (is_home() || is_front_page()) : ?>
    <!-- //トップページのみ表示させたい内容を記述 -->
    <!-- position absoluteでfixさせるよ。 -->
    <p>movie</p>
  <?php else : ?>
    //トップページ以外に表示させたい内容を記述
    other contents
  <?php endif; ?>

  <div class="contents">
    <div class="bg">
      <section class="information">
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
          <a class="to-contents-page" href="">お知らせ／トピックス</a>
        </div>
        <div class="sns-post">
          <div class="instagram-post"></div>
          <div class="twitter-post"></div>
        </div>
      </section>

      <section class="about">
        <div class="frame">
          <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/information-appearance@2x.png" alt="">
        </div>
        <div class="catch-copy">
          <h2>
            スポーツの守護神<br />
            武道上達の神<br />
            上昇氣運の神<br />
          </h2>
          <p>当やしろは、代々、鞠と和歌の宗家である公家飛鳥井氏の邸宅で、「崇徳天皇」「淳仁天皇」「清大明神」が祀られており、御所にほど近く樹齢数百年の霊木たる小賀玉の木のもと、飛鳥井の井から清水が湧く古都京都のオアシスともなっています。</p>
        </div>
        <a href="" class="to-contents-page">白峯神宮について</a>
      </section>

      <section class="annual-event">
        <div class="frame">
          <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/annual-event-play-kemari@2x.png" alt="">
        </div>
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
        <a href="" class="to-contents-page">年中行事・祭事</a>
      </section>

      <section class="to-prayer-gift">
        <ul>
          <li>
            <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/atari-AdobeStock_346787519_Preview.jpeg" alt="">
            <div class="catch">ご&emsp;祈&emsp;祷</div>
          </li>
          <li>
            <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/atari-toukon-img03.png" alt="">
            <div class="catch">お守り・授与品</div>
          </li>
        </ul>
      </section>

      <section class="access-map">
        <div class="frame">
          <img src="" alt="">
        </div>
        <a href="" class="to-contents-page">交通（アクセス）</a>
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