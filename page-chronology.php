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

    <div class="container">
      <div class="bg">
        <section class="chronology">
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
              <a href="<?php echo esc_url(home_url('/chronology/')); ?>">略年表</a>
            </li>
          </ul>
          <h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
            略年表
          </h2>
          <div class="contents">
            <div class="gradually-appear-long">
              <ul class="list-contents">
                <li>
                  <div class="date">慶応2年（1866年）</div>
                  <div class="subject">孝明天皇、当神宮御創建を幕府に命ぜられるも12月崩御。</div>
                </li>
                <li>
                  <div class="date">慶応3年1月</div>
                  <div class="subject">（明治天皇御即位）</div>
                </li>
                <li>
                  <div class="date">慶応4年8月18日</div>
                  <div class="subject">明治天皇、父帝の御遺志を継ぎ崇徳天皇を御祭神とする。 本宮御創建の宣命があり、社地を公卿飛鳥井家邸地とする。</div>
                </li>
                <li>
                  <div class="date">慶応4年9月6日</div>
                  <div class="subject">勅使崇徳天皇の皇霊を讃岐国白峰御陵より遷奉して本宮に御鎮斎、飛鳥井家邸内社（精大明神）を地主社とする。</div>
                </li>
                <li>
                  <div class="date">慶応4年9月8日</div>
                  <div class="subject">（明治に改元）お火焚祭始まる。</div>
                </li>
                <li>
                  <div class="date">明治6年6月9日</div>
                  <div class="subject">官幣中社に列格。</div>
                </li>
                <li>
                  <div class="date">明治6年12月24日</div>
                  <div class="subject">勅使、淳仁天皇の皇霊を淡路島の御陵より遷奉合祀。</div>
                </li>
                <li>
                  <div class="date">明治11年11月15日</div>
                  <div class="subject">源為義・為朝二公を祀る「伴緒社」創建。</div>
                </li>
                <li>
                  <div class="date">大正7年4月5日</div>
                  <div class="subject">皇太子殿下（昭和天皇）御参拝、松を御植樹。</div>
                </li>
                <li>
                  <div class="date">昭和11年11月18日</div>
                  <div class="subject">境内拡張成る。</div>
                </li>
                <li>
                  <div class="date">昭和12年11月15日</div>
                  <div class="subject">奉射神事（小笠原清道氏独創による）始まる。</div>
                </li>
                <li>
                  <div class="date">昭和15年8月1日</div>
                  <div class="subject">官幣大社に昇格・白峯宮を白峯神宮と御改称。</div>
                </li>
                <li>
                  <div class="date">昭和30年12月</div>
                  <div class="subject">境内北西の井戸に坐す潜龍神を創祀する。</div>
                </li>
                <li>
                  <div class="date">昭和37年7月8日</div>
                  <div class="subject">七夕小町をどり始まる。</div>
                </li>
                <li>
                  <div class="date">昭和39年9月21日</div>
                  <div class="subject">薪能始まる。</div>
                </li>
                <li>
                  <div class="date">昭和56年5月5日</div>
                  <div class="subject">古武道演武奉納始まる。</div>
                </li>
                <li>
                  <div class="date">昭和56年9月6日</div>
                  <div class="subject">献茶式が復活する。</div>
                </li>
                <li>
                  <div class="date">昭和60年6月1日</div>
                  <div class="subject">小賀玉の木、京都市天然記念物に指定される。</div>
                </li>
                <li>
                  <div class="date">昭和63年9月21日</div>
                  <div class="subject">御鎮座120年祭斎行。</div>
                </li>
                <li>
                  <div class="date">平成13年5月26日</div>
                  <div class="subject">蹴鞠碑建立する。</div>
                </li>
              </ul>
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
          <li>
            <a href="<?php echo esc_url(home_url('/about/gobyo/')); ?>">
              <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/about-link-03-gobyo.jpg" alt="">
              <div class="catch">崇徳天皇<br />御廟所</div>
            </a>
          </li>
          <li class="hover">
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