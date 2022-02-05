<?php

    function theme_files(){
        wp_enqueue_script('main-theme-js', get_theme_file_uri('/assets/dist/main.bundle.js'));
    }

    add_action( 'wp_enqueue_scripts', 'theme_files');

?>