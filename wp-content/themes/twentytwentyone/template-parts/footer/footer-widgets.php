<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
<div class="fotter-top">
<div class="container">
	<aside class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside><!-- .widget-area -->
		</div>
</div>
<?php endif; ?>

