<?php

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {

	// enqueue child styles
	wp_enqueue_style('custom-styles', get_stylesheet_directory_uri() . '/public/css/app.css');
	wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/public/js/app.js', array('jquery'), '', true);
});

/**
 * Implement functions for Editor.
 */
require get_template_directory() . '/inc/theme-editor.php';
