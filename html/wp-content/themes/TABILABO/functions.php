<?php
function mytheme_enqueue_styles() {
    // テーマのメインCSS
    wp_enqueue_style('mytheme-style', get_stylesheet_directory_uri().'/scss/style.css');

    // FontAwesome（CDN版）
    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        null
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        null,
        true // フッターで読み込み
    );

    wp_enqueue_script(
        'swiper',
        get_template_directory_uri().'/js/swiper.js',
        array('swiper-js'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
add_theme_support('post-thumbnails');
//set_post_thumbnail($post_id,$thumbnail_id);




?>