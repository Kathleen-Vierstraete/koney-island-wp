<?php
/**
 * displays the menu nav in the header
 */


wp_nav_menu([
    'menu' => 'Header-Menu', //the name of the menu in the backoffice
    'menu_class' => 'submenu__item', // the ul class in the menu
    'container' => 'div' , //tag that will contain the ul and li
    'container_class' => 'submenu',// the previous tag class
    'echo' => true //displays the menu

]);
?>


