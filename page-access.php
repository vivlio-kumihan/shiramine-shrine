<?php get_header(); ?>

<main>
  <div class="contents">
    <?php if (is_home() || is_front_page()) : ?>
      <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/shiramine_imgmov3.mp4"></video>
    <?php else : ?>
      <div class="frame access">
        <h1>交通（アクセス）</h1>
      </div>
    <?php endif; ?>

    <div class="container access">
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
              <a href="<?php echo esc_url(home_url('/access/')); ?>">交通（アクセス）</a>
            </li>
          </ul>

          <div class="contents access">
            <div class="gradually-appear">
              <h3 id="place" class="place">鎮座地</h3>
              <div class="wrapper">
                <div class="leading-square-header">元官幣大社 白峯神宮</div>
                <p>
                  〒602-0054<br />
                  京都市上京区今出川通堀川東入飛鳥井町261番地<br />
                  電話: 075-441-3810 / FAX: 075-441-3820
                </p>
                <ul>
                  <li>電話でのお問い合わせ</li>
                  <li class="tel-num">075-441-3810</li>
                  <li>参拝時間 ８時から１７時</li>
                  <li>授与所開所時間 ８時から１６時３０分</li>
                </ul>
              </div>
            </div>

            <div class="gradually-appear-long align-left">
              <h3>交通アクセス<br class="media-screen-md">（車・市バス・地下鉄）</h3>
              <div class="leading-square-header">お車でお越しの場合</div>
              <div class="grid-wrapper">
                <div class="description">
                  <p>堀川今出川の交差点を東へ</p>
                  <ul>
                    <li>①の駐車場の場合、鳥居をくぐり境内へ</li>
                    <li>②の駐車場の場合、1つ目の信号を左折（北へ）して「修学旅行タクシー駐車場入口」へお入り下さい。</li>
                  </ul>
                  <p>大型バスでお越しの方は事前に（<a href="tel:075-441-3810">075－441－3810</a>まで）お知らせください。ご案内いたします。</p>
                </div>
                <div class="photo-frame">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/access-01-1.jpg" alt="">
                </div>
              </div>

              <div class="leading-square-header">市バスでお越しの場合</div>
              <div class="grid-wrapper">
                <div class="description">
                  <p>「堀川今出川」下車</p>
                  <ul>
                    <li><span class="color-gold">⚫︎</span>9・12号：堀川今出川交差点を東へ徒歩1分</li>
                    <li><span class="color-gold">⚫︎</span>51・59・201・203号：すぐ目の前</li>
                  </ul>
                </div>
                <div class="photo-frame">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/access-01-2.jpg" alt="">
                </div>
              </div>

              <div class="leading-square-header">地下鉄でお越しの場合</div>
              <p>「烏丸線今出川駅」下車</p>
              <div class="grid-wrapper five-photos">
                <figure>
                  <figcaption>①4番出口より出て右折（南）へ進み、烏丸今出川交差点へ。</figcaption>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/access-02-1.jpg" alt="">
                </figure>
                <figure>
                  <figcaption>②烏丸今出川交差点を右折（西へ）して堀川今出川へ進み徒歩8分。</figcaption>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/access-02-2.jpg" alt="">
                </figure>
                <figure>
                  <figcaption>③セブンイレブン京都烏丸今出川店前を進行して下さい。</figcaption>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/access-02-3.jpg" alt="">
                </figure>
                <figure>
                  <figcaption>④京都市上京区役所前を進行してください。</figcaption>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/access-02-4.jpg" alt="">
                </figure>
                <figure>
                  <figcaption>⑤堀川今出川交差点手前の右手に見えてきます。</figcaption>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/access-02-5.jpg" alt="">
                </figure>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>

