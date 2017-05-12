<?php
function register_bm_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_bm_menus' );