<?php
/**
 * The sidebar containing the main widget area
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'corp-sidebar' ) ) {
	return;
}
?>

<div class="post-sidebar" id="corpsidebar" role="complementary">

	<?php dynamic_sidebar( 'corp-sidebar' ); ?>

</div><!-- #secondary -->