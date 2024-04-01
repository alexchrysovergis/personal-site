<?php
function mavericks_styles() {
  wp_enqueue_style( 'default-css', get_stylesheet_uri() );
  wp_enqueue_style('minified-sass', get_theme_file_uri('/dist/css/styles.min.css') );
  wp_enqueue_style('minified-swiper-css', ('../../src/node_modules/swiper/swiper-bundle.min.css') );
}

function mavericks_scripts() {
  wp_enqueue_script( 'my-script', get_template_directory_uri() . '/dist/js/scripts.min.js', array('jquery'), '1.0', true );
  wp_enqueue_script( 'minified-bootstrap-js', '../../src/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '1.0', true );
  wp_enqueue_script( 'minified-popper-js', '../../src/node_modules/@popperjs/core/dist/umd/popper.min.js', array('jquery'), '1.0', true );
  wp_enqueue_script( 'minified-swiper-js', '../../src/node_modules/swiper/swiper-bundle.min.js', array('jquery'), '1.0', true );
}

function mavericks_features() {
  add_theme_support( 'post-thumbnails' );
}

function add_type_attribute($tag, $handle, $src) {
  // If the handle matches your script handle, add the attribute
  if ( 'my-script' === $handle ) {
      $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
  }
  return $tag;
}
add_filter('script_loader_tag', 'add_type_attribute', 10, 3);

add_action( 'wp_enqueue_scripts', 'mavericks_scripts' );
add_action( 'wp_enqueue_scripts', 'mavericks_styles' );
add_action('after_setup_theme', 'mavericks_features');