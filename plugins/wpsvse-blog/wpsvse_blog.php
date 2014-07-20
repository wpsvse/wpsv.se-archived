<?php
/*
Plugin Name: WPSV Blogg (CPT+CT)
Description: Anpassad posttyp och tillhörande taxonomi för WordPress Sveriges blogg.
Version: 0.1
License: GPL
Author: WordPress Sverige
Author URI: http://wpsv.se
*/


/**
 * Register custom post type for blog posts
 * separated from WPs regular posts.
 */

add_action( 'init', 'wpsvse_cpt_blog' );

function wpsvse_cpt_blog() {

	$labels = array( 
		'name' => _x( 'Inlägg', 'wpsvse' ),
		'singular_name' => _x( 'Inlägg', 'wpsvse' ),
		'add_new' => _x( 'Skapa nytt', 'wpsvse' ),
		'add_new_item' => _x( 'Skapa nytt inlägg', 'wpsvse' ),
		'edit_item' => _x( 'Redigera inlägg', 'wpsvse' ),
		'new_item' => _x( 'Nytt inlägg', 'wpsvse' ),
		'view_item' => _x( 'Visa inlägg', 'wpsvse' ),
		'search_items' => _x( 'Sök inlägg', 'wpsvse' ),
		'not_found' => _x( 'Inga inlägg funna', 'wpsvse' ),
		'not_found_in_trash' => _x( 'Inga inlägg funna i papperskorgen', 'wpsvse' ),
		'menu_name' => _x( 'Blogg', 'wpsvse' ),
	);

	$args = array( 
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments' ),
		'taxonomies' => array( 'blog_category' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-nametag',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => array( 
			'slug' => 'blogg', 
			'with_front' => true,
			'feeds' => true,
			'pages' => true
		),
		'capability_type' => 'post'
	);

	register_post_type( 'wpsvse_blog', $args );
}


/**
 * Register custom taxonomy for blog categories.
 */

add_action( 'init', 'wpsvse_taxonomy_categories' );

function wpsvse_taxonomy_categories() {

    $labels = array( 
        'name' => _x( 'Kategorier', 'wpsvse' ),
        'singular_name' => _x( 'Kategori', 'wpsvse' ),
        'search_items' => _x( 'Sök kategori', 'wpsvse' ),
        'popular_items' => _x( 'Populära kategorier', 'wpsvse' ),
        'all_items' => _x( 'Alla kategorier', 'wpsvse' ),
        'parent_item' => _x( 'Huvudkategori', 'wpsvse' ),
        'parent_item_colon' => _x( 'Kategori', 'wpsvse' ),
        'edit_item' => _x( 'Redigera kategori', 'wpsvse' ),
        'update_item' => _x( 'Uppdatera kategori', 'wpsvse' ),
        'add_new_item' => _x( 'Lägg till ny kategori', 'wpsvse' ),
        'new_item_name' => _x( 'Ny kategori', 'wpsvse' ),
        'add_or_remove_items' => _x( 'Lägg till eller ta bort kategorier', 'wpsvse' ),
        'choose_from_most_used' => _x( 'Välj bland mest använda kategorier', 'wpsvse' ),
        'menu_name' => _x( 'Kategorier', 'wpsvse' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => true,
        'hierarchical' => true,
        'rewrite' => array( 
            'slug' => 'blogg-kategori', 
            'with_front' => true,
            'hierarchical' => true
        ),
        'query_var' => true
    );

    register_taxonomy( 'blog_category', array('wpsvse_blog'), $args );
}
?>