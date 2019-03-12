<section class="promotion">

<?php

    while( have_posts() ) {
        the_post(); 

        $tripStartingDate = new DateTime( get_field( 'starting_date' ) ); ?>

        <div class="promotion__meta-box margin-bottom-16">
            <div>
                <img src="<?php echo get_theme_file_uri( '/images/svg/placeholder.svg' ); ?>" alt="">
                <span><?php the_field( 'trip_place' ); ?></span>
            </div>
            <div>
                <img src="<?php echo get_theme_file_uri( '/images/svg/calendar.svg' ); ?>" alt="">
                <span><?php echo $tripStartingDate->format('d') ?>/<?php echo $tripStartingDate->format('m')?>/<?php echo $tripStartingDate->format('Y') ?></span>
            </div>
            <div>
                <?php if( get_field('old_price') ): ?>
                    <span class="promotion__old-price"><?php the_field('old_price'); ?> zł</span>
                <?php endif; ?>
                <span class="promotion__new-price"><?php the_field( 'price' ); ?> zł</span>
            </div>
        </div>

        <div class="promotion__content"><?php the_content(); ?></div>



    <?php } ?>

</section>