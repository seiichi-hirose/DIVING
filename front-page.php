<?php get_header(); ?>

<?php
$campaign = esc_url(home_url('/campaign/'));
$about = esc_url(home_url('/about/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
?>

<main>

<section class="top-fv">
  <div class="swiper js-top-fv">
    <!-- スライド要素を包む要素 -->
    <div class="swiper-wrapper">
      <!-- 各スライド -->
      <picture class="swiper-slide top-fv__figure">
        <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_fv_01-sp.jpg">
        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_fv_01-pc.jpg" alt="トップFVイメージ1" class="top-fv__image">
      </picture>
      <picture class="swiper-slide top-fv__figure">
        <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_fv_02-sp.jpg">
        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_fv_02-pc.jpg" alt="トップFVイメージ2" class="top-fv__image">
      </picture>
      <picture class="swiper-slide top-fv__figure">
        <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_fv_03-sp.jpg">
        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_fv_03-pc.jpg" alt="トップFVイメージ3" class="top-fv__image">
      </picture>
      <picture class="swiper-slide top-fv__figure">
        <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_fv_04-sp.jpg">
        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_fv_04-pc.jpg" alt="トップFVイメージ4" class="top-fv__image">
      </picture>
    </div>
  </div>
  <div class="top-fv__center">
    <h2 class="top-fv__title">DIVING</h2>
    <p class="top-fv__subtitle">into the ocean</p>
  </div>
</section>

<section class="campaign top-campaign">
  <div class="campaign__inner inner">
    <div class="campaign__section-title section-title">
      <p class="section-title__main">Campaign</p>
      <h2 class="section-title__sub">キャンペーン</h2>
    </div>
    <div class="campaign__container">
      <div class="campaign__frame swiper js-campaign">
        <div class="campaign__cards swiper-wrapper">
          <a class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_campaign_01-sp.jpg" alt="キャンペーンイメージ１" class="campaign-card__image"></div>
            <div class="campaign-card__body-top">
              <div class="campaign-card__category">ライセンス講習</div>
              <h3 class="campaign-card__title">ライセンス取得</h3>
            </div>
            <div class="campaign-card__body-under">
              <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
              <div class="campaign-card__footer">
                <p class="campaign-card__old-price">¥56,000</p>
                <p class="campaign-card__new-price">¥46,000</p>
              </div>
            </div>
          </a>
          <a class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_campaign_02-sp.jpg" alt="キャンペーンイメージ２" class="campaign-card__image"></div>
            <div class="campaign-card__body-top">
              <div class="campaign-card__category">体験ダイビング</div>
              <h3 class="campaign-card__title">貸切体験ダイビング</h3>
            </div>
            <div class="campaign-card__body-under">
              <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
              <div class="campaign-card__footer">
                <p class="campaign-card__old-price">¥24,000</p>
                <p class="campaign-card__new-price">¥18,000</p>
              </div>
            </div>
          </a>
          <a class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_campaign_01-sp.jpg" alt="キャンペーンイメージ１" class="campaign-card__image"></div>
            <div class="campaign-card__body-top">
              <div class="campaign-card__category">体験ダイビング</div>
              <h3 class="campaign-card__title">ナイトダイビング</h3>
            </div>
            <div class="campaign-card__body-under">
              <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
              <div class="campaign-card__footer">
                <p class="campaign-card__old-price">¥10,000</p>
                <p class="campaign-card__new-price">¥8,000</p>
              </div>
            </div>
          </a>
          <a class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_campaign_02-sp.jpg" alt="キャンペーンイメージ２" class="campaign-card__image"></div>
            <div class="campaign-card__body-top">
              <div class="campaign-card__category">ファンダイビング</div>
              <h3 class="campaign-card__title">貸切ファンダイビング</h3>
            </div>
            <div class="campaign-card__body-under">
              <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
              <div class="campaign-card__footer">
                <p class="campaign-card__old-price">¥20,000</p>
                <p class="campaign-card__new-price">¥16,000</p>
              </div>
            </div>
          </a>
          <a class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_campaign_01-sp.jpg" alt="キャンペーンイメージ１" class="campaign-card__image"></div>
            <div class="campaign-card__body-top">
              <div class="campaign-card__category">ライセンス講習</div>
              <h3 class="campaign-card__title">ライセンス取得</h3>
            </div>
            <div class="campaign-card__body-under">
              <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
              <div class="campaign-card__footer">
                <p class="campaign-card__old-price">¥56,000</p>
                <p class="campaign-card__new-price">¥46,000</p>
              </div>
            </div>
          </a>
          <a class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_campaign_02-sp.jpg" alt="キャンペーンイメージ２" class="campaign-card__image"></div>
            <div class="campaign-card__body-top">
              <div class="campaign-card__category">体験ダイビング</div>
              <h3 class="campaign-card__title">貸切体験ダイビング</h3>
            </div>
            <div class="campaign-card__body-under">
              <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
              <div class="campaign-card__footer">
                <p class="campaign-card__old-price">¥24,000</p>
                <p class="campaign-card__new-price">¥18,000</p>
              </div>
            </div>
          </a>
          <a class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_campaign_01-sp.jpg" alt="キャンペーンイメージ１" class="campaign-card__image"></div>
            <div class="campaign-card__body-top">
              <div class="campaign-card__category">体験ダイビング</div>
              <h3 class="campaign-card__title">ナイトダイビング</h3>
            </div>
            <div class="campaign-card__body-under">
              <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
              <div class="campaign-card__footer">
                <p class="campaign-card__old-price">¥10,000</p>
                <p class="campaign-card__new-price">¥8,000</p>
              </div>
            </div>
          </a>
          <a class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_campaign_02-sp.jpg" alt="キャンペーンイメージ２" class="campaign-card__image"></div>
            <div class="campaign-card__body-top">
              <div class="campaign-card__category">ファンダイビング</div>
              <h3 class="campaign-card__title">貸切ファンダイビング</h3>
            </div>
            <div class="campaign-card__body-under">
              <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
              <div class="campaign-card__footer">
                <p class="campaign-card__old-price">¥20,000</p>
                <p class="campaign-card__new-price">¥16,000</p>
              </div>
            </div>
          </a>
          <a class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_campaign_01-sp.jpg" alt="キャンペーンイメージ１" class="campaign-card__image"></div>
            <div class="campaign-card__body-top">
              <div class="campaign-card__category">体験ダイビング</div>
              <h3 class="campaign-card__title">ナイトダイビング</h3>
            </div>
            <div class="campaign-card__body-under">
              <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
              <div class="campaign-card__footer">
                <p class="campaign-card__old-price">¥10,000</p>
                <p class="campaign-card__new-price">¥8,000</p>
              </div>
            </div>
          </a>
          <a class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_campaign_02-sp.jpg" alt="キャンペーンイメージ２" class="campaign-card__image"></div>
            <div class="campaign-card__body-top">
              <div class="campaign-card__category">ファンダイビング</div>
              <h3 class="campaign-card__title">貸切ファンダイビング</h3>
            </div>
            <div class="campaign-card__body-under">
              <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
              <div class="campaign-card__footer">
                <p class="campaign-card__old-price">¥20,000</p>
                <p class="campaign-card__new-price">¥16,000</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- 前後の矢印 -->
      <div class="campaign__button-prev swiper-button-prev u-desktop"><span class="swiper-button-prev--arrow"></span></div>
      <div class="campaign__button-next swiper-button-next u-desktop"><span class="swiper-button-next--arrow"></span></div>
    </div>
    <div class="campaign__button-layout">
      <a href="<?php echo $campaign; ?>" class="link-button">
        <span class="link-button__text">View more</span><span class="link-button__arrow"></span>
      </a>
    </div>
  </div>
</section>

<section class="about top-about">
  <div class="about__inner inner">
    <div class="about__section-title section-title">
      <p class="section-title__main">About us</p>
      <h2 class="section-title__sub">私たちについて</h2>
    </div>
    <div class="about__wrapper">
      <div class="about__figure">
        <div class="about__image2"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_about_02-pc.jpg" alt="アバウトイメージ２"></div>
        <div class="about__image1"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_about_01-pc.jpg" alt="アバウトイメージ１"></div>
      </div>
      <div class="about__body">
        <h3 class="about__title">Dive into<br class="u-desktop"> <span class="about__title-indent">the Ocean</span></h3>
        <div class="about__body-right">
          <p class="about__copy">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            <div class="about__button-layout">
              <a href="<?php echo $about; ?>" class="link-button">
                <span class="link-button__text">View more</span><span class="link-button__arrow"></span>
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="information top-information">
  <div class="information__inner inner">
    <div class="information__section-title section-title">
      <p class="section-title__main">Information</p>
      <h2 class="section-title__sub">ダイビング情報</h2>
    </div>
    <div class="information__wrapper">
      <div class="information__figure js-colorbox"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_info_01-sp.jpg" alt="情報イメージ" class="information__image"></div>
      <div class="information__body">
        <h3 class="information__title">ライセンス講習</h3>
        <p class="information__copy">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
          正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
          <div class="information__button-layout">
            <a href="<?php echo $information; ?>" class="link-button">
              <span class="link-button__text">View more</span><span class="link-button__arrow"></span>
            </a>
          </div>
      </div>
    </div>
  </div>
</section>

<section class="blog top-blog">
  <div class="blog__inner inner">
    <div class="blog__section-title section-title">
      <p class="section-title__main section-title__main--white">Blog</p>
      <h2 class="section-title__sub section-title__sub--white">ブログ</h2>
    </div>
    <div class="blog__cards blog-cards">
      <a href="" class="blog-cards__item blog-card">
        <div class="blog-card__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_blog_01-sp.jpg" alt="ブログイメージ１" class="blog-card__image"></div>
        <div class="blog-card__body">
          <time class="blog-card__time" datetime="2023-11-17">2023.11/17</time>
          <h3 class="blog-card__title">ライセンス取得</h3>
          <p class="blog-card__copy">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
        </div>
      </a>
      <a href="" class="blog-cards__item blog-card">
        <div class="blog-card__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_blog_02-sp.jpg" alt="ブログイメージ２" class="blog-card__image"></div>
        <div class="blog-card__body">
          <time class="blog-card__time" datetime="2023-11-17">2023.11/17</time>
          <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
          <p class="blog-card__copy">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
        </div>
      </a>
      <a href="" class="blog-cards__item blog-card">
        <div class="blog-card__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_blog_03-sp.jpg" alt="ブログイメージ３" class="blog-card__image"></div>
        <div class="blog-card__body">
          <time class="blog-card__time" datetime="2023-11-17">2023.11/17</time>
          <h3 class="blog-card__title">カクレクマノミ</h3>
          <p class="blog-card__copy">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
        </div>
      </a>
    </div>
    <div class="blog__button-layout">
      <a href="<?php echo $blog; ?>" class="link-button">
        <span class="link-button__text">View more</span><span class="link-button__arrow"></span>
      </a>
    </div>
  </div>
</section>

<section class="voice top-voice">
  <div class="voice__inner inner">
    <div class="voice__section-title section-title">
      <p class="section-title__main">Voice</p>
      <h2 class="section-title__sub">お客様の声</h2>
    </div>
    <div class="voice__cards voice-cards">
      <div class="voice-cards__item voice-card">
        <div class="voice-card__header">
          <div class="voice-card__header-left">
            <div class="voice-card__header-top">
              <p class="voice-card__name">20代(女性)</p>
              <div class="voice-card__category">ライセンス講習</div>
            </div>
            <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
          </div>
          <div class="voice-card__figure js-colorbox"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_voice_01-sp.jpg" alt="ボイスイメージ１" class="voice-card__image"></div>
        </div>
        <div class="voice-card__body">
          <p class="voice-card__copy">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。</p>
        </div>
      </div>
      <div class="voice-cards__item voice-card">
        <div class="voice-card__header">
          <div class="voice-card__header-left">
            <div class="voice-card__header-top">
              <p class="voice-card__name">30代(男性)</p>
              <div class="voice-card__category">ファンダイビング</div>
            </div>
            <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
          </div>
          <div class="voice-card__figure js-colorbox"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_voice_02-sp.jpg" alt="ボイスイメージ２" class="voice-card__image"></div>
        </div>
        <div class="voice-card__body">
          <p class="voice-card__copy">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。</p>
        </div>
      </div>
    </div>
    <div class="voice__button-layout">
      <a href="<?php echo $voice; ?>" class="link-button">
        <span class="link-button__text">View more</span><span class="link-button__arrow"></span>
      </a>
    </div>
  </div>
</section>

<section class="price top-price">
  <div class="price__inner inner">
    <div class="price__section-title section-title">
      <p class="section-title__main">Price</p>
      <h2 class="section-title__sub">料金一覧</h2>
    </div>
    <div class="price__wrapper">
      <!-- <picture class="price__figure js-colorbox">
        <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_price_01-sp.jpg">
        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_price_01-pc.png" alt="プライスイメージ" class="price__image">
      </picture> -->
      <div class="price__figure js-colorbox">
        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_price_01-sp.jpg" alt="プライスイメージ" class="price__image  u-mobile">
        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_price_01-pc.png" alt="プライスイメージ" class="price__image  u-desktop">
      </div>
      <div class="price__left">
        <div class="price__table">
          <h3 class="price__title">ライセンス講習</h3>
          <dl class="price__body">
            <div class="price__line"><dt class="price__course">オープンウォーターダイバーコース</dt><dd class="price__value">¥50,000</dd></div>
            <div class="price__line"><dt class="price__course">アドバンスドオープンウォーターコース</dt><dd class="price__value">¥60,000</dd></div>
            <div class="price__line"><dt class="price__course">レスキュー＋EFRコース</dt><dd class="price__value">¥70,000</dd></div>
          </dl>
        </div>
        <div class="price__table">
          <h3 class="price__title">体験ダイビング</h3>
          <dl class="price__body">
            <div class="price__line"><dt class="price__course">ビーチ体験ダイビング(半日)</dt><dd class="price__value">¥7,000</dd></div>
            <div class="price__line"><dt class="price__course">ビーチ体験ダイビング(1日)</dt><dd class="price__value">¥14,000</dd></div>
            <div class="price__line"><dt class="price__course">ボート体験ダイビング(半日)</dt><dd class="price__value">¥10,000</dd></div>
            <div class="price__line"><dt class="price__course">ボート体験ダイビング(1日)</dt><dd class="price__value">¥18,000</dd></div>
          </dl>
        </div>
        <div class="price__table">
          <h3 class="price__title">ファンダイビング</h3>
          <dl class="price__body">
            <div class="price__line"><dt class="price__course">ビーチダイビング(2ダイブ)</dt><dd class="price__value">¥14,000</dd></div>
            <div class="price__line"><dt class="price__course">ボートダイビング(2ダイブ)</dt><dd class="price__value">¥18,000</dd></div>
            <div class="price__line"><dt class="price__course">スペシャルダイビング(2ダイブ)</dt><dd class="price__value">¥24,000</dd></div>
            <div class="price__line"><dt class="price__course">ナイトダイビング(1ダイブ)</dt><dd class="price__value">¥10,000</dd></div>
          </dl>
        </div>
        <div class="price__table">
          <h3 class="price__title">スペシャルダイビング</h3>
          <dl class="price__body">
            <div class="price__line"><dt class="price__course">貸切ダイビング(2ダイブ)</dt><dd class="price__value">¥24,000</dd></div>
            <div class="price__line"><dt class="price__course">1日ダイビング(3ダイブ)</dt><dd class="price__value">¥32,000</dd></div>
          </dl>
        </div>
      </div>
    </div>
    <div class="price__button-layout">
      <a href="<?php echo $price; ?>" class="link-button">
        <span class="link-button__text">View more</span><span class="link-button__arrow"></span>
      </a>
    </div>
  </div>
</section>



<?php get_footer(); ?>