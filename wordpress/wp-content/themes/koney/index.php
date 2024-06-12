<?php 

get_header(); 

?>

<section class="segment">
            <h2 class="segment__title">Latest Articles</h2>

            <div class="cards">
            <?php

//si j'ai récupéré la liste d'articles dans mon BO
//imaginons qu'on récupère un genre de tableau et que ce tableau contient nos articles
if(have_posts()) : 


    // tant que j'ai des articles à afficher
    //donc si on pense tableau, si j'ai des articles à afficher dans mon tableau
    while(have_posts()) :

        // pour récupérer l'élement en cours de lecture on utilise 
        //INDISPENSABLE DANS LA BOUCLE WP
        the_post();


  
    ?>

              <article class="card">
                <div class="card__content">
                  <!--<img class="card__image" src="<?php the_post_thumbnail() ?>" alt="whale picture"> #}-->
                  <p><?php the_post_thumbnail()  ?></p>
                  <h3 class="card__title"><?php the_title(); ?></h3>
                  <p class="card__desc"><?php the_excerpt(); ?></p>
                </div>
                <div class="card__action">
                    <a class="btn" href="./articles-pages/whale-article.html">Dive Deeper</a>
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