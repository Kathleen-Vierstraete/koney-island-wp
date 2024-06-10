<?php
/**
 * Koney footer
 *
 * Displays the footer on our pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

</main>

<footer class="footer">
  <nav>
    <div class="footer__part">
      <div class="container">
        <div class="footer__submenu"> 
          <a class="footer__submenu__item" href=""><img src="<?= home_url();  ?>/wp-content/themes/koney/images/footer-logos/icons8-instagram-48.png" alt=""></a>
          <a class="footer__submenu__item" href=""><img src="<?= home_url();  ?>/wp-content/themes/koney/images/footer-logos/icons8-facebook-48.png" alt=""></a>
          <a class="footer__submenu__item" href=""><img src="<?= home_url();  ?>/wp-content/themes/koney/images/footer-logos/icons8-twitter-squared-48.png" alt=""></a> 
        </div>
      </div>

      <div class="container">
        <div class="footer__submenu">
          <a class="footer__submenu__item" href="./footer-pages/contact.html">Contact us</a>
          <a class="footer__submenu__item" href="./footer-pages/who-we-are.html">Who we are</a>
          <a class="footer__submenu__item" href="./footer-pages/about.html">About</a>
          <a class="footer__submenu__item" href="./index.html">Back Home</a>
        </div>
      </div>
    </div>
  </nav>
</footer>
  
<?php 
//necessary for the wp theme to work properly
wp_footer(); ?>

</body>

</html>
