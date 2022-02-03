<?php

    function theme_files(){
        wp_enqueue_style( 'main_theme_styles', get_template_directory_uri().'/dist/css/style.css');
        wp_enqueue_style( 'normalize.css_styles', get_template_directory_uri().'/dist/css/index.css');
    }

    add_action( 'wp_enqueue_scripts', 'theme_files');

?>