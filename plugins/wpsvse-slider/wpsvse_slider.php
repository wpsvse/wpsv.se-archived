<?php
/*
Plugin Name: WPSV Slider (CPT)
Description: Anpassad posttyp för WordPress Sveriges slider.
Version: 0.1
License: GPL
Author: WordPress Sverige
Author URI: http://wpsv.se
*/


/**
 * Register custom post type for slides.
 */

add_action( 'init', 'wpsvse_cpt_slider' );

function wpsvse_cpt_slider() {

	$labels = array( 
		'name' => _x( 'Slides', 'wpsvse' ),
		'singular_name' => _x( 'Slide', 'wpsvse' ),
		'add_new' => _x( 'Skapa ny', 'wpsvse' ),
		'add_new_item' => _x( 'Skapa ny slide', 'wpsvse' ),
		'edit_item' => _x( 'Redigera slide', 'wpsvse' ),
		'new_item' => _x( 'Ny slide', 'wpsvse' ),
		'view_item' => _x( 'Visa slide', 'wpsvse' ),
		'search_items' => _x( 'Sök slide', 'wpsvse' ),
		'not_found' => _x( 'Inga slides funna', 'wpsvse' ),
		'not_found_in_trash' => _x( 'Inga slides funna i papperskorgen', 'wpsvse' ),
		'menu_name' => _x( 'Slider', 'wpsvse' ),
	);

	$args = array( 
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'menu_icon' => 'dashicons-slides',
		'show_in_nav_menus' => false,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => false,
		'capability_type' => 'post'
	);

	register_post_type( 'wpsvse_slider', $args );
}

?>