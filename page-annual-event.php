<?php get_header(); ?>

<main>
  <div class="contents">
    <?php if (is_home() || is_front_page()) : ?>
      <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/_sample_import_616540e4897b26.24217861.mp4"></video>
    <?php else : ?>
      <div class="frame annual-event">
        <h1>年中行事・祭事</h1>
      </div>
    <?php endif; ?>

    <div class="container annual-event">
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
              <a href="<?php echo esc_url(home_url('/annual-event/')); ?>">年中行事・祭事</a>
            </li>
          </ul>

          <div class="contents chart">
            <div class="gradually-appear">
              <div class="header">
                <h3>年中行事・祭事</h3>
              </div>
            </div>
            <div class="gradually-appear-long">
              <div class="note">表内のリンク（赤下線）から<br class="media-screen-md" />詳細をご覧いただけます。</div>
              <ul class="list-contents">
                <li>
                  <div class="date">1月1日</div>
                  <div class="subject">歳旦祭</div>
                </li>
                <li>
                  <div class="date">1月3日</div>
                  <div class="subject">元始祭</div>
                </li>
                <li>
                  <div class="date">2月節分</div>
                  <div class="subject">
                    <div>節分祭（鬼遣い豆まき神事）<br class="media-screen-md" />柊大明神例祭&emsp;16：00</div>
                    <div>『柊護符』特別頒布&emsp;<a class="from-annual-event-to-post" href="" target="_blank">期間限定</a></div>
                  </div>
                </li>
                <li>
                  <div class="date">2月11日</div>
                  <div class="subject">紀元祭</div>
                </li>
                <li>
                  <div class="date">2月17日</div>
                  <div class="subject">祈年祭</div>
                </li>
                <li>
                  <div class="date">3月第1土曜日</div>
                  <div class="subject">交通安全祈願祭</div>
                </li>
                <li>
                  <div class="date">3月21日</div>
                  <div class="subject">春季皇霊祭</div>
                </li>
                <li>
                  <div class="date">4月14日</div>
                  <div class="subject">
                    <div><span class="modal-open-trigger apl-14">春季例大祭&emsp;淳仁天皇祭</span>（蹴鞠奉納）<br class="media-screen-md" />10：30&emsp;※蹴鞠体験可</div>
                  </div>
                </li>
                <li>
                  <div class="date">5月5日</div>
                  <div class="subject">
                    <div><span>子供の日</span></div>
                    <div><span class="modal-open-trigger before-emsp may-05-01">武道繁栄奨励祭</span>&emsp;8：30</div>
                    <div><span class="modal-open-trigger before-emsp may-05-02">古武道奉納奉告祭</span>&emsp;10：00</div>
                  </div>
                </li>
                <li>
                  <div class="date">6月30日</div>
                  <div class="subject">
                    <div>夏越大祓式（<span class="modal-open-trigger jun-30">茅の輪くぐり神事</span>）&emsp;17：00</div>
                    <div>※『茅の輪護符』特別頒布&emsp;<a class="from-annual-event-to-post" href="" target="_blank">期間限定</a></div>
                  </div>
                </li>
                <li>
                  <div class="date">7月7日</div>
                  <div class="subject">
                    <div><span>精大明神例祭「七夕祭」</span></div>
                    <div><span class="modal-open-trigger before-emsp jul-07-01">蹴鞠奉納</span>&emsp;13：30</div>
                    <div><span class="modal-open-trigger before-emsp jul-07-02">小町をどり奉納奉告祭</span>&emsp;16：00</div>
                  </div>
                </li>
                <li>
                  <div class="date">8月15日</div>
                  <div class="subject">戦没者慰霊祭&emsp;11：30&emsp;正午の時報に<br class="media-screen-md" />あわせ黙祷</div>
                </li>
                <li>
                  <div class="date">9月21日</div>
                  <div class="subject">
                    <div><span>秋季例大祭</span></div>
                    <div><span class="modal-open-trigger before-emsp sep-21">崇徳天皇祭</span>&emsp;11：00</span></div>
                    <div><span class="modal-open-trigger before-emsp sep-21">薪能</span>&emsp;16：00</div>
                  </div>
                </li>
                <li>
                  <div class="date">9月秋分</div>
                  <div class="subject">秋季皇霊祭</div>
                </li>
                <li>
                  <div class="date">10月望月の日</div>
                  <div class="subject row">
                    <div><span class="modal-open-trigger oct-full-moon">献燈祭観月の夕べ</span>&emsp;18：00</div>
                  </div>
                </li>
                <li>
                  <div class="date">10月17日</div>
                  <div class="subject">神嘗祭当日祭&emsp;神嘗奉祝祭</div>
                </li>
                <li>
                  <div class="date">11月15日</div>
                  <div class="subject">
                    <div>伴緒社祭（御弓神事）&emsp;11：00</div>
                    <div><span class="modal-open-trigger nov-15">七五三詣</span></div>
                  </div>
                </li>
                <li>
                  <div class="date">11月23日</div>
                  <div class="subject">
                    <div>新嘗祭（日供講祭・<span class="modal-open-trigger nov-23-01">献茶祭</span>・潜龍社祭・<span class="modal-open-trigger nov-23-02"><br class="media-screen-md" />御火焚祭</span>）
                    </div>
                  </div>
                </li>
                <li>
                  <div class="date">12月31日</div>
                  <div class="subject">
                    <div>大祓式&emsp;16：00</div>
                    <div>除夜祭&emsp;17：00</div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </div>

      <!-- modal -->
      <div class="modal apl-14">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="annual-event-modal-header">春季例大祭&emsp;淳仁天皇祭</h4>
          <h5 class="leading-square-header">4月14日（午前10時30分より斎行）</h5>
          <div class="flex-grid">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0414-01.jpg" alt="">
              <figcaption>参進</figcaption>
            </figure>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0414-02.jpg" alt="">
              <figcaption>修祓</figcaption>
            </figure>
          </div>
          <h5 class="leading-square-header">祭典の後蹴鞠奉納</h5>
          <div class="flex-grid">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0414-03.jpg" alt="">
              <figcaption>鞠授与</figcaption>
            </figure>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0414-04.jpg" alt="">
              <figcaption>解鞠式</figcaption>
            </figure>
          </div>
          <h5 class="leading-square-header">黄桜と蹴鞠</h5>
          <div class="photo-frame">
            <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0414-05.jpg" alt="">
          </div>
        </div>
      </div>

      <div class="modal may-05-01">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="annual-event-modal-header">子供の日&emsp;武道繁栄奨励祭</h4>
          <p class="left-side-caption">斎行&emsp;8時30分～</p>
          <div class="flex-grid">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-1-01.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-1-02.jpg" alt="">
            </div>
          </div>
          <p class="left-side-caption">松濤館白峯塾</p>
          <div class="flex-grid">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-1-03.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-1-04.jpg" alt="">
            </div>
          </div>
          <p class="left-side-caption">妙覚寺剣道場</p>
          <div class="flex-grid">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-1-05.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-1-06.jpg" alt="">
            </div>
          </div>
          <p class="left-side-caption">合気道無限塾</p>
          <div class="flex-grid">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-1-07.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-1-08.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="modal may-05-02">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="annual-event-modal-header">子供の日&emsp;古武道奉納奉告祭</h4>
          <p>※年ごとに様々な流派に御奉納頂いております。画像は一例です。</p>
          <p>古武道奉納</p>
          <div class="flex-grid">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-2-01.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-2-02.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-2-04.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-2-05.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-2-06.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-2-07.jpg" alt="">
            </div>
          </div>
          <p class="attention">なお、当日は(公財)煎茶道方円流による献茶式・野煎席がございます。</p>

          <p>野煎席</p>
          <div class="flex-grid">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-2-08.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-2-09.jpg" alt="">
            </div>
          </div>
          <p>献茶式</p>
          <div class="flex-grid">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-2-10.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0505-2-11.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="modal jun-30">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="annual-event-modal-header">茅の輪くぐり神事</h4>
          <h5 class="leading-square-header">6月30日&emsp;茅の輪くぐり神事</h5>
          <p>6月30日と12月31日には大祓式が斎行されます。</p>
          <p>夏越大祓式と年越大祓式という神道では最も重要な神事です。</p>
          <p>半年の間に積もった身の罪穢れを祓い清めます。</p>
          <p>夏には茅の輪を八の字に3回くぐり、その度に、茅の葉に罪穢れが移り身が清らかになると言われています。</p>

          <p class="left-side-caption">夏越大祓式</p>
          <div class="flex-grid">
            <div class="photo-frame one">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0630-01.jpg" alt="">
            </div>
            <div class="photo-frame two">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0630-02.jpg" alt="">
            </div>
            <div class="photo-frame three">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0630-03.jpg" alt="">
            </div>
          </div>
          <h5 class="leading-square-header two-line">『茅の輪』護符<br class="media-screen-md" />&emsp;特別授与&emsp;1体&emsp;700円</h5>
          <div class="flex-grid">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0630-04.jpg" alt="">
            </div>
            <div>
              <ul>
                <li><a href="">『茅の輪護符』&emsp;申込用紙（PDF）</a></li>
                <li><a href="">『茅の輪護符』&emsp;記入例（PDF）</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="modal july-07-01">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="annual-event-modal-header">精大明神例祭「七夕祭」蹴鞠奉納</h4>
          <h5 class="leading-square-header">7月7日&emsp;精大明神例祭「七夕祭」<br class="media-screen-md" />蹴鞠奉納（午後1時30分）</h5>
          <p>精大明神祭（七夕祭）には祭典中に竹若舞楽による舞楽が奉納されます。</p>
          <div class="flex-grid">
            <div class="photo-frame one">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0707-1-01.jpg" alt="">
            </div>
            <div class="photo-frame two">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0707-1-02.jpg" alt="">
            </div>
            <div class="photo-frame three">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0707-1-03.jpg" alt="">
            </div>
            <div class="photo-frame four">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0707-1-04.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="modal july-07-02">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="annual-event-modal-header two-line">精大明神例祭「七夕祭」<br class="media-screen-md" />小町をどり</h4>
          <h5 class="leading-square-header two-line">7月7日&emsp;精大明神例祭「七夕祭」<br class="media-screen-md" />小町をどり奉納奉告祭（午後4時）</h5>
          <div class="flex-grid">
            <div class="paragraph">
              <p>白峯神宮では、毎年七月七日午後四時からの七夕祭に、地元の少女たちによって『小町をどり』が奉納されます。</p>
              <p>この踊りは、元来、奈良時代、宮中の行事として始まった陰暦七月七日夜の乞功奠（きこうでん芸能が巧みになることを乞祈る祭り）の際、供え物として公卿等が詠んだ「和歌」を届ける時に、文使い（ふみづかい）のお供をしていた娘たちが、その道中で歌い舞った踊りが起源とされています。</p>
              <p>その後、これが民間で七夕の風習になり、特に女子が手芸と芸事の巧みなることを願う祭事として定着し、元禄の頃になりますと西陣界隈の乙女たちを熱狂させまして、あでやかな西陣織の着物を着飾って町々を歌をうたい、踊り歩いたのが始まりであるとされています。</p>
              <p>衣装は、紫のハチマキに桔梗の銀かんざし、緋の襦袢を片袖ぬぎにして、金襴のたすきと帯、赤いしごき、青を基調にした着物は、緋とのコントラストがひときわあでやかさをまします。その着つけも、元禄の優雅さがしのばれ、一層乙女たちの可憐さを強調します。</p>
              <p>左手に小太鼓をもち、右手のバチをかざしてシナをつくり、鞠庭中央の七夕飾りの大笹の元、牽牛・織女の周りを回りながら、歌に合わせて打ち鳴らすトントンとかわいた小太鼓の音が、静かな境内に響きます。</p>
            </div>
            <div class="photos">
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0707-2-01.jpg" alt="">
              </div>
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0707-2-02.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="flex-grid">
            <p>明治の遷都以後、この行事は途絶えておりましたが、これを惜しんだ地元の人々が、時代風俗の考証を吉川観方、作曲・振り付けを茂山千五郎氏の協力を得て、昭和三十七年の七夕祭に復活させたものです。以後、今日まで、夏の風物詩として、当神宮ゆかりの「けまり（蹴鞠）」と共に広く親しまれています。</p>
            <p>また、「七夕」に当神宮に奉納されるのは、神宮の境内に地主神として尊崇されている地主社の御祭神（精大明神）が和歌・けまり上達の守護神、また七夕の神とも伝承されていることによります。</p>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0707-2-03.jpg" alt="">
            </div>
          </div>
          <h5 class="leading-square-header">踊り子募集</h5>
          <div class="flex-grid">
            <div class="paragraph">
              <p>毎年六月初旬頃、小学生を中心に踊り子を募集していますが、この踊りの保存育成と後代に引き継ぐべく努力を積み重ねて、小町をどり保存会を結成して広く参加を求め同時に上京区のみならず市内一般に、をどり子の募集と保護者への働きかけを続けています。</p>
              <p>どうぞお申し込み下さい。</p>
            </div>
            <div class="photo-frame one">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0707-2-04.jpg" alt="">
            </div>
            <div class="photo-frame two">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0707-2-05.jpg" alt="">
            </div>
            <div class="photo-frame three">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0707-2-06.jpg" alt="">
            </div>
            <div class="photo-frame four">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0707-2-07.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="modal sep-21">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="annual-event-modal-header">秋季例大祭&emsp;崇徳天皇祭</h4>
          <h5 class="leading-square-header two-line">9月21日&emsp;秋季例大祭<br class="media-screen-md" />（午前11時より斎行）</h5>
          <div class="flex-grid">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0921-01.jpg" alt="">
            </figure>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0921-02.jpg" alt="">
              <figcaption>浦安の舞&emsp;奉納</figcaption>
            </figure>
          </div>
          <h5 class="leading-square-header">薪能（午後4時より）</h5>
          <div class="flex-grid">
            <div class="paragraph">
              <p>白峯神宮秋季例大祭（9月21日）に時を併せて夕刻より観世・金剛流の能楽と、大蔵流の狂言等が篝火の映える特設舞台で演じられ、初秋の宵を幽玄の世界に浸ることが出来ます。（有料）</p>
              <p>なお、奉納の日は毎年変わります。詳しくは、上京文化振興会&emsp;まちづくり推進課（075－441－5040）までお問い合わせ下さい。</p>
              <p>主催します上京区文化振興会は、当神宮御祭神の御二方の天皇の御治績が、我国の発展に偉大なる功績がありながら、治世の流れの中で御無念の御生涯を終えられたことを深くお慰めし、古都としての歴史的な文化と遣産をその魅力とともに、心を込めて数多く継承するため、昭和三十四年より境内にて「上京薪能」として実施しています。上京区民の文化人中から金剛流よりは種田師。観世流は河村家。狂言は茂山社中が担当し、いちひめ雅楽会の舞楽と区民の箏曲等も加わります。</p>
              <p>第1部：午後4時開演</p>
              <p>第2部：午後6時より（雨天時は金剛能楽堂にて）。</p>
            </div>
            <div class="photos">
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0921-03.jpg" alt="">
              </div>
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0921-04.jpg" alt="">
              </div>
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0921-05.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="modal sep-21">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="annual-event-modal-header">秋季例大祭&emsp;崇徳天皇祭</h4>
          <h5 class="leading-square-header">9月21日&emsp;秋季例大祭（午前11時より斎行）</h5>
          <div class="flex-grid">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0921-01.jpg" alt="">
              <figcaption></figcaption>
            </figure>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0921-02.jpg" alt="">
              <figcaption>浦安の舞&emsp;奉納</figcaption>
            </figure>
          </div>
          <h5 class="leading-square-header">薪能（午後4時より）</h5>
          <div class="flex-grid">
            <div class="paragraph">
              <p>白峯神宮秋季例大祭（9月21日）に時を併せて夕刻より観世・金剛流の能楽と、大蔵流の狂言等が篝火の映える特設舞台で演じられ、初秋の宵を幽玄の世界に浸ることが出来ます。（有料）</p>
              <p>なお、奉納の日は毎年変わります。詳しくは、上京文化振興会&emsp;まちづくり推進課（075－441－5040）までお問い合わせ下さい。</p>
              <p>主催します上京区文化振興会は、当神宮御祭神の御二方の天皇の御治績が、我国の発展に偉大なる功績がありながら、治世の流れの中で御無念の御生涯を終えられたことを深くお慰めし、古都としての歴史的な文化と遣産をその魅力とともに、心を込めて数多く継承するため、昭和三十四年より境内にて「上京薪能」として実施しています。上京区民の文化人中から金剛流よりは種田師。観世流は河村家。狂言は茂山社中が担当し、いちひめ雅楽会の舞楽と区民の箏曲等も加わります。</p>
              <p>第1部：午後4時開演</p>
              <p>第2部：午後6時より（雨天時は金剛能楽堂にて）。</p>
            </div>
            <div class="photos">
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0921-03.jpg" alt="">
              </div>
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0921-04.jpg" alt="">
              </div>
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-0921-05.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="modal oct-full-moon">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="annual-event-modal-header">献燈祭&emsp;観月の夕べ</h4>
          <h5 class="leading-square-header">10月望月の日&emsp;観月祭（献燈講祭）</h5>
          <div class="flex-grid">
            <div class="paragraph">
              <p>白峯神宮の観月祭（献燈講祭）は古来の習わしどおり、陰暦9月15日（中秋名月）前後の日、夕刻より行われます。</p>
              <p>明治元年に「昭憲皇太后様」「桂宮様」の釣燈籠の奉献に始まり、今日のお燈明に至るまで、御祭神へ絶える事のない敬神の心が伝えられております。</p>
              <p>崇敬者の皆様から献納頂いた「みあかし」が社頭に掲げられ大神様の御心をお慰め致しております。</p>
              <p>御祭神の崇徳天皇は、当時宮中きっての管絃と和歌の名手でありましので、月のもっとも美しい望月の旧の中秋に観月の催しが行われ、月の美しさを愛でると共に、和歌を詠んで、管絃を楽しまれました。</p>
              <p>竹取物語には、「この日の子の刻にかぐや姫が昇天する」とありますように、古くから意味のある日です。</p>
              <p>当夜は祭典後、各種団体・グループ等により、各種芸能・舞楽等が奉奏・奉納されます。</p>
              <p>車はおけません。</p>
            </div>
            <div class="photos">
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-10fullmoon-01.jpg" alt="">
              </div>
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-10fullmoon-02.jpg" alt="">
              </div>
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-10fullmoon-03.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="modal nov-15">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="annual-event-modal-header">七五三詣</h4>
          <h5 class="leading-square-header">11月15日は七五三祝いの日です。）</h5>
          <div class="flex-grid">
            <div class="paragraph">
              <p>以下のお子さん方が対象です。</p>
              <dl>
                <div>
                  <dt>3歳 男児・女児</dt>
                  <dd>〓〓〓〓〓〓〓</dd>
                </div>
                <div>
                  <dt>5歳 男児</dt>
                  <dd>〓〓〓〓〓〓〓</dd>
                </div>
                <div>
                  <dt>7歳 女児</dt>
                  <dd>〓〓〓〓〓〓〓</dd>
                </div>
              </dl>
              <p>満年齢での七・五・三才の方もお詣りいただけます。</p>
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-1115-01.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-1115-02.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-1115-03.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-1115-04.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-1115-05.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-1115-06.jpg" alt="">
            </div>
          </div>
          <p class="irregular-para">私どもが無事に毎日の生活をさせていただけるのは、神様がお守りくだっさているからです。このご加護に感謝して、人生の節目毎に家族揃って神様をお参りすることによって、子供たちも親に見習って自然に「感謝のこころ」を身につけていきます。そのことが、人や物を大切して、感謝する心を育てることになります。</p>
          <div class="flex-grid">
            <div class="paragraph">
              <h5 class="leading-square-header">『七五三』とは</h5>
              <p>古くから『七五三の祝い』を「髪置き」「袴着」「帯解き（紐解き）」の祝いといっていました。 髪置きは三歳の男女児の祝いで、もう赤ん坊ではないという意味から、今まで剃っていた髪をこの日から伸ばし始める儀式です。 袴着は五歳の男児の祝いで、初めて袴を着ける儀式、帯解き（紐解き）は七歳の女児の祝いで、着物の付け紐を取り去り帯に替える儀式です。 現在では、その年齢にあたる子どもに晴れ着を着せて、11月15日に神社へ参詣し、子どもたちの成長と健康を感謝すると共に、今後の成長とさらなる健康を祈願する儀礼となりました。 なお、本来は数え年で祝いますが、最近では満年齢で祝う割合が高くなり、また参拝の日取りも11月15目にこだわらず、その前後の都合の良い日に参拝する傾向が強くなってきました。</p>
              <p>11月15日にお祝いを行うようになったのは、旧暦ではこの日が二十八宿の鬼宿日（きしゅくにち）で、祝い事に最良の日であり、11月は秋の実りを神に感謝する月でもあり、さらにこの日は霜月の望月で、収穫感謝の祭りを行う大切な日です。そこで氏神様に収穫の感謝をして、子供の成長をも感謝し、更なる御加護を祈ったのです。</p>
            </div>
            <div class="paragraph">
              <h5 class="leading-square-header">祝飴（いわいあめ）～千歳飴</h5>
              <p>七五三の千歳飴は、江戸時代元禄宝永の頃が始まりとされています。健康で長寿を願う「祝飴」として、祖父母やお祝いをいただいた方に、神社より頂戴した千歳飴を子供に持たせ、挨拶をしながら配ります。</p>
              <p>お詣りの申し込みは、直接社務所へおいでくださるか、また、電話・メール・FAXなどでも結構です。</p>
              <p>（ご両親・お子さまのお名前、ご住所、電話番号、生年月日、性別をお知らせ下さい）</p>
              <h5 class="leading-square-header">装いについて</h5>
              <p>このお祝いの日の装いについては日本古来の伝統行事として、子供の成長を祝う家庭行事の一つですので、子供の装いが振り袖・袴姿など伝統にそったものでしたら、親御さんもそれに近い格調ある礼装をします。</p>
              <p>子供が少々くだけた装いでしたら江戸小紋に袋帯でもよいでしょう。洋服の場合は、子どもの服装に合わせてスーツやワンピースなどが適切ですが、神社に詣でるのですから､少し改まった装いをしたいものです。</p>
            </div>
          </div>
          <div class="in-modal-info">
            <h1>七五三わんぱくプラン</h1>
            <p>祈祷、衣装、着付、<br class="media-screen-md" />写真（八つ切ポーズ込み）<br />お問い合わせ・お申し込みは<br class="media-screen-md" />「ブライダルハウス オエ」</p>
            <p>TEL. <a href="tel:075-431-0381"></a>075-431-0381<span>まで</span></p>
          </div>
        </div>
      </div>

      <div class="modal nov-23-01">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="annual-event-modal-header">献茶祭</h4>
          <h5 class="leading-square-header">11月23日&emsp;新嘗祭</h5>
          <p>（公財）煎茶道方円流の献茶祭が行われ、 お茶席がもうけられます。</p>
          <div class="flex-grid">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-1123-1-01.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-1123-1-02.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-1123-1-03.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-1123-1-04.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="modal nov-23-02">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="annual-event-modal-header">御火焚祭</h4>
          <h5 class="leading-square-header">11月23日&emsp;御火焚祭</h5>
          <p>
            心願成就・家内安全・除災招福など様々な願いの込められた「願い串」を、「大祓祝詞」奏上とともに浄火により焚き上げます。<br />
            11月23日のこの日、新嘗祭・献茶祭・日供講祭・潜龍社祭も斎行され、新酒の白酒（しろき）がいただけます。
          </p>
          <div class="flex-grid">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-1123-2-01.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-1123-2-02.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/annual-event-1123-2-03.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>

<?php get_footer(); ?>