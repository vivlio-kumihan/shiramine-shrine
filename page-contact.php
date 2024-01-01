<?php get_header(); ?>

<main>
  <div class="contents">
    <?php if (is_home() || is_front_page()) : ?>
      <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/shiramine_imgmov3.mp4"></video>
    <?php else : ?>
      <div class="frame contact">
        <h1>お問い合わせ</h1>
      </div>
    <?php endif; ?>

    <div class="container contact ireg">
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
              <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
            </li>
          </ul>
          <div class="contents contact">
            <div class="gradually-appear">
              <!-- <div class="gradually-appear-long"> -->
              <h3>お問い合わせ</h3>
              <p>※スマートフォンや携帯電話からお問い合わせされる場合は、メールの着信設定をご確認ください。</p>
              <?php echo do_shortcode('[contact-form-7 id="ec82abb" title="お問い合わせ"]') ?>
            </div>
          </div>
          <div class="modal-privacy-policy">
            <div class="container">
              <button class="modal-privacy-policy-close-btn">
                <span></span>
                <span></span>
              </button>
              <h4 class="modal-pp-header">プライバシーポリシー</h4>
              <p class="lead-copy">白峯神宮は、個人情報保護の重要性を認識し、適切な利用と保護を図り、全ての従業員に周知徹底をするとともに次の事を遵守していきます。</p>
              <h5 class="leading-square-header">個人情報の取り扱い</h5>
              <p>皆様の個人情報の取り扱いに関して、目的に応じた個人情報保護のため、適切かつ厳重に取り扱います。</p>
              <h5 class="leading-square-header">個人情報の利用</h5>
              <p>皆様の個人情報は、利用目的の達成に必要な範囲において取扱う措置を講じ、その範囲を超えての目的外利用はいたしません。利用目的の範囲を超えて、個人情報を利用する必要が生じた場合は、その旨をあらかじめご連絡し、同意をいただいた上で利用いたします。</p>
              <h5 class="leading-square-header">個人情報の提供</h5>
              <p>あらかじめ、皆様からの同意をいただいている場合、及び法令等に基づく場合を除き、個人情報を第三者に対して提供いたしません。ただし、利用目的を遂行するために委託する場合があります。この場合、委託先に対する個人情報保護の契約を締結し、適正な取扱いが行われるよう管理・監督いたします。</p>
              <h5 class="leading-square-header">安全管理措置</h5>
              <p>お預かりした個人情報は、必要な安全管理措置を講じ、漏えい、滅失又はき損等を防止するとともに是正に努めてまいります。</p>
              <h5 class="leading-square-header">法令等の遵守</h5>
              <p>個人情報の保護に適用される法令及びその他の規範を遵守します。</p>
              <h5 class="leading-square-header">継続的改善</h5>
              <p>事業内容の変化および事業を取り巻く社会環境・法令・情報技術の変化等に対応して、個人情報取扱体制の見直しを行い、継続的な改善に努めてまいります。</p>
              <h5 class="leading-square-header">ご相談及び開示等への対応に関すること</h5>
              <p>保有しております個人情報について、ご相談、及び利用目的の通知、開示、訂正等、利用停止等を希望される場合、お問い合わせください。ご本人確認の上、誠意をもって対応させていただきます。</p>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>

<!-- 
<dl class="form">
  <div class="note">
    <dt></dt>
    <dd>※は必須事項となります。</dd>
  </div>
  <div class="sender-name">
    <dt><label for="sender-name">お名前<sup>※</sup><label></dt>
    <dd>[text* sender-name]様</dd>
  </div>
  <div>
    <dt><label for="sender-email">メールアドレス<sup>※</sup></label></dt>
    <dd>[email* sender-email]</dd>
  </div>
  <div>
    <dt><label for="note">お問い合わせ内容</label></dt>
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
</div> 
-->