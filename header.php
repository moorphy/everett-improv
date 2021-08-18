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
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">


<!-- ********TOP BAR************ -->
	<div id="top-bar">
		<div class="contact-info">
			<div class = "contact-item phone"><a href="tel:1-425-259-5912"><i class="fa fa-phone"></i><span> (425) 259-5912</span></a></div>
			<div class = "contact-item address"><a href ="http://maps.google.com/?q=2804 Grand Ave Everett, WA 98201 Suite 105"><i class="fa fa-map-marker"></i><span> 2804 Grand Ave - Everett, WA 98201 - Suite #105</span></a></div>
			<div class= "contact-item email"><a href="mailto:everettimprov@gmail.com"><i class="fa fa-envelope-o"></i><span>everettimprov@gmail.com</span></a></div>		
		</div>
		<!-- ******************* The Navbar Area ******************* -->
		<div class="menu">
			<div class="menu-button">menu
			<a href="javascript:toggleMenu();"><i class="fa fa-bars"></i></a>
		</div>
			<div id="menu-overlay">
				<a href="http://www.everettimprov.com"><h1 class="menu-title">everett improv</h1></a>
				<?php
				wp_nav_menu(
					array(
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			</div>
		</div>
	</div>


	