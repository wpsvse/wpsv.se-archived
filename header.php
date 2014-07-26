<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WordPress Sverige
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="top-part">
		<!-- Start Header -->
		<header id="header">
			<!-- Start Navigation -->
			<nav class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Start Logo / Text -->
					<a class="navbar-brand text-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-64.png" alt="logo"><span>WordPress</span>Sverige</a>
					<!-- End Logo / Text -->
				</div>
				<div class="navbar-collapse collapse">
					<!-- INSERT WP_NAV_MENU -->
				</div>
			</div>
			</nav>
		<!-- End Navigation -->
		</header>
		<!-- End Header -->
  <?php if ( !is_front_page() ) { ?>
	</div>
	<!-- End Top-part -->
  <?php } ?>
