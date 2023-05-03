<?php

add_action('wp_enqueue_scripts', 'theme_name_scripts');
function theme_name_scripts()
{
    $version = '1.0';
    // start styles
    wp_enqueue_style('css-main', get_stylesheet_uri());
    wp_enqueue_style('css-fonts',  get_template_directory_uri() . '/assets/fonts/montserrat/stylesheet.css', array(), $version);
    wp_enqueue_style('css-font-awesome',  'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), $version);
    wp_enqueue_style('css-custom',  get_template_directory_uri() . '/assets/css/custom.css', array(), $version);
    wp_enqueue_style('css-animatecss',  get_template_directory_uri() . '/assets/libs/animatecss/animate.min.css', array(), $version);
    wp_enqueue_style('css-slick',  get_template_directory_uri() . '/assets/libs/slick/slick.css', array(), $version);

    // start scripts
    wp_enqueue_script('js-jquery', get_template_directory_uri() . '/assets/libs/jquery/jquery-3.6.0.min.js', array(), $version, true);
    wp_enqueue_script('js-custom', get_template_directory_uri() . '/assets/js/custom.js', array('js-jquery'), $version, true);
    wp_enqueue_script('js-wow', get_template_directory_uri() . '/assets/libs/wow/wow.min.js', array(), $version, true);
    wp_enqueue_script('js-slick', get_template_directory_uri() . '/assets/libs/slick/slick.min.js', array(), $version, true);
}

add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu()
{
    register_nav_menu('primary', 'Главное меню');
}

function theme_prefix_setup()
{
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'theme_prefix_setup');

add_theme_support('post-thumbnails');


function create_portfolio_post_type()
{
    register_post_type(
        'portfolio',
        array(
            'public' => true,
            // 'has_archive' => true,
            'menu_icon' => 'dashicons-portfolio',
            'labels' => array(
                'name' => __('Портфолио'),
                'singular_name' => __('Портфолио'),
                'add_new' => __('Добавить новое портфолио'),
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'tag'),
            // 'rewrite' => array('slug' => 'portfolio'),
            'menu_position'      => 4,
            'taxonomies' => array('post_tag')
        )
    );
}
function create_reviews_post_type()
{
    register_post_type(
        'reviews',
        array(
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-feedback',
            'labels' => array(
                'name' => __('Отзывы'),
                'singular_name' => __('Отзыв'),
                'add_new' => __('Добавить новый отзыв'),
            ),
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'reviews'),
            'menu_position'      => 6,
        )
    );
}
function create_technology_post_type()
{
    register_post_type(
        'technology',
        array(
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-generic',
            'labels' => array(
                'name' => __('Технологии'),
                'singular_name' => __('Технология'),
                'add_new' => __('Добавить новую технологию'),
            ),
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'technology'),
            'menu_position'      => 5,
        )
    );
}
add_action('init', 'create_portfolio_post_type');
add_action('init', 'create_technology_post_type');
add_action('init', 'create_reviews_post_type');


// start remove excess from the admin panel
function remove_console_menu()
{
    remove_menu_page('index.php');
}
add_action('admin_menu', 'remove_console_menu');

function remove_posts_menu()
{
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_posts_menu');

function remove_comments_menu()
{
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_comments_menu');

// end remove excess from the admin panel
