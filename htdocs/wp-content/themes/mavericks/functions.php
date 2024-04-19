<?php

function mavericks_styles() {
  wp_enqueue_style( 'default-css', get_stylesheet_uri() );
  wp_enqueue_style('minified-sass', get_theme_file_uri('/dist/css/styles.min.css') );
}

function mavericks_scripts() {
  wp_enqueue_script( 'my-script', get_template_directory_uri() . '/dist/js/scripts.min.js', array('jquery'), '1.0', true );
}

function mavericks_features() {
  add_theme_support( 'post-thumbnails' );
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'mavericks' ),
) );

function add_type_attribute($tag, $handle, $src) {
  // If the handle matches your script handle, add the attribute
  if ( 'my-script' === $handle ) {
      $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
  }
  return $tag;
}

//excerpt

function new_excerpt_more($more) {
  global $post;
  return '... <a href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_filter('script_loader_tag', 'add_type_attribute', 10, 3);

add_action( 'wp_enqueue_scripts', 'mavericks_scripts' );
add_action( 'wp_enqueue_scripts', 'mavericks_styles' );
add_action( 'after_setup_theme', 'mavericks_features' );
add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );