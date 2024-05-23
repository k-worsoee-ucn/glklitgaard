<?php

function theme_enqueue_styles() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/src/output.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/src/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('kalam-font', "https://fonts.googleapis.com/css?family=Kalam", array(), '1.0.0', 'all');
    wp_enqueue_style('opensans-font', "https://fonts.googleapis.com/css?family=Open+Sans", array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');