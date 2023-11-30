<?php

add_action('init', function () {

    //check if admin panel and if not add css and js
    if (!is_admin()) {

        wp_enqueue_style('boot01', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css?dasd');
        wp_enqueue_script('bootjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true);
    }

    //add submenus menus in admin panel and featured images in posts
    add_theme_support('widgets');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    add_image_size('post-preview', 280, 180, true);

    //register menus
    register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
            'sidebar-menu' => 'Sidebar Menu',
        )
    );
});

//display wp logo image
add_action('after_setup_theme', function () {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => false,
    );
    add_theme_support('custom-logo', $defaults);
});

require get_template_directory() . '/template-parts/walker.php';