<!-- <p>FAXにてお申し込みください。</p> -->
<!-- <dl class="form">
  <div class="note">
    <dt></dt>
    <dd>※は必須事項となります。</dd>
  </div>
  <div>
    <dt>申込者氏名<span>※</span></dt>
    <dd></dd>
  </div>
  <div>
    <dt>フリガナ<span>※</span></dt>
    <dd></dd>
  </div>
  <div class="birthday-age">
    <dt>生年月日・年齢</dt>
    <dd>
      <div class="birth-day"></div>
      <div>・</div>
      <div class="age"></div>
    </dd>
  </div>
  <div>
    <dt>メールアドレス<span>※</span></dt>
    <dd></dd>
  </div>
  <div>
    <dt>電話番号<span>※</span></dt>
    <dd></dd>
  </div>
  <div class="postal-code">
    <dt>郵便番号</dt>
    <dd>
      <div class="postal-code-3"></div>
      <div>–</div>
      <div class="postal-code-4"></div>
    </dd>
  </div>
  <div>
    <dt>現住所<span>※</span></dt>
    <dd></dd>
  </div>
  <div>
    <dt>フリガナ<span>※</span></dt>
    <dd></dd>
  </div>
  <div>
    <dt>祈祷願意<span>※</span></dt>
    <dd class="access-message"></dd>
  </div>
  <div class="date-time">
    <dt>祈祷希望日時<span>※</span></dt>
    <dd>
      <div class="date"></div>
      <div class="time"></div>
    </dd>
  </div>
  <div>
    <dt>当日参列者数<span>※</span></dt>
    <dd></dd>
  </div>
  <div>
    <dt>学校名・チーム名</dt>
    <dd></dd>
  </div>
  <div>
    <dt>フリガナ</dt>
    <dd></dd>
  </div>
  <div>
    <dt>代表者名</dt>
    <dd></dd>
  </div>
  <div>
    <dt>フリガナ</dt>
    <dd></dd>
  </div>
  <div>
    <dt>部員数</dt>
    <dd></dd>
  </div>
  <div>
    <dt>備考</dt>
    <dd></dd>
  </div>
</dl>
<p>必要事項をご記入のうえ、確認ボタンを押して確認後、送信してください。</p>
<a class="privacy-policy-anchor" href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">▶️&nbsp;プライバシー・ポリシー</a>
<div class="check-box">
  <input type="checkbox" id="name">
  <label for="name">プライバシーポリシーに同意する</label>
</div>
<div class="agreement">
  <button>[submit "送 信"]</button>
</div> -->

<!-- <input type="checkbox" name="level" value="">[checkbox* read-privacy-policy-check use_label_element]</input>
<label for="name">プライバシーポリシーに同意する</label> -->




<!-- fix -->
<!-- <dl class="form">
  <div class="note">
    <dt></dt>
    <dd>※は必須事項となります。</dd>
  </div>
  <div class="sender-name">
    <dt><label for="sender-name">申込者氏名<span>※</span><label></dt>
    <dd>[text* sender-name]様</dd>
  </div>
  <div>
    <dt><label for="sender-name-ruby">フリガナ<span>※</span></label></dt>
    <dd>[text* sender-name-ruby]</dd>
  </div>
  <div class="birthday">
    <dt><label for="birthday">生年月日</label></dt>
    <dd>[date birthday min:1917-01-15]</dd>
  </div>
  <div class="age">
    <dt><label for="age">生年月日</label></dt>
    <dd>[number age min:1 max:100]歳</dd>
  </div>
  <div>
    <dt><label for="sender-email">メールアドレス<span>※</span></label></dt>
    <dd>[email* sender-email]</dd>
  </div>
  <div>
    <dt><label for="tel">電話番号<span>※</span></label></dt>
    <dd>[tel* tel]</dd>
  </div>
  <div class="postal-code">
    <dt><label for="postal-code">郵便番号</label></dt>
    <dd>[number postal-code min:7 max:7]</dd>
  </div>
  <div>
    <dt><label for="adress">現住所<span>※</span></label></dt>
    <dd>[text* adress]</dd>
  </div>
  <div>
    <dt><label for="adress-ruby">フリガナ<span>※</span></label></dt>
    <dd>[text* adress-ruby]</dd>
  </div>
  <div>
    <dt><label for="access-message">祈祷願意<span>※</span></label></dt>
    <dd class="access-message">[text* access-mean]</dd>
  </div>
  <div class="date">
    <dt><label for="date">祈祷希望日<span>※</span></label></dt>
    <dd class="date">[date* date]</dd>
  </div>
  <div class="time">
    <dt><label for="time">祈祷希望時間<span>※</span></label></dt>
    <dd class="date">[number* time min:9 max:16]時</dd>
  </div>
  <div class="access-member-length">
    <dt><label for="access-member-length">当日参列者数<span>※</span></label></dt>
    <dd>[number* access-member-length min:1 max:200]名</dd>
  </div>
  <div>
    <dt><label for="group-name">学校名・チーム名</label></dt>
    <dd>[text group-name]</dd>
  </div>
  <div>
    <dt><label for="group-name-ruby">フリガナ</label></dt>
    <dd>[text group-name-ruby]</dd>
  </div>
  <div class="group-leader">
    <dt><label for="group-leader">代表者名</label></dt>
    <dd>[text group-leader]様</dd>
  </div>
  <div>
    <dt><label for="group-leader-ruby">フリガナ</label></dt>
    <dd>[text group-leader-ruby]</dd>
  </div>
  <div class="group-member-length">
    <dt><label for="group-member-length">部員数</label></dt>
    <dd>[number group-member-length min:1 max:200]名</dd>
  </div>
  <div>
    <dt><label for="note">備考</label></dt>
    <dd>[textarea note]</dd>
  </div>
