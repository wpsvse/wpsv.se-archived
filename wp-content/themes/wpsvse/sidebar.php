<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WordPress Sverige
 */
?>
	<div id="sidebar" class="col-md-3 widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="meta" class="widget">
				<h3 class="widget-title"><?php _e( 'Meta', 'wpsvse' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
