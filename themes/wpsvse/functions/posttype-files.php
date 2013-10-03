<?php
//
//  Custom posttype and taxonomies for "filer"
//

//**************************************************
// Register custom post type for filearchive
//**************************************************
add_action( 'init', 'register_cpt_filer' );
function register_cpt_filer() {

$labels = array( 
	'name' => 'Filer',
	'singular_name' => 'Fil',
	'add_new' => 'Lägg till',
	'add_new_item' => 'Lägg till ny fil',
	'edit_item' => 'Redigera fil',
	'new_item' => 'Ny fil',
	'view_item' => 'Visa fil',
	'search_items' => 'Sök fil',
	'not_found' => 'Inga filer funna',
	'not_found_in_trash' => 'Inga filer funna i papperskorgen',
	'menu_name' => 'Filer'
);

$args = array( 
	'labels' => $labels,
	'hierarchical' => false,
	'description' => 'Filarkiv',
	'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments' ),
	'taxonomies' => array( 'filkategori', 'filtagg' ),
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'menu_position' => 20,
	'menu_icon' => get_template_directory_uri().'/images/icons/fileicon.png',
	'show_in_nav_menus' => true,
	'publicly_queryable' => true,
	'exclude_from_search' => false,
	'has_archive' => true,
	'query_var' => true,
	'can_export' => true,
	'rewrite' => true,
	'capability_type' => 'post'
);

register_post_type( 'filer', $args );
}

//**************************************************
// Register custom taxonomy for file category
//**************************************************
add_action( 'init', 'register_taxonomy_filkategori' );
function register_taxonomy_filkategori() {

$labels = array( 
	'name' => 'Filkategorier',
	'singular_name' => 'Filkategori',
	'search_items' => 'Sök filkategori',
	'popular_items' => 'Populära filkategorier',
	'all_items' => 'Alla filkategorier',
	'parent_item' => 'Förälder för filkategori',
	'parent_item_colon' => 'Förälder för filkategori:',
	'edit_item' => 'Redigera filkategori',
	'update_item' => 'Uppdatera filkategori',
	'add_new_item' => 'Lägg till ny filkategori',
	'new_item_name' => 'Namn för filkategori',
	'add_or_remove_items' => 'Lägg till/ta bort kategorier',
	'choose_from_most_used' => 'Välj bland mest använda kategorier',
	'menu_name' => 'Filkategorier'
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

register_taxonomy( 'filkategori', array('filer'), $args );
}

//**************************************************
// Register custom taxonomy for file tags
//**************************************************
add_action( 'init', 'register_taxonomy_filtagg' );
function register_taxonomy_filtagg() {

$labels = array( 
	'name' => 'Filtaggar',
	'singular_name' => 'Filtagg',
	'search_items' => 'Sök filtaggar',
	'popular_items' => 'Populära filtaggar',
	'all_items' => 'Alla filtaggar',
	'edit_item' => 'Redigera filtagg',
	'update_item' => 'Uppdatera filtagg',
	'add_new_item' => 'Lägg till ny filtagg',
	'new_item_name' => 'Namn för filtagg',
	'separate_items_with_commas' => 'Separera flera taggar med kommatecken',
	'choose_from_most_used' => 'Välj bland mest använda taggar',
	'menu_name' => 'Filtaggar',
);

$args = array( 
	'labels' => $labels,
	'public' => true,
	'show_in_nav_menus' => true,
	'show_ui' => true,
	'show_tagcloud' => true,
	'hierarchical' => false,

	'rewrite' => true,
	'query_var' => true
);

register_taxonomy( 'filtagg', array('filer'), $args );
}

//**************************************************
// Register custom taxonomy for file version
//**************************************************
add_action( 'init', 'register_taxonomy_filversion' );
function register_taxonomy_filversion() {

$labels = array( 
	'name' => 'Filversion',
	'singular_name' => 'Filversion',
	'search_items' => 'Sök filversion',
	'popular_items' => 'Populära filversioner',
	'all_items' => 'Alla filversioner',
	'edit_item' => 'Redigera filversion',
	'update_item' => 'Uppdatera filversion',
	'add_new_item' => 'Lägg till ny filversion',
	'new_item_name' => 'Namn för filversion',
	'separate_items_with_commas' => 'Separera flera versionsnummer med kommatecken',
	'choose_from_most_used' => 'Välj bland mest använda versionsnummer',
	'menu_name' => 'Filversioner',
);

$args = array( 
	'labels' => $labels,
	'public' => true,
	'show_in_nav_menus' => true,
	'show_ui' => true,
	'show_tagcloud' => true,
	'hierarchical' => false,

	'rewrite' => true,
	'query_var' => true
);

register_taxonomy( 'filversion', array('filer'), $args );
}

//**************************************************
// Download counter
//**************************************************
function get_hits(){
    global $post;
    $hits = get_post_meta($post->ID, 'dl_hit-counter', true);
    return $hits;
}

function update_hits($count){
    global $post;
    $count = $count ? $count : 0;
    $hits = update_post_meta($post->ID, 'dl_hit-counter', $count++);
    return $hits;
}

?>