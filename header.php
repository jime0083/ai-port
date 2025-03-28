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

<header class="header">
    <div class="header-container">
        <h1 class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                Green Labo
            </a>
        </h1>
        <nav class="global-nav">
            <ul class="nav-list">
                <li class="has-dropdown"><a href="#">GREEN LABO</a></li>
                <li><a href="#">EVENT</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">WORKS</a></li>
                <li><a href="#">COMPANY</a></li>
                <li><a href="#">RECRUIT</a></li>
                <li><a href="#">ACCESS</a></li>
                <li class="has-dropdown"><a href="#">CONTACT</a></li>
            </ul>
        </nav>
        <button class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
