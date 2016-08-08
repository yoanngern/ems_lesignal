<?php

function themeslug_enqueue_style() {
	wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css', false );
}

function themeslug_enqueue_script() {
	wp_enqueue_script( 'my-js', get_template_directory_uri() . '/js/main.min.js', false );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );



function register_my_menu() {
	register_nav_menu('header-menu',__( 'Menu principal' ));
	register_nav_menu('footer-menu',__( 'Menu footer' ));
}

add_action( 'init', 'register_my_menu' );

function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyB-KefdnvHYruJR7sGAOolnbNMMdA2z_uA');
}

add_action('acf/init', 'my_acf_init');