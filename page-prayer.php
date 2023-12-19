<?php get_header(); ?>

<main>
  <div class="contents">
    <?php if (is_home() || is_front_page()) : ?>
      <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/_sample_import_616540e4897b26.24217861.mp4"></video>
    <?php else : ?>
      <div class="frame prayer">
        <h1>ご祈祷</h1>
      </div>
    <?php endif; ?>

    <div class="container prayer">
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
              <a href="<?php echo esc_url(home_url('/prayer/')); ?>">ご祈祷</a>
            </li>
          </ul>

          <div class="contents prayer">
            <div class="gradually-appear">
              <h3>ご祈祷ご案内</h3>
              <p>随時受付中、御祈祷をご希望の方は社務所迄、まずは、お尋ねください。</p>
              <div class="wrapper">
                <div class="leading-square-header">初穂料</div>
                <p>個人：7,000円 ／ 団体：10,000円</p>
                <ul>
                  <li>電話でのお問い合わせ</li>
                  <li class="tel-num">075-441-3810</li>
                  <li>（朝8時〜夕方4時半）</li>
                </ul>
              </div>
            </div>
            <div class="gradually-appear">
              <h3>FAXでのお申込み</h3>
              <p class="add-space-margin-bottom">FAX申込み後の御祈祷は、社務所到着後、翌日の午前中に執り行います。</p>
              <p>申込み用紙の印刷ができない方は、FAX申込み用紙の必要事項をご確認のうえ<br />他の紙に記載したものでも代用可能です。</p>
              <button class="dl-pdf-btn">ご祈祷ご案内FAX申込み用紙ダウンロード</button>
            </div>
            <div class="gradually-appear-long">
              <h3>メールでのお申込み</h3>
              <p class="add-space-margin-bottom">メール申込み後の御祈祷は、社務所到着後、翌日の午前中に執り行います。</p>
              <p>FAXでのお申込みができない方は、下記フォームよりお申込みできます。</p>
              <p>ご記入いただいたメールアドレスにEメールが届きますので、</p>
              <p>撮影した郵便振込用紙を添付のうえご返信ください。</p>
              <?php echo do_shortcode('[contact-form-7 id="1692886" title="prayer-form"]') ?>
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
    <dd class="prayer-message"></dd>
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
    <dt><label for="prayer-message">祈祷願意<span>※</span></label></dt>
    <dd class="prayer-message">[text* prayer-mean]</dd>
  </div>
  <div class="date">
    <dt><label for="date">祈祷希望日<span>※</span></label></dt>
    <dd class="date">[date* date]</dd>
  </div>
  <div class="time">
    <dt><label for="time">祈祷希望時間<span>※</span></label></dt>
    <dd class="date">[number* time min:9 max:16]時</dd>
  </div>
  <div class="prayer-member-length">
    <dt><label for="prayer-member-length">当日参列者数<span>※</span></label></dt>
    <dd>[number* prayer-member-length min:1 max:200]名</dd>
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
    <button class="prayer-submit">[submit "送　信"]</button>
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
    <dd class="prayer-message">[text* prayer-mean]</dd>
  </div>
  <div class="date-time">
    <dt>祈祷希望日時<span>※</span></dt>
    <dd>
      <div class="date">[date* date]</div>
      <div class="time">[number* time min:9 max:16]時</div>
    </dd>
  </div>
  <div class="prayer-member-length">
    <dt>当日参列者数<span>※</span></dt>
    <dd>[number* prayer-member-length min:1 max:200]名</dd>
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