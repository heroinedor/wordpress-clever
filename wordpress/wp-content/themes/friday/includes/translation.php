<?php
/**
 * Make Framework Translatable
**/

/* Load Text Domain */
load_theme_textdomain( 'friday', get_template_directory() . '/assets/languages' );

/* Make all string in the framework translatable. */
$texts = array(

	/* functions/template/accessibility.php */
	'skip_to_content'             => _x( 'Skip to content', 'accessibility', 'friday' ),

	/* functions/template/general.php */
	'next_posts'                  => _x( 'Next', 'pagination', 'friday' ),
	'previous_posts'              => _x( 'Previous', 'pagination', 'friday' ),

	/* functions/template/menu.php */
	'menu_search_placeholder'     => _x( 'Search&hellip;', 'nav menu', 'friday' ),
	'menu_search_button'          => _x( 'Search', 'nav menu', 'friday' ),
	'menu_search_form_toggle'     => _x( 'Expand Search Form', 'nav menu', 'friday' ),
	'menu_default_home'           => _x( 'Home', 'nav menu', 'friday' ),

	/* functions/template/entry.php */
	'error_title'                 => _x( '404 Not Found', 'entry', 'friday' ),
	'error_message'               => _x( 'Apologies, but no entries were found.', 'entry', 'friday' ),
	'next_post'                   => _x( 'Next', 'entry', 'friday' ),
	'previous_post'               => _x( 'Previous', 'entry', 'friday' ),

	/* functions/template/comment.php */
	'next_comment'                => _x( 'Next', 'comment', 'friday' ),
	'previous_comment'            => _x( 'Previous', 'comment', 'friday' ),
	'comments_closed_pings_open'  => _x( 'Comments are closed, but trackbacks and pingbacks are open.', 'comment', 'friday' ),
	'comments_closed'             => _x( 'Comments are closed.', 'comment', 'friday' ),

	/* functions/setup.php */
	'untitled'                    => _x( '(Untitled)', 'entry', 'friday' ),
	'read_more'                   => _x( 'Read More', 'entry', 'friday' ),
	'search_title_prefix'         => _x( 'Search:', 'archive title', 'friday' ),
	'comment_moderation_message'  => _x( 'Your comment is awaiting moderation.', 'comment', 'friday' ),

);

/* Add text to tamatebako */
tamatebako_load_strings( $texts );