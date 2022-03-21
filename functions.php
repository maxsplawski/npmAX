<?php

    function theme_files(){
        wp_enqueue_script('main-theme-js', get_theme_file_uri('/assets/dist/main.bundle.js'));
    }

    add_action( 'wp_enqueue_scripts', 'theme_files');

    function theme_features(){
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'theme_features');

    add_filter( 'show_admin_bar', '__return_false' );

?>