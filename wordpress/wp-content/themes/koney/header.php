<?php
/**
 * Koney header 
 *
 * displays the header on the koney pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koney Island</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/icons8-ferris-wheel-48.png" type="image/x-icon">

  <?php 
  // necessary for the wp theme to work properly
  wp_head(); 
  ?>

</head>

<body>
    <header class="header">
        <nav>
          <div class="header__part">
            <div class="container">
              <div class="header__flex">
                <a class="logo" href="">
                  <img class="logo__image" src="images/ferris-wheel_6668036.png" alt="">
                  <span class="logo__title">Koney Island</span>
                </a>
                <div class="menu">
                    <p>Where fun begins</p>
                </div>
              </div>
            </div>
          </div>
          <div class="header__part">
            <div class="container">
              <div class="submenu">
                <a class="submenu__item" href="./header-pages/park.html">Park</a>
                <a class="submenu__item" href="./header-pages/food.html">Food</a>
                <a class="submenu__item" href="./header-pages/beach.html">Beach</a>
                <a class="submenu__item" href="./header-pages/aquarium.html">Aquarium</a>
                <a class="submenu__item" href="./header-pages/parade.html">Parade</a>
              </div>
            </div>
          </div>
        </nav>
    </header>

    <main class="container">