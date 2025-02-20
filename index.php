<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ウェブサイト</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <style>
    .header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #fff;
    /* padding: 20px 0; */
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    z-index: 1000;
}

.nav {
    display: flex;
    justify-content: center;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

.nav-item {
    margin: 0 20px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
    transition: color 0.3s ease;
}

.nav-item:hover {
    color: #666;
}

.nav-logo img{
    height: 60px;
}

.swiper-container {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    overflow: hidden;
    text-align: center;
    font-size: 18px;
    background: #fff;
    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
}

.swiper-slide img{
    width: 100%;
    height: auto;
}

.mainVisual {
    overflow-x: hidden;
}


    </style>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="#top" class="nav-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/greenLogo3.png" alt="logo"></a>
            <a href="#event" class="nav-item">EVENT</a>
            <a href="#news" class="nav-item">NEWS</a>
            <a href="#work" class="nav-item">WORK</a>
            <a href="#company" class="nav-item">COMPANY</a>
            <a href="#recruit" class="nav-item">RECRUIT</a>
            <a href="#access" class="nav-item">ACCESS</a>
        </nav>
    </header>



    <div class="mainvisual">
        <div class="swiper-container" style="height: 500px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/pc1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/pc2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/shake.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/shake2.jpg" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>



    <script src = "https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        pagination: '.swiper-pagination',
        autoplay: true,
        effect: 'fade',
        disableOnInteraction: false,
        });
    </script>
</body>


