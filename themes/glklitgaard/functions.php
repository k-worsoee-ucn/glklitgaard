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
    wp_enqueue_script('weatherapp', get_template_directory_uri() . '/src/js/weatherapp.js', array(), '1.0.0', 'all');
}
// Disse "Add_action" siger bare hvilken funktion der skal køres og hvornår
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


// Laver menuer muligt i WP-admin siden, bruger til navigationsbaren
function register_menu(){
    register_nav_menus( array(
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu',
    ) );
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

//tilføjer fields til generalt settingen på wp-admin
function add_fields(){
    add_settings_field(
        "lokation", // id til fielden
        "Adresse", // Titel
        "adress_output", //callback (se lægnere nede)
        "general", //hvilken indstillings side den fremvises på
    );
    register_setting( // registrere informationen :)
        "general",
        "lokation"
    );

    //^ indsæt det overnover til callback
    function adress_output($args){
        // vil bare fremvise hvordan det ser ud i instillings siden
        echo "<input type='text' id='lokation' name='lokation' value=". get_option("lokation") .">";
    }; // alt neden under er det samme men for forskellige fields

    add_settings_field(
        "by", // id til fielden
        "By", // Titel
        "town_output", //callback (se lægnere nede)
        "general", //hvilken indstillings side den fremvises på
    );
    register_setting(
        "general",
        "by"
    );
    function town_output($args){
        echo "<input type='text' id='by' name='by' value=". get_option("by") .">";
    };

    add_settings_field(
        "kontakt-email", // id til fielden
        "Kontakt Email", // Titel
        "email_output", //callback (se lægnere nede)
        "general", //hvilken indstillings side den fremvises på
    );
    register_setting(
        "general",
        "kontakt-email"
    );
    function email_output($args){
        echo "<input type='text' id='kontakt-email' name='kontakt-email' value=". get_option("kontakt-email") .">";
    };

    add_settings_field(
        "mobil-nummer", // id til fielden
        "Mobil Nummer", // Titel
        "phone_output", //callback (se lægnere nede)
        "general", //hvilken indstillings side den fremvises på
    );
    register_setting(
        "general",
        "mobil-nummer"
    );
    function phone_output($args){
        echo "<input type='text' id='mobil-nummer' name='mobil-nummer' value=". get_option("mobil-nummer") .">";
    };
};
add_action('admin_init', 'add_fields');




// Giv slut, nogle gange kan functions fucke up hvis den ikke har et slut punkt
?>