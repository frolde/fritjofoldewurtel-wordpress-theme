<?php

/*
 *
 * Registering Custom Post Types
 *
 */

function register_custom_post_type() {

    $labels = array(
        'name'                => _x( 'Partner', 'Post Type General Name', 'fritjofoldewurtel' ),
        'singular_name'       => _x( 'Partner', 'Post Type Singular Name', 'fritjofoldewurtel' ),
        'menu_name'           => __( 'Partner', 'fritjofoldewurtel' ),
        'all_items'           => __( 'Alle Partner', 'fritjofoldewurtel' ),
        'add_new_item'        => __( 'Neuer Partner', 'fritjofoldewurtel' ),
        'add_new'             => __( 'Neuer Partner', 'fritjofoldewurtel' ),
        'edit_item'           => __( 'Partner bearbeiten', 'fritjofoldewurtel' ),
        'update_item'         => __( 'Partner aktualisieren', 'fritjofoldewurtel' ),
        'search_items'        => __( 'Partner suchen', 'fritjofoldewurtel' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'Partner', 'fritjofoldewurtel' ),
        'description'         => __( 'Partner und Kunden', 'fritjofoldewurtel' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail' ),
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => false,
        'menu_icon'           => 'dashicons-businessperson',

    );

    register_post_type( 'partners', $args );
}

add_action( 'init', 'register_custom_post_type', 0 );
