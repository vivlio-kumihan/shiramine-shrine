<?php get_header(); ?>

<main>
  <div class="contents">
    <?php if (is_home() || is_front_page()) : ?>
      <video width="100%" height="100vh" autoplay loop muted playinline src="<?php echo get_template_directory_uri(); ?>/img/_sample_import_616540e4897b26.24217861.mp4"></video>
    <?php else : ?>
      <div class="frame contact">
        <h1>お問い合わせ</h1>
      </div>
    <?php endif; ?>

    <div class="container contact">
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
            <div class="gradually-appear-long">
              <h3>お問い合わせ</h3>
              <p>※スマートフォンや携帯電話からお問い合わせされる場合は、メールの着信設定をご確認ください。</p>
              <?php echo do_shortcode('[contact-form-7 id="51ca316" title="お問い合わせ"]') ?>
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