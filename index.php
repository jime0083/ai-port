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
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/green1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/garden1.jpg" alt="Image 2"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/garden6.jpg" alt="Image 3"></div>
        </div>
    </div>

    <section class="event-section">
        <h2 class="section-title">イベント<span>CLASS & EVENT</span></h2>
        
        <div class="event-swiper">
            <div class="swiper-wrapper">
                <!-- 1つ目のカード -->
                <div class="swiper-slide">
                    <div class="event-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/green book2.png" alt="クリスマスローズ">
                        <div class="event-info">
                            <p class="date">2025.02.13</p>
                            <h3>Zoony Garden・坂口則夫さんによるクリスマスローズ セミナー＆ワークショップ</h3>
                        </div>
                    </div>
                </div>

                <!-- 2つ目のカード -->
                <div class="swiper-slide">
                    <div class="event-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/garden3.jpg" alt="スタジオスケジュール">
                        <div class="event-info">
                            <p class="date">2025.02.12</p>
                            <h3>Barns STUDIO SCHEDULE 2025 Spring&Summer</h3>
                        </div>
                    </div>
                </div>

                <!-- 3つ目のカード -->
                <div class="swiper-slide">
                    <div class="event-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/garden4.jpg" alt="迎春の寄せ植え">
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

    <section class="philosophy-section">
        <div class="philosophy-container">
            <div class="philosophy-text">
                <h2 class="philosophy-title">PHILOSOPHY</h2>
                <h3 class="philosophy-heading">豊かな心、潤いのある暮らし。<br>それは一輪の花と緑から。</h3>
                <p class="philosophy-description">
                    空間に一輪の花があるだけで、人は優しい気持ちになれます。<br>
                    花と緑があることで、私たちは安らぎを感じ、<br>
                    豊かな未来を想像できるのです。
                </p>
                <p class="philosophy-description">
                    お花や観葉植物が飾られたお部屋、花壇や畑など趣味を愉しむお庭、樹木や草花が映える外構、植物を取り入れる目的や空間は十人十色。<br>
                    それぞれに美しい植物を、時にシンプルに、時に組み合わせながら、<br>
                    みなさまの想いに添った花と緑のある豊かな暮らしをご提案させていただきます。
                </p>
            </div>
            <div class="philosophy-images">
                <img src="<?php echo get_template_directory_uri(); ?>/img/garden5.jpg" alt="緑の葉とGreen Laboロゴ" class="philosophy-image main">
                <img src="<?php echo get_template_directory_uri(); ?>/img/flower.jpg" alt="カラフルな花々" class="philosophy-image sub">
            </div>
        </div>
    </section>

    <!-- 装飾用の背景画像セクション -->
    <section class="decorative-image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/green2.jpg" alt="水滴の付いた緑の葉" class="full-width-image">
    </section>

    <section class="service-section">
        <h2 class="section-title">人と緑の関係を科学する<br>新たな拠点「Green Labo」</h2>
        <p class="service-description">
            植物の生育には「光、水、土、温」の適切なコントロールが必要不可欠ですが、テクノロジーの発達とともに、特殊な環境や条件のもとでも緑化が可能となり、その手法も進化を続けています。「Green Labo」では最先端の緑化技術をはじめ、新しいサービスや情報を発信するとともに、多様な人々と交流を図りながら、緑のある豊かなライフスタイルデザインを探究しています。
        </p>

        <div class="service-grid">
            <!-- Barns -->
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/garden company.png" alt="Barns">
                <div class="service-content">
                    <h3>Barns<span>SHOWROOM & ATELIER</span></h3>
                    <p>育てる園芸を楽しむ人の納屋のような存在でありたいと名付けられた「バーンズ」では、花苗、観葉植物、ガーデングッズといった植物と共に暮らすアイテムを取りそろえております。</p>
                    <a href="#" class="view-more">View more</a>
                </div>
            </div>

            <!-- Café Musee -->
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/garden office6.png" alt="Café Musee">
                <div class="service-content">
                    <h3>Café Musee<span>GREEN HEALING RELAXATION</span></h3>
                    <p>緑の癒し効果を体感しながらくつろげるカフェ。店内では壁面緑化や観葉植物をご覧になりながら、自家栽培の無農薬野菜を使用したグリーンピザ、ハーブティーなどをお楽しみいただけます。</p>
                    <a href="#" class="view-more">View more</a>
                </div>
            </div>

            <!-- Planning -->
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/green book2.png" alt="Planning">
                <div class="service-content">
                    <h3>Planning<span>GARDEN EXTERIOR</span></h3>
                    <p>庭から始まる暮らしの物語。最初の庭から、生活を楽しむための庭へ豊かな暮らしのご提案をさせていただきます。</p>
                    <a href="#" class="view-more">View more</a>
                </div>
            </div>

            <!-- Maintenance -->
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/green man5.png" alt="Maintenance">
                <div class="service-content">
                    <h3>Maintenance<span>GARDEN SERVICE</span></h3>
                    <p>春先の施肥から冬の雪吊りまで、年間を通じて様々な庭のメンテナンス作業をお受けいたしております。大切なお庭の管理、ぜひプロの庭師にお任せください。</p>
                    <a href="#" class="view-more">View more</a>
                </div>
            </div>

            <!-- Office Green -->
            <div class="service-item wide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/garden company.png" alt="Office Green">
                <div class="service-content">
                    <h3>Office Green<span>BIOPHILIC DESIGN</span></h3>
                    <p>総合温室では、時代に先駆けてバイオフィリックデザインやハイドロカルチャーを導入。また屋上緑化や壁面緑化などの特殊緑化も設計を施工いたします。「Green Labo」は、オフィスに限らず、居種や性まいなど、人が過ごす様々な空間の緑花を積極的に提案しております。</p>
                    <a href="#" class="view-more">View more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="news-list-section">
        <div class="news-container">
            <div class="news-header">
                <h2 class="news-title">NEWS</h2>
                <p class="news-subtitle">NEWS & INFORMATION</p>
                <a href="#" class="news-view-all">VIEW ALL →</a>
            </div>
            
            <div class="news-items">
                <!-- ニュースアイテム1 -->
                <a href="#" class="news-item">
                    <span class="news-date">2025.02.12</span>
                    <span class="news-text">2025年春夏の教室開催スケジュールのお知らせ</span>
                    <span class="news-arrow">→</span>
                </a>

                <!-- ニュースアイテム2 -->
                <a href="#" class="news-item">
                    <span class="news-date">2025.02.01</span>
                    <span class="news-text">臨時休業のお知らせ</span>
                    <span class="news-arrow">→</span>
                </a>

                <!-- ニュースアイテム3 -->
                <a href="#" class="news-item">
                    <span class="news-date">2024.12.16</span>
                    <span class="news-text">2025年1月、2月の営業日のお知らせ</span>
                    <span class="news-arrow">→</span>
                </a>
            </div>
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
