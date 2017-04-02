<?php
function fxdchld_setup() {
}
add_action( 'after_setup_theme', 'fxdchld_setup', 20 ); // should execute after parent theme setup; default is 10

function fxdchld_enqueue_styles() {
	// import styles from parent theme
	wp_enqueue_style( 'fixed-style', get_template_directory_uri() . '/style.css' );

	// load styles from child theme
	wp_enqueue_style( 'fixed-child-style', get_stylesheet_uri(), array( 'fixed-style' ) );
}
add_action( 'wp_enqueue_scripts', 'fxdchld_enqueue_styles' );
