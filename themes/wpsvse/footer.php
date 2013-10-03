    <div class="footer-widgets">
    	<div class="container">
        	<div class="row">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidfot') ) : endif; ?></div>
            </div>
        </div>
    </div>

  <footer class="bottom-footer">
  	<div class="container">
    	<div class="row">
        	<div class="col-lg-4">
   			&copy; 2007-<?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); echo ' &mdash; '; bloginfo( 'description' ); ?>"><?php bloginfo( 'name' ); ?></a>.
            <div class="col-lg-8">
            	<?php wp_nav_menu( array( 'theme_location' => 'footer','container_id' => 'footer-menu','items_wrap' => '<ul id="%1$s" class="footer-navigation %2$s">%3$s</ul>' ) ); ?>
            </div>
        </div>
  </footer>
  <?php wp_footer(); ?>
  <script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-32122622-1']);
	_gaq.push(['_trackPageview']);
  
	(function() {
	  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
  
  </script>
</body>
</html>