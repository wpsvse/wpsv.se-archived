<?php
//
//  Widgets
//

//**************************************************
// Register widgets
//**************************************************
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidofält - Övre',
		'description' => 'Widgetfält för widgets som ska visas i sidofältetets övre del.',
        'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-heading">',
        'after_title' => '</h2>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidofält - Nedre',
		'description' => 'Widgetfält för widgets som ska visas i sidofältetets nedre del.',
        'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-heading">',
        'after_title' => '</h2>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidfot',
		'description' => 'Widgetfält för widgets som ska visas i sidfoten. Första fältet av tre',
        'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-heading">',
        'after_title' => '</h2>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Länkarkiv 1-1',
		'description' => 'Widgetfält för länkarkiv - rad 1 - kolumn 1 ',
        'before_widget' => '<section id="%1$s" class="widget-container widget-list %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-heading">',
        'after_title' => '</h2>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Länkarkiv 1-2',
		'description' => 'Widgetfält för länkarkiv - rad 1 - kolumn 2 ',
        'before_widget' => '<section id="%1$s" class="widget-container widget-list %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-heading">',
        'after_title' => '</h2>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Länkarkiv 2-1',
		'description' => 'Widgetfält för länkarkiv - rad 2 - kolumn 1 ',
        'before_widget' => '<section id="%1$s" class="widget-container widget-list %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-heading">',
        'after_title' => '</h2>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Länkarkiv 2-2',
		'description' => 'Widgetfält för länkarkiv - rad 2 - kolumn 2 ',
        'before_widget' => '<section id="%1$s" class="widget-container widget-list %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-heading">',
        'after_title' => '</h2>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Länkarkiv 3-1',
		'description' => 'Widgetfält för länkarkiv - rad 3 - kolumn 1 ',
        'before_widget' => '<section id="%1$s" class="widget-container widget-list %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-heading">',
        'after_title' => '</h2>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Länkarkiv 3-2',
		'description' => 'Widgetfält för länkarkiv - rad 3 - kolumn 2 ',
        'before_widget' => '<section id="%1$s" class="widget-container widget-list %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-heading">',
        'after_title' => '</h2>',
));

?>