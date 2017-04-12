<?php
// This theme uses wp_nav_menu().
$args = array(
	'main-menu' => 'Main menu'
	  );
register_nav_menus( $args );

// Enable support for Post Thumbnails, and declare two size.

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50);

set_post_thumbnail( 670, 300, true );
add_image_size( 'work-thumb', 220, 184, true);
add_image_size( 'slide', 940, 400, true);
add_image_size( 'slide-thumb', 140, 120, true);

/*
*Switch default core markup for search form, comment form, and comments
*to output valid HTML5.
*/
add_theme_support('html5', array(
	'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	));

	$args = array(
		'label' => 'Slider',
		'public' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail'),
		'has_archive' => false
	);
register_post_type( 'slide', $args );
	$args = array(
		'label' => 'Portfolio',
		'public' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail'),
		'has_archive' => false
	);
register_post_type('work', $args);