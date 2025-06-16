<?php
// Chargement des scripts GSAP + assets principaux du thème

function mon_theme_assets() {
    // CSS principal
    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri() . '/assets/css/style.css'
    );

    // GSAP core
    wp_enqueue_script(
        'gsap-js',
        'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js',
        array(),
        '3.13.0',
        true
    );

    // ScrollTrigger 
    wp_enqueue_script(
        'gsap-st',
        'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js',
        array('gsap-js'),
        '3.13.0',
        true
    );
    // SplitText
    wp_enqueue_script(
        'gsap-splittext',
        'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js',
        array('gsap-js'),
        '3.13.0',
        true
    );

    // Custom JS
    wp_enqueue_script(
        'gsap-custom',
        get_template_directory_uri() . '/assets/js/animations.js',
        array('gsap-js', 'gsap-st', 'gsap-splittext'),
        null,
        true
    );

    // Carousel
    wp_enqueue_script(
        'carousel',
        get_template_directory_uri() . '/assets/js/carousel.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'mon_theme_assets');

// Support images et titres WordPress
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');

// ACF - Options page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title'  => 'Options du site',
        'menu_title'  => 'Options du site',
        'menu_slug'   => 'site-options',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ]);
}
?>
