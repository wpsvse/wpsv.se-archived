<?php
/*
Template Name: Länkarkiv
*/
get_header(); ?>

  <!-- Page body -->
  <section class="container-block" id="page-body">
    <div class="container-inner">
      <!-- Page title -->
      
	  <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post(); ?>
      
      <header class="container-aligner" id="page-title">
      	<h1>Länkarkiv</h1>
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
                  	<div class="layout-1-1">
						<?php 
                        the_content('Läs mer');
                        ?>
                    </div>
                    <hr />
                    <div class="layout-1-2">
						<?php 
                        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Länkarkiv 1-1') ) : 
                        endif; 
                        ?>
                    </div>
                    <div class="layout-1-2 layout-last">
						<?php 
                        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Länkarkiv 1-2') ) : 
                        endif; 
                        ?>
                    </div>
                    <hr />
              			<div class="layout-1-1">
                			<section class="wpsvads-full">
                    			<div><?php echo adrotate_group(2); ?></div>
                    		</section>
              			</div>
              		<hr />
                    <div class="layout-1-2">
						<?php 
                        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Länkarkiv 2-1') ) : 
                        endif; 
                        ?>
                    </div>
                    <div class="layout-1-2 layout-last">
						<?php 
                        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Länkarkiv 2-2') ) : 
                        endif; 
                        ?>
                    </div>
                    <hr />
                    <div class="layout-1-2">
						<?php 
                        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Länkarkiv 3-1') ) : 
                        endif; 
                        ?>
                    </div>
                    <div class="layout-1-2 layout-last">
						<?php 
                        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Länkarkiv 3-2') ) : 
                        endif; 
                        ?>
                    </div>
                    <!-- Social Share Buttons -->
                      <div id="social-share">
                        <div id="sharebuttons" data-url="<?php the_permalink() ?>" data-text="<?php the_title_attribute(); ?>"></div>
                      </div>
                    <!-- Social Share Buttons -->
                  </section>
                </div>
                <!-- End - Page content -->
        </div>
      </section>
      <!-- End - Page body content -->
      <?php endwhile; endif; ?>
    </div>
  </section>
  <!-- End - Page body -->

<?php get_footer(); ?>