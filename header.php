<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_starter
 */

$nav_args = get_main_nav(); // functions.php;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar fixed-top navbar-expand-md navbar-dark" id="mainNav">
	<div class="container">
		<!-- Logo -->
		<a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
			<img class="logo img-fluid" src="<?php echo get_theme_mod('payfast_logo'); ?>" width="288" height="" alt="">
			<!-- Display after scroll -->
			<img class="logo-scrolled img-fluid" src="<?php echo get_theme_mod('payfast_logo_scroll'); ?>" width="288" height="" alt="">
		</a>
		<!-- Mobile Menu Button -->
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>
		<!-- Navbar -->
	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  		<?php wp_nav_menu($nav_args); ?>
	  	</div>
  	</div>
</nav>

