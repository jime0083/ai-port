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



//カスタム投稿タイプ作成
function create_news_post_type() {
    register_post_type('news',
        array(
            'labels'      => array(
                'name'          => __('ニュース'),
                'singular_name' => __('ニュース'),
            ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => 'news'), 
            'supports'    => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
            'menu_position' => 5,
            'menu_icon'   => 'dashicons-megaphone',
        )
    );
}
add_action('init', 'create_news_post_type');



// functions.php に追加
function news_list_shortcode() {
    $news_query = new WP_Query(array(
        'post_type'      => 'news',
        'posts_per_page' => 10,
    ));

    ob_start();
    if ($news_query->have_posts()) :
        echo '<ul>';
        while ($news_query->have_posts()) : $news_query->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a> - ' . get_the_date() . '</li>';
        endwhile;
        echo '</ul>';
    endif;
    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('news_list', 'news_list_shortcode');
