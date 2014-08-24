<?php
/**
 * The template for displaying the footer.
 *
 * Contains the footer with essential links.
 *
 * @package WordPress Sverige
 */
?>

	<?php if ( !is_front_page() ) { ?>
    <section id="other" class="section">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section>
    <?php } ?>

	<!-- Start Footer Widgets -->
	<section id="footer-widgets" class="section">
		<div class="container">
			<div class="row">
            <?php if ( is_front_page() ) { ?>
				<div class="section-headline nomargin-bottom white-heading">
					<h2>Följ WordPress Sverige</h2>
					<span>Få flöden serverade från WordPress Sverige och den svenska communityn</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="social-container">
                        <ul class="social">
                         <!-- Start FOLLOW WORDPRESS -->
                          <li class="facebook"><a href="#" class="wpsvse-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="WordPress Sveriges Facebooksida"><i class="fa fa-facebook"></i></a></li>
                          <li class="fb-group"><a href="#" class="wpsvse-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="WordPress Sveriges officiella Facebookgrupp"><i class="fa fa-facebook-square"></i></a></li>
                          <li class="twitter"><a href="#" class="wpsvse-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="WordPress Sverige på Twitter"><i class="fa fa-twitter"></i></a></li>
                          <li class="rss"><a href="#" class="wpsvse-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="WordPress Sveriges RSS-flöden"><i class="fa fa-rss"></i></a></li>
                         <!-- End FOLLOW WORDPRESS -->
                        </ul>
					</div>
				</div>
              <?php } ?>
			</div>		
		</div>
	</section>
	<!-- End Footer Widgets -->

	<!-- Start Footer -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<p>Copyright &copy; 2007-<?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				</div>
				<div class="col-md-7">
                  <!-- Start FOOTER MENU -->
                    <?php wp_nav_menu( array( 'theme_location' => 'footer','container' => false,'items_wrap' => '<ul id="menu-footer" class="hidden-xs footer-links pull-right %2$s">%3$s</ul>' ) ); ?>
                  <!-- End FOOTER MENU -->
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<!-- Back to Top -->	
	<a href="#" class="back-to-top" title="Till toppen"><i class="fa fa-arrow-up"></i></a>
	<!-- End Back to Top -->

<?php wp_footer(); ?>

</body>
</html>