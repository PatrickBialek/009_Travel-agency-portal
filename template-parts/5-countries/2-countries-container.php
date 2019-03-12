<section class="countires">

<?php

    $countryPostType = new WP_Query(array(
        'posts_per_page' => 5,
        'post_type' => 'country'
    ));

    while( $countryPostType ->have_posts() ) {
        $countryPostType ->the_post(); ?>

        <div class="promotions__single">

            <?php if ( has_post_thumbnail() ) {
                echo get_the_post_thumbnail();
            } ?>

            <h3><?php the_title(); ?></h3>

            <div class="promotions__description"><?php the_excerpt(); ?></div>
            <a class='btn btn__gray' href='<?php the_permalink(); ?>'>Szczegóły</a>
        </div>
            
    <?php } ?>

</section>