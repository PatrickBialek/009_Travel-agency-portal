<section class="posts">
    <div class="wrapper">
        <div class="posts__container">

            <?php while( have_posts() ) { 
                the_post(); ?>
                
                <div class="posts__single-post">

                    <?php if ( has_post_thumbnail() ) {
                        echo get_the_post_thumbnail();
                    } ?>
                
                    <h2 class="margin-bottom-10"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="posts__meta-box">Data dodania: <?php the_time('Y-m-d'); ?>, Autor: <?php the_author_posts_link(); ?>, Kategorie: <?php echo get_the_category_list(', ')?></div>
                    <div><?php the_excerpt(); ?></div>
                    <a class="posts__link" href="<?php the_permalink(); ?>">Zobacz wpis</a>
                </div>

            <?php } ?>

        </div>
    </div>
</section>