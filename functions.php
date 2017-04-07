<?php
function fxdchld_setup() {
	// add settings not included in parent theme
	add_theme_support( "title-tag" );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// override parent theme setting for post format support
	// options: aside audio chat gallery image link quote status video
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
}
add_action( 'after_setup_theme', 'fxdchld_setup', 20 ); // should execute after parent theme setup; default is 10

function fxdchld_enqueue_styles() {
	// import styles from parent theme
	wp_enqueue_style( 'fixed-style', get_template_directory_uri() . '/style.css' );

	// load styles from child theme
	wp_enqueue_style( 'fixed-child-style', get_stylesheet_uri(), array( 'fixed-style' ) );
}
add_action( 'wp_enqueue_scripts', 'fxdchld_enqueue_styles' );

function fxdchld_widgets() {
	$args = array(
		'id'            => 'home_widgets',
		'name'          => __( 'Homepage Widgets', 'fxdchld' ),
		'description'   => __( 'A container for widgets to appear on the homepage.', 'fxdchld' ),
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget home-widget %2$s"><div class="home-widget-inner">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'fxdchld_widgets' );
