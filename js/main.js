jQuery(function($) {
    // フェードイン要素の設定
    function fadeIn() {
        $('.fadeIn').each(function() {
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            
            if (scroll > elemPos - windowHeight + 150) {
                $(this).addClass('active');
            }
        });
    }

    // 要素にfadeInクラスを追加
    $('.event-section, .philosophy-section, .service-section, .news-list-section, .recruit-section, .contact-section').addClass('fadeIn');

    // スクロール時とページ読み込み時に実行
    $(window).on('scroll load', fadeIn);
}); 


    // Swiperの初期化
    const heroSwiper = new Swiper('.hero-swiper', {
        effect: 'fade',
        speed: 1500,
        autoplay: {
            delay: 1500,
            disableOnInteraction: false,
        },
        loop: true,
    });
