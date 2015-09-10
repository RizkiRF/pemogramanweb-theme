<?php 
include("include/post-type.php");
include("include/taxonomy.php");
include("include/user-profile.php");

/**
 * Script Load
 */
function pemograman_web_scripts() {
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/css/animate.css' );

	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' ,'jquery' );
	wp_enqueue_script( 'classie-js', get_template_directory_uri() . '/js/classie.js' );
	wp_enqueue_script( 'selectFx-js', get_template_directory_uri() . '/js/selectFx.js' );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js' ,'jquery' );
}

add_action( 'wp_enqueue_scripts', 'pemograman_web_scripts' );

add_theme_support( 'post-thumbnails' );

add_image_size( 'pw-blog', 300, 200, true );

add_filter( 'ot_theme_mode', '__return_true' );

require( trailingslashit( get_template_directory() ) . 'lib/option-tree/ot-loader.php' );

require( trailingslashit( get_template_directory() ) . 'include/meta-boxes.php' );

require( trailingslashit( get_template_directory() ) . 'include/theme-options.php' );

add_filter( 'ot_show_pages', '__return_false' );

add_filter( 'ot_show_docs', '__return_false' );

add_filter( 'ot_show_options_ui', '__return_false' );

?>