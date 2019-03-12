<section class="single-country">

    <?php 

        while( have_posts() ) {
            the_post(); ?>

            <div class="single-country__excerpt"><?php the_excerpt(); ?></div>
            <div class="single-contry__content"><?php the_content(); ?></div>
            

            <?php $tripsToCountry = get_field( 'related_trips' ); 

            if( $tripsToCountry ) { ?>

                <span><strong>Obecne wycieczki do kraju:</strong></span>

                <ul>

                <?php foreach( $tripsToCountry as $trip ) { ?>

                    <li><a href="<?php echo get_the_permalink( $trip ); ?>"><?php echo get_the_title( $trip ); ?></a></li>
                        
                <?php } ?>

                </ul>

            <?php } ?>

            <a href="<?php echo site_url( '/kraje/' ); ?>" class="btn btn__red">Inne kraje</a>

    <?php } ?>

</section>