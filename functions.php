<?php
function fxdchld_setup() {
	// add settings not included in parent theme
	add_theme_support( "title-tag" );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'fxdchld_setup', 20 ); // should execute after parent theme setup; default is 10

function fxdchld_enqueue_styles() {
	// import styles from parent theme
	wp_enqueue_style( 'fixed-style', get_template_directory_uri() . '/style.css' );

	// load styles from child theme
	wp_enqueue_style( 'fixed-child-style', get_stylesheet_uri(), array( 'fixed-style' ) );
}
add_action( 'wp_enqueue_scripts', 'fxdchld_enqueue_styles' );
