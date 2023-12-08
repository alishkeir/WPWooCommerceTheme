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
	wp_enqueue_style(
		'fancy-lab-style',
		get_stylesheet_uri(), // since it's style.css. we use this function, instead, use get_template_directory_uri() to get the folder directory path
		[],
		filemtime(get_template_directory() . '/style.css') // better to use it only when developing, not in production
	);
}

add_action('wp_enqueue_scripts', 'fancy_lab_scripts');
