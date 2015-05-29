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

<nav id="site-navigation-off-canvas" class="main-navigation-off-canvas" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'h-clean-list', 'container'=> '') ); ?>
</nav><!-- #site-navigation -->

<div id="page" class="hfeed site">

	<div class="test-5">hallo</div>
	<div class="test-5">hallo</div>
	<div class="test-5">hallo</div>
	<div class="test-5">hallo</div>
	<div class="test-5">hallo</div>
	<div class="test-5">hallo</div>
	<div class="test-5">hallo</div>
	<div class="test-5">hallo</div>
	<div class="test-5">hallo</div>
	<div class="test-5">hallo</div>
	<div class="test-5">hallo</div>
	<div class="test-5">hallo</div>

	<div class="test">hallo</div>
	<div class="test">hallo</div>
	<div class="test">hallo</div>
	<div class="test">hallo</div>
	<div class="test">hallo</div>
	<div class="test">hallo</div>

	<div class="test-2">hallo</div>
	<div class="test-2">hallo</div>
	<div class="test-2">hallo</div>

	<div class="test-3">hallo</div>
	<div class="test-3">hallo</div>

	<div class="test-4">hallo</div>


	<header id="masthead" class="site-header clearfix" role="banner">
		<div class="container">
			<div id="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div><!-- .site-branding -->
			
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'h-clean-list h-hor-list-dropdown', 'container'=> '') ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">