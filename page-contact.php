<?php get_header(); ?>

<section class="page-contact">

<div class="page-contact__lower-fv lower-fv">
    <div class="lower-fv__center">
        <h1 class="lower-fv__title">Contact</h1>
    </div>
</div>
<div class="page-contact__article lower-article">
    <div class="page-contact__inner inner">
        <div class="page-contact__breadcrumb breadcrumb">
            <a href="#" class="breadcrumb__link">TOP</a>
            <span class="breadcrumb__arrow"></span>
            <a href="" class="breadcrumb__link">お問い合わせ</a>
        </div>
        <div class="page-contact__wrapper">

        <div class="page-contact__error">
          <p class="page-contact__error-text">※必須項目が入力されていません。<br class="u-mobile">入力してください。</p>
        </div>

<form class="page-contact__form contact-form">
<ul>

    <!-- アイテム 氏名 -->
    <li class="contact-form__item">
        <dl class="contact-form__flex">
            <dt class="contact-form__title"><label for="namae">お名前</label><span class="contact-form__danger-label">必須</span></dt>
            <dd>
                <input class="contact-form__input" type="text" id="namae" placeholder="沖縄　太郎">
            </dd>
        </dl>
    </li>
    <!-- アイテム メールアドレス -->
    <li class="contact-form__item">
        <dl class="contact-form__flex">
            <dt class="contact-form__title"><label for="mail">メールアドレス</label><span class="contact-form__danger-label">必須</span></dt>
            <dd>
                <input class="contact-form__input" type="text" id="mail" placeholder="aaa000@ggmail.com">
            </dd>
        </dl>
    </li>
    <!-- アイテム 電話番号 -->
    <li class="contact-form__item">
        <dl class="contact-form__flex">
            <dt class="contact-form__title"><label for="tel">電話番号</label><span class="contact-form__danger-label">必須</span></dt>
            <dd>
                <input class="contact-form__input" type="text" id="tel" placeholder="000-0000-0000">
            </dd>
        </dl>
    </li>

    <!-- アイテム お問合せ項目 -->
    <li class="contact-form__item">
        <dl class="contact-form__flex">
            <dt class="contact-form__title">お問合せ項目<span class="contact-form__danger-label">必須</span></dt>
            <dd class="contact-form__blank">
              <div class="contact-form__checkbox">
                <input type="checkbox" name="checkbox-name" id="diving" checked><label for="diving" class="contact-form__label"><span>ダイビング講習について</span></label>
              </div>
              <div class="contact-form__checkbox">
                <input type="checkbox" name="checkbox-name" id="fan"><label for="fan" class="contact-form__label"><span>ファンダイビングについて</span></label>
              </div>
              <div class="contact-form__checkbox">
                <input type="checkbox" name="checkbox-name" id="taiken"><label for="taiken" class="contact-form__label"><span>体験ダイビングについて</span></label>
              </div>
            </dd>
        </dl>
    </li><!-- /アイテム 性別 -->


    <!-- アイテム キャンペーン -->
    <li class="contact-form__item">
        <dl class="contact-form__flex">
            <dt class="contact-form__title">キャンペーン</dt>
            <dd class="contact-form__shape">
                <select class="contact-form__select">
                    <option disabled selected>キャンペーン内容を選択</option>
                    <option>ライセンス講習</option>
                    <option>ファンダイビング</option>
                    <option>体験ダイビング</option>
                </select>
            </dd>
        </dl>
    </li>

    <!-- アイテム お問合せ内容 -->
    <li class="contact-form__item">
        <dl class="contact-form__flex">
            <dt class="contact-form__title"><label for="textarea">お問合せ内容</label><span class="contact-form__danger-label">必須</span></dt>
            <dd><textarea class="contact-form__textarea" id="textarea"></textarea></dd>
        </dl>
    </li><!-- /アイテム お問合せ内容 -->

</ul>

<!-- プライバシーポリシー同意 -->
<div class="contact-form__privacy">
  <div class="contact-form__checkbox">
    <input type="checkbox" name="check-name" id="policy"><label for="policy" class="contact-form__label"><span>個人情報の取り扱いについて同意のうえ送信します。</span></label>
  </div>
</div><!-- /プライバシーポリシー同意 -->

<!-- ボタン -->
<div class="contact-form__button-layout">
    <a href="" class="link-button">
        <span class="link-button__text">Send</span><span class="link-button__arrow"></span>
    </a>
</div><!-- /ボタン -->

</form>



        </div>

    </div>
</div>
</section>


<?php get_footer(); ?>