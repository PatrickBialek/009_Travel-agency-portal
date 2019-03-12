<nav class='top-bar'>
    <div class='wrapper wrapper--padding'>
        <div class='top-bar__container'>
            <div class='top-bar__logo-box'>
                <a href='<?php echo get_home_url(); ?>'>
                    <img src='<?php echo get_theme_file_uri( '/images/svg/travel-agency-logo.svg' ); ?>' alt='This is logo of our website' class='top-bar__agency-logo'>
                </a>
            </div>
            <div class='top-bar__navigation-box'>
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'main_menu'
                    ))
                ?>
            </div>
        </div>
    </div>
</nav>