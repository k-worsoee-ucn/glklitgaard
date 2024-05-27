<?php
function PostTypes() {
    register_post_type("Social-Media", array(
        "has_archive" => false,
        "show_in_rest" => false,
        "public" => true,
        "supports" => array(
            "editor",
            "title",
        ),
        "labels" => array(
            "name" => "Social Medias",
            "add_new_item" => "Add Social Media",
            "add_new" => "Add Social Media",
            "edit_item" => "Edit Social Media",
            "all_items" => "All Social Medias",
            "singular_name" => "Social Media",
        ),
        "menu_icon" => "dashicons-share"
    ));
    
    register_post_type("Udlejning", array(
        "has_archive" => true,
        "show_in_rest" => true,
        "public" => true,
        "supports" => array(
            "editor",
            "title",
            "thumbnail",
            "excerpt"
        ),
        "rewrite" => array(
            "slug" => "udlejning"
        ),
        "labels" => array(
            "name" => "Udlejning Muligheder",
            "add_new_item" => "Tilføj Udlejning Mulighed",
            "add_new" => "Tilføj Udlejning Mulighed",
            "edit_item" => "Ænder Udlejning Mulighed",
            "all_items" => "Alle Udlejning Muligheder",
            "singular_name" => "Udlejning Mulighed",
        ),
        "menu_icon" => "dashicons-admin-multisite"
    ));

    register_post_type("Seværdigheder", array(
        "has_archive" => true,
        "show_in_rest" => true,
        "public" => true,
        "supports" => array(
            "editor",
            "title",
            "thumbnail",
            "excerpt"
        ),
        "rewrite" => array(
            "slug" => "sevraerdighed"
        ),
        "labels" => array(
            "name" => "Seværdigheder",
            "add_new_item" => "Tilføj Seværdighed",
            "add_new" => "Tilføj Seværdighed",
            "edit_item" => "Ænder Seværdighed",
            "all_items" => "Alle Seværdigheder",
            "singular_name" => "Seværdighed",
        ),
        "menu_icon" => "dashicons-tickets"
    ));

    register_post_type("Faciliteter", array(
        "has_archive" => true,
        "show_in_rest" => true,
        "public" => true,
        "supports" => array(
            "editor",
            "title",
            "thumbnail",
            "excerpt"
        ),
        "rewrite" => array(
            "slug" => "faciliteter"
        ),
        "labels" => array(
            "name" => "Faciliteter",
            "add_new_item" => "Tilføj Facilitet",
            "add_new" => "Tilføj Facilitet",
            "edit_item" => "Ænder Facilitet",
            "all_items" => "Alle Faciliteter",
            "singular_name" => "Facilitet",
        ),
        "menu_icon" => "dashicons-coffee"
    ));
};
add_action('init', 'PostTypes');
?>