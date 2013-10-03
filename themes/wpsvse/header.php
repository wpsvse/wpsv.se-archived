<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <!--[if IE ]> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> <![endif]-->
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta property="og:image" content="http://wpsv.se/global/images/wpsv.png" />
  <!-- Page title -->
	<title><?php wp_title(''); ?></title>
  <!-- Page icon -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon" />
  <!-- Stylesheets -->
  <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" />
  <link type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" />
  <!--<link href="<?php echo get_template_directory_uri(); ?>/css/print.css" media="print" rel="stylesheet" />-->

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_head();
?>
</head>
<body <?php body_class(); ?>>

  <div class="top-header">
  	<div class="container">
    	<div class="row">
        	<div class="col-lg-6">
                <ul class="social-topnav">
                    <li><a class="socialtop-fb" href="http://www.facebook.com/group.php?gid=23102164698" original-title="WordPress Sverige på Facebook"></a></li>
                    <li><a class="socialtop-twitter" href="https://twitter.com/WPSverige" original-title="WordPress Sverige på Twitter"></a></li>
                    <li><a class="socialtop-wp" href="http://sv.wordpress.org" original-title="WordPress Sverige på WP.org"></a></li>
                    <!--<li><a class="socialtop-flickr" href="http://www.flickr.com/photos/wpsv/" original-title="WordPress Sveriges galleri på Flickr"></a></li>-->
                    <li><a class="socialtop-rss" href="<?php echo esc_url( home_url( '/prenumerera/' ) ); ?>" original-title="WordPress Sveriges RSS-flöden"></a></li>
                    <li><a class="socialtop-mail" href="http://wpsv.se/kontakt/" original-title="WordPress Sveriges kontaktadress"></a></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <form action="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-search" method="get">
                  <label for="site-search-submit">Sök</label>
                  <input class="topbar-search" name="s" placeholder="Sök..." type="text">
                  <input id="site-search-submit" type="submit" value="Sök">
                </form>
            </div>
        </div>
    </div>
  </div>

  <header class="main-header">

    <div class="container">

      <!-- Front page head section -->
      <div class="row">
      	<div class="col-lg-6 wpsv-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Till startsidan"><img src="<?php echo get_template_directory_uri(); ?>/img/assets/wpsv-logo.png" alt="WordPress Sverige" ></a>
        </div>
        <div class="col-lg-6 main-menu">
            <div class="navbar navbar-inverse">
              <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="nav-collapse collapse">
	                <?php wp_nav_menu( array( 'theme_location' => 'primary','container_id' => 'menu','items_wrap' => '<ul id="header-navigation" class="nav navbar-nav %2$s">%3$s</ul>' ) ); ?>
                </div><!--/.nav-collapse -->
              </div>
            </div>
        </div>
      </div>
      
      <?php if (is_front_page()) { ?>
      <div class="row start-header">
      	<div class="col-lg-6 wpsv-slider">
            <section class="slider-content" id="page-slider">
            <ul>
                <?php $wpsv_slider_query = new WP_Query('showposts=3&post_type=slider'); ?>
                <?php while ($wpsv_slider_query->have_posts()) : $wpsv_slider_query->the_post(); ?>
                <!-- Slide item -->
                <li class="slider-item">
                    <?php the_content('Läs mer'); ?>
                </li>
                <!-- End - Slide item -->
                <?php endwhile; ?>
            </ul>    
            </section>
        </div>
        <div class="col-lg-6 wpsv-welcome">
			<?php if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content('Läs mer');
                endwhile; 
            endif; ?>
        <hr />
      	<h2>Ladda ner senaste WordPress <a href="<?php echo esc_url( home_url( '/vilket-paket-ska-jag-valja/' ) ); ?>" class="dl-help" data-toggle="tooltip" data-placement="right" title="Vilket paket ska man välja?"></a></h2>
        <section class="dl-buttons">
       	  <div id="dl-wp-sv">
          	<?php $dlsv_query = new WP_Query(array('showposts' => 1, 'post_type' => 'filer', 'filkategori' => 'svenska-wordpress'));
			  while ($dlsv_query->have_posts()) : $dlsv_query->the_post(); ?>
                    <a href="<?php echo get_post_meta($post->ID, 'file_dl', true); ?>" class="dl-btn"><h3>Svenska <?php the_title(); ?></h3><span>Det officiella svenska paketet</span></a>
              <?php endwhile; ?>
          </div>
          <div id="dl-wp-en">
	      	<?php $dlen_query = new WP_Query(array('showposts' => 1, 'post_type' => 'filer', 'filkategori' => 'officiella-wordpress'));
			  while ($dlen_query->have_posts()) : $dlen_query->the_post(); ?>
                      <a href="<?php echo get_post_meta($post->ID, 'file_dl', true); ?>" class="dl-btn"><h3>Officiella <?php the_title(); ?></h3><span>Originalet från wordpress.org</span></a>
              <?php endwhile; ?>
		  </div>          
          <div id="dl-other"><a href="<?php echo esc_url( home_url( '/filer/' ) ); ?>" title="Filarkivet för WordPress-versioner">Behöver du paket i annat format eller version? Besök arkivet.</a></div>
        </section>
		</div>
      </div>
      <?php } ?>
      
    </div><!--/ .container -->
    
    </header>
