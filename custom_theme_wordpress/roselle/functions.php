<?php
	
function roselle_script_enqueue() {
	
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/roselle.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/roselle.js', array(), '1.0.0', true);
	
}

add_action( 'wp_enqueue_scripts', 'roselle_script_enqueue');

function roselle_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'roselle_theme_setup');
