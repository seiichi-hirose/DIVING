<?php get_header(); ?>

<section class="page-price">
        <div class="page-price__lower-fv lower-fv">
            <div class="lower-fv__center">
                <h1 class="lower-fv__title">Price</h1>
            </div>
        </div>
        <div class="page-price__article lower-article" id="license">
            <div class="page-price__inner inner">
            <?php get_template_part('breadcrumb'); ?>
                <div class="page-price__wrapper">
                      <div class="page-price__table">
                        <div class="page-price__top">
                            <div class="page-price__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/price_icon.png" alt="くじらイラスト"></div>
                            <h2 class="page-price__title">ライセンス講習</h2>
                        </div>
                        <dl class="page-price__body">
                          <div class="page-price__line"><dt class="page-price__course"><?php the_field('license_text-1'); ?></dt><dd class="page-price__value">¥<?php the_field('license_price-1'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course"><?php the_field('license_text-2'); ?></dt><dd class="page-price__value">¥<?php the_field('license_price-2'); ?></dd></div>
                          <div class="page-price__line" id="experience"><dt class="page-price__course"><?php the_field('license_text-3'); ?></dt><dd class="page-price__value">¥<?php the_field('license_price-3'); ?></dd></div>
                        </dl>
                      </div>
                      <div class="page-price__table">
                        <div class="page-price__top"><div class="page-price__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/price_icon.png" alt="くじらイラスト"></div><h2 class="page-price__title">体験ダイビング</h2></div>
                        <dl class="page-price__body">
                          <div class="page-price__line"><dt class="page-price__course"><?php the_field('exp_text-1'); ?></dt><dd class="page-price__value">¥<?php the_field('exp_price-1'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course"><?php the_field('exp_text-2'); ?></dt><dd class="page-price__value">¥<?php the_field('exp_price-2'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course"><?php the_field('exp_text-3'); ?></dt><dd class="page-price__value">¥<?php the_field('exp_price-3'); ?></dd></div>
                          <div class="page-price__line" id="fan"><dt class="page-price__course"><?php the_field('exp_text-4'); ?></dt><dd class="page-price__value">¥<?php the_field('exp_price-4'); ?></dd></div>
                        </dl>
                      </div>
                      <div class="page-price__table">
                        <div class="page-price__top"><div class="page-price__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/price_icon.png" alt="くじらイラスト"></div><h2 class="page-price__title">ファンダイビング</h2></div>
                        <dl class="page-price__body">
                          <div class="page-price__line"><dt class="page-price__course"><?php the_field('fan_text-1'); ?></dt><dd class="page-price__value">¥<?php the_field('fan_price-1'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course"><?php the_field('fan_text-2'); ?></dt><dd class="page-price__value">¥<?php the_field('fan_price-2'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course"><?php the_field('fan_text-3'); ?></dt><dd class="page-price__value">¥<?php the_field('fan_price-3'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course"><?php the_field('fan_text-4'); ?></dt><dd class="page-price__value">¥<?php the_field('fan_price-4'); ?></dd></div>
                        </dl>
                      </div>
                      <div class="page-price__table">
                        <div class="page-price__top"><div class="page-price__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/price_icon.png" alt="くじらイラスト"></div><h2 class="page-price__title">スペシャルダイビング</h2></div>
                        <dl class="page-price__body">
                          <div class="page-price__line"><dt class="page-price__course"><?php the_field('special_text-1'); ?></dt><dd class="page-price__value">¥<?php the_field('special_price-1'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course"><?php the_field('special_text-2'); ?></dt><dd class="page-price__value">¥<?php the_field('special_price-2'); ?></dd></div>
                          <div class="page-price__line"><dt class="page-price__course"><?php the_field('special_text-3'); ?></dt><dd class="page-price__value">¥<?php the_field('special_price-3'); ?></dd></div>
                        </dl>
                      </div>

                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>