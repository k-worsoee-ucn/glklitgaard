<?php //functions.php er vores mellemman til at lade stlyes, scripts og mere forekomme.

function theme_enqueue_styles() {  
    //tilføjer google fonts til siden
    wp_enqueue_style("Kalam", "https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap");
    wp_enqueue_style("open-sans", "https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap");

    // Tilføjer CSS filer til siden
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/src/output.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/src/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom-archive-single', get_template_directory_uri() . '/src/custom-archive-single.css', array(), '1.0.0', 'all');

    // Tilføjer JavaScript Filer til siden
    wp_enqueue_script("HeadernAdminBar", get_theme_file_uri("/src/js/move-header.js"), array(),'1.0', array('strategy'  => 'defer',));
    wp_enqueue_script("MovingWaves", get_theme_file_uri("/src/js/move-wave.js"), array(),'1.0', array('strategy'  => 'defer',));
}
// Disse "Add_action" siger bare hvilken funktion der skal køres og hvornår
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


// Laver menuer muligt i WP-admin siden, bruger til navigationsbaren
function register_menu() {
    register_nav_menu('new-menu',( 'Main-Menu' ));
};
add_action( 'init', 'register_menu' );

// Gør at wp_admin bar kun er der når en admin er på
function remove_admin_login_header(){
    if (!current_user_can('administrator') && !is_admin()) {
        remove_action('wp_head', '_admin_bar_bump_cb');
        add_filter( 'show_admin_bar', '__return_false' );
    } else{
        add_filter( 'show_admin_bar', '__return_true');
    }
};
add_action('get_header', 'remove_admin_login_header');

// Tilføjer thumbnails som en mulighed
function features() {
    add_theme_support('post-thumbnails');
    add_image_size("big-thumb", 500, 1000, true);
    add_image_size("small-thumb", 250, 250, true);
};

add_action('after_setup_theme', 'features');


// Giv slut, nogle gange kan functions fucke up hvis den ikke har et slut punkt
?>