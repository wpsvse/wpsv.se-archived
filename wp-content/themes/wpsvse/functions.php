<?php
/**
 * WordPress Sverige functions and definitions
 *
 * @package WordPress Sverige
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'wpsvse_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function wpsvse_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on WordPress Sverige, use a find and replace
	 * to change 'wpsvse' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wpsvse', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Resizes avatars (buddypress)
	 */
	define ( 'BP_AVATAR_THUMB_WIDTH', 128 );
	define ( 'BP_AVATAR_THUMB_HEIGHT', 128 );
	define ( 'BP_AVATAR_FULL_WIDTH', 512 );
	define ( 'BP_AVATAR_FULL_HEIGHT', 512 );
	define ( 'BP_AVATAR_ORIGINAL_MAX_WIDTH', 512 );
	define ( 'BP_AVATAR_ORIGINAL_MAX_FILESIZE', 819200 );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Huvudmeny', 'wpsvse' ),
		'footer' => __( 'Sidfot', 'wpsvse' ),
	) );
	
	// Register Custom Navigation Walker
	require_once('inc/wp_bootstrap_navwalker.php');

}
endif; // wpsvse_setup
add_action( 'after_setup_theme', 'wpsvse_setup' );

if ( ! function_exists( 'wpsvse_widgets_init' ) ) :
/**
 * Register widgetized area and update sidebar with default widgets
 */
function wpsvse_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidofält', 'wpsvse' ),
		'id'            => 'sidebar-1',
		'description'   => 'Allmänt widgetfält för sidopaneler.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Huvudsponsor', 'wpsvse' ),
		'id'            => 'sponsor-widget',
		'description'   => 'Widgetfält på startsidan för huvudsponsor.',
		'before_widget' => '<div id="%1$s" class="widget sponsor-link %2$s">',
		'after_widget'  => '</div>',
	) );
}
endif;
add_action( 'widgets_init', 'wpsvse_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function wpsvse_scripts() {
	
	// Enqueue Stylesheets
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css' );
	
	// wp_enqueue_style( 'bbpress-style', get_template_directory_uri() . '/css/bbpress.css' );
	
	wp_enqueue_style( 'wpsvse-style', get_stylesheet_uri() );
	
	// Engueue Javascripts
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.2.0', true );
    
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array(), '2.8.3' );
	
	wp_enqueue_script( 'HTML5shiv', get_template_directory_uri() . '/js/html5shiv.js', array('jquery'), '3.7.0' );
	
	wp_enqueue_script( 'respond_js', get_template_directory_uri() . '/js/respond.min.js', array('jquery'), '1.3.0' );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_script( 'wpsvse-scripts', get_template_directory_uri() . '/js/wpsvse.js', array(), '20140719', true );

}
add_action( 'wp_enqueue_scripts', 'wpsvse_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
