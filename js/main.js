// ハンバーガーメニューの機能
jQuery(function($) {
    // ハンバーガーメニューのトグル
    $(document).on('click', '.menu-toggle', function() {
        $(this).toggleClass('active');
        $('.global-nav').toggleClass('active');
    });

    // メニュー項目をクリックしたらメニューを閉じる
    $(document).on('click', '.nav-list a', function() {
        $('.menu-toggle').removeClass('active');
        $('.global-nav').removeClass('active');
    });

    // フェードイン要素の設定
    function fadeIn() {
        $('.fade-in-class').each(function() {
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            
            if (scroll > elemPos - windowHeight + 150) {
                $(this).addClass('active');
            }
        });
    }

    // 初期表示時に実行
    fadeIn();

    // スクロール時に実行
    $(window).on('scroll', fadeIn);
});

// Swiperの初期化
jQuery(function($) {
    if ($('.hero-swiper').length) {
        new Swiper('.hero-swiper', {
            effect: 'fade',
            speed: 1500,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            loop: true,
        });
    }
});


