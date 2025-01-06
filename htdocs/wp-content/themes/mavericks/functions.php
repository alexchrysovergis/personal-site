<?php
function mavericks_styles() {
  wp_enqueue_style( 'default-css', get_stylesheet_uri() );
  wp_enqueue_style('minified-sass', get_theme_file_uri('/dist/css/styles.min.css') );
}

function mavericks_scripts() {
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/dist/js/scripts.min.js', array('jquery'), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'mavericks_scripts' );
add_action( 'wp_enqueue_scripts', 'mavericks_styles' );

// disable automatic updates

add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );
