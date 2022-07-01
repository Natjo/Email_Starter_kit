<?php
function create_cpt()
{
    // Campagnes - campagnes
    $labelsCampagnes = array(
        'name' => 'Campagnes',
        'singular_name' => 'Campagnes',
        'menu_name' => 'Campagnes',
        'name_admin_bar' => 'Campagnes',
        'all_items' => 'Toutes les Campagnes',
        'add_new_item' => 'Ajouter une nouvelle Campagnes',
        'add_new' => 'Ajouter',
        'new_item' => 'Nouvelle Campagnes',
        'edit_item' => 'Editer la Campagnes',
        'update_item' => 'Mettre à jour la Campagnes',
        'view_item' => 'Voir la Campagnes',
        'view_items' => 'Voir les Campagnes',
        'search_items' => 'Rechercher une Campagnes',
        'not_found' => 'Non trouvé',
        'not_found_in_trash' => 'Non trouvé dans la corbeille',
        'featured_image' => 'Image',
        'set_featured_image' => 'Mettre une image',
        'remove_featured_image' => 'Retirer l\'image',
        'use_featured_image' => 'Utiliser cette image',
    );

    $argsCampagnes = array(
        'labels' => $labelsCampagnes,
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array('title', 'thumbnail'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 2,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'hierarchical' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'taxonomies' => array(''),
        'rewrite' => array(
            'slug' => 'campagnes',
            'with_front' => true,
        ),
    );
    register_post_type('campagnes', $argsCampagnes);

}
add_action( 'init', 'create_cpt', 0 );

