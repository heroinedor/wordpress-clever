<?php
/**
 * Scripts Setup
**/

/* === EDITOR STYLE === */

$editor_css = array(
	'assets/css/editor.css',
);
add_editor_style( $editor_css );


/* === ENQUEUE SCRIPTS === */

add_action( 'wp_enqueue_scripts', 'friday_enqueue_scripts' );

/**
 * Enqueue Scripts
 */
function friday_enqueue_scripts(){
	global $tamatebako;
	$name = $tamatebako->name;
	$child = $tamatebako->child;

	/* == JS == */
	wp_enqueue_script( "fitvids" );
	wp_enqueue_script( "{$name}-script" );

	/* == CSS == */
	wp_enqueue_style( "esicons" );
	wp_enqueue_style( "{$name}-style" ); /* main css. */

	if( is_child_theme() ) wp_enqueue_style( "{$child}-style" ); /* child theme css. */
}


/* === REGISTER SCRIPTS === */

add_action( 'wp_enqueue_scripts', 'friday_register_scripts', 1 );

/**
 * Register Scripts
 */
function friday_register_scripts(){
	global $tamatebako;
	$name = $tamatebako->name;

	/* FitVids (JS) */
	wp_register_script( "fitvids", tamatebako_theme_file( "assets/js/jquery.fitvids", "js" ) , array( 'jquery' ), '1.1.0', true );

	/* Theme Custom (JS) */
	wp_register_script( "{$name}-script", tamatebako_theme_file( "assets/js/jquery.theme", "js" ), array( 'jquery', 'fitvids' ), tamatebako_theme_version(), true );

	/* === CSS === */

	/* Esicons */
	wp_register_style( "esicons", tamatebako_theme_file( "assets/esicons/style", "css" ), array(), '1.0.0', 'all' );

}
