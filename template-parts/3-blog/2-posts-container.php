<section class="posts">
    <div class="wrapper">
        <div class="posts__container">
        
        <?php

            $postsQuery = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 10,
            ));

            while( $postsQuery->have_posts() ) {
                $postsQuery->the_post(); ?>

                <div class="posts__single-post">

                    <?php if ( has_post_thumbnail() ) {
                        echo get_the_post_thumbnail();
                    } ?>

                    <h2 class="margin-bottom-10"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="posts__meta-box">Data dodania: <?php the_time('Y-m-d'); ?>, Autor: <?php the_author_posts_link(); ?>, Kategorie: <?php echo get_the_category_list(', ')?></div>
                    <div><?php the_excerpt(); ?></div>
                    <a class="btn btn__gray margin-top-10" href="<?php the_permalink(); ?>">Zobacz wpis</a>
                </div>

        <?php } ?>

        </div>
    </div>
</section>