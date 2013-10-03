<?php
//
//  Shortcodes
//

//**************************************************
// Shortcode för warning boxes
//**************************************************

// Yellow box (warning)
function warningboxes($atts, $content = null) {
	return '<div class="box-warning"><div class="box-content">'.$content.'</div></div>';
}
add_shortcode('ybox', 'warningboxes');

// Red box (error)
function errorboxes($atts, $content = null) {
	return '<div class="box-error"><div class="box-content">'.$content.'</div></div>';
}
add_shortcode('rbox', 'errorboxes');

// Blue box (information)
function infoboxes($atts, $content = null) {
	return '<div class="box-info"><div class="box-content">'.$content.'</div></div>';
}
add_shortcode('bbox', 'infoboxes');

// Green box (success)
function successboxes($atts, $content = null) {
	return '<div class="box-success"><div class="box-content">'.$content.'</div></div>';
}
add_shortcode('gbox', 'successboxes');

// Wiki Needs Updating
function wikibox() {
	return '<div class="box-warning wiki-needs-update"><div class="box-content">Detta dokument är markerat som "i behov av uppdatering". Detta kan innebära att viss information är bristfällig, saknas eller är föråldrad. Du kan själv som medlem redigera eller rätta felaktigheter. <a title="Hjälp för dokumentation" href="http://wpsv.se/dokumentation/hjalp-for-dokumentation/">Mer information om hur man redigerar ett dokument </a>.</div></div>';
}
add_shortcode('uppdatera', 'wikibox');

?>