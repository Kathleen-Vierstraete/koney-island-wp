<?php
/**
 * displays the menu nav in the header
 */


wp_nav_menu([
    'menu' => 'Footer-Menu', //le nom du menu définit dans le back office
    'menu_class' => 'footer__submenu__item', // la classe de la balise <ul> du menu
    'container' => 'div' , //balise qui contiendra le <ul> du menu
    'container_class' => 'footer__submenu',
    'echo' => true //Si true (par défaut true): affiche le menu, sinon le return

]);
?>