<?php
/**
 * Template Name: everett shows page
 *
 * 
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); 
?>
<div id="shows-wrapper">

    <section id="eishows">
        <div class="row">
         <div class="show-row">
                <div class="show">
                    <div class="show-img"></div>
                    <div class="show-title">Everett Improv</div>
                    <div class="show-text">The best Improv ever, man. Performed at our theater on Grand Ave (Mature Audiences only.)</div>
                </div>
            </div>
            <div class="show-row">
                <div class="show">
                    <div class="show-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/exit192.png")></div>
                    <div class="show-title">Exit 192 Improv</div>
                    <div class="show-text">A wild and raucous combo of open scenes and novel game concepts, complete with improvised lights and sound at the Historic Everett Theater! Debauchery guaranteed. (Mature Audiences only.)</div>
                    
                </div>
            </div>
            <div class="show-row">
                <div class="show">
                    <div class="show-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/retroredub.jpg")></div>
                    <div class="show-title">Retro Movie Redub</div>
                    <div class="show-text">Old Movies re-dubbed with new improvised dialogue inspired by you!</div>

                </div>
            </div>
            <div class="show-row">
                <div class="show">
                    <div class="show-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/cafezippy.jpg")></div>
                    <div class="show-title">Improv Night at Cafe Zippy</div>
                    <div class="show-text">A FREE all-ages improv show at Cafe Zippy (1502 Rucker Ave). 3rd Saturday of every month at 7pm. </div>
                </div>
            </div>
            <div class="show-row">
                <div class="show">
                    <div class="show-img"></div>
                    <div class="show-title">Spalsh Zone</div>
                    <div class="show-text">An experimental improv show. Completely different every time. 3rd Saturday of every month at 9:30pm.  Adult Content.</div>
                </div>
            </div>
            <div class="show-row">
                <div class="show">
                    <div class="show-img" ></div>
                    <div class="show-title">Art Walk at Everett Improv</div>
                    <div class="show-text">3rd Thursday of every month / 4pm – 9pm.  Local art for sale.  Pop-up artist tables.  Mini improv shows all night long. Beer and wine for sale.</div>
                </div>
            </div>
        </div>

</section>

    <section class="show-container">
    <div id="show-post">	
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
    </div>
            </section>
</div>  <!--END Home Wrapper-->


<?php get_footer();