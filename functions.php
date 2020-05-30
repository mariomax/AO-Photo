<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'neve_child_load_css' ) ):
	/**
	 * Load CSS file.
	 */
	function neve_child_load_css() {
		wp_enqueue_style( 'neve-child-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'neve-style' ), NEVE_VERSION );
	}
endif;
add_action( 'wp_enqueue_scripts', 'neve_child_load_css', 20 );


/*
 * Function to link to attach Google Fonts

add_action( 'wp_head', function() {
	?>
	<link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,400;0,700;1,400&family=Roboto+Condensed&display=swap" rel="stylesheet">
	<?php
} );

*/