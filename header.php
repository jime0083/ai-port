<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jime Company</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <?php wp_head(); ?>
</head>
<body>

<header class="header">
    <div class="header-container">
        <h1 class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                Jime Company
            </a>
        </h1>
        <nav class="global-nav">
            <ul class="nav-list">
                <li class="has-dropdown"><a href="<?php echo home_url('/'); ?>">GREEN LABO</a></li>
                <li><a href="<?php echo home_url('/news-list'); ?>">NEWS</a></li>
                <li><a href="<?php echo home_url('/work'); ?>">WORKS</a></li>
                <li><a href="<?php echo home_url('/company'); ?>">COMPANY</a></li>
                <li><a href="<?php echo home_url('/recruit'); ?>">RECRUIT</a></li>
                <li><a href="<?php echo home_url('/access'); ?>">ACCESS</a></li>
                <li><a href="<?php echo home_url('/qfa'); ?>">QFA</a></li>
                <li class="has-dropdown"><a href="<?php echo home_url('/contact'); ?>">CONTACT</a></li>
            </ul>
        </nav>
        <button class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
