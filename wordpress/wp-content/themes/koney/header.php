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
                <a class="logo" href="<?= home_url();  ?>">
                  <img class="logo__image" src="images/ferris-wheel_6668036.png" alt="">
                  <span class="logo__title">Koney Island</span>
                </a>
                <div class="menu">
                    <p>Where fun begins</p>
                </div>
              </div>
            </div>
          </div>
          <?php get_template_part( 'template-parts/header-nav' ); ?> 
        </nav>
    </header>

    
<!--adding this section only on home page -->
    <?php if(is_home()): ?> 
    <main class="container">
        <div class="content">
          <h1 class="content__title">Enjoy a fun and relaxing moment with us !!</h1>
    
          <section class="slider">
            <img class="slider__img" src="<?= home_url();  ?>/wp-content/themes/koney/images/devil-wheel-attraction-port.jpg" alt="ferris wheel and beach illustration">
          </section>

    <?php endif; 
                        
                    