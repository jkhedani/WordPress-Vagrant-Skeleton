<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Smart_Yields
 */

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
<div id="page" class="site">

	<!-- Fixed Top Navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-32px.png" /></span><?php bloginfo( 'name' ); ?></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<ul class="nav navbar-nav navbar-right">
				        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
				        <li><a href="#features">Features</a></li>
						<li><a href="#team">Team</a></li>
						<li><a href="#news">News</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
					<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div><!--/.navbar-collapse -->
		</div><!-- .container-fluid -->
	</nav>

	<!-- Content -->
	<div id="content" class="site-content">
