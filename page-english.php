<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta meta name="description" content="">
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@4.0.0/destyle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php echo body_class(); ?>>
  <header id="header">
    <div class="wrapper">
      <a class="logo-space" href="<?php echo esc_url(home_url()); ?>">
        <img class="logo header" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
        <div>
          <p>SHIRAMINE JINGU-Shrine</p>
        </div>
      </a>
      <nav id="global-menu" class="global-menu">
        <div class="upper">
          <ul>
            <li class="language">
              <button type="button">
                <span>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon-global-middle.png" alt="">
                </span>
                Language
              </button>
              <ul>
                <li><a href="<?php echo home_url(); ?>">日本語</a></li>
                <li><a href="<?php echo esc_url(home_url('/english/')); ?>">English</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <button id="menu-toggle-btn" class="menu-toggle-btn">
        <span></span><span></span><span></span>
      </button>
      <a href="#" class="to-page-top">
        <div class="page-top-arrow"></div>
      </a>

    </div>
  </header>
  <main>
    <div class="contents">
      <?php if (is_home() || is_front_page()) : ?>
        <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/_sample_import_616540e4897b26.24217861.mp4"></video>
      <?php else : ?>
        <div class="frame english">
          <h1>SHIRAMINE JINGU-Shrine</h1>
        </div>
      <?php endif; ?>

      <div class="container english">
        <div class="bg">
          <section>
            <div class="contents">
              <div class="gradually-appear-long">
                <div class="lead-copy">
                  <p>Located in Kamigyouku(上京区) KYOTO City(京都市).</p>
                  <p>It enshrines bouth the TENNOHS, SUTOKU(崇徳)-TENNOH and JUNNIN(淳仁)-TENNOH.</p>
                </div>
                <h3 class="none-letter-space eng-history">HISTORY</h3>
                <div class="inner-contents">
                  <div class="flex-container irregularity-gosaizin">
                    <div class="size-small">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/about-gosaizin-emperor01.png" alt="">
                    </div>
                    <div class="paragraph">
                      <div class="wrapper">
                        <p><em>SUTOKU TENNOH</em> was born in 1119 as a prince of TOBA(鳥羽)-TENNOH(天皇). He came to the throne as the 75th TENNOH in 1123.</p>
                        <p>When he battled against GOSHIRAKAWA(後白河)-TENNOH (HOGEN-War) he lost the combat and he was relegated to SHIKOKU(四国). He died there in exile in 1164 and was buried on Mt.SHIRAMINE. He lived an unhappy life. After his death, severe famine and battle did constant damage in the home Provinces, it was thought commonly that these were the result of his wraith.</p>
                      </div>
                      <div class="wrapper">
                        <p>This shrine was built in the present place by MEIJI(明治)-TENNOH in 1863 in order to comfort the wraith of SUTOKU TENNOH.</p>
                        <p>On the other hand he was good at making WAKA(和歌) poems , and he made a lot of famous poetry,and also he was a good musician of GAGAKU(雅楽).</p>
                      </div>
                      <div class="wrapper">
                        <p><em>“A cascading brook once cloven by midstream rock<span class="half-font-size-raise">..</span>is destined finally to flow again as once.”</em> is a famous WAKA in HYAKUNINISSYU(百人一首) whitch was wrote of him.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="contents padding-top-none">
              <div class="gradually-appear-long">
                <div class="inner-contents padding-top-none">
                  <div class="flex-container irregularity-gosaizin">
                    <div class="size-small">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/about-gosaizin-emperor02.png" alt="">
                    </div>
                    <div class="paragraph">
                      <div class="wrapper">
                        <p><em>JUNNIN TENNNOH</em> was born in 733 as a prince of Imperial Prince TONERI(舎人).</p>
                        <p>He came to the throne as the 47th TENNOH.</p>
                        <p>He achieved great works, like relieving poor people, etc.</p>
                        <p>When the battle happened, he was relegated to Awaji(淡路) Island and died there in exile in 765. He was also welcomed to this shrine by MEIJI-TENNNOH in 1873.</p>
                      </div>
                      <div class="wrapper">
                        <p>This shrine is dedicated to the two TENNOHS. We feel sad about their misfortunes in spite of their great governing. So it is important that we</p>
                        <p>recall and comfort them. We hope to pray and appreciate them in our life.</p>
                      </div>
                      <div class="wrapper">
                        <p>During the whole day we should honor the ancestor’s shrines and keep up the annual rites sincerely and reverently.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="contents">
              <div class="gradually-appear-long">
                <h3 class="none-letter-space eng-seidai-myoujin">SEIDAIMYOUJIN(精大明神)</h3>
                <div class="inner-contents">
                  <div class="flex-container">
                    <div class="photos">
                      <div class="photo-frame">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/english-01-1-saidai-myoujin.jpg" alt="">
                      </div>
                      <div class="photo-frame">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/english-01-2-saidai-myoujin.jpg" alt="">
                      </div>
                      <div class="photo-frame">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/english-01-3-saidai-myoujin.jpg" alt="">
                      </div>
                    </div>
                    <div class="paragraph">
                      <div class="wrapper">
                        <p>It is also popularly known as the deity of sports, especially for Soccer today. It is the shrine of the deity of KEMARI(蹴鞠)(the courtly game of kickball), as tradition says that there lives the Seidaimyojin(精大明神)-deity, what we call , the guardian deity of Mari or ball in olden times.</p>
                      </div>
                      <div class="wrapper">
                        <p>Meanwhile, the noble ASUKAI(飛鳥井)-family, experts in the KEMARI have been ardent worshippers of the shrine and preserved KEMARI generation after generation since the HEIAN(平安) period about 1,000 years ago.</p>
                      </div>
                      <div class="wrapper">
                        <p>There is a superstition that if you pay homage at the shrine, you will be proficient in soccer. Therefore, the shrine is popular among professional soccer players and children who aspire to become good players in the future.</p>
                        <p>So, many professional players worship at the shrine before the tournaments because of their will to win.</p>
                      </div>
                      <div class="wrapper">
                        <p>There are five kinds of charms here at this shrine as follows:</p>
                      </div>
                      <ul>
                        <li>1. Talisman for fighting spirit</li>
                        <li>2. Amulet to realize your wishes</li>
                        <li>3. Amulet of clay ball bell</li>
                        <li>4. Ema of Emperor Sutoku</li>
                        <li>5. Ema of KEMARI</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="contents">
              <div class="gradually-appear">
                <h3 class="none-letter-space eng-kemari">KEMARI(蹴鞠)</h3>
                <div class="inner-contents">
                  <div class="flex-container flex-column">
                    <div class="paragraph">
                      <p>It is the traditional game in which the players (usually eight) form a circle and kick a ball back and forth without letting it fall to the ground.</p>
                      <p>It is thought to have come to Japan from China. There are records of its being played at the imperial court as early as the mid-7th century. Kemari achieved wide popularity among the KUGE(公卿court nobles)during the NARA(奈良710-794), HEIAN(平安794-1185), KAMAKURA(鎌倉1185-1333)periods and later spread among both warriors and commoners. The playing field was known as the kakari, an area about 6 meters (20 ft) square with one tree planted at each of the four corners (a willow, a cherry, a pine, and a maple). Players wearing leather shoes shouted as they kicked the man, a deerskin ball(鞠) 24 centimeters (9.4 in) in diameter.</p>
                    </div>
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/english-02-1-kemari.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="contents">
              <div class="gradually-appear">
                <h3 class="none-letter-space eng-ema">EMA(絵馬)</h3>
                <div class="inner-contents">
                  <div class="flex-container  flex-column">
                    <div class="paragraph">
                      <p>It is a small wooden votive tablet carrying a picture of a horse, used as an offering the shrine in place of a real horse. A wish or prayer is written on the back and the Ema is then hung up at the Emakake in the shrine.</p>
                    </div>
                    <div class="photos ema">
                      <div class="photo-frame">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/english-03-1-ema.png" alt="">
                      </div>
                      <div class="photo-frame">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/english-03-2-ema.jpg" alt="">
                      </div>
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