<?php get_header(); ?>

  <!-- Page body -->
  <section class="container-block" id="page-body">
    <div class="container-inner">
      <!-- Page title -->
      <header class="container-aligner" id="page-title">
      	<h1><?php if ( 'blogg' == get_post_type() ) { echo 'Blogg'; } else { echo 'Nyheter'; } ?></h1>
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

                  <?php if (have_posts()) : ?>

		          <?php while (have_posts()) : the_post(); ?>
                  
                  <?php if (get_the_author_meta('ID') == '11') { $the_bloguser = '<a href="'.get_post_meta($post->ID, 'blogurl', true).'">'.get_post_meta($post->ID, 'blogname', true).'</s>'; } else { $the_bloguser = get_the_author_link(); } ?>

                  <!-- Post item -->
                  <article class="postlist-item" id="post-<?php the_id(); ?>">
                    <!-- Post header -->
                    <header class="postlist-header">
                      <!-- Post title -->
                      <h2>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Direktlänk till <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                      </h2>
                      <!-- End - Post title -->
                      <div class="post-meta-wrap">
                      <!-- Post information -->
                      <p class="postlist-header-meta">Postat den <time datetime="<?php the_time('c') ?>"><?php the_time('j M, Y') ?></time> i <span class="post-cats"><?php echo get_the_term_list( $post->ID, 'bloggkategori', '', ', ', '' ); ?></span> <span class="post-author-meta"><?php echo $the_bloguser; ?></span></p>
                      <!-- End - Post information -->
                      <!-- Post comment link -->
                      <p class="postlist-header-comments">
                        <?php comments_popup_link('0 kommentarer', '1 kommentar', '% kommentarer'); ?>
                      </p>
                      <!-- End - Post comment link -->
                      </div>
                    </header>
                    <!-- End - Post header -->
                    <!-- Post text -->
                    <section>
                      <?php if ( has_post_thumbnail() ) { ?>
                      	<figure class="align-center">
                           <a class="element-holder media-link" href="<?php the_permalink() ?>" title="Permanent länk till <?php the_title_attribute(); ?>">
                              <?php the_post_thumbnail( 'post-main-img' ); ?>
                           </a>
                        </figure>
                      <?php } ?>
                      <?php the_content('Läs mer'); ?>
                    </section>
                    <!-- End - Post text -->
                    <!-- Post tags -->
                    <nav class="post-content-tags">
                      <?php the_tags('<span>Taggat:</span>', '', ''); ?>
                    </nav>
                    <!-- End - Post tags -->
					  <?php edit_post_link('Redigera', '<p class="post-edit"><em>', '</em></p>'); ?>
                    <!-- Social Share Buttons -->
                      <div id="social-share">
                        <div id="sharebuttons" data-url="<?php the_permalink() ?>" data-text="<?php the_title_attribute(); ?>"></div>
                      </div>
                    <!-- Social Share Buttons -->
                  </article>
                  <!-- End - Post content -->
                  <!-- Post author -->
                  <section class="post-author">
                    <!-- Post author image -->
                    <a class="post-author-image element-holder media-link" href="#" title="Författarens avatar">
                      <?php if (get_the_author_meta('ID') == '11') { echo get_avatar( get_post_meta($post->ID, 'blogemail', true), 60, get_template_directory_uri().'/images/avatar.png', '' ); } else { echo get_avatar( get_the_author_meta('ID'), 60, get_template_directory_uri().'/images/avatar.png', '' ); } ?>
                    </a>
                    <!-- End - Post author image -->
                    <!-- Post author information -->
                    <div class="post-author-content">
                      <h4><?php echo $the_bloguser; ?></h4>
                      <p>Jag som skrivit detta inlägg heter <?php echo $the_bloguser; ?>. Inlägget postades <strong><time datetime="<?php the_time('c') ?>"><?php the_time('j M, Y - H:i') ?></time></strong>, du kan följa uppdateringar till detta inlägg via <?php post_comments_feed_link('RSS-flödet'); ?>.</p>
                    </div>
                    <!-- End - Post author information -->
                  </section>
                  <!-- End - Post author -->
                  <!-- Related articles -->
                  <nav class="post-related">
                    <h4 class="underlined-header">Relaterade inlägg</h4>
                    <ul class="post-related-list">
                      <?php
						$related = get_posts( array( 'post_type' => array('blogg','post'), 'orderby' => 'rand', 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID) ) );
						if( $related ) foreach( $related as $post ) {
						setup_postdata($post);
					  ?>
                        <!-- Related article item -->
						<li>
                          <a class="post-related-item" href="<?php the_permalink() ?>" title="Läs <?php the_title_attribute(); ?>">
                              <?php the_title(); ?>
                          </a>
                           - <time datetime="<?php the_time('c') ?>">(<?php the_time('j M, Y') ?> - <?php the_time('H:i') ?>)</time>
                      	</li>
                        <!-- End - Related article item -->
                      <?php
						}
						wp_reset_postdata();
					  ?>                      
                    </ul>
                  </nav>
                  <!-- End - Related articles -->

<?php comments_template('', true); ?>

                <?php endwhile; endif; ?>
                
                </div>
                <!-- End - Page content -->

<?php get_sidebar(); ?>

        </div>
      </section>
      <!-- End - Page body content -->
    </div>
  </section>
  <!-- End - Page body -->
                  
<?php get_footer(); ?>