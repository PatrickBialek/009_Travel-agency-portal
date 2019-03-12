<section class="blog-news">
    <div class="wrapper">
        <h2 class="heading-secondary">Najnowsze wpisy</h2>
        <span class="heading-secondary__description">Zobacz najnowsze wspomniania naszych klientów</span>
        <div class="row">

            <?php 
                $postQuery = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'post'
                ));

                while($postQuery->have_posts() ) {
                    $postQuery->the_post(); ?>

                    <div class="blog-news__single-post">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div><?php the_excerpt(); ?></div>
                        <a class="btn btn__gray" href="<?php the_permalink(); ?>" >Zobacz wpis</a>
                    </div>

            <?php } ?>
    
        </div>
        <a href="<?php echo site_url( '/blog/' ); ?>" class="btn btn__red">Odwiedź blog</a>
    </div>
</section>