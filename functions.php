<?php
// Chargement des scripts GSAP + assets principaux du thème

function mon_theme_assets() {
    // CSS
    $css_file = vite_css('assets/js/main.js');
    if ($css_file) {
        wp_enqueue_style('theme-style', $css_file, [], null);
    }

    // JS
    $js_file = vite_asset('assets/js/main.js');
    if ($js_file) {
        wp_enqueue_script('theme-js', $js_file, [], null, true);
    }

    // Autres scripts éventuels
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


function vite_asset($entry) {
    $manifest_path = get_template_directory() . '/dist/manifest.json';

    if (!file_exists($manifest_path)) {
        return null;
    }

    $manifest = json_decode(file_get_contents($manifest_path), true);

    if (!isset($manifest[$entry])) {
        return null;
    }

    return get_template_directory_uri() . '/dist/' . $manifest[$entry]['file'];
}

function vite_css($entry) {
    $manifest_path = get_template_directory() . '/dist/manifest.json';

    if (!file_exists($manifest_path)) {
        return null;
    }

    $manifest = json_decode(file_get_contents($manifest_path), true);

    if (!isset($manifest[$entry]['css'][0])) {
        return null;
    }

    return get_template_directory_uri() . '/dist/' . $manifest[$entry]['css'][0];
}


?>



