<?php get_header();

	if (have_posts()) :
	while (have_posts()) : the_post(); ?>


     <div class="page-title">
     	<div class="container">
        	<div class="row">
            	<div class="col-lg-8">
                	<h1><?php the_title(); ?></h1>
                </div>
                <div class="col-lg-4">
                Inloggning
                </div>
            </div>
        </div>
     </div>

  <div class="body-content page-content-full">

	<div class="container">
    
    	<div class="col-lg-12 main-page-content" id="page-<?php the_id(); ?>">
			<?php the_content('Läs mer');
			wp_link_pages(array('before' => '<p><strong>Sidor:</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));
            edit_post_link('Redigera', '<p class="post-edit"><em>', '</em></p>'); ?>
            
          <!-- Social Share Buttons -->
            <div id="social-share">
              <div id="sharebuttons" data-url="<?php the_permalink() ?>" data-text="<?php the_title_attribute(); ?>"></div>
            </div>
          <!-- Social Share Buttons -->
        </div>
        
    </div> <!-- /container --> 

  </div> <!--/ .body-content --> 

<?php endwhile; endif; ?>

<?php get_footer(); ?>