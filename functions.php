<?php 

    function theme_assets() {
        wp_enqueue_style('style', get_stylesheet_uri() );

        wp_deregister_script( 'jquery' );
        wp_enqueue_script('jquery from web', 'https://code.jquery.com/jquery-3.3.1.min.js', NULL, '3.3.1', true );

        wp_enqueue_script('js min', get_theme_file_uri( '/js/App-bundled.min.js'), NULL, 'Javascript files', true);

        wp_enqueue_script( 'app', get_theme_file_uri( 'js/app.js' ), NULL, '1.0', false );

    }

    add_action( 'wp_enqueue_scripts', 'theme_assets' );

    function add_menus_to_website() {
        register_nav_menus(
            array(
                'main_menu' => __('Główne menu strony')
            ));
    }

    add_action( 'init', 'add_menus_to_website' );

    add_theme_support( 'post-thumbnails' );

    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

    add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
    add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

    function my_theme_wrapper_start() {
        echo '<section id="main">';
    }

    function my_theme_wrapper_end() {
        echo '</section>';
    }

    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

?>