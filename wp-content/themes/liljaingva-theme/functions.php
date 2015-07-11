<?php
function theme_styles() {
	wp_enqueue_style('googleDroid-Serif','http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic');

	wp_enqueue_style('googleOswald','http://fonts.googleapis.com/css?family=Oswald:400,700');

	wp_enqueue_style('normalize-theme-style', get_template_directory_uri(). '/css/normalize.css');
	wp_enqueue_style('main-theme-style', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );
?>
