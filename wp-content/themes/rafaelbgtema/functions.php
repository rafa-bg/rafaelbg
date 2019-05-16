<?php
// THEME SETUP
function rafaelBGSetup() {
	//title
	add_theme_support( 'title-tag' );
  add_theme_support('post-thumbnails');
  //tamaños de imagen
  add_image_size('portafolio-horizontal', 1240, 465, true); 
  add_image_size('portafolio-horizontal-hdpi', 2480, 930, true); 
  add_image_size('portafolio-cuadrado', 465, 465, true); 
  add_image_size('portafolio-cuadrado-hdpi', 930, 930, true); 
}

add_action('after_setup_theme', 'rafaelBGSetup');

function theme_styles() {
  //main css
  wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() . '/style.css' );
  //font-awesome
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');  
}
add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {
  global $wp_scripts;
  //jquery
  wp_deregister_script('jquery');
  //mainjs
  wp_enqueue_script('main_js', get_template_directory_uri() . '/scripts.js', NULL, 1.0, true);
  //vendor
  wp_enqueue_script('vendor_js', get_template_directory_uri() . '/vendor.js', NULL, 1.0, false);
  //recaptcha
  wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js', NULL, 1.0, true);
}
 
add_action( 'wp_enqueue_scripts', 'theme_js');

?>