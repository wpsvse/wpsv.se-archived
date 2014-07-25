<?php
/**
 * The template for displaying the footer.
 *
 * Contains the footer with essential links.
 *
 * @package WordPress Sverige
 */
?>

	<!-- Start Footer -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<p>Copyright &copy; 2007-<?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="designer"><?php bloginfo( 'name' ); ?></a>
				</div>
				<div class="col-md-7">
                  <!-- Start INSERT 2ND WP_NAV_MENU -->
					<ul class="hidden-xs footer-links pull-right">
						<li><a href="#">Cookies</a></li>
						<li><a href="#">Användarvillkor/förhållningsregler</a></li>
						<li><a href="#">Kontakt</a></li>
					</ul>
                  <!-- End INSERT 2ND WP_NAV_MENU -->
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