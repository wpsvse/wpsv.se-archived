<?php
//
//  Custom posttype and taxonomies for "tracker"
//

//**************************************************
// Register custom post type for tracker
//**************************************************
add_action( 'init', 'register_cpt_tracker' );
function register_cpt_tracker() {

$labels = array( 
	'name' => 'Rapporter',
	'singular_name' => 'Rapport',
	'add_new' => 'Skapa ny',
	'add_new_item' => 'Skapa ny rapport',
	'edit_item' => 'Redigera rapport',
	'new_item' => 'Ny rapport',
	'view_item' => 'Visa rapport',
	'search_items' => 'Sök rapporter',
	'not_found' => 'Inga rapporter funna',
	'not_found_in_trash' => 'Inga rapporter funna i papperskorgen',
	'menu_name' => 'Rapporter'
);

$args = array( 
	'labels' => $labels,
	'hierarchical' => false,
	'description' => 'Tracker',
	'supports' => array( 'title', 'editor', 'author', 'trackbacks', 'custom-fields', 'comments' ),
	'taxonomies' => array( 'component', 'tracker_tags', 'typ', 'prioritet', 'component_version', 'milestone', 'allvarlighetsgrad', 'ticket_status', 'ticket_assign' ),
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'menu_position' => 24,
	'menu_icon' => get_template_directory_uri().'/images/icons/trackericon.png',
	'show_in_nav_menus' => true,
	'publicly_queryable' => true,
	'exclude_from_search' => false,
	'has_archive' => true,
	'query_var' => true,
	'can_export' => true,
	'rewrite' => true,
	'capability_type' => 'post'
);

register_post_type( 'tracker', $args );
}

//**************************************************
// Create trac taxonomies
//**************************************************
add_action( 'init', 'build_trac_taxonomies', 0 );  
   
function build_trac_taxonomies() {  
register_taxonomy(
		'project', 'tracker', array(
		'hierarchical' => true,
		'label' => 'Projekt',
		'query_var' => true,
		'rewrite' => array( 
			'slug' => 'projekt' ) 
));

register_taxonomy(
		'component', 'tracker', array(
		'hierarchical' => true,
		'label' => 'Komponent',
		'query_var' => true,
		'rewrite' => array( 
			'slug' => 'komponent' ) 
));

register_taxonomy( 
		'tracker_tags', 'tracker', array(
		'hierarchical' => false,
		'label' => 'Nyckelord',
		'query_var' => true,
		'rewrite' => array( 
			'slug' => 'nyckelord' ) 
));

register_taxonomy(
		'typ', 'tracker', array(
		'hierarchical' => true,
		'label' => 'Typ',
		'query_var' => true,
		'rewrite' => array( 
			'slug' => 'typ' ) 
));

register_taxonomy(
		'prioritet', 'tracker', array( 
		'hierarchical' => true,
		'label' => 'Prioritet',
		'query_var' => true, 
		'rewrite' => array( 
			'slug' => 'prioritet' ) 
));

register_taxonomy( 
		'component_version', 'tracker', array(
		'hierarchical' => false,
		'label' => 'Version',
		'query_var' => true,
		'rewrite' => array( 
			'slug' => 'version' ) 
));

register_taxonomy( 
		'milestone', 'tracker', array(
		'hierarchical' => false,
		'label' => 'Målversion',
		'query_var' => true,
		'rewrite' => array( 
			'slug' => 'malversion' ) 
));

register_taxonomy( 
		'allvarlighetsgrad', 'tracker', array(
		'hierarchical' => true,
		'label' => 'Allvarlighetsgrad',
		'query_var' => true,
		'rewrite' => array( 
			'slug' => 'allvarlighetsgrad' ) 
));

register_taxonomy( 
		'ticket_status', 'tracker', array(
		'hierarchical' => true,
		'label' => 'Status',
		'query_var' => true,
		'rewrite' => array( 
			'slug' => 'status' ) 
));

register_taxonomy( 
		'ticket_assign', 'tracker', array(
		'hierarchical' => true,
		'label' => 'Tilldelat',
		'query_var' => true,
		'rewrite' => array( 
			'slug' => 'tilldelat' ) 
));

}

?>