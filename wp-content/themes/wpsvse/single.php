<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress Sverige
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

    <section id="page-header" class="section">
		<div class="container">
			<div class="row">
              <div class="col-md-12">
            	<h1 class="page-title"><?php the_title(); ?></h1>   
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
                  <div class="post-image">
                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                        <?php if ( has_post_thumbnail() ) { 
                          the_post_thumbnail('post-img');
                        } else { ?>
                          <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/default.jpg" class="img-responsive" alt="" />
                        <?php } ?>
                    </a>
                      <div class="entry-meta-comments"><?php comments_popup_link('0 kommentarer', '1 kommentar', '% kommentarer'); ?></div>
                      <div class="entry-meta-date"><time><?php the_time('l, j F Y'); ?></time></div>
                  </div><!-- .post-image -->

                <?php 
				the_content();
				
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Sidor:', 'wpsvse' ),
					'after'  => '</div>',
				) );
				
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();
            	?>
              </div>
              <?php get_sidebar(); ?>
			</div>
		</div>
	</section>
	<!-- End Page Content -->
    
    <?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>