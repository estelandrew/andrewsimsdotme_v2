<?php

/**
 * Font Awesome Kit Setup
 * 
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (! function_exists('fa_custom_setup_kit') ) {
    function fa_custom_setup_kit($kit_url = '') {
        foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
            add_action($action, function () use ($kit_url) {
                wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
            });
        }
    }
}

function my_files() {
    wp_enqueue_script('main_scripts', get_theme_file_uri('/scripts.js'));
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Nanum+Gothic&family=Nanum+Gothic+Coding&display=swap', [], null);
    wp_enqueue_style('main_styles', get_stylesheet_uri());
}

fa_custom_setup_kit('https://kit.fontawesome.com/7c6fcbeabe.js');
add_action('wp_enqueue_scripts', 'my_files');

function my_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_features');

?>