<?php 
define('WPSV_FUNCTIONS', TEMPLATEPATH . '/functions');


//**************************************************
// General functions
//**************************************************
require_once(WPSV_FUNCTIONS . '/general.php');

//**************************************************
// Widgets
//**************************************************
require_once(WPSV_FUNCTIONS . '/widgets.php');

//**************************************************
// Media handling
//**************************************************
require_once(WPSV_FUNCTIONS . '/media.php');

//**************************************************
// Shortcodes
//**************************************************
require_once(WPSV_FUNCTIONS . '/shortcodes.php');

//**************************************************
// Custom posttype and taxonomies for "blogg"
//**************************************************
require_once(WPSV_FUNCTIONS . '/posttype-blog.php');

//**************************************************
// Custom posttype and taxonomies for "files"
//**************************************************
require_once(WPSV_FUNCTIONS . '/posttype-files.php');

//**************************************************
// Custom posttype "slider"
//**************************************************
require_once(WPSV_FUNCTIONS . '/posttype-slides.php');

//**************************************************
// Custom posttype "tracker"
//**************************************************
require_once(WPSV_FUNCTIONS . '/posttype-tracker.php');

//**************************************************
// Custom comments callback
//**************************************************
require_once(WPSV_FUNCTIONS . '/comments.php');

//**************************************************
// Gravity forms functions
//**************************************************
require_once(WPSV_FUNCTIONS . '/forms.php');

?>