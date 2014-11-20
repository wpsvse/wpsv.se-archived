<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress Sverige
 */

get_header(); ?>

    <section id="page-header" class="section">
		<div class="container">
			<div class="row">
              <div class="col-md-12">
            	<h1 class="page-title">Nyheter</h1>
              </div>
            </div>
        </div>
    </section>
    <!-- Start Page Header -->

    <!-- Start Page Content -->
	<section id="page-full" class="section">
		<div class="container">
			<div class="row">
              <div class="col-md-9">
              
				<?php if ( have_posts() ) : ?>
        
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
        
                        <?php
                            /* Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'content' );
                        ?>
        
                    <?php endwhile; ?>
        
                    <?php wpsvse_content_nav( 'nav-below' ); ?>
        
                <?php else : ?>
        
                    <?php get_template_part( 'no-results', 'index' ); ?>
        
                <?php endif; ?>

              </div>
              <?php get_sidebar(); ?>
			</div>
		</div>
	</section>
	<!-- End Page Content -->

<?php get_footer(); ?>