<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package toastframe
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

		<div class="container">
			<div id="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
			
			<nav id="site-navigation" class="main-menu" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'navbar static-navbar', 'container'=> '') ); ?>
			</nav>

			<button id="toggle-mobile-nav" class="hamburger">Menu</button>

		</div>

	</header><!-- #masthead -->

	<nav id="mobile-site-navigation" class="mobile-main-menu" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'navbar static-navbar', 'container'=> '') ); ?>
	</nav>

	<img src="http://lorempixel.com/1440/400" alt="Alt Title">

	<div id="content" class="site-content">
