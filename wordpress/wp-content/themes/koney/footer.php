<?php
/**
 * Koney footer
 *
 * Displays the footer on our pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>
        </div>
</main>

<footer class="footer">
  <nav>
    <div class="footer__part">
      <div class="container">
        <div class="footer__submenu"> 
          <a class="footer__submenu__item" href=""><img src="<?= home_url();  ?>/wp-content/themes/koney/images/footer-logos/icons8-instagram-48.png" alt="instagram logo"></a>
          <a class="footer__submenu__item" href=""><img src="<?= home_url();  ?>/wp-content/themes/koney/images/footer-logos/icons8-facebook-48.png" alt="facebook logo"></a>
          <a class="footer__submenu__item" href=""><img src="<?= home_url();  ?>/wp-content/themes/koney/images/footer-logos/icons8-twitter-squared-48.png" alt="twitter logo"></a> 
        </div>
      </div>

      <div class="container">
        <div class="footer__submenu">

        <?php get_template_part( 'template-parts/footer-nav' ); ?> 
        
      </div>
    </div>
  </nav>
</footer>
  
<?php 
//necessary for the wp theme to work properly
wp_footer(); ?>

</body>

</html>
