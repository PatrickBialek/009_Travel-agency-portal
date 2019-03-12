<?php

    while( $postPopup->have_posts() ) {
        $postPopup->the_post(); ?>

        <script>
            const popupTime = 1000 * <?php the_field( 'popup_time_to_show' ); ?>;
            const popupRepeatNumber = <?php the_field( 'popup_number_of_repetitions' ); ?>;
            const popupDaysOfLife = <?php the_field( 'popup_days_of_life' ); ?>; 
        </script>
            
        <div class="popup" id="popup-container">
            <div class="popup__content">
                <h2 class="heading-secondary margin-bottom--medium"><?php the_title(); ?></h2>
                <div class="popup__text">
                    <?php the_content(); ?>
                </div>

                <?php if( get_field( 'popup_link_to_event' )) : ?>
                    <a href='<?php the_field( 'popup_link_to_event' ); ?>' class="popup__button"><?php the_field( 'popup_button_text' )?></a>
                <?php endif; ?>   
                <span id='popup-close'>X</span>
            </div>
        </div>

        <script> popupFunction(); </script>
            
<?php  }  ?>