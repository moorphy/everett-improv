<?php
/**
 * Template Name: everett school page
 *
 * 
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); 
?>
<div id="home-wrapper">
    <section class="home-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ei2.jpg" alt="Everett Improv Logo"/>
    </section>
    <section class="home-post">
		
	<br>
    <?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>
    </section>
    <section class="corp-sidebar">
    <?php get_template_part( 'sidebar-templates/sidebar', 'school' ); ?>
</section>
</div>  <!--END Home Wrapper-->
<?php get_footer();
