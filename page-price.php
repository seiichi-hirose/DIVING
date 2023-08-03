<?php get_header(); ?>

<section class="page-price">
        <div class="page-price__lower-fv lower-fv">
            <div class="lower-fv__center">
                <h1 class="lower-fv__title">Price</h1>
            </div>
        </div>
        <div class="page-price__article lower-article">
            <div class="page-price__inner inner">
            <?php get_template_part('template/breadcrumb'); ?>
                <div class="page-price__wrapper">

                      <div class="page-price__table" id="license">
                        <div class="page-price__top">
                            <div class="page-price__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/price_icon.png" alt="くじらイラスト"></div>
                            <h2 class="page-price__title">ライセンス講習</h2>
                        </div>
                        <dl class="page-price__body">
                        <?php
                        $licenses = SCF::get('licenses');
                        foreach ($licenses as $license ) {
                          $license_t = esc_html( $license['license-title'] );
                          $license_p = esc_html( $license['license-price'] );
                        ?>
                        <?php if($license_t && $license_p): ?>
                          <div class="page-price__line"><dt class="page-price__course"><?php echo $license_t ?></dt><dd class="page-price__value">¥<?php echo $license_p ?></dd></div>
                          <?php endif; ?>
                        <?php } ?>
                        </dl>
                      </div>
                      <div class="page-price__table" id="experience">
                        <div class="page-price__top"><div class="page-price__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/price_icon.png" alt="くじらイラスト"></div><h2 class="page-price__title">体験ダイビング</h2></div>
                        <dl class="page-price__body">
                        <?php
                        $experiences = SCF::get('experiences');
                        foreach ($experiences as $experience ) {
                          $experience_t = esc_html( $experience['experience-title'] );
                          $experience_p = esc_html( $experience['experience-price'] );
                        ?>
                        <?php if($experience_t && $experience_p): ?>
                          <div class="page-price__line"><dt class="page-price__course"><?php echo $experience_t ?></dt><dd class="page-price__value">¥<?php echo $experience_p ?></dd></div>
                          <?php endif; ?>
                        <?php } ?>
                        </dl>
                      </div>
                      <div class="page-price__table" id="fan">
                        <div class="page-price__top"><div class="page-price__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/price_icon.png" alt="くじらイラスト"></div><h2 class="page-price__title">ファンダイビング</h2></div>
                        <dl class="page-price__body">
                        <?php
                        $fans = SCF::get('fans');
                        foreach ($fans as $fan ) {
                          $fan_t = esc_html( $fan['fan-title'] );
                          $fan_p = esc_html( $fan['fan-price'] );
                        ?>
                        <?php if($fan_t && $fan_p): ?>
                          <div class="page-price__line"><dt class="page-price__course"><?php echo $fan_t ?></dt><dd class="page-price__value">¥<?php echo $fan_p ?></dd></div>
                          <?php endif; ?>
                        <?php } ?>
                        </dl>
                      </div>
                      <div class="page-price__table">
                        <div class="page-price__top"><div class="page-price__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/price_icon.png" alt="くじらイラスト"></div><h2 class="page-price__title">スペシャルダイビング</h2></div>
                        <dl class="page-price__body">
                        <?php
                        $specials = SCF::get('specials');
                        foreach ($specials as $special ) {
                          $special_t = esc_html( $special['special-title'] );
                          $special_p = esc_html( $special['special-price'] );
                        ?>
                        <?php if($special_t && $special_p): ?>
                          <div class="page-price__line"><dt class="page-price__course"><?php echo $special_t ?></dt><dd class="page-price__value">¥<?php echo $special_p ?></dd></div>
                          <?php endif; ?>
                        <?php } ?>
                        </dl>
                      </div>

                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>