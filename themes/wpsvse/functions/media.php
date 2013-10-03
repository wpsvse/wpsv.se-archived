<?php
//
//  Media handling functions
//

//**************************************************
// Auto add rel="prettyPhoto[Post-ID]" to
// image links inserted
//**************************************************
function insert_img_rel_attrib( $html, $id, $caption, $title, $align, $url  )
{
  $postID = get_post_field( 'post_parent', $id );
  $rel = "<a class='element-holder' rel='prettyPhoto[".$postID."]'";
  if ($url) {$html = str_replace("<a",$rel,$html);}
  return $html;
}
add_filter( 'image_send_to_editor', 'insert_img_rel_attrib', 10, 6 );

//**************************************************
// Add support for multiple post thumbnails
//**************************************************
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'post-thumnails', 150, 150, true ); // Default Post Thumbnail dimensions
	add_image_size( 'post-main-img', 594, 220, true ); // Proper size for post thumbs 
	add_image_size( 'rel-post-img', 125, 80, true ); // Proper size for related post thumbs
	add_image_size( 'post-fp-img', 220, 130, true ); // Proper size for post thumbs on front page
	add_image_size( 'tab-thumb-img', 60, 60, true ); // Proper size for tab thumbs on front page
	add_image_size( 'file-thumb-img', 220, 0 ); // Proper size for file thumbs
}

?>