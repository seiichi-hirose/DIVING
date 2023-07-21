<?php get_header(); ?>

<section class="page-price">
        <div class="page-price__lower-fv lower-fv">
            <div class="lower-fv__center">
                <h1 class="lower-fv__title">Price</h1>
            </div>
        </div>
        <div class="page-price__article lower-article" id="licence">
            <div class="page-price__inner inner">
            <?php get_template_part('breadcrumb'); ?>
                <div class="page-price__wrapper">
                      <div class="page-price__table">
                        <div class="page-price__top">
                            <div class="page-price__image"><img src="./assets/images/common/price_icon.png" alt="くじらイラスト"></div>
                            <h2 class="page-price__title">ライセンス講習</h2>
                        </div>
                        <dl class="page-price__body">
                          <div class="page-price__line"><dt class="page-price__course">オープンウォーター<br class="u-mobile">ダイバーコース</dt><dd class="page-price__value">¥<?php the_field('diver-course'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course">アドバンスド<br class="u-mobile">オープンウォーターコース</dt><dd class="page-price__value">¥<?php the_field('advanced-course'); ?></dd></div>
                          <div class="page-price__line" id="experience"><dt class="page-price__course">レスキュー＋EFRコース</dt><dd class="page-price__value">¥<?php the_field('rescue'); ?></dd></div>
                        </dl>
                      </div>
                      <div class="page-price__table">
                        <div class="page-price__top"><div class="page-price__image"><img src="./assets/images/common/price_icon.png" alt="くじらイラスト"></div><h2 class="page-price__title">体験ダイビング</h2></div>
                        <dl class="page-price__body">
                          <div class="page-price__line"><dt class="page-price__course">ビーチ体験ダイビング<br class="u-mobile">(半日)</dt><dd class="page-price__value">¥<?php the_field('beach-half'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course">ビーチ体験ダイビング<br class="u-mobile">(1日)</dt><dd class="page-price__value">¥<?php the_field('beach-day'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course">ボート体験ダイビング<br class="u-mobile">(半日)</dt><dd class="page-price__value">¥<?php the_field('boat-half'); ?></dd></div>
                          <div class="page-price__line" id="fan"><dt class="page-price__course">ボート体験ダイビング<br class="u-mobile">(1日)</dt><dd class="page-price__value">¥<?php the_field('boat-day'); ?></dd></div>
                        </dl>
                      </div>
                      <div class="page-price__table">
                        <div class="page-price__top"><div class="page-price__image"><img src="./assets/images/common/price_icon.png" alt="くじらイラスト"></div><h2 class="page-price__title">ファンダイビング</h2></div>
                        <dl class="page-price__body">
                          <div class="page-price__line"><dt class="page-price__course">ビーチダイビング<br class="u-mobile">(2ダイブ)</dt><dd class="page-price__value">¥<?php the_field('beach-2'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course">ボートダイビング<br class="u-mobile">(2ダイブ)</dt><dd class="page-price__value">¥<?php the_field('boat-2'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course">スペシャルダイビング<br class="u-mobile">(2ダイブ)</dt><dd class="page-price__value">¥<?php the_field('special-2'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course">ナイトダイビング<br class="u-mobile">(1ダイブ)</dt><dd class="page-price__value">¥<?php the_field('night-1'); ?></dd></div>
                        </dl>
                      </div>
                      <div class="page-price__table">
                        <div class="page-price__top"><div class="page-price__image"><img src="./assets/images/common/price_icon.png" alt="くじらイラスト"></div><h2 class="page-price__title">スペシャルダイビング</h2></div>
                        <dl class="page-price__body">
                          <div class="page-price__line"><dt class="page-price__course">貸切ダイビング<br class="u-mobile">(2ダイブ)</dt><dd class="page-price__value">¥<?php the_field('reserved-2'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course">1日ダイビング<br class="u-mobile">(3ダイブ)</dt><dd class="page-price__value">¥<?php the_field('day-3'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course">ナイトダイビング<br class="u-mobile">(2ダイブ)</dt><dd class="page-price__value">¥<?php the_field('night-2'); ?></dd></div>
                        </dl>
                      </div>

                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>