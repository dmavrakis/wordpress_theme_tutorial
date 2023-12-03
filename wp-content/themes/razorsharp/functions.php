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
//register sidebars
add_action('widgets_init', function () {
    register_sidebar(array(
        'name'          => 'Primary Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => 'Footer Sidebar1',
        'id'            => 'footer-sidebar-1',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ));

    register_sidebar(array(
        'name'          => 'Footer Sidebar2',
        'id'            => 'footer-sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
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
require get_template_directory() . '/template-parts/widgets.php';
