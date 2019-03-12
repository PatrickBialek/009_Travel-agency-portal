<section class="quotes">
    <div class="wrapper">
        <h2 class="heading-secondary">Klienci o nas</h2>
        <div class="quotes__container">

            <?php 
                $opinionQuerry = new WP_Query(array(
                    'posts_per_page' => 1,
                    'post_type' => 'opinion'
                ));

                while($opinionQuerry->have_posts() ) {
                    $opinionQuerry->the_post(); ?>

                    <p class="quotes__content"><?php the_field( 'quote__content' ) ?></p>
                    <span class="quotes__author">- <?php the_field( 'quote__author' ) ?></span>

            <?php } ?>

        </div>
    </div>
</section> 
