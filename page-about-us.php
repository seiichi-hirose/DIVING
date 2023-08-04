<?php get_header(); ?>

<section class="page-about">

<div class="page-about__lower-fv lower-fv">
    <div class="lower-fv__center">
        <h1 class="lower-fv__title">About</h1>
    </div>
</div>
<div class="page-about__article lower-article">
    <div class="page-about__inner inner">
    <?php get_template_part('template/breadcrumb'); ?>
        <div class="page-about__wrapper">
            <div class="page-about__figure u-desktop">
                <div class="page-about__image2"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_about_02-pc.jpg" alt="アバウトイメージ２"></div>
                <div class="page-about__image1"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_about_01-pc.jpg" alt="アバウトイメージ１"></div>
            </div>
            <div class="page-about__center">
                <h2 class="page-about__title">Dive into<br>the Ocean</h2>
                <div class="page-about__right">
                    <p class="page-about__copy">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                </div>
            </div>
        </div>

        <div class="page-about__gallery gallery">
          <div id="gallery__modal-window"></div>
            <div class="gallery__title section-title">
                <p class="section-title__main">Gallery</p>
                <h2 class="section-title__sub">フォト</h2>
            </div>


            <div class="gallery__wrapper">

                <ul class="gallery__images">
                <?php
                $gallery_group = SCF::get('gallery-group');
                foreach ($gallery_group as $gallery ) {
                ?>
                <?php
                $gallery_piece = wp_get_attachment_url($gallery['gallery_item']);
                ?>
                <?php if($gallery_piece): ?>
                    <li class="gallery__image js-gallery__image"><img src="<?php echo $gallery_piece ?>" alt="ギャラリーイメージ画像"></li>
                <?php endif; ?>
                <?php } ?>
                </ul>

            </div>

    </div>
</div>
</section>


<?php get_footer(); ?>