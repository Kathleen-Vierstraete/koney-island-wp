<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://adambrown.info/p/wp_hooks/hook
 */

function charging_styles() {
  // https://developer.wordpress.org/reference/functions/wp_enqueue_style/

    //charging the css sheet named koney-style, it takes the style.css in the current css template
    //the third parameter allows to wait for the reset to be loaded before going to the style.css sheet

    wp_enqueue_style('koney-style', get_template_directory_uri() . '/css/style.css', ['koney-reset-style']);
    wp_enqueue_style('koney-reset-style', get_template_directory_uri() . '/css/reset.css');

}
// https://developer.wordpress.org/reference/functions/add_action/
 add_action( 'wp_enqueue_scripts', 'charging_styles' );

// adding this line to make sure the option add a post thumbnail appears in the backoffice and being able to add the_post_thumbnail in the loop
add_theme_support( 'post-thumbnails' );

//adding a dynamic title on the pages, so that it shows on the tab
add_theme_support('title-tag');

//activating the menus in the wp backoffice
add_theme_support('menus');

// Saving the menus to use them
// https://developer.wordpress.org/themes/functionality/navigation-menus/
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => ( 'Header-Menu' ), //menu's name
      'footer-menu' => ('Footer-Menu')
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

//adding a js slider for the header images
//https://www.easywp.com/blog/adding-javascript-to-wordpress/#:~:text=You%20can%20access%20it%20through,using%20the%20wp_enqueue_script()%20function.
 function slider_script() {
  wp_enqueue_script( 'slider_script(', get_template_directory_uri() . '/javascript/slider.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'slider_script' );







