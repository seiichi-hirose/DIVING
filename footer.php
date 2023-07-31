<?php
$home = esc_url(home_url('/'));
$campaign = esc_url(home_url('/campaign/'));
$about = esc_url(home_url('/about-us/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
$policy = esc_url(home_url('/privacypolicy/'));
$terms = esc_url(home_url('/terms-of-service/'));
$sitemap = esc_url(home_url('/sitemap/'));
?>

<?php if (!is_404() && !is_page('contact')): ?>
<section class="contact common-contact">
      <div class="contact__inner inner">
        <div class="contact__wrapper">
          <div class="contact__left">
            <div class="contact__logo"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/CodeUps_g-sp.png" alt="CodeUpsロゴ" class="contact__image"></div>
            <div class="contact__header">
              <div class="contact__address">
                <p class="contact__text contact__text--first">沖縄県那覇市1-1</p>
                <p class="contact__text">TEL:0120-000-0000</p>
                <p class="contact__text">営業時間:8:30-19:00</p>
                <p class="contact__text">定休日:毎週火曜日</p>
              </div>
              <div class="contact__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.3958837720966!2d127.67604647566738!3d26.21632333967006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5699d1d8938ef%3A0x2bb9259fb716a776!2z44CSOTAwLTAwMzIg5rKW57iE55yM6YKj6KaH5biC5p2-5bGx77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1688072361329!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="contact__right">
            <div class="contact__section-title section-title">
              <p class="section-title__main  section-title__main--wide">Contact</p>
              <h2 class="section-title__sub section-title__sub--narrow">お問い合わせ</h2>
            </div>
            <p class="contact__copy">ご予約・お問い合わせはコチラ</p>
            <div class="contact__button-layout">
              <a href="<?php echo $contact ?>" class="link-button">
                <span class="link-button__text">Contact us</span><span class="link-button__arrow"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php endif; ?>

  </main>

  <footer class="footer common-footer">
    <div class="footer__inner inner">
      <div class="footer__top">
        <a href="<?php echo $home ?>" class="footer__logo"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/CodeUps_w-sp.png" alt="CodeUpsロゴ"></a>
        <div class="footer__sns">
          <a href="" class="footer__sns-image" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/FacebookLogo-sp.png" alt="フェイスブック" class="footer__facebook"></a>
          <a href="" class="footer__sns-image" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/Insta-sp.png" alt="インスタグラム" class="footer__instagram"></a>
        </div>
      </div>
      <nav class="footer__body sitelist">
        <div class="sitelist__nav">
          <ul class="sitelist__nav-left">
            <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $campaign ?>">キャンペーン</a></li>
            <li class="sitelist__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/campaign_category/campaign-license">ライセンス講習</a></li>
            <li class="sitelist__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/campaign_category/campaign-experience">体験ダイビング</a></li>
            <li class="sitelist__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/campaign_category/campaign-fan">ファンダイビング</a></li>
            <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $about ?>">私たちについて</a></li>
          </ul>
          <ul class="sitelist__nav-right">
            <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $information ?>">ダイビング情報</a></li>
            <li class="sitelist__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/information#info">ライセンス講習</a></li>
            <li class="sitelist__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/information#info">体験ダイビング</a></li>
            <li class="sitelist__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/information#info">ファンダイビング</a></li>
            <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $blog ?>">ブログ</a></li>
          </ul>
        </div>
        <div class="sitelist__nav">
          <ul class="sitelist__nav-left">
            <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $voice ?>">お客様の声</a></li>
            <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $price ?>">料金一覧</a></li>
            <li class="sitelist__nav-unit"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/price#license">ライセンス講習</a></li>
            <li class="sitelist__nav-unit"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/price#experience">体験ダイビング</a></li>
            <li class="sitelist__nav-unit"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/price#fan">ファンダイビング</a></li>
          </ul>
          <ul class="sitelist__nav-right">
            <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $faq ?>">よくある質問</a></li>
            <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $policy ?>">プライバシー<br class="u-mobile">ポリシー</a></li>
            <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $terms ?>">利用規約</a></li>
            <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $sitemap ?>">サイトマップ</a></li>
            <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $contact ?>">お問い合わせ</a></li>
          </ul>
        </div>
      </nav>
      <small class="footer__copy">Copyright &copy; 2021 - <?php echo date('Y'); ?> CodeUps LLC. All Rights Reserved.</small>
    </div>
  </footer>

  <a class="to-top js-to-top"></a>

<?php wp_footer(); ?>
</body>
</html>