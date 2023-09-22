<?php
function load_styles()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/plugins/css/bootstrap.min.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/plugins/css/owl.carousel.min.css');
    wp_enqueue_style('owl-default', get_template_directory_uri() . '/plugins/css/owl.theme.default.min.css');
}
add_action('wp_enqueue_scripts', 'load_styles');


function load_scripts()
{
    wp_enqueue_script('jquery', '/plugins/js/jquery-3.7.1.min.js', array(), null, true);

    wp_enqueue_script(
        'bootstrap',
        '/plugins/js/bootstrap.bundle.min.js',
    );

    wp_enqueue_script(
        'owl-carousel',
        get_template_directory_uri() . '/plugins/js/owl.carousel.min.js',
    );

    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'load_scripts');


add_theme_support('post-thumbnails');

// Enable SVG Support in WordPress
function allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');
