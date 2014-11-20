<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress Sverige
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>

	<!-- Start Page Header -->
    <section id="page-header" class="section">
		<div class="container">
			<div class="row">
              <div class="col-md-12">
            	<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Författare: %s', 'wpsvse' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Dag: %s', 'wpsvse' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Månad: %s', 'wpsvse' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'År: %s', 'wpsvse' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						else :

							if ( 'post' == get_post_type() ) {
								echo 'Nyheter';
							} elseif ( 'wpsvse_blogg' == get_post_type() ) {
								echo 'Blogg';
							}

						endif;
					?>
				</h1>
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

				<?php /* Start the Loop */
                while ( have_posts() ) : the_post();
    
                    
                        /* Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'content' );
                
    
                endwhile;
    
					wpsvse_content_nav( 'nav-below' );
		
				else :
		
					get_template_part( 'no-results', 'archive' );
		
				endif; ?>

              </div>
              <?php get_sidebar(); ?>
			</div>
		</div>
	</section>
	<!-- End Page Content -->

<?php get_footer(); ?>
