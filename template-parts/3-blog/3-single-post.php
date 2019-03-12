<section class="single-post__post">

    <?php 

        while( have_posts() ) {
            the_post(); ?>

            <h2 class="heading-secondary"><?php the_title(); ?></h2>
            <div class="posts__meta-box">Data dodania: <?php the_time('Y-m-d'); ?>, Autor: <?php the_author_posts_link(); ?>, Kategorie: <?php echo get_the_category_list(', ')?></div>
            <div class="single-post__excerpt"><?php the_excerpt(); ?></div>
            <div class="single-post__content"><?php the_content(); ?></div>
            <a href="<?php echo site_url('/blog/'); ?>" class="btn btn__red">Wróć do bloga</a>

    <?php } ?>

</section>