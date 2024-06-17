<?php
/**
 * displays the menu nav in the header
 */

//https://developer.wordpress.org/reference/functions/wp_nav_menu/
wp_nav_menu([
    'menu' => 'Footer-Menu', //the name of the menu in the backoffice
    'menu_class' => 'footer__submenu__item', // the ul class 
    'container' => 'div' , //the tag that will contain the ul and li
    'container_class' => 'footer__submenu', //the class of the previous tag 
    'echo' => true //if true, displays the menu

]);
?>