</dl>
<div class="confirm">
  <p>必要事項をご記入のうえ、確認ボタンを押して確認後、送信してください。</p>
  <a class="privacy-policy-anchor" href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">▶️&nbsp;プライバシー・ポリシー</a>
  <div class="check-box">
    [acceptance privacy-policy] プライバシーポリシーに同意する [/acceptance]
  </div>
  <div class="agreement">
    <button class="access-submit">[submit "送　信"]</button>
  </div>
</div> -->



<!-- org -->
<!-- 
<dl class="form">
  <div class="note">
    <dt></dt>
    <dd>※は必須事項となります。</dd>
  </div>
  <div>
    <dt><label>申込者氏名<span>※</span><label></dt>
    <dd>[text* sender-name]</dd>
  </div>
  <div>
    <dt>フリガナ<span>※</span></dt>
    <dd>[text* sender-name-ruby]</dd>
  </div>
  <div class="birthday-age">
    <dt>生年月日・年齢</dt>
    <dd>
      <div class="birth-day">[date birthday min:1917-01-15]</div>
      <div class="age">[number age min:1 max:100]歳</div>
    </dd>
  </div>
  <div>
    <dt>メールアドレス<span>※</span></dt>
    <dd>[email* email]</dd>
  </div>
  <div>
    <dt>電話番号<span>※</span></dt>
    <dd>[tel* tel]</dd>
  </div>
  <div class="postal-code">
    <dt>郵便番号</dt>
    <dd>
      <div class="postal-code-3">[number postal-code-3 min:1 max:999]</div>
      <div>–</div>
      <div class="postal-code-4">[number postal-code-4 min:1 max:9999]</div>
    </dd>
  </div>
  <div>
    <dt>現住所<span>※</span></dt>
    <dd>[text* adress]</dd>
  </div>
  <div>
    <dt>フリガナ<span>※</span></dt>
    <dd>[text* adress-ruby]</dd>
  </div>
  <div>
    <dt>祈祷願意<span>※</span></dt>
    <dd class="access-message">[text* access-mean]</dd>
  </div>
  <div class="date-time">
    <dt>祈祷希望日時<span>※</span></dt>
    <dd>
      <div class="date">[date* date]</div>
      <div class="time">[number* time min:9 max:16]時</div>
    </dd>
  </div>
  <div class="access-member-length">
    <dt>当日参列者数<span>※</span></dt>
    <dd>[number* access-member-length min:1 max:200]名</dd>
  </div>
  <div>
    <dt>学校名・チーム名</dt>
    <dd>[text group-name]</dd>
  </div>
  <div>
    <dt>フリガナ</dt>
    <dd>[text group-name-ruby]</dd>
  </div>
  <div>
    <dt>代表者名</dt>
    <dd>[text group-leader]</dd>
  </div>
  <div>
    <dt>フリガナ</dt>
    <dd>[text group-leader-ruby]</dd>
  </div>
  <div class="group-member-length">
    <dt>部員数</dt>
    <dd>[number group-member-length min:1 max:200]名</dd>
  </div>
  <div>
    <dt>備考</dt>
    <dd>[textarea note]</dd>
  </div>
</dl>
<div class="confirm">
  <p>必要事項をご記入のうえ、確認ボタンを押して確認後、送信してください。</p>
  <a class="privacy-policy-anchor" href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">▶️&nbsp;プライバシー・ポリシー</a>
  <div class="check-box">
    [acceptance privacy-policy] プライバシーポリシーに同意する [/acceptance]
  </div>
  <div class="agreement">
    <button>[submit "送信"]</button>
  </div>
</div> -->