<?php get_header(); ?>

<main>
  <div class="contents">
    <?php if (is_home() || is_front_page()) : ?>
      <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/_sample_import_616540e4897b26.24217861.mp4"></video>
    <?php else : ?>
      <div class="frame guide">
        <h1>境内のご案内</h1>
      </div>
    <?php endif; ?>

    <div class="container guide-temple">
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
              <a href="<?php echo esc_url(home_url('/guide-temple/')); ?>">境内のご案内</a>
            </li>
          </ul>
          <div class="contents guide-map">
            <div class="gradually-appear">
              <h3>境内のご案内</h3>
              <p class="note">※左の項目からお選びください。</p>
              <div class="Illustrative-map">
                <img src="<?php echo get_template_directory_uri(); ?>/img/guide-map.jpg" alt="">
              </div>
              <ul>
                <li><a href="">地主社（じしゅしゃ）</a></li>
                <li><a href="">潜龍社（せんりゅうしゃ）</a></li>
                <li><a href="">伴緒社（とものおしゃ）</a></li>
                <li><a href="">手水舎</a></li>
                <li><a href="#reiboku">霊木</a></li>
              </ul>
            </div>
          </div>
          <div id="reiboku" class="contents reiboku">
            <div class="gradually-appear-short">
              <h3><span class="full-width-char-behind">霊</span>木</h3>
              <ul>
                <li>
                  <a href="">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-01.jpg" alt="">
                    </div>
                    <h4>小賀玉の木</h4>
                    <p>その名は招霊（おぎたま、霊を招くの意）が、なまったものとも言われるところから、神社の境内によく植えられています。</p>
                  </a>
                </li>
                <li>
                  <a href="">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-02.jpg" alt="">
                    </div>
                    <h4>含笑花（ガンシュウゲ）</h4>
                    <p>中国原産で中国名が「含笑花」、その名のとおり慎ましく微笑んでいるような花で、宋の李網の含笑花の賦に「南方花木の美なるもの含笑に若くはなし」とあります。</p>
                  </a>
                </li>
                <li>
                  <a href="">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-03.jpg" alt="">
                    </div>
                    <h4>ムクロジの木</h4>
                    <p>無患子・無患樹・木患子、子が患うこの無い樹の意味です。山地に生え、15m～20mになる落葉高木。</p>
                  </a>
                </li>
                <li>
                  <a href="">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-04.jpg" alt="">
                    </div>
                    <h4>梶の木</h4>
                    <p>梶の木古代から、神に捧げる神木として尊ばれ、七夕祭に「歌」を葉に直接ヘラなどで書きお供えしました。</p>
                  </a>
                </li>
                <li>
                  <a href="">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-05.jpg" alt="">
                    </div>
                    <h4>右近の橘</h4>
                  </a>
                </li>
                <li>
                  <a href="">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-06.jpg" alt="">
                    </div>
                    <h4>鬱金の桜（黄桜）</h4>
                  </a>
                </li>
                <li>
                  <a href="">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-07.jpg" alt="">
                    </div>
                    <h4>三葉の松</h4>
                    <p>昔から日本では、豊饒と平安をもたらす神霊が、松を伝って地上に降臨すると信じられ、昔物語や伝説に登場し、神聖な木として崇めていて、新年の家門に飾る門松は同じ意味で神の降臨を願ってのことです。</p>
                  </a>
                </li>
                <li>
                  <a href="">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-08.jpg" alt="">
                    </div>
                    <h4>季節の花</h4>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>


  <!-- 
  潜龍社

  伴緒社
  地主社
  蹴鞠碑
  小賀玉の木
  手水舎
  神門
  左近の桜
  拝殿
  右近の橘
  鞠庭
  神饌所 
