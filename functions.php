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
    
    wp_enqueue_style(
        'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome/css/font-awesome.min.css'); 
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

if (function_exists('register_sidebar')) {
    register_sidebar( array(
        'name' => __( 'Sidebar Post Widget', 'post' ),
        'id' => 'sidebar-post-widget-area',
        'description' => __( 'Sidebar post widget area', 'post' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
) );
}

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );

add_action('customize_register','mytheme_customizer_options');

function mytheme_customizer_options( $wp_customize ) {
    $wp_customize->add_setting(
        'twbsflattheme_header_background_color', //give it an ID
        array(
        'default' => '#ecf0f1', // Give it a default
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'mytheme_custom_accent_color', //give it an ID
            array(
               'label' => __( 'Header Background Color', 'twbsflattheme' ), //set the label to appear in the Customizer
               'section' => 'colors', //select the section for it to appear under 
               'settings' => 'twbsflattheme_header_background_color' //pick the setting it applies to
           )
        )
    );
}

add_action( 'wp_head', 'mytheme_customize_css' );
/*
 * Output our custom Accent Color setting CSS Style
 *
 */
function mytheme_customize_css() {
 ?>
 <style type="text/css">
 .jumbotron { background-color:<?php echo get_theme_mod( 'twbsflattheme_header_background_color', '#ecf0f1' ); // add in your add_settings ID and default value ?>; }
 </style>
 <?php
}

if ( is_page_template( 'page-templates/full-width.php' ) ) {
    include_once 'page-templates/full-width.php.php';
}

function rrze_search_filter( $query ) {
    if ( $query->is_search ) {
        $query->set( 'post_type', array('post','page') );
    }
    return $query;
}
add_filter('pre_get_posts','rrze_search_filter');