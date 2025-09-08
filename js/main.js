$(function () {
  /*=================================================
      ハンバーガ―メニュー
  ===================================================*/
    // ハンバーガーメニューをクリックした時
    $(".toggle-btn").on("click", function () {
      $("header").toggleClass("open");
  });

  // メニューのリンクをクリックした時、ナビ非表示
  $("nav").on("click", function () {
      $("header").removeClass("open");
  });
    

  /*=================================================
  スムーススクロール
  ===================================================*/
  $('a[href^="#"]').click(function () {
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top;
    let speed = 600;
    $("html, body").animate({ scrollTop:  position}, speed, "swing");
    $("header").removeClass("open");
    return false;
  });


  
  /*=================================================
  バナースライダー
  ===================================================*/
  $(window).on("load resize", function () {
    var $slider = $(".banner");
  
    if ($(window).width() <= 768) {
      if (!$slider.hasClass("slick-initialized")) {
        $slider.slick({
          autoplaySpeed: 3000,                 // 再生速度（1000=1秒）
          infinite: true,                      // 無限ループON
          centerMode: false,                   // 中央寄せにして両端を見せる
          slidesToShow: 1,                     // 1スライダーの表示数
          autoplay: true,                      // 自動でスクロール
        });
      }
    } else {
      if ($slider.hasClass("slick-initialized")) {
        $slider.slick("unslick"); //768px超えたらslick解除
      }
    }
  });


  /*=================================================
  無限ループスライダー
  ===================================================*/
  $(".work-scene__slick").slick({
    autoplay: true,                   // 自動でスクロール
    autoplaySpeed: 0,                 // 再生速度（1000=1秒）
    speed: 10000,                     // スライドが流れる速度を設定
    cssEase: "linear",                // スライドの流れ方を等速に設定
    infinite: true,                   // 無限ループON
    slidesToShow: 2,                  // 1スライダーの表示数
    swipe: false,                     // 操作による切り替えはさせない
    arrows: false,                    // 矢印非表示
    pauseOnFocus: false,              // スライダーをフォーカスした時にスライドを停止させるか
    pauseOnHover: false,              // スライダーにマウスホバーした時にスライドを停止させるか
    centerMode: true,                 // 中央寄せにして両端を見せる
    centerPadding: "50px",           // 両端のスライドに入れる余白（pxや%で指定）

    responsive: [
      {
        breakpoint: 769,
        settings: {
          speed: 8000,                     // スライドが流れる速度を設定
          slidesToShow: 2,
          centerMode: false,           // 中央寄せにして両端を見せる
        },
      },
    ],
    responsive: [
      {
        breakpoint: 426,
        settings: {
          speed: 5000,                     // スライドが流れる速度を設定
          slidesToShow: 1,
          centerMode: false,           // 中央寄せにして両端を見せる
        },
      },
    ],
  });

/*=================================================
    TOPへ戻る
===================================================*/
const $backToTop = $('#js-back-to-top');
const $headerLine = $('#js-header-line');

// スクロールイベント
$(window).on('scroll', function () {
    if ($(this).scrollTop() > 700) {
        $backToTop.addClass('is-show');
        $headerLine.addClass('is-show');
    } else {
        $backToTop.removeClass('is-show');
        $headerLine.removeClass('is-show');
    }
});

// スムーススクロール
$backToTop.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 600);
});


});
