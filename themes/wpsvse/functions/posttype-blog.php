<?php
//
//  Custom posttype and taxonomies for "blogg"
//

//**************************************************
// Register custom post type for blog
//**************************************************
add_action( 'init', 'register_cpt_blogg' );
function register_cpt_blogg() {

$labels = array(
    'name' => 'Blogg',
    'singular_name' => 'Inlägg',
    'add_new' => 'Nytt inlägg',
    'add_new_item' => 'Skapa ett nytt blogginlägg',
    'edit_item' => 'Redigera inlägg',
    'new_item' => 'Nytt inlägg',
    'view_item' => 'Visa inlägg',
    'search_items' => 'Sök blogginlägg',
    'not_found' => 'Inga blogginlägg funna',
    'not_found_in_trash' => 'Inga blogginlägg funna',
    'menu_name' => 'Blogg'
);

$args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'description' => 'Blogginläggstyp',
    'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'comments', 'revisions', 'custom-fields' ),
    'taxonomies' => array( 'post_tag', 'bloggkategori' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => get_template_directory_uri().'/images/icons/blogicon.png',
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
);

register_post_type( 'blogg', $args );
}

//**************************************************
// Register custom taxonomy for blog category
//**************************************************
add_action( 'init', 'register_taxonomy_bloggkategori' );
function register_taxonomy_bloggkategori() {

$labels = array( 
	'name' => 'Bloggkategorier',
	'singular_name' => 'Bloggkategori',
	'search_items' => 'Sök bloggkategorier',
	'popular_items' => 'Populära bloggkategorier',
	'all_items' => 'Alla bloggkategorier',
	'parent_item' => 'Förälder för bloggkategori',
	'parent_item_colon' => 'Förälder för bloggkategori:',
	'edit_item' => 'Redigera bloggkategori',
	'update_item' => 'Uppdatera bloggkategori',
	'add_new_item' => 'Lägg till ny bloggkategori',
	'new_item_name' => 'Namn för bloggkategori',
	'add_or_remove_items' => 'Lägg till/ta bort kategorier',
	'choose_from_most_used' => 'Välj bland mest använda kategorier',
	'menu_name' => 'Bloggkategorier'
);

$args = array( 
	'labels' => $labels,
	'public' => true,
	'show_in_nav_menus' => true,
	'show_ui' => true,
	'show_tagcloud' => false,
	'hierarchical' => true,
	'rewrite' => true,
	'query_var' => true
);

register_taxonomy( 'bloggkategori', array('blogg'), $args );
}

register_taxonomy_for_object_type('post_tag', 'blogg');
?>