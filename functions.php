<?php

add_action('wp_enqueue_scripts', 'theme_name_scripts');
function theme_name_scripts()
{
    $version = '1.0';
    wp_enqueue_style('css-main', get_stylesheet_uri());
    wp_enqueue_style('css-fonts',  get_template_directory_uri() . '/assets/fonts/montserrat/stylesheet.css', array(), $version);
    wp_enqueue_style('css-custom',  get_template_directory_uri() . '/assets/css/custom.css', array(), $version);
    wp_enqueue_script('js-jquery', get_template_directory_uri() . '/assets/libs/jquery/jquery-3.6.0.min.js', array(), $version, true);
    wp_enqueue_script('js-custom', get_template_directory_uri() . '/assets/js/custom.js', array('js-jquery'), $version, true);
}

add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu()
{
    register_nav_menu('primary', 'Главное меню');
}
