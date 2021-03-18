<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
<div class="footer-info">
			<div class = "footer-item">&copy; Copyright, 2019-<?php echo date('Y'); ?></div>
            <div class = "footer-item">All Rights Reserved</div>
            <div class="footer-item"><a href="https://moorphy.com">Design by Mike Murphy</a></div>
		</div>
	
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

