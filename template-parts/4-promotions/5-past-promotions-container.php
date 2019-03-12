<section class="past-promotion-container">

<?php

    date_default_timezone_set('Europe/Warsaw');
        $today = date('Y-m-d');
        $oldPromotions = new WP_Query(array(
            'posts_per_page' => 5,
            'post_type' => 'promotion',
            'meta_key' => 'starting_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'starting_date',
                    'compare' => '<=',
                    'value' => $today,
                    'type' => 'DATETIME'
                )
            )
        ));

        while( $oldPromotions->have_posts() ) {
            $oldPromotions->the_post(); ?>
    
            <div class="promotions__single">
    
                <?php if ( has_post_thumbnail() ) {
                    echo get_the_post_thumbnail();
                } ?>
    
                <h3><?php the_title(); ?></h3>
                <div class="promotions__starting-date">
                    <span>Zaczęła się w dniu:</span>
    
                    <?php
                        $tripStartingDate = new DateTime( get_field( 'starting_date' ) );
                    ?>
    
                    <span><?php echo $tripStartingDate->format('d') ?>/<?php echo $tripStartingDate->format('m')?>/<?php echo $tripStartingDate->format('Y') ?></span>
    
                </div>
                <span class="promotions__trip-place"><?php the_field( 'trip_place' ); ?>, </span>
                <span class="promotions__price"><?php the_field( 'price' ); ?> zł</span>
    
                <?php if( get_field('old_price') ): ?>
                    <span class='promotions__old-price'><?php the_field('old_price'); ?> zł</span>
                <?php endif; ?>
    
                <div class="promotions__description"><?php the_excerpt(); ?></div>
                <a class='btn btn__gray' href='<?php the_permalink(); ?>'>Szczegóły</a>
            </div>
                
        <?php } ?>

</section>