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

function register_my_menus() {
	register_nav_menus(
	  array(
		'header' => __( 'Header Menu' ),
		'other' => __( 'Autre menu' )
	   )
	 ) ;
}
   add_action( 'init', 'register_my_menus' );


function my_wp_nav_menu_args( $args = '' ) {
	if ($args ['theme_location'] == 'header') {  //si je suis dans header alors affichage
	if( is_user_logged_in() ) {
	$args['menu'] = 4;
	 
	} else {
	$args['menu'] = 2;
	}
	}
	return $args;
	}
	add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

function nd_dosth_theme_setup() {

		// Add <title> tag support
		add_theme_support( 'title-tag' );  
	
		// Add custom-logo support
		add_theme_support( 'custom-logo' );
	
	}
	add_action( 'after_setup_theme', 'nd_dosth_theme_setup');