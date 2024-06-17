<?php
/**
 * Template for the static pages
 */

get_header();

if(have_posts()) :
    the_post();
  
?>

<div class="content">
            <h2 class="segment__title"><?php the_title(); ?></h2>

            <p> <?php the_content(); ?></p>
    
        </div>
        
        <a class="btn" href="<?= home_url(); ?>">Back Home</a>


        <?php
endif;
get_footer();        