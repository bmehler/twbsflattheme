<?php
require_once('helper/wp-bootstrap-navwalker.php');
function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Extra Menu' )
    )
  );
}

add_action( 'init', 'register_menus' );

function wps_scripts() { 

    wp_enqueue_script(
        'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', 
        array('jquery'),
            '3.3.7',
            null
        );
}

add_action( 'wp_enqueue_scripts', 'wps_scripts' );

if (function_exists('register_sidebar')) {
    register_sidebar( array(
        'name' => __( 'Sidebar News Widget', 'news' ),
        'id' => 'sidebar-news-widget-area',
        'description' => __( 'Sidebar news widget area', 'news' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
) );
}
