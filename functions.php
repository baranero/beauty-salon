<?php

    function web_files() {
        wp_enqueue_style('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
        wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
        wp_enqueue_style('custom-google-fonts-roboto', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('custom-google-font-playfair-display', '//fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');
        wp_enqueue_style('custom-google-font-playfair-opensans', '//fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap"');
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('web_main_styles', get_theme_file_uri('/build/style-index.css'));
        wp_enqueue_style('web_extra_styles', get_theme_file_uri('/build/index.css'));
        wp_enqueue_script('hide-header-js', get_theme_file_uri('./src/hide-header.js'), NULL, '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'web_files'); ?>
