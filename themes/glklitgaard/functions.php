<?php

function theme_enqueue_styles() {
    // Tilføjer CSS filer til siden
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/src/output.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/src/custom.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


// Laver menuer muligt i WP-admin siden, bruger til navigationsbaren
function register_menu() {
    register_nav_menu('new-menu',( 'Main-Menu' ));
};
add_action( 'init', 'register_menu' );

// Giv slut, nogle gange kan functions fucke up hvis den ikke har et slut punkt
?>