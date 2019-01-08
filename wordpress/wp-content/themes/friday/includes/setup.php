<?php
/**
 * Setup Theme Elements
**/

/* === Maximum Content Width === */

global $content_width;
if ( ! isset( $content_width ) ){
	$content_width = 915;
}

/* === Register Sidebars === */

$sidebars_args = array(
	"primary" => array( "name" => _x( 'Sidebar', 'sidebar name', 'friday' ), "description" => "" ),
	"footer-1" => array( "name" => _x( 'Footer 1', 'sidebar name', 'friday' ), "description" => "" ),
	"footer-2" => array( "name" => _x( 'Footer 2', 'sidebar name', 'friday' ), "description" => "" ),
	"footer-3" => array( "name" => _x( 'Footer 3', 'sidebar name', 'friday' ), "description" => "" ),
);
add_theme_support( 'tamatebako-sidebars', $sidebars_args );


/* === Register Menus === */

$nav_menus_args = array(
	"primary" => _x( 'Navigation', 'nav menu name', 'friday' ),
	"footer"  => _x( 'Footer Links', 'nav menu name', 'friday' ),
	"social"  => _x( 'Social Links', 'nav menu name', 'friday' ),
);
register_nav_menus( $nav_menus_args );


/* === Thumbnail Size === */

//add_image_size( 'theme-thumbnail', 300, 200, true );
//set_post_thumbnail_size( 200, 200, true );


/* === Body Class === */

/* Body Class */
add_filter( 'body_class', 'friday_body_classes' );

/**
 * Add Body Classes For Styling
 * 
 */
function friday_body_classes( $classes ){
	if( get_the_archive_title() && !is_front_page() && !is_singular() && !is_404() ){
		$classes[] = 'hero-header';
	}
	elseif( is_singular( 'post' ) ){
		$classes[] = 'hero-header';
	}
	return $classes;
}
