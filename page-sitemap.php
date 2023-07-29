<?php get_header(); ?>

<?php
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

<section class="sitemap">

<div class="sitemap__lower-fv lower-fv">
    <div class="lower-fv__center">
        <h1 class="lower-fv__title">Site MAP</h1>
    </div>
</div>
<div class="sitemap__article lower-article">
    <div class="sitemap__inner inner">
    <?php get_template_part('breadcrumb'); ?>
        <div class="sitemap__wrapper sitelist">
            <nav class="sitelist__nav sitelist__nav--sitemap">
                <ul class="sitelist__nav-left">
                  <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $campaign; ?>" class="sitelist__nav-link">キャンペーン</a></li>
                  <li class="sitelist__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/campaign_category/campaign-license" class="sitelist__nav-link">ライセンス取得</a></li>
                  <li class="sitelist__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/campaign_category/campaign-experience" class="sitelist__nav-link">貸切体験ダイビング</a></li>
                  <li class="sitelist__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/campaign_category/campaign-fan" class="sitelist__nav-link">ナイトダイビング</a></li>
                  <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $about; ?>" class="sitelist__nav-link">私たちについて</a></li>
                </ul>
                <ul class="sitelist__nav-right">
                  <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $information; ?>" class="sitelist__nav-link">ダイビング情報</a></li>
                  <li class="sitelist__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/information#info" class="sitelist__nav-link">ライセンス講習</a></li>
                  <li class="sitelist__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/information#info" class="sitelist__nav-link">体験ダイビング</a></li>
                  <li class="sitelist__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/information#info" class="sitelist__nav-link">ファンダイビング</a></li>
                  <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $blog; ?>" class="sitelist__nav-link">ブログ</a></li>
                </ul>
              </nav>
              <nav class="sitelist__nav sitelist__nav--sitemap">
                <ul class="sitelist__nav-left">
                  <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $voice; ?>" class="sitelist__nav-link">お客様の声</a></li>
                  <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $price; ?>" class="sitelist__nav-link">料金一覧</a></li>
                  <li class="sitelist__nav-unit"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/price#license" class="sitelist__nav-link">ライセンス講習</a></li>
                  <li class="sitelist__nav-unit"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/price#experience" class="sitelist__nav-link">体験ダイビング</a></li>
                  <li class="sitelist__nav-unit"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/price#fan" class="sitelist__nav-link">ファンダイビング</a></li>
                </ul>
                <ul class="sitelist__nav-right">
                  <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $faq; ?>" class="sitelist__nav-link">よくある質問</a></li>
                  <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $policy; ?>" class="sitelist__nav-link">プライバシー<br class="u-mobile">ポリシー</a></li>
                  <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $terms; ?>" class="sitelist__nav-link">利用規約</a></li>
                  <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $sitemap; ?>" class="sitelist__nav-link">サイトマップ</a></li>
                  <li class="sitelist__nav-unit sitelist__nav-unit--bold"><a href="<?php echo $contact; ?>" class="sitelist__nav-link">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>

    </div>
</div>
</section>

<?php get_footer(); ?>