<?php
/**
 * Template Name: everett classes
 *
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); 
?>
<div id="classes-wrapper">
    <section class="classes-info">
    <?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'loop-templates/content', 'page' );;
	}	?>
    </section>

    <section class="classes-sidebar">
    <?php get_template_part( 'sidebar-templates/sidebar', 'classes' ); ?>
</section>
</div>  <!--END Home Wrapper-->
<?php get_footer();