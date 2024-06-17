<?php 

get_header(); 

?>

<section class="segment">
            <h2 class="segment__title">Latest Articles</h2>

            <div class="cards">
            <?php

//if i have the list of post in the backoffice

if(have_posts()) : 



    //as long as i have posts to display
    while(have_posts()) :

        // to catch the current element
        //necessary for the wordpress loop
        the_post();
    ?>

              <article class="card">
                <div class="card__content">
                  <!--<img class="card__image" src="<?php the_post_thumbnail() ?>" alt="whale picture"> #}-->
                  <!-- completed with the  add_theme_support( 'post-thumbnails' ); in functions.php -->
                  <p><?php the_post_thumbnail()  ?></p> 
                  <h3 class="card__title"><?php the_title(); ?></h3>
                  <p class="card__desc"><?php the_excerpt(); ?></p>
                </div>
                <div class="card__action">
                    <a class="btn" href="<?php the_permalink()?>">Dive Deeper</a>
                </div>
              </article>

              <?php
        
        endwhile ;
    endif ;
?>
            </div>
          </section>
<?php

get_footer(); 