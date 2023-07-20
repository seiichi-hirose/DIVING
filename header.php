<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- css -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@300;400&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/css/style.css" />
  <!-- JavaScript -->
  <script defer src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script defer src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/js/jquery.inview.min.js"></script>
  <script defer src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/js/script.js"></script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>


  <header class="header">
    <div class="header__inner inner">
      <div class="header__wrapper">
        <h1 class="header__logo"><a href="index.html" class="header__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/CodeUps_w-sp.png" alt="CodeUpsロゴ"></a></h1>
        <nav class="header__nav header-nav u-desktop">
          <ul class="header-nav__items">
            <li class="header-nav__item">
              <a href="campaign.html">Campaign<span>キャンペーン</span></a>
            </li>
            <li class="header-nav__item">
              <a href="about.html">About us<span>私たちについて</span></a>
            </li>
            <li class="header-nav__item">
              <a href="information.html">Information<span>ダイビング情報</span></a>
            </li>
            <li class="header-nav__item">
              <a href="archive.html">Blog<span>ブログ</span></a>
            </li>
            <li class="header-nav__item">
              <a href="voice.html">Voice<span>お客様の声</span></a>
            </li>
            <li class="header-nav__item">
              <a href="price.html">Price<span>料金一覧</span></a>
            </li>
            <li class="header-nav__item">
              <a href="faq.html">FAQ<span>よくある質問</span></a>
            </li>
            <li class="header-nav__item">
              <a href="contact.html">Contact<span>お問い合わせ</span></a>
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
              <a href="index.html" class="header-drawer__logo"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/CodeUps_w-sp.png" alt="CodeUpsロゴ"></a>
            </div>
            <div class="header-drawer__body">
              <nav class="header-drawer__nav">
                <ul class="header-drawer__nav-left">
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="campaign.html">キャンペーン</a></li>
                  <li class="header-drawer__nav-unit"><a href="">ライセンス取得</a></li>
                  <li class="header-drawer__nav-unit"><a href="">貸切体験ダイビング</a></li>
                  <li class="header-drawer__nav-unit"><a href="">ナイトダイビング</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="about.html">私たちについて</a></li>
                </ul>
                <ul class="header-drawer__nav-right">
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="information.html">ダイビング情報</a></li>
                  <li class="header-drawer__nav-unit"><a href="">ライセンス講習</a></li>
                  <li class="header-drawer__nav-unit"><a href="">体験ダイビング</a></li>
                  <li class="header-drawer__nav-unit"><a href="">ファンダイビング</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="archive.html">ブログ</a></li>
                </ul>
              </nav>
              <nav class="header-drawer__nav">
                <ul class="header-drawer__nav-left">
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="voice.html">お客様の声</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="price.html">料金一覧</a></li>
                  <li class="header-drawer__nav-unit"><a href="price.html#licence">ライセンス講習</a></li>
                  <li class="header-drawer__nav-unit"><a href="price.html#experience">体験ダイビング</a></li>
                  <li class="header-drawer__nav-unit"><a href="price.html#fan">ファンダイビング</a></li>
                </ul>
                <ul class="header-drawer__nav-right">
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="faq.html">よくある質問</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="policy.html">プライバシー<br class="u-mobile">ポリシー</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="terms.html">利用規約</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="sitemap.html">サイトマップ</a></li>
                  <li class="header-drawer__nav-unit header-drawer__nav-unit--bold"><a href="contact.html">お問い合わせ</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>