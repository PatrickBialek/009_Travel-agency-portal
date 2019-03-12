<?php

    while( have_posts() ) {
        the_post(); ?>

        <section class="global-page"><?php the_content(); ?></section>
        
<?php } ?>
