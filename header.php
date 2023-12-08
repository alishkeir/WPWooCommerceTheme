<?php
/**
 * The header for our theme
 *
 * This is a template file that displays all of the <head> section 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fancy Lab
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php wp_head(); ?>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header>
			<section class="search">Search</section>
			<section class="top-bar">
				<div class="brand">Logo</div>
				<div class="second-column">
					<div class="account">Account</div>
					<nav class="main-menu">Menu</nav>
				</div>
			</section>
		</header>