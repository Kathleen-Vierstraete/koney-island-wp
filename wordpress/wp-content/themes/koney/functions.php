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