<?php
// THEME SETUP
function rafaelBGSetup() {
	//title
	add_theme_support( 'title-tag' );
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'rafaelBGSetup');

function theme_styles() {  
  //main css
  wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() . '/style.css' );
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
}
 
add_action( 'wp_enqueue_scripts', 'theme_js');

?>