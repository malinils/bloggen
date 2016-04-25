<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}

function queu_bootstrap()
{
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.min.js', array('jquery'), NULL, true);
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri().'/bootstrap/css/bootstrap.min.css', false, NULL, 'all');
}

function register_top_menu() {
  register_nav_menu('bakblogg-top-menu',__( 'Bakblogg Top Menu' ));
}

add_action( 'init', 'register_top_menu' );
add_action('wp_enqueue_scripts', 'queu_bootstrap', PHP_INT_MAX);
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

?>