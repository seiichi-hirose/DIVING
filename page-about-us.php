<?php get_header(); ?>

<section class="page-about">

<div class="page-about__lower-fv lower-fv">
    <div class="lower-fv__center">
        <h1 class="lower-fv__title">About</h1>
    </div>
</div>
<div class="page-about__article lower-article">
    <div class="page-about__inner inner">
    <?php get_template_part('breadcrumb'); ?>
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
            <div class="page-about__wrapper">
            <?php
            $gallery_group = SCF::get('gallery-group');
            foreach ($gallery_group as $gallery ) {
            ?>
            <?php
            $gallery1 = wp_get_attachment_url($gallery['gallery-1']);
            $gallery2 = wp_get_attachment_url($gallery['gallery-2']);
            $gallery3 = wp_get_attachment_url($gallery['gallery-3']);
            $gallery4 = wp_get_attachment_url($gallery['gallery-4']);
            $gallery5 = wp_get_attachment_url($gallery['gallery-5']);
            $gallery6 = wp_get_attachment_url($gallery['gallery-6']);
            ?>
            <div class="gallery__containers">
              <div class="gallery__container-upper">
                <?php if($gallery1): ?>
                <div class="gallery__image gallery__image--1 js-gallery__image"><img src="<?php echo $gallery1 ?>" alt="ギャラリーイメージ１"></div>
                <?php endif; ?>
<?php if($gallery2): ?>
                <div class="gallery__image gallery__image--2 js-gallery__image"><img src="<?php echo $gallery2 ?>" alt="ギャラリーイメージ２"></div>
<?php endif; ?>
<?php if($gallery3): ?>
                <div class="gallery__image gallery__image--3 js-gallery__image"><img src="<?php echo $gallery3 ?>" alt="ギャラリーイメージ３"></div>
<?php endif; ?>
              </div>
              <div class="gallery__container-lower">
<?php if($gallery4): ?>
                <div class="gallery__image gallery__image--4 js-gallery__image"><img src="<?php echo $gallery4 ?>" alt="ギャラリーイメージ４"></div>
<?php endif; ?>
<?php if($gallery5): ?>
                <div class="gallery__image gallery__image--5 js-gallery__image"><img src="<?php echo $gallery5 ?>" alt="ギャラリーイメージ５"></div>
                <?php endif; ?>
<?php if($gallery6): ?>
                <div class="gallery__image gallery__image--6 js-gallery__image"><img src="<?php echo $gallery6 ?>" alt="ギャラリーイメージ６"></div>
<?php endif; ?>
              </div>
            </div>
            <?php } ?>
            </div>

    </div>
</div>
</section>


<?php get_footer(); ?>