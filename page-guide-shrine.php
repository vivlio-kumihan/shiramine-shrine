<?php get_header(); ?>

<main>
  <div class="contents">
    <?php if (is_home() || is_front_page()) : ?>
      <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/shiramine_imgmov3.mp4"></video>
    <?php else : ?>
      <div class="frame guide">
        <h1>境内のご案内</h1>
      </div>
    <?php endif; ?>

    <div class="container guide-shrine">
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
              <a href="<?php echo esc_url(home_url('/guide-shrine/')); ?>">境内のご案内</a>
            </li>
          </ul>

          <div class="contents guide-map">
            <div class="gradually-appear">
              <div class="header">
                <h3>境内のご案内</h3>
                <p class="note">※<span class="changeWord"></span>の項目からお選びください。</p>
              </div>
              <div class="Illustrative-map">
                <img src="<?php echo get_template_directory_uri(); ?>/img/guide-map.jpg" alt="">
                <ul>
                  <li>
                    <div class="modal-open-trigger jisyushya">地主社（じしゅしゃ）</div>
                  </li>
                  <li>
                    <div class="modal-open-trigger senryushya">潜龍社（せんりゅうしゃ）</div>
                  </li>
                  <li>
                    <div class="modal-open-trigger tomonoshya">伴緒社（とものおしゃ）</div>
                  </li>
                  <li>
                    <div class="modal-open-trigger temizushya">手水舎</div>
                  </li>
                  <li>
                    <div><a href="#reiboku">霊木</a></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div id="reiboku" class="contents reiboku">
            <div class="gradually-appear-short">
              <h3 class="leading-square-header"><span class="full-width-char-behind">霊</span>木</h3>
              <ul>
                <li>
                  <div class="modal-open-trigger ogatama-no-ki">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-01.jpg" alt="">
                    </div>
                    <h4>小賀玉の木</h4>
                    <p>その名は招霊（おぎたま、霊を招くの意）が、なまったものとも言われるところから、神社の境内によく植えられています。</p>
                  </div>
                </li>
                <li>
                  <div class="modal-open-trigger ganshyuge">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-02.jpg" alt="">
                    </div>
                    <h4 class="header-ganshyuge"><ruby>含笑花<rt>ガンシュウゲ</rt></ruby></h4>

                    <p>中国原産で中国名が「含笑花」、その名のとおり慎ましく微笑んでいるような花で、宋の李網の含笑花の賦に「南方花木の美なるもの含笑に若くはなし」とあります。</p>
                  </div>
                </li>
                <li>
                  <div class="modal-open-trigger mukuroji-no-ki">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-03.jpg" alt="">
                    </div>
                    <h4>ムクロジの木</h4>
                    <p>無患子・無患樹・木患子、子が患うこの無い樹の意味です。山地に生え、15m～20mになる落葉高木。</p>
                  </div>
                </li>
                <li>
                  <div class="modal-open-trigger kaji-no-ki">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-04.jpg" alt="">
                    </div>
                    <h4>梶の木</h4>
                    <p>梶の木古代から、神に捧げる神木として尊ばれ、七夕祭に「歌」を葉に直接ヘラなどで書きお供えしました。</p>
                  </div>
                </li>
                <li>
                  <div class="modal-open-trigger ukon-no-tachibana">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-05.jpg" alt="">
                    </div>
                    <h4>右近の橘</h4>
                  </div>
                </li>
                <li>
                  <div class="modal-open-trigger ukon-no-sakura">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-06.jpg" alt="">
                    </div>
                    <h4>鬱金の桜（黄桜）</h4>
                  </div>
                </li>
                <li>
                  <div class="modal-open-trigger sanyo-no-matsu">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-07.jpg" alt="">
                    </div>
                    <h4>三葉の松</h4>
                    <p>昔から日本では、豊饒と平安をもたらす神霊が、松を伝って地上に降臨すると信じられ、昔物語や伝説に登場し、神聖な木として崇めていて、新年の家門に飾る門松は同じ意味で神の降臨を願ってのことです。</p>
                  </div>
                </li>
                <li>
                  <div class="modal-open-trigger four-seasons">
                    <div class="photo-frame">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-08.jpg" alt="">
                    </div>
                    <h4>季節の花</h4>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </div>

      <!-- modal -->
      <div class="modal jisyushya">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="guide-shrine-modal-header">地主社</h4>
          <div class="flex-grid">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-jisyusya-01.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-jisyusya-02.jpg" alt="">
            </div>
          </div>
          <h5 class="leading-square-header">あらゆるスポーツの神様です。</h5>
          <div class="flex-grid">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-jisyusya-03.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-jisyusya-04.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-jisyusya-05.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-jisyusya-06.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-jisyusya-07.jpg" alt="">
            </div>
          </div>
          <dl>
            <div>
              <dt><span>地</span><span>主</span>社</dt>
              <dd><span>御</span><span>利</span><span>益</span></dd>
            </div>
            <div>
              <dt>精大明神</dt>
              <dd>球技・スポーツ芸能上達</dd>
            </div>
            <div>
              <dt>柊大明神</dt>
              <dd>厄除延命長寿 <span>※節分祭にあわて『柊 護符』特別授与 | お知らせをご参照ください。</span></dd>
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
        </div>
      </div>

      <div class="modal senryushya">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="guide-shrine-modal-header">潜龍社</h4>
          <div class="flex-grid">
            <div class="paragraph">
              <h5 class="leading-square-header">御祭神</h5>
              <p>潜龍大神（龍神）</p>
              <h5 class="leading-square-header">祭事</h5>
              <p>（染・醸造守護）（水守護）11月23日</p>
              <h5 class="leading-square-header">潜龍大神（龍神）由緒</h5>
              <p>当社は昭和30年11月23日に本殿にて御火焚祭斎行中、火炎の中に出現せられたのをもって、水神(潜龍大神)として御宮を創建、翌年より今日に至るまで11月23日には毎年潜龍講大祭が斎行されています。</p>
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-senryusya.jpg" alt="">
            </div>
          </div>
          <p>この御祭神の鎮まり坐す潜龍井から湧き出でています。ご利益は家系にまつわる諸々の悪縁を断ち、盗難災難除、病気平癒、事業隆昌に霊験あらたかな神で崇敬も篤く崇められて来ました。</p>
          <p>御祭神の広大なる御神徳を更に宣揚し、且つ私共の日々の敬神の念を涵養しつつ、潜龍社の永遠の護持・崇敬を期するために、茲に「白峯神宮潜龍講」を組織し、益々の御神威の宣揚に努めましょう。</p>
          <p>是非とも潜龍大神との絆を強めて頂きますよう、ご入講を心からお待ち申し上げます。</p>
        </div>
      </div>

      <div class="modal tomonoshya">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="guide-shrine-modal-header">伴緒社</h4>
          <div class="flex-grid">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-tomonosha-01.jpg" alt="">
              <figcaption>源為朝公</figcaption>
            </figure>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-tomonosha-02.jpg" alt="">
            </div>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-tomonosha-03.jpg" alt="">
              <figcaption>源為義公</figcaption>
            </figure>
          </div>
          <h5 class="leading-square-header">御祭神</h5>
          <p>源為義公、鎮西八郎為朝公親子（共に弓の名手）義経紀行「源義経」の祖父と叔父にあたります。</p>
          <h5 class="leading-square-header">祭事</h5>
          <p>武道繁栄奨励祭&emsp;5月5日</p>
          <p>伴緒社祭（武道・弓道上達）小笠原教場による御弓神事&emsp;11月15日</p>
          <div class="flex-grid">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-tomonosha-04.jpg" alt="">
              <figcaption>古武道奉納演武</figcaption>
            </figure>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-tomonosha-05.jpg" alt="">
              <figcaption>御弓神事</figcaption>
            </figure>
          </div>
        </div>
      </div>

      <div class="modal temizushya">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="guide-shrine-modal-header">手水舎</h4>
          <h5 class="leading-square-header">飛鳥井</h5>
          <div class="flex-grid">
            <div class="paragraph">
              <p>白峯神宮の飛鳥井は平安の昔から有名です。平安時代の歌謡曲の催馬楽「飛鳥井」には「飛鳥井に宿りはすべし、や、おけ、蔭もよし、御水（ミモヒ）も寒し、御秣（ミマクサ）もよし」と謡われていて、オアシスのように人々が憩っていたと想像されます。（や、おけ、は囃子ことば。）</p>
              <p><em>清少納言は『枕草子』168段</em>に『飛鳥井は、ほりかねの井。走り井は逢坂なるがをかしき。山の井、さしも浅きためしになりはじめけむ。<em>飛鳥井「みもひも寒し」と、ほめたるこそをかしけれ。</em>玉の井、少将ノ井、櫻井、后町の井。千貫の井。』と九つの名水をあげていますが、明確に現存するのは本井戸だけです。</p>
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-temizusya-01.jpg" alt="">
            </div>
          </div>
          <p>当時の清少納言も楽しんだ名水です。</p>
          <p>三方を山に囲まれた平安京（京都市）は、その地形が伏流水を地中深く流して、豊かな水脈として大きな水瓶のように地中に蓄えられております。</p>
          <p>献茶祭（11月23日）では、<em>（公・財）煎茶道方円流家元</em>のご奉仕によりお茶が献じられ、庭上ではお茶席が設けられます。</p>
          <h5 class="leading-square-header">潜龍井（笑い龍）</h5>
          <div class="flex-grid">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-temizusya-02.jpg" alt="">
            </div>
            <div class="paragraph">
              <p><em>潜龍大明神の御神体</em>とされる本井戸は、飛鳥井からほんの50mほど離れているだけですが、同じ地所でも深さが違うと、全く違った水脈源になり、水温も異なっています。</p>
            </div>
          </div>
        </div>
      </div>

      <div class="modal ogatama-no-ki">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="guide-shrine-modal-header">小賀玉の木</h4>
          <div class="flex-grid">
            <div class="paragraph">
              <dl class="technical-name">
                <div>
                  <dt>和名：</dt>
                  <dd>オガタマノキ（モクレン科オガタマ属）</dd>
                </div>
                <div>
                  <dt>学名：</dt>
                  <dd>Michelia compressa Sorg</dd>
                </div>
              </dl>
              <p>その名は招霊（おぎたま、霊を招くの意）が、なまったものとも言われるところから、神社の境内によく植えられています。</p>
              <p>神宮に植栽されているオガタマノキは、樹高約13mで一説では樹齢800年と言われていますが、今も旺盛に春には白い芳香のある花を咲かせ、秋にはピンクの実を落として鳥たちや多くの生物を育んでいます。</p>
              <p>この木が京都では最大のもので、京都市指定天然記念物に指定されています。</p>
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-ogatama-01.jpg" alt="">
            </div>
          </div>
          <ul>
            <li>巫女舞に使用される鈴は小賀玉の木の果実を模してつくられています。</li>
            <li>果実の成り方が巫女舞に使用される鈴のモデルになっています。</li>
            <li>日本国通貨の１つ、１円硬貨に描かれている絵のモデルになっています。</li>
          </ul>
          <div class="photos">
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-ogatama-02.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-ogatama-03.jpg" alt="">
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-ogatama-04.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="modal ganshyug">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="guide-shrine-modal-header"><ruby>含笑花<rt>ガンシュウゲ</rt></ruby></h4>
          <div class=" flex-grid">
            <div class="paragraph">
              <dl class="technical-name">
                <div>
                  <dt>和名：</dt>
                  <dd>カラタネオガタマ・トウオガタマ（モクレン科オガタマノキ属）</dd>
                </div>
                <div>
                  <dt>学名：</dt>
                  <dd>Michelia fuscaa Blume</dd>
                </div>
              </dl>
              <div>
                <p><em>ガンシュウゲ</em>は、本殿の左右に植えられていて、左が高木で、右の方が低木です。</p>
                <p>中国原産で中国名が「含笑花」、その名のとおり慎ましく微笑んでいるような花で、宋の李網の含笑花の賦に<em>「南方花木の美なるもの含笑に若くはなし」</em>とあります。</p>
                <p>日本への渡来は江戸時代中期ころです。当神宮での植栽の経緯は不明でありますが、一般に神社に植えられていることが多く、霊木としての扱いを受けています。</p>
                <p>開花期間は4月なかばから5月下旬までと長いのですが、花は2・3日で落花するために、実は見られません。一輪だけでもバナナのような甘い香気が強く思わず見上げてしまい、見えないところで咲いていても開花を知ることができます。</p>
              </div>
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-gansyouge.jpg" alt="">
            </div>
          </div>
          <p>和名の「トウオガタマ（唐招魂）」は、日本自生の「オガタマノキ（招魂の木）」と区別して中国のオガタマノキという意味から、この名前がつけられたと思われます。</p>
        </div>
      </div>

      <div class="modal mukuroji-no-ki">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="guide-shrine-modal-header">ムクロジの木</h4>
          <div class="flex-grid">
            <div class="paragraph">
              <dl class="technical-name">
                <div>
                  <dt>和名：</dt>
                  <dd>ムクロジノキ（ムクロジ科ムクロジ属）</dd>
                </div>
                <div>
                  <dt>学名：</dt>
                  <dd>Sapindus mukurossi</dd>
                </div>
              </dl>
              <p>無患子・無患樹・木患子、子が患うことの無い樹の意味です。山地に生え、15m～20mになる落葉高木。</p>
              <p>偶数羽状複葉の葉は長く5～15cmで互生し、4～8対ある小葉には鋸歯はなく、雌雄同株で、6月に黄緑色の小花が円錐形に集まって枝先に咲きます。秋の黄葉が美しく、果実は直径2cmの黒い球状で、厚い外皮があって秋には半透明の黄褐色になり晩秋の落果時に中でコロコロと音を立て、羽根つきの玉に使われます。</p>
              <p>学名のSapindus：ムクロジ科は「インドの石鹸」の意味で、ムクロジの果皮に約10%の化学物質サポニンが含まれ水に溶けると泡立ちがよい。</p>
              <p>平安の昔は当時としては灯明の煤でも汚れもよく洗い落とすところから、石鹸として洗濯や洗髪に用いられて、平安時代の公家屋敷には多く植えられていたようです。</p>
            </div>
            <div class="photos">
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-mukuroji-01.jpg" alt="">
              </div>
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-mukuroji-02.jpg" alt="">
              </div>
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-mukuroji-03.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal kaji-no-ki">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="guide-shrine-modal-header">梶の木</h4>
          <div class=" flex-grid">
            <div class="paragraph">
              <dl class="technical-name">
                <div>
                  <dt>和名：</dt>
                  <dd>カジノキ（クワ科コウゾ属）</dd>
                </div>
                <div>
                  <dt>学名：</dt>
                  <dd>Broussonetia papyrifera</dd>
                </div>
              </dl>
              <p>古代から、神に捧げる神木として尊ばれ、七夕祭に「歌」を葉に直接ヘラなどで書きお供えしました。</p>
              <p>これは、現在では七夕はササに飾りをつけますが、昔は、梶の葉や枝が用いられたのです。そのために梶の木は、神社の境内などに多く生えられ、主として神事に用い供え物の敷物等に使われました。</p>
              <p>特に、宮中での七夕飾りや冷泉家に伝わる「乞巧奠」（陰暦7月7日の七夕儀式）には、牽牛、織女の二星（たなばた）に、種々の供物をし、蹴鞠、雅楽、和歌などを手向けて、その技が巧みになるようにと祈ります。そのときの「星の座」は、庭に設けられた祭壇で、机の周囲に九本の燭台を廻らし、うしろに二本の笹の間に梶の葉と糸をつるした緒を張り、机上には、星に貸すため、琴、琵琶などの楽器を置き、お供えは「うり・なすび・もも・なし・からのさかずき・ささげ・らんかず・むしあわび・たい」を梶の葉にのせ、机の前には、五色の布、糸や、秋の七草も手向けられます。最前列に水を張り、梶を一葉浮かべた角盥（つのだらい）を置いてこの水に二星を映して見るわけです。</p>
              <p>儀式は、午後、七夕精大明神例祭斎行後に、神賑行事として蹴鞠保存会による梶鞠式（蹴鞠奉納）が執り行われます。</p>
            </div>
            <div class="photos">
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-kajinoki-01.jpg" alt="">
              </div>
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-kajinoki-02.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal ukon-no-tachibana">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="guide-shrine-modal-header">右近の橘</h4>
          <div class=" flex-grid">
            <div class="paragraph">
              <dl class="technical-name">
                <div>
                  <dt>和名：</dt>
                  <dd>タチバナ（ミカン科ミカン属）</dd>
                </div>
                <div>
                  <dt>学名：</dt>
                  <dd>Citrus tachibana</dd>
                </div>
              </dl>
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-ukontachibana-01.jpg" alt="">
              </div>
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-ukontachibana-02.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="modal ukon-no-sakura">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="guide-shrine-modal-header">鬱金の桜<span class="left-side">（</span>黄桜<span class="right-side">）</span></h4>
          <div class=" flex-grid">
            <div class="paragraph">
              <dl class="technical-name">
                <div>
                  <dt>和名：</dt>
                  <dd>和名：ウコン（バラ科サクラ属）
                </div>
                <div>
                  <dt>学名：</dt>
                  <dd>学名：Cerasus Sato-zakura Group ‘Grandiflora’ A. Wagner</dd>
                </div>
              </dl>
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-ukonsakura-01.jpg" alt="">
              </div>
            </div>
            <div class="photo-frame">
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-ukonsakura-02.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="modal sanyo-no-matsu">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="guide-shrine-modal-header">三葉の松</h4>
          <div class=" flex-grid">
            <div class="paragraph">
              <dl class="technical-name">
                <div>
                  <dt>和名：</dt>
                  <dd>和名：和名：サンヨウノマツ・サンコノマツ（マツ科マツ属）
                </div>
                <div>
                  <dt>学名：</dt>
                  <dd>学名：Pinus Bungeana Zucc</dd>
                </div>
              </dl>
              <p>昔から日本では、豊饒と平安をもたらす神霊が、松を伝って地上に降臨すると信じられ、昔物語や伝説に登場し、神聖な木として崇めていて、新年の家門に飾る門松は同じ意味で神の降臨を願ってのことです。</p>
              <p>松は百木の長と言われていますように、木の気品、幹の姿、根の張り、彫りの深い樹皮の亀甲の模様にも気品と風格が感じられます。</p>
              <p>「三葉の松」は全国でも珍しく、その姿から「夫婦和楽・家内安全」を象徴して、その松葉は黄金色になって落葉します。</p>
              <p>松は普通二葉か五葉ですが、日本でもまれに三葉の松があります。おおむね神社か仏閣に植えられております。日本では樹高は一般の黒松より大きくはなりません。</p>
            </div>
            <div class="photos">
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-sanyomatsu-01.jpg" alt="">
              </div>
              <div class="photo-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-sanyomatsu-02.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal four-seasons">
        <div class="container">
          <button class="modal-close-btn">
            <span></span>
            <span></span>
          </button>
          <h4 class="guide-shrine-modal-header">季節の花</h4>
          <div>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-fourseason-01.jpg" alt="">
              <figcaption>椿</figcaption>
            </figure>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-fourseason-02.jpg" alt="">
              <figcaption>珊瑚樹</figcaption>
            </figure>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/guide-reiboku-fourseason-03.jpg" alt="">
              <figcaption>百日紅</figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>

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