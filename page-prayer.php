<?php get_header(); ?>

<main>
  <div class="contents">
    <?php if (is_home() || is_front_page()) : ?>
      <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/shiramine_imgmov3.mp4"></video>
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
              <h3>ご祈祷のご案内</h3>
              <p>随時受付中、御祈祷をご希望の方は社務所迄、まずは、お尋ねください。</p>
              <div class="wrapper">
                <div class="leading-square-header">初穂料</div>
                <p>個人：7,000円 ／ 団体：10,000円</p>
                <ul>
                  <li>電話でのお問い合わせ</li>
                  <li class="tel-num">075-441-3810</li>
                  <li>参拝時間 ８時から１７時</li>
                  <li>授与所開所時間 ８時から１６時３０分</li>
                </ul>
              </div>
            </div>
            <div class="gradually-appear fax-send">
              <h3>FAXでのお申込み</h3>
              <p class="add-space-margin-bottom">FAX申込み後の御祈祷は、社務所到着後、翌日の午前中に執り行います。</p>
              <p>申込み用紙の印刷ができない方は、FAX申込み用紙の必要事項をご確認のうえ<br />他の紙に記載したものでも代用可能です。</p>
              <button class="dl-pdf-btn"><a href="<?php echo get_theme_file_uri('/files/fax_entry_2024.pdf'); ?>" target="_blank">ご祈祷ご案内FAX申込み用紙ダウンロード</a></button>
            </div>
            <div class="gradually-appear-long mail-send">
              <h3>メールでのお申込み</h3>
              <p class="add-space-margin-bottom">メール申込み後の御祈祷は、社務所到着後、翌日の午前中に執り行います。</p>
              <p>FAXでのお申込みができない方は、下記フォームよりお申込みできます。</p>
              <p>ご記入いただいたメールアドレスにEメールが届きますので、</p>
              <p>撮影した郵便振込用紙を添付のうえご返信ください。</p>
              <?php echo do_shortcode('[contact-form-7 id="a044f99" title="prayer-form"]') ?>
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