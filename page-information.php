<?php get_header(); ?>

<section class="page-information">

<div class="page-information__lower-fv lower-fv">
    <div class="lower-fv__center">
        <h1 class="lower-fv__title">information</h1>
    </div>
</div>
<div class="page-information__article lower-article" id="info">
    <div class="page-information__inner inner">
    <?php get_template_part('template/breadcrumb'); ?>
        <div class="page-information__wrapper">
            <nav class="page-information__category">
                <ul class="page-information__category-items">
                    <li class="page-information__category-item js-page-information__category-item current">
                        <!-- <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/info_icon01-w.png" alt="情報イラスト" class="u-desktop"> -->
                        <a>ライセンス<br class="u-mobile">講習</a>
                    </li>
                    <li class="page-information__category-item js-page-information__category-item">
                        <!-- <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/info_icon01-b.png" alt="情報イラスト" class="u-desktop"> -->
                        <a>ファン<br class="u-mobile">ダイビング</a>
                    </li>
                    <li class="page-information__category-item js-page-information__category-item">
                        <!-- <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/info_icon01-b.png" alt="情報イラスト" class="u-desktop"> -->
                        <a>体験<br class="u-mobile">ダイビング</a>
                    </li>
                </ul>
            </nav>
            <div class="page-information__boxes">
              <div class="page-information__frame js-page-information__frame">
              <div class="page-information__box">
                  <div class="page-information__box-left">
                      <h2 class="page-information__title">ライセンス講習</h2>
                      <p class="page-information__copy">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！</p>
                  </div>
                  <div class="page-information__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/info_img-01.jpg" alt="情報イメージ"></div>
              </div>
              </div>
              <div class="page-information__frame js-page-information__frame">
              <div class="page-information__box">
                  <div class="page-information__box-left">
                      <h2 class="page-information__title">ファンダイビング</h2>
                      <p class="page-information__copy">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
                  </div>
                  <div class="page-information__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/info_img-02.jpg" alt="情報イメージ"></div>
              </div>
              </div>
              <div class="page-information__frame js-page-information__frame">
              <div class="page-information__box">
                  <div class="page-information__box-left">
                      <h2 class="page-information__title">体験ダイビング</h2>
                      <p class="page-information__copy">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
                  </div>
                  <div class="page-information__figure"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/info_img-03.jpg" alt="情報イメージ"></div>
              </div>
              </div>
            </div>
        </div>
    </div>
</div>
</section>

<?php get_footer(); ?>