<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">
        <div class="site-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                Jime Company
            </a>
        </div>

        <nav class="main-navigation">
            <ul class="nav-menu">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/work')); ?>">Work</a></li>
                <li><a href="<?php echo esc_url(home_url('/company')); ?>">Company</a></li>
                <li><a href="<?php echo esc_url(home_url('/news')); ?>">News</a></li>
                <li><a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
            </ul>
        </nav>

        <button class="hamburger-menu" aria-label="メニュー">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<style>
.site-header {
    background-color: #fff;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.header-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.site-logo a {
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
}

.nav-menu {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 30px;
}

.nav-menu a {
    text-decoration: none;
    color: #333;
    font-size: 16px;
    transition: opacity 0.3s ease;
    width: 100%;
    display: block;
}

.nav-menu a:hover {
    opacity: 0.7;
}

.hamburger-menu {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
    padding: 0;
    width: 30px;
    height: 20px;
    position: relative;
}

.hamburger-menu span {
    display: block;
    width: 100%;
    height: 2px;
    background-color: #333;
    position: absolute;
    left: 0;
    transition: all 0.3s ease;
}

.hamburger-menu span:nth-child(1) {
    top: 0;
}

.hamburger-menu span:nth-child(2) {
    top: 50%;
    transform: translateY(-50%);
}

.hamburger-menu span:nth-child(3) {
    bottom: 0;
}

@media (max-width: 768px) {
    .nav-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: #fff;
        flex-direction: column;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .nav-menu.active {
        display: flex;
    }

    .hamburger-menu {
        display: block;
    }

    .hamburger-menu.active span:nth-child(1) {
        transform: rotate(45deg);
        top: 50%;
    }

    .hamburger-menu.active span:nth-child(2) {
        opacity: 0;
    }

    .hamburger-menu.active span:nth-child(3) {
        transform: rotate(-45deg);
        top: 50%;
    }
}
</style>

<script>
jQuery(function($) {
    $('.hamburger-menu').on('click', function() {
        $(this).toggleClass('active');
        $('.nav-menu').toggleClass('active');
    });
});
</script>
