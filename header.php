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


<div class="oc-navigation">
	<h1>Brand logo</h1>
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'oc-', 'container'=> '') ); ?>
	<div class="contact">
		Tel: 010-1234567
	</div>
</div>

<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>

<div id="page" class="hfeed site site-wrap">

	<header id="masthead" class="site-header" role="banner">

		<div class="container">
			<div id="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div><!-- .site-branding -->
			
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'navbar static-navbar', 'container'=> '') ); ?>
			</nav><!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
