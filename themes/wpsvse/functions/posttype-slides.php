<?php
//
//  Custom posttype for "blogg"
//

//**************************************************
// Register custom post type for slider
//**************************************************
add_action( 'init', 'register_cpt_slider' );
function register_cpt_slider() {

$labels = array( 
	'name' => 'Slides',
	'singular_name' => 'Slider',
	'add_new' => 'Lägg till',
	'add_new_item' => 'Lägg till ny slider',
	'edit_item' => 'Redigera slider',
	'new_item' => 'Ny slider',
	'view_item' => 'Visa slider',
	'search_items' => 'Sök slider',
	'not_found' => 'Inga slides funna',
	'not_found_in_trash' => 'Inga slides funna i papperskorgen',
	'parent_item_colon' => 'Föräldrer till slider:',
	'menu_name' => 'Slides',
);

$args = array( 
	'labels' => $labels,
	'hierarchical' => true,
	'description' => 'Slider för startsidan',
	'supports' => array( 'title', 'editor' ),
	
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'menu_position' => 22,
	'menu_icon' => get_template_directory_uri().'/images/icons/slidesicon.png',
	'show_in_nav_menus' => true,
	'publicly_queryable' => true,
	'exclude_from_search' => true,
	'has_archive' => false,
	'query_var' => true,
	'can_export' => true,
	'rewrite' => true,
	'capability_type' => 'page'
);

register_post_type( 'slider', $args );
}

?>