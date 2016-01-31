<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="bicyclist steve tilford blog. new, racing, results, issues related to bicycling" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			 <a href="http://stevetilford.com/wp-login.php?" style="float:right; font-size:11px">Login or Register </a>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<div class="skip-link assistive-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<!-- <a href="http://crawdadkermesse.blogspot.com/?m=1"><img src="http://stevetilford.com/wp-content/uploads/2013/05/Crawdad-Kermesse.png" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a> -->
			<!-- <a href="http://www.touroflawrence.com"><img src="http://stevetilford.com/wp-content/uploads/2013/06/2013StlBiking800100.jpg" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a> -->

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
			<!-- <a href="http://www.rutsandguts.com/"><img src="http://stevetilford.com/wp-content/uploads/2015/11/TEAMAA-web-banner.jpg" class="header-image" width=600 height=165 alt="" /></a> -->

			<br>

			<center>
			<a href="http://www.tradewindenergy.com/"><img src="http://stevetilford.com/wp-content/uploads/2015/04/Tradewind_CMKYcoated_logo.jpg" class="header-image2" width="<?php echo get_custom_header()->width/6; ?>" height="<?php echo get_custom_header()->height/6; ?>" alt="" /></a>
			<a href="http://kenteriksen.com/"><img src="http://stevetilford.com/wp-content/uploads/2013/01/ERIKSENblk.png" class="header-image2" width="<?php echo get_custom_header()->width/6; ?>" height="<?php echo get_custom_header()->height/6; ?>" alt="" /></a>
			<!-- <a href="http://www.tradewindenergy.com/"><img src="http://www.stevetilford.com/wp-content/uploads/2012/10/tradewind.jpg" class="header-image2" width="<?php echo get_custom_header()->width/6; ?>" height="<?php echo get_custom_header()->height/6; ?>" alt="" /></a> -->
			<a href="http://bike.shimano.com/"><img src="http://www.stevetilford.com/wp-content/uploads/2012/10/shimago.jpg" class="header-image2" width="<?php echo get_custom_header()->width/6; ?>" height="<?php echo get_custom_header()->height/6; ?>" alt="" /></a>
			<a href="http://www.cantitoeroad.com/Bicycle-Saddles_c_8.html"><img src="http://stevetilford.com/wp-content/uploads/2015/02/selle_san_marco_white.jpg" class="header-image2" width="<?php echo get_custom_header()->width/6; ?>" height="<?php echo get_custom_header()->height/6; ?>" alt="" /></a>

			<!--<a href="http://www.fizik.it/"><img src="http://www.stevetilford.com/wp-content/uploads/2012/10/fizik.jpeg" class="header-image2" width="<?php echo get_custom_header()->width/6; ?>" height="<?php echo get_custom_header()->height/6; ?>" alt="" /></a>-->
			</center>
<!--			<br>
			<a href="http://www.rutsandguts.com/"><img src="http://www.stevetilford.com/wp-content/uploads/2012/10/rutsandguts.jpg" class="header-image" width="<?php echo get_custom_header()->width/2; ?>" height="<?php echo get_custom_header()->height/2; ?>" alt="" /></a>
-->
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">
