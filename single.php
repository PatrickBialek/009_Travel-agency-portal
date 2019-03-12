<?php get_header(); ?>

<main>

    <?php 

        include get_template_directory() . '/template-parts/7-global/1-single-post-heading-section.php';

    ?>

    <div class="wrapper wrapper--padding">
        <div class="single-post">

        <?php 

            include get_template_directory() . '/template-parts/3-blog/3-single-post.php';    

            include get_template_directory() . '/template-parts/3-blog/4-sidebar.php';

            include get_template_directory() . '/template-parts/3-blog/5-comments.php';

        ?>

        </div>
    </div>

</main>


<?php get_footer(); ?>