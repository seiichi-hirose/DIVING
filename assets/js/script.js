"use strict";

var _Swiper2;
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  //ローディングアニメーション
  // const spHeight = window.innerHeight;
  // document.documentElement.style.setProperty("--vh", spHeight / 100 + "px");

  // var webStorage = function () {
  //     if (sessionStorage.getItem('access')) {
  //       /*
  //         2回目以降アクセス時の処理
  //       */
  //       $(".loading-animation-main").addClass('is-active');
  //     } else {
  // $(window).on("load", function () {
  //     sessionStorage.setItem('access', 'true'); // sessionStorageにデータを保存
  //     $(".js-loading-animation").addClass('is-active');
  //     $(".js-loading-animation__center").delay(500).fadeOut(1500); // 背景色をフェードアウト
  // });
  // setTimeout(stoploading, 3000);
  // function stoploading() {
  // $(".loading-animation-main").addClass('is-active');
  //   $(".js-loading-animation").fadeOut(600);
  // }
  // }
  // }
  // webStorage();

  //トップに戻るボタン スクロール検知
  $(window).on("scroll", function () {
    // トップから100px以上スクロールしたら
    if (100 < $(this).scrollTop()) {
      // is-showクラスをつける
      $(".js-to-top").addClass("is-show");
    } else {
      // 100pxを下回ったらis-showクラスを削除
      $(".js-to-top").removeClass("is-show");
    }
  });
  $(".js-to-top").click(function () {
    $("body,html").animate({
      scrollTop: 0
    }, 500); //0.5秒かけてトップへ移動
    return false;
  });

  //ハンバーガーメニュー
  $(".js-hamburger").on("click", function () {
    $(this, ".header").toggleClass("active");
    $("html").toggleClass("is-fixed");
    if ($(".js-hamburger").hasClass("active")) {
      $(".js-header-drawer").fadeIn();
    } else {
      $(".js-header-drawer").fadeOut();
    }
  });
  $(".header-drawer__nav-unit").on("click", function () {
    $(".js-header-drawer").fadeOut();
    $("html").removeClass("is-fixed");
    $(".js-hamburger").removeClass("active");
  });

  //要素の取得とスピードの設定
  var box = $('.js-colorbox'),
    speed = 700;

  //.js-colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="colorbox-color"></div>');
    var color = $(this).find($('.colorbox-color')),
      image = $(this).find('img');
    var counter = 0;
    image.css('opacity', '0');
    color.css('width', '0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          'width': '100%'
        }, speed, function () {
          image.css('opacity', '1');
          $(this).css({
            'left': '0',
            'right': 'auto'
          });
          $(this).animate({
            'width': '0%'
          }, speed);
        });
        counter = 1;
      }
    });
  });

  // アコーディオン
  $(".faq__box:first-of-type .faq__answer").css("display", "block");
  $(".faq__box:first-of-type .js-faq__question").addClass("open");
  $(".js-faq__question").on("click", function () {
    $(this).next().slideToggle(300);
    $(this).toggleClass("open", 300);
  });

  // アコーディオン(ブログ)
  $(".blog-right__archive-item:first-of-type .blog-right__archive-months").css("display", "block");
  $(".blog-right__archive-item:first-of-type .js-blog-right__archive-year").addClass("open");
  $(".js-blog-right__archive-year").on("click", function () {
    $(this).next().slideToggle(300);
    $(this).toggleClass("open", 300);
  });

  // タブメニュー
  $(".js-page-information__frame:first-of-type").css("display", "block");
  $(".js-page-information__category-item").on("click", function () {
    $(".current").removeClass("current");
    $(this).addClass("current");
    var index = $(this).index();
    $(".js-page-information__frame").hide().eq(index).fadeIn(300);
  });

  //モーダル
  var scrollPosition;
  $(".js-gallery__image img").click(function () {
    $("#gallery__modal-window").html($(this).prop('outerHTML'));
    $("#gallery__modal-window").fadeIn(100);
    $(".header").fadeOut();
    $(".js-to-top").fadeOut();
    scrollPosition = $(window).scrollTop();
    $("body").addClass("fixed").css({
      top: -scrollPosition
    });
  });
  $("#gallery__modal-window, #gallery__modal-window img").click(function () {
    $("#gallery__modal-window").fadeOut(100);
    $(".header").fadeIn();
    $(".js-to-top").fadeIn();
    $("body").removeClass("fixed").css({
      top: 0
    });
    window.scrollTo(0, scrollPosition);
  });
});
var swiper1 = new Swiper(".js-top-fv", _defineProperty({
  loop: true,
  // デフォルトはfalse
  autoplay: true,
  // 自動再生
  effect: 'fade',
  // フェード
  speed: 2000
}, "autoplay", {
  // 自動再生
  delay: 5000 // 1秒後に次のスライド（初期値：3000）
}));

var swiper2 = new Swiper(".js-campaign", (_Swiper2 = {
  loop: true,
  // デフォルトはfalse
  // centeredSlides: true,
  autoplay: true
}, _defineProperty(_Swiper2, "autoplay", {
  // 自動再生
  delay: 4000,
  // 4秒後に次のスライド
  disableOnInteraction: false // 矢印をクリックしても自動再生を止めない
}), _defineProperty(_Swiper2, "speed", 1000), _defineProperty(_Swiper2, "slidesPerView", 1.26), _defineProperty(_Swiper2, "spaceBetween", 24), _defineProperty(_Swiper2, "breakpoints", {
  660: {
    slidesPerView: 2.25,
    spaceBetween: 24
  },
  // スライドの表示枚数：769px以上の場合
  769: {
    slidesPerView: 2.6,
    spaceBetween: 30
    // centeredSlides: true,
  },

  1260: {
    slidesPerView: 3.47,
    spaceBetween: 40
    // centeredSlides: true,
  }
}), _defineProperty(_Swiper2, "navigation", {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev"
}), _Swiper2));