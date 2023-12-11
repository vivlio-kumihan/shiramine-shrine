<?php get_header(); ?>

<main>
  <div class="contents">
    <?php if (is_home() || is_front_page()) : ?>
      <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/_sample_import_616540e4897b26.24217861.mp4"></video>
    <?php else : ?>
      <div class="frame">
        <h1>白峯神宮について</h1>
      </div>
    <?php endif; ?>

    <div class="container gobyo">
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
              白峯神宮について
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/gobyo/')); ?>">崇徳天皇御廟所</a>
            </li>
          </ul>
          <h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
            崇徳天皇御廟所
          </h2>
          <div class="contents">
            <div class="gradually-appear-long">
              <h3 class="none-letter-space">崇徳天皇御廟祭</h3>
              <div class="inner-contents">
                <div class="flex-container">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/about-gobyo01.png" alt="">
                  <div>
                    <p class="lead-copy-gobyo">京都の繁華街・祇園の中心に、崇徳天皇御廟として奉斎しております。</p>
                    <h4>鎮座地</h4>
                    <p>東山通安井一筋上がる、如月小路を西へ二筋、突き当たる万寿小路、祇園花見小路甲部歌舞錬場（GION corner）の裏（東側）の楠の巨木の元に御廟はあります。</p>
                  </div>
                </div>
                <div class="flex-container">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/about-gobyo02.png" alt="">
                  <div>
                    <h4>祭礼日</h4>
                    <p>毎月21日には崇徳天皇の月命日として月次祭を白峯神宮の神職が奉仕し、祇園の女将さんを始め崇敬の思い篤き方々も参列されて月次祭が斎行されます。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="contents">
            <div class="gradually-appear-long">
              <h3 class="none-letter-space">崇徳天皇廟</h3>
              <div class="inner-contents">
                <div class="flex-container">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/about-gobyo03.png" alt="">
                  <div>
                    <p>保元の乱（1156）に敗れた崇徳天皇（第75代）は、讃岐国に御配流の悲運に遭われ、血書をもって京都への御還幸を願われたのですが、意の如くならず、憤怒の御姿のまま、長寛2年（1164）に46歳にてその地で崩御あそばされ、そのまま白峰山陵に奉葬されました。天皇の寵愛厚かった阿波内侍は、御遺髪を請い受けてこの場所に一塚を築き亡き天皇の霊をお慰めしたと伝承されています。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <section class="about-visual-links gradually-appear-long">
        <ul class="hover-bright">
          <li>
            <a href="<?php echo esc_url(home_url('/about/history/')); ?>">
              <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/about-link-01-history.jpg" alt="">
              <div class="catch">白峯神宮&emsp;由緒</div>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/about/gosaizin/')); ?>">
              <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/about-link-02-gosaizin.jpg" alt="">
              <div class="catch">御祭神と<br />御聖徳崇敬の意義</div>
            </a>
          </li>
          <li class="hover">
            <a href="<?php echo esc_url(home_url('/about/gobyo/')); ?>">
              <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/about-link-03-gobyo.jpg" alt="">
              <div class="catch">崇徳天皇<br />御廟所</div>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/about/chronology/')); ?>">
              <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/about-link-04-chronology.jpg" alt="">
              <div class="catch">略&emsp;年&emsp;表</div>
            </a>
          </li>
        </ul>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>