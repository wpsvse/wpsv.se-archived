<?php
/*
Template Name: Sida, sidofält
*/
get_header(); ?>

  <!-- Page body -->
  <section class="container-block" id="page-body">
    <div class="container-inner">
      <!-- Page title -->
      
	  <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post(); ?>
      
      <header class="container-aligner" id="page-title">
      	<h1><?php the_title(); ?></h1>
        <!-- Member meta bar -->
        <div id="member-meta-bar">
        	<?php get_template_part( 'members' );  // Members bar (members.php) ?>
        </div>
        <!-- End Member meta bar -->
      </header>
      <!-- End - Page title -->
      <!-- Page body content -->
      <section id="page-body-content">
        <div id="page-body-content-inner">
          <!-- Page content -->
                <div id="page-content">
                  <section id="page-<?php the_id(); ?>">
					<?php 
					the_content('Läs mer');
					if ( is_page('sidkarta') ) {
						wp_nav_menu( array( 'theme_location' => 'sitemap','container_id' => 'sitemap','items_wrap' => '<ul id="sitemap-list" class="%2$s">%3$s</ul>' ) );
					}
					if (is_page('2204')) {
						global $current_user; get_currentuserinfo(); 
						if ($current_user->user_level == 10 ) {
							gravity_form(5, false, false, false, '', true);
						} else {
							gravity_form(4, false, false, false, '', true);
						}
					}
					wp_link_pages(array('before' => '<p><strong>Sidor:</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));
					edit_post_link('Redigera', '<p class="post-edit"><em>', '</em></p>'); 
					?>
                    <!-- Social Share Buttons -->
                      <div id="social-share">
                        <div id="sharebuttons" data-url="<?php the_permalink() ?>" data-text="<?php the_title_attribute(); ?>"></div>
                      </div>
                    <!-- Social Share Buttons -->
                  </section>
                </div>
                <!-- End - Page content -->

<?php get_sidebar(); ?>

        </div>
      </section>
      <!-- End - Page body content -->
      <?php endwhile; endif; ?>
    </div>
  </section>
  <!-- End - Page body -->

<?php get_footer(); ?>