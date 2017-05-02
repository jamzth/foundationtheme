<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationTheme
 * @since FoundationTheme 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'foundationtheme_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'foundationtheme_after_sidebar' ); ?>
</aside>
