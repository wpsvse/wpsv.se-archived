<?php
//
//  General theme functions
//

//**************************************************
// Remove toolbar
//**************************************************
add_filter('show_admin_bar', '__return_false');

//**************************************************
// Register and enqueue scripts
//**************************************************
function get_the_js_magic() {
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.min.js', '2.6.2' );
	wp_register_script( 'prettyphoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array('jquery'), '3.1.5' );
	wp_register_script( 'sharrre', get_template_directory_uri() . '/js/jquery.sharrre.min.js', array('jquery'), '1.3.4' );
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.0.0' );

	wp_enqueue_script( 'custom-script',get_template_directory_uri() . '/js/wpsv.js', array( 'jquery','modernizr','prettyphoto','sharrre','bootstrap' ));
}

add_action( 'wp_enqueue_scripts', 'get_the_js_magic' );

//**************************************************
// Register main menu
//**************************************************
if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'primary', 'Huvudmeny för header' );
	register_nav_menu( 'footer', 'Meny för sidfot' );
	register_nav_menu( 'sitemap', 'Sidkarta' );
}

//**************************************************
// Get all posts for archive template
//**************************************************
function wpse_category_set_post_types( $query ){
    if( $query->is_tag ):
        $query->set( 'post_type', array( 'post', 'blogg' ) );
    endif;
    return $query;
}

add_action( 'pre_get_posts', 'wpse_category_set_post_types' );

//**************************************************
// Override default post type labels
//**************************************************
function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = Nyheter;
	$submenu['edit.php'][5][0] = 'Nyheter';
	$submenu['edit.php'][10][0] = 'Lägg till';
	echo '';
}
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'Nyheter';
	$labels->singular_name = 'Nyhet';
	$labels->add_new = 'Lägg till nyhet';
	$labels->add_new_item = 'Lägg till nyhet';
	$labels->edit_item = 'Redigera nyhet';
	$labels->new_item = 'Nyhet';
	$labels->view_item = 'Visa nyhet';
	$labels->search_items = 'Sök nyheter';
	$labels->not_found = 'Inga nyheter hittades';
	$labels->not_found_in_trash = 'Inga nyheter hittades i papperskorgen';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

//**************************************************
// Cache for feed phrasing
//**************************************************
function wpsv_hourly_feed() { 
	return 3600; 
}

function wpsv_10_feed() { 
	return 600; 
}

//**************************************************
// Create custom excerpt length
//**************************************************
function new_excerpt_length($length) {
	if (is_front_page() || is_404()) {
		return 35;
	} else {
		return 100;
	}
}
add_filter('excerpt_length', 'new_excerpt_length');

//**************************************************
// Create custom excerpt more link
//**************************************************
function new_excerpt_more($more) {
    global $post;
		 return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//**************************************************
// Columns class for the loop,
// Props hakre <http://hakre.wordpress.com/>
//**************************************************
function get_columns_array($totalCount, $columnSize) {
	$columns = array();
	$totalCount = (int) max(0, $totalCount);
if (!$count)
return $columns;
	$columnSize = (int) max(0, $columnSize);
if (!$columnSize)
return $columns;
	($floor = (int) ($totalCount / $columnSize))
                && $columns = array_fill(0, $floor, $columnSize)
                ;
	($remainder = $totalCount % $columnSize)
	&& $columns[] = $remainder;
return $columns;
}

class WP_Query_Columns implements Countable, IteratorAggregate {
/**
* column size
* @var int
*/
private $size;
private $index = 0;
private $query;
public function __construct(WP_Query $query, $size = 10) {
	$this->query = $query;
	$this->size = (int) max(0, $size);
}
/**
* @return WP_Query
*/
public function query() {
return $this->query;
}
private function fragmentCount($fragmentSize, $totalSize) {
	$total = (int) $totalSize;
	$size = (int) max(0, $fragmentSize);
if (!$total || !$size)
return 0;
	$count = (int) ($total / $size);
	$count * $size != $total && $count++;
return $count;
}
private function fragmentSize($index, $fragmentSize, $totalSize) {
	$index = (int) max(0, $index);
if (!$index)
return 0;
	$count = $this->fragmentCount($fragmentSize, $totalSize);
if ($index > $count)
return 0;
return $index === $count ? ($totalSize - ($count-1) * $fragmentSize) : $fragmentSize;
}
public function columnSize($index) {
return $this->fragmentSize($index, $this->size, $this->query->post_count);
}
/**
* @see Countable::count()
* @return int number of columns
*/
public function count() {
return $this->fragmentCount($this->size, $this->query->post_count);
}
/**
* @return array
*/
public function columns() {
	$count = $this->count();
	$array = $count ? range(1, $count) : array();
return array_map(array($this, 'columnSize'), $array);
}
/**
* @see IteratorAggregate::getIterator()
* @return traversable columns
*/
public function getIterator() {
return new ArrayIterator($this->columns());
}
}

//**************************************************
// Customize the login screen
//**************************************************

function custom_login_logo() {
	$style = '<style type="text/css"> h1 a { background: transparent url(' . get_bloginfo('template_directory') . '/images/logo_login.png) no-repeat center top !important; padding-bottom: 60px;} </style>';
	echo $style;
}
add_action( 'login_head', 'custom_login_logo' );

?>