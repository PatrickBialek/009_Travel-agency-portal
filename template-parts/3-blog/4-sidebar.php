<aside class="sidebar">
    
    <div class="sidebar__single-box">
        <h3 class="heading-third">Najnowsze wpisy:</h3>
        <ul>

            <?php 
            
            $postQuery = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 5
            ));

            while( $postQuery->have_posts() ) {
                $postQuery->the_post(); ?>

                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

            <?php } ?>

        </ul>
    </div>

    <div class="sidebar__single-box">
        <h3 class="heading-third">Kategorie postu:</h3>
        <?php echo get_the_category_list(); ?>
    </div>

</aside>