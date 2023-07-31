<?php get_header(); ?>

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
?>



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

    <?php
    $args = [
    'post_type' => 'campaign',
    'posts_per_page' => 10
    ];
    $the_query = new WP_Query($args);
    ?>

    <div class="campaign__container">
      <?php if ($the_query->have_posts()) : ?>
      <div class="campaign__frame swiper js-campaign">
        <div class="campaign__cards swiper-wrapper">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="campaign__card campaign-card swiper-slide">
            <div class="campaign-card__figure">
                <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('large', array('class' => 'campaign-card__image') ); ?>
                <?php } else { ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.png" alt="画像無し" class="campaign-card__image">
                <?php } ?>
            </div>
            <div class="campaign-card__body-top">
              <div class="campaign-card__category">
                <?php
                $terms = get_the_terms($post->ID, 'campaign_category');
                foreach ($terms as $term) {
                echo $term->name;
                }
                ?>
              </div>
              <h3 class="campaign-card__title"><?php the_title(); ?></h3>
            </div>
            <div class="campaign-card__body-under">
              <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
              <div class="campaign-card__footer">
                <p class="campaign-card__old-price">¥<?php the_field('old-price'); ?></p>
                <p class="campaign-card__new-price">¥<?php the_field('new-price'); ?></p>
              </div>
            </div>
          </div>
          <?php endwhile; ?>

        </div>
      </div>
      <?php
        // -------- WP_query終了-----------
        wp_reset_postdata();
        endif;
        ?>
      <!-- 前後の矢印 -->
      <div class="campaign__button-prev swiper-button-prev u-desktop"><span class="swiper-button-prev--arrow"></span></div>
      <div class="campaign__button-next swiper-button-next u-desktop"><span class="swiper-button-next--arrow"></span></div>
    </div>
    <div class="campaign__button-layout">
      <a href="<?php echo $campaign ?>" class="link-button">
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
              <a href="<?php echo $about ?>" class="link-button">
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
            <a href="<?php echo $information ?>" class="link-button">
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
    <?php
    //　--------- ブログを3件表示　---------
    $args = array(
        'post_type'  => 'post',  // カテゴリー「news」を読み込む
        'posts_per_page' => 3        // 表示数　3件
    );
    $the_query = new WP_Query($args); // 新規WP query を作成　変数args で定義したパラメータを参照
    if ($the_query->have_posts()) :
        // ここから表示する内容を記入
    ?>
    <div class="blog__cards blog-cards">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
        <div class="blog-card__figure">
            <?php if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('medium', array('class' => 'blog-card__image') ); ?>
            <?php } else { ?>
                <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.png" alt="ブログイメージ３" class="blog-card__image">
            <?php } ?>
        </div>
        <div class="blog-card__body">
          <time class="blog-card__time" datetime="<?php the_time('c')?>"><?php the_time('Y.m.d')?></time>
          <h3 class="blog-card__title"><?php the_title(); ?></h3>
          <p class="blog-card__copy"><?php the_excerpt(); ?></p>
        </div>
      </a>
      <?php endwhile; ?>
    </div>
    <?php
        // -------- WP_query終了-----------
        wp_reset_postdata();
    endif;
    ?>
    <div class="blog__button-layout">
      <a href="<?php echo $blog ?>" class="link-button">
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
    <?php
    $args = [
    'post_type' => 'voice',
    'posts_per_page' => 2
    ];
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
    <div class="voice__cards voice-cards">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="voice-cards__item voice-card">
        <div class="voice-card__header">
          <div class="voice-card__header-left">
            <div class="voice-card__header-top">
              <p class="voice-card__name"><?php the_field('voice-age'); ?>代(<?php the_field('voice-relation'); ?>)</p>
              <div class="voice-card__category">
                <?php
                $terms = get_the_terms($post->ID, 'voice_category');
                foreach ($terms as $term) {
                    echo $term->name;
                }
                ?>
              </div>
            </div>
            <h3 class="voice-card__title"><?php the_title(); ?></h3>
          </div>
          <div class="voice-card__figure js-colorbox">
            <?php if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('medium', array('class' => 'voice-card__image') ); ?>
            <?php } else { ?>
                <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.png" alt="画像無し" class="voice-card__image">
            <?php } ?>
          </div>
        </div>
        <div class="voice-card__body">
          <p class="voice-card__copy"><?php echo wp_trim_words( get_the_content(), 180, '…' ); ?></p>
        </div>
      </div>
      <?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
      <?php else : ?>
        <p>記事が見つかりませんでした</p>
        <?php endif; ?>
    </div>
    <div class="voice__button-layout">
      <a href="<?php echo $voice ?>" class="link-button">
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
            <div class="price__line"><dt class="price__course"><?php the_field('license_text-1','33'); ?></dt><dd class="price__value">¥<?php the_field('license_price-1','33'); ?></dd></div>
            <div class="price__line"><dt class="price__course"><?php the_field('license_text-2','33'); ?></dt><dd class="price__value">¥<?php the_field('license_price-2','33'); ?></dd></div>
            <div class="price__line"><dt class="price__course"><?php the_field('license_text-3','33'); ?></dt><dd class="price__value">¥<?php the_field('license_price-3','33'); ?></dd></div>
          </dl>
        </div>
        <div class="price__table">
          <h3 class="price__title">体験ダイビング</h3>
          <dl class="price__body">
            <div class="price__line"><dt class="price__course"><?php the_field('exp_text-1','33'); ?></dt><dd class="price__value">¥<?php the_field('exp_price-1','33'); ?></dd></div>
            <div class="price__line"><dt class="price__course"><?php the_field('exp_text-2','33'); ?></dt><dd class="price__value">¥<?php the_field('exp_price-2','33'); ?></dd></div>
            <div class="price__line"><dt class="price__course"><?php the_field('exp_text-3','33'); ?></dt><dd class="price__value">¥<?php the_field('exp_price-3','33'); ?></dd></div>
            <div class="price__line"><dt class="price__course"><?php the_field('exp_text-4','33'); ?></dt><dd class="price__value">¥<?php the_field('exp_price-4','33'); ?></dd></div>
          </dl>
        </div>
        <div class="price__table">
          <h3 class="price__title">ファンダイビング</h3>
          <dl class="price__body">
            <div class="price__line"><dt class="price__course"><?php the_field('fan_text-1','33'); ?></dt><dd class="price__value">¥<?php the_field('fan_price-1','33'); ?></dd></div>
            <div class="price__line"><dt class="price__course"><?php the_field('fan_text-2','33'); ?></dt><dd class="price__value">¥<?php the_field('fan_price-2','33'); ?></dd></div>
            <div class="price__line"><dt class="price__course"><?php the_field('fan_text-3','33'); ?></dt><dd class="price__value">¥<?php the_field('fan_price-3','33'); ?></dd></div>
            <div class="price__line"><dt class="price__course"><?php the_field('fan_text-4','33'); ?></dt><dd class="price__value">¥<?php the_field('fan_price-4','33'); ?></dd></div>
          </dl>
        </div>
        <div class="price__table">
          <h3 class="price__title">スペシャルダイビング</h3>
          <dl class="price__body">
            <div class="price__line"><dt class="price__course"><?php the_field('special_text-2','33'); ?></dt><dd class="price__value">¥<?php the_field('special_price-2','33'); ?></dd></div>
            <div class="price__line"><dt class="price__course"><?php the_field('special_text-3','33'); ?></dt><dd class="price__value">¥<?php the_field('special_price-3','33'); ?></dd></div>
          </dl>
        </div>
      </div>
    </div>
    <div class="price__button-layout">
      <a href="<?php echo $price ?>" class="link-button">
        <span class="link-button__text">View more</span><span class="link-button__arrow"></span>
      </a>
    </div>
  </div>
</section>



<?php get_footer(); ?>