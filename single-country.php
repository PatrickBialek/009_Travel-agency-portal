<?php get_header(); ?>

<main>

    <?php 

        include get_template_directory() . '/template-parts/7-global/1-single-post-heading-section.php';

    ?>

    <div class="wrapper wrapper--padding">
        <div class="single-post">

        <?php

            include get_template_directory() . '/template-parts/5-countries/4-single-country-body-section.php';

        ?>

        </div>
    </div>

</main>

<?php get_footer(); ?>