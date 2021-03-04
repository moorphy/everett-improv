<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/jdz1yrj.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

<!-- ********TOP BAR************ -->
	<div id="top-bar">
		<div class="contact-info">
			<div class = "contact-item phone"><a href="tel:1-425-259-5912"><i class="fa fa-phone"></i> (425) 259-5912</a></div>
			<div class = "contact-item address"><a href ="http://maps.google.com/?q=2804 Grand Ave Everett, WA 98201 Suite 105"><i class="fa fa-map-marker"></i> 2804 Grand Ave - Everett, WA 98201 - Suite #105</a></div>
			<div class= "contact-item email"><a href="mailto:everettimprov@gmail.com"><i class="fa fa-envelope-o"></i>  everettimprov@gmail.com</a></div>		
		</div>
		<div class="mobile-menu"> menu
		<i class="fa fa-bars"></i>
		</div>

	</div>

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>


		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
