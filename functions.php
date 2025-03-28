<?php
// ヘッダーとフッターメニューの登録
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

// テーマサポートの追加
function theme_setup() {
    // タイトルタグのサポート
    add_theme_support('title-tag');
    
    // アイキャッチ画像のサポート
    add_theme_support('post-thumbnails');
    
    // HTML5マークアップのサポート
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'theme_setup');

// スタイルシートとスクリプトの読み込み
function theme_scripts() {
    // スタイルシートの読み込み
    wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    
    // jQueryの読み込み
    wp_enqueue_script('jquery');
    
    // スクリプトの読み込み
    wp_enqueue_script('swiper-script', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'theme_scripts'); 