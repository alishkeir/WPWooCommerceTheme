<?php

/**
 * Fancy Lab functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package Fancy Lab
 */

function fancy_lab_scripts()
{
	// since it's style.css. we use this function, instead, use get_template_directory_uri() to get the folder directory path
	// better to use random versioning only when developing, not in production
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', ['jquery'], '5.3.2', true);
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', [], '5.3.2');
	wp_enqueue_style('fancy-lab-style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));
}

add_action('wp_enqueue_scripts', 'fancy_lab_scripts');