-->

  <!-- <h2>地主社（じしゅしゃ）</h2>

  <p class="catch-copy">あらゆるスポーツの神様です。</p>
    <dl>
    <div>
      <dt>地主社</dt>
      <dd>御利益</dd>
    </div>
    <div>
      <dt>精大明神</dt>
      <dd>球技・スポーツ芸能上達</dd>
    </div>
    <div>
      <dt>柊大明神</dt>
      <dd>厄除延命長寿 ※節分祭にあわて『柊 護符』特別授与 | お知らせをご参照ください。</dd>
    </div>
    <div>
      <dt>今宮大神</dt>
      <dd>無病息災</dd>
    </div>
    <div>
      <dt>白峯天神</dt>
      <dd>学業成就</dd>
    </div>
    <div>
      <dt>糸元大明神</dt>
      <dd>織物繁栄・和装</dd>
    </div>
  </dl>


  <h2>潜龍社</h2>
  <h3>御祭神</h3>
  <p>潜龍大神（龍神）</p>
  <h3>祭事</h3>
  <p>（染・醸造守護）（水守護）11月23日</p>
  <h4>潜龍大神（龍神）由緒</h4>
  <p>当社は昭和30年11月23日に本殿にて御火焚祭斎行中、火炎の中に出現せられたのをもって、水神(潜龍大神)として御宮を創建、翌年より今日に至るまで11月23日には毎年潜龍講大祭が斎行されています。</p>
  <p>この御祭神の鎮まり坐す潜龍井から湧き出でています。ご利益は家系にまつわる諸々の悪縁を断ち、盗難災難除、病気平癒、事業隆昌に霊験あらたかな神で崇敬も篤く崇められて来ました。</p>
  <p>御祭神の広大なる御神徳を更に宣揚し、且つ私共の日々の敬神の念を涵養しつつ、潜龍社の永遠の護持・崇敬を期するために、茲に「白峯神宮潜龍講」を組織し、益々の御神威の宣揚に努めましょう。</p>
  <p>是非とも潜龍大神との絆を強めて頂きますよう、ご入講を心からお待ち申し上げます。</p>

  <h2>伴緒社</h2>
  <figure>
    <img src="<?php echo get_template_directory_uri(); ?>/path/to/js.file/" alt="">
    <figcaption>
      <span>源為朝公</span>
      <span>源為義公</span>
    </figcaption>
  </figure>
  <h3>御祭神</h3>
  <p>源為義公、鎮西八郎為朝公親子（共に弓の名手）義経紀行「源義経」の祖父と叔父にあたります。</p>
  <h3>祭事</h3>
  <p>武道繁栄奨励祭&emsp;5月5日</p>
  <p>伴緒社祭（武道・弓道上達）小笠原教場による御弓神事&emsp;11月15日</p>
  <figure>
    <img src="<?php echo get_template_directory_uri(); ?>/path/to/js.file/" alt="">
    <figcaption>古武道奉納演武</figcaption>
    <figcaption>御弓神事</figcaption>
  </figure>


  <h2>手水舎</h2>

  <h3>飛鳥井</h3>
  <img src="<?php echo get_template_directory_uri(); ?>/path/to/photo.file/" alt="">
  <p>白峯神宮の飛鳥井は平安の昔から有名です。平安時代の歌謡曲の催馬楽「飛鳥井」には「飛鳥井に宿りはすべし、や、おけ、蔭もよし、御水（ミモヒ）も寒し、御秣（ミマクサ）もよし」と謡われていて、オアシスのように人々が憩っていたと想像されます。（や、おけ、は囃子ことば。）</p>
  <p><em>清少納言は『枕草子』168段</em>に『飛鳥井は、ほりかねの井。走り井は逢坂なるがをかしき。山の井、さしも浅きためしになりはじめけむ。<em>飛鳥井「みもひも寒し」と、ほめたるこそをかしけれ。</em>玉の井、少将ノ井、櫻井、后町の井。千貫の井。』と九つの名水をあげていますが、明確に現存するのは本井戸だけです。</p>

  <p>当時の清少納言も楽しんだ名水です。</p>
  <p>三方を山に囲まれた平安京（京都市）は、その地形が伏流水を地中深く流して、豊かな水脈として大きな水瓶のように地中に蓄えられております。</p>
  <p>献茶祭（11月23日）では、<em>（公・財）煎茶道方円流家元</em>のご奉仕によりお茶が献じられ、庭上ではお茶席が設けられます。</p>

  <h3>潜龍井（笑い龍）</h3>
  <img src="<?php echo get_template_directory_uri(); ?>/path/to/photo.file/" alt="">
  <p><em>潜龍大明神の御神体</em>とされる本井戸は、飛鳥井からほんの50mほど離れているだけですが、同じ地所でも深さが違うと、全く違った水脈源になり、水温も異なっています。</p>


  <h2>小賀玉の木</h2>
  <h3>小賀玉の木</h3>

  <div class="flex-grid">
    <div>
      <p class="technical-name">
        和名：オガタマノキ（モクレン科オガタマ属）<br />
        学名：Michelia compressa Sorg
      </p>
      <p>その名は招霊（おぎたま、霊を招くの意）が、なまったものとも言われるところから、神社の境内によく植えられています。</p>
      <p>神宮に植栽されているオガタマノキは、樹高約13mで一説では樹齢800年と言われていますが、今も旺盛に春には白い芳香のある花を咲かせ、秋にはピンクの実を落として鳥たちや多くの生物を育んでいます。</p>
      <p>この木が京都では最大のもので、京都市指定天然記念物に指定されています。</p>
    </div>
    <div class="frame guide">
      <img src="" alt="">
    </div>
  </div>
  <ul>
    <li>巫女舞に使用される鈴は小賀玉の木の果実を模してつくられています。</li>
    <li>果実の成り方が巫女舞に使用される鈴のモデルになっています。</li>
    <li>日本国通貨の１つ、１円硬貨に描かれている絵のモデルになっています。</li>
  </ul>
  <div>
    <img src="" alt="">
    <img src="" alt="">
    <img src="" alt="">
  </div>


  <h2>含笑花（ガンシュウゲ）</h2>
  <div class="technical-name">
    和名：カラタネオガタマ・トウオガタマ（モクレン科オガタマノキ属）<br />
    学名：Michelia fuscaa Blume
  </div>
  <div class="flex-grid">
    <div>
      <p><em>ガンシュウゲ</em>は、本殿の左右に植えられていて、左が高木で、右の方が低木です。</p>
      <p>中国原産で中国名が「含笑花」、その名のとおり慎ましく微笑んでいるような花で、宋の李網の含笑花の賦に<em>「南方花木の美なるもの含笑に若くはなし」</em>とあります。</p>
      <p>日本への渡来は江戸時代中期ころです。当神宮での植栽の経緯は不明でありますが、一般に神社に植えられていることが多く、霊木としての扱いを受けています。</p>
      <p>開花期間は4月なかばから5月下旬までと長いのですが、花は2・3日で落花するために、実は見られません。一輪だけでもバナナのような甘い香気が強く思わず見上げてしまい、見えないところで咲いていても開花を知ることができます。</p>
    </div>
    <div class="frame guide">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
  </div>
  <p>和名の「トウオガタマ（唐招魂）」は、日本自生の「オガタマノキ（招魂の木）」と区別して中国のオガタマノキという意味から、この名前がつけられたと思われます。</p> -->

</main>

<?php get_footer(); ?>