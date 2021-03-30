<?php
/**
 * The sidebar containing the main widget area
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'classes-sidebar' ) ) {
	return;
}
?>

<div class="post-sidebar" id="classes" role="complementary">

	<?php dynamic_sidebar( 'classes-sidebar' ); ?>

</div><!-- #secondary -->
