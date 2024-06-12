<?php

get_header();

if(have_posts()) :
  the_post();
?>

<div class="content">
    <h2 class="segment__title"><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
</div>

<?php
endif;

get_footer();        