<?php
  // Register Nav Walker class_alias
  require_once('wp_bootstrap_navwalker.php');

  if (function_exists ( 'register_sidebar' ))
  register_sidebar ( array (
      'before_widget' => '<div class=" container-fluid widgets">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>',
      'before_link' => '<a>',
      'after_link' => '</a>' 
  ) );

  // Theme Support
  function wpb_theme_setup(){
    add_theme_support('post-thumbnails');

    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));

    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
  }

  add_action('after_setup_theme','wpb_theme_setup');

// Excerpt Length Control
function set_excerpt_length(){
  return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');



add_action('widgets_init', 'wpb_init_widgets');

// Customizer File
require get_template_directory(). '/inc/customizer.php';

//Disable WordPress filtering of script tags

function add_estilos_e_scripts() {
    wp_enqueue_script( 'script', get_template_directory_uri() . '..//js/jqueryHoverdir.js', array ( 'jquery' ), true);
   }
add_action( 'wp_enqueue_scripts' );