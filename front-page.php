<?php get_header(); ?>

    <main>

    <?php

        include get_template_directory() . '/template-parts/2-front-page/1-search-area.php';

        include get_template_directory() . '/template-parts/2-front-page/2-promotions.php';

        include get_template_directory() . '/template-parts/2-front-page/3-quotes.php';

        include get_template_directory() . '/template-parts/2-front-page/4-why-us.php';

        include get_template_directory() . '/template-parts/2-front-page/5-blog-news.php';
        
    ?>

    </main>

<?php get_footer(); ?>