<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Labo</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <header>
        <h1>Green Labo</h1>
        <nav>
            <ul>
                <li><a href="#">GREEN LABO</a></li>
                <li><a href="#">EVENT</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">WORKS</a></li>
                <li><a href="#">COMPANY</a></li>
                <li><a href="#">RECRUIT</a></li>
                <li><a href="#">ACCESS</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/enginer2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/enginer.jpg" alt="Image 2"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/enginer3.jpg" alt="Image 3"></div>
        </div>
    </div>

    <section class="event-section">
        <h2 class="section-title">イベント<span>CLASS & EVENT</span></h2>
        
        <div class="event-swiper">
            <div class="swiper-wrapper">
                <!-- 1つ目のカード -->
                <div class="swiper-slide">
                    <div class="event-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pc1.jpg" alt="クリスマスローズ">
                        <div class="event-info">
                            <p class="date">2025.02.13</p>
                            <h3>Zoony Garden・坂口則夫さんによるクリスマスローズ セミナー＆ワークショップ</h3>
                        </div>
                    </div>
                </div>

                <!-- 2つ目のカード -->
                <div class="swiper-slide">
                    <div class="event-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pc2.jpg" alt="スタジオスケジュール">
                        <div class="event-info">
                            <p class="date">2025.02.12</p>
                            <h3>Barns STUDIO SCHEDULE 2025 Spring&Summer</h3>
                        </div>
                    </div>
                </div>

                <!-- 3つ目のカード -->
                <div class="swiper-slide">
                    <div class="event-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/night.jpg" alt="迎春の寄せ植え">
                        <div class="event-info">
                            <p class="date">2024.12.07</p>
                            <h3>迎春の寄せ植え</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ナビゲーションボタン -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // メインビジュアルのSwiper
        var mainSwiper = new Swiper('.swiper-container', {
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            speed: 1000,
        });

        // イベントセクションのSwiper
        var eventSwiper = new Swiper('.event-swiper', {
            slidesPerView: 3, // 一度に3枚表示
            spaceBetween: 30, // スライド間のスペース
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            speed: 800,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // レスポンシブ設定
            breakpoints: {
                // 768px以下の場合
                768: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // 769px以上1024px以下の場合
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }
            }
        });
    </script>
</body>
</html>
