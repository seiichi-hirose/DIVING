<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
</head>

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

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>


  <header class="header">
    <div class="header__inner inner">
      <div class="header__wrapper">
      <?php if(is_front_page()): ?>
          <h1 class="header__logo">
        <?php else: ?>
          <div class="header__logo">
        <?php endif; ?>
          <a href="<?php echo $home ?>" class="header__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/CodeUps_w-sp.png" alt="CodeUpsロゴ"></a>
        <?php if(is_front_page()): ?>
          </h1>
        <?php else: ?>
          </div>
        <?php endif; ?>
        <nav class="header__nav header-nav u-desktop">
          <ul class="header-nav__items">
            <li class="header-nav__item">
              <a href="<?php echo $campaign ?>">Campaign<span>キャンペーン</span></a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo $about ?>">About us<span>私たちについて</span></a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo $information ?>">Information<span>ダイビング情報</span></a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo $blog ?>">Blog<span>ブログ</span></a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo $voice ?>">Voice<span>お客様の声</span></a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo $price ?>">Price<span>料金一覧</span></a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo $faq ?>">FAQ<span>よくある質問</span></a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo $contact ?>">Contact<span>お問い合わせ</span></a>
            </li>
          </ul>
        </nav>
        <div class="header__hamburger hamburger js-hamburger u-mobile">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="header__drawer header-drawer js-header-drawer">
          <div class="header-drawer__inner inner">
            <div class="header-drawer__top">
              <a href="<?php echo $home ?>" class="header-drawer__logo"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/CodeUps_w-sp.png" alt="CodeUpsロゴ"></a>
            </div>
            <div class="header-drawer__body">
              <nav class="header-drawer__nav">
                <ul class="header-drawer__nav-left">
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="<?php echo $campaign ?>">キャンペーン</a></li>
                  <li class="header-drawer__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/campaign_category/campaign-license">ライセンス講習</a></li>
                  <li class="header-drawer__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/campaign_category/campaign-experience">体験ダイビング</a></li>
                  <li class="header-drawer__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/campaign_category/campaign-fan">ファンダイビング</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="<?php echo $about ?>">私たちについて</a></li>
                </ul>
                <ul class="header-drawer__nav-right">
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="<?php echo $information ?>">ダイビング情報</a></li>
                  <li class="header-drawer__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/information#info">ライセンス講習</a></li>
                  <li class="header-drawer__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/information#info">体験ダイビング</a></li>
                  <li class="header-drawer__nav-unit"><a href="<?php echo esc_url(home_url('')); ?>/information#info">ファンダイビング</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="<?php echo $blog ?>">ブログ</a></li>
                </ul>
              </nav>
              <nav class="header-drawer__nav">
                <ul class="header-drawer__nav-left">
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="<?php echo $voice ?>">お客様の声</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="<?php echo $price ?>">料金一覧</a></li>
                  <li class="header-drawer__nav-unit"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/price#license">ライセンス講習</a></li>
                  <li class="header-drawer__nav-unit"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/price#experience">体験ダイビング</a></li>
                  <li class="header-drawer__nav-unit"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/price#fan">ファンダイビング</a></li>
                </ul>
                <ul class="header-drawer__nav-right">
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="<?php echo $faq ?>">よくある質問</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="<?php echo $policy ?>">プライバシー<br class="u-mobile">ポリシー</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="<?php echo $terms ?>">利用規約</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="<?php echo $sitemap ?>">サイトマップ</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="<?php echo $contact ?>">お問い合わせ</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>