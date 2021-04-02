<?php
/**
 * The sidebar containing the main widget area
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'school-sidebar' ) ) {
	return;
}
?>

<div class="post-sidebar" id="school-sidebar" role="complementary">

	<?php dynamic_sidebar( 'school-sidebar' ); ?>

</div><!-- #secondary -->