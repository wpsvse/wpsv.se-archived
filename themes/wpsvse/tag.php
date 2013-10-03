<?php get_header(); ?>

  <!-- Page body -->
  <section class="container-block" id="page-body">
    <div class="container-inner">
      <!-- Page title -->
      <header class="container-aligner" id="page-title">
      	<h1>Arkiv</h1>
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
                
                  <?php global $wp_query;
				  $total_results = $wp_query->found_posts;
				  ?>
                  <section class="archive-meta">
                      <h2>Visar inlägg taggade med &quot;<?php single_tag_title(); ?>&quot;</h2>
                      <span>Arkivet innehåller totalt <strong><?php echo $total_results; ?></strong> inlägg</span>
                      <hr />
                  </section>
                
                  <?php if (have_posts()) : ?>

		          <?php while (have_posts()) : the_post(); ?>
                
                  <!-- Post item -->
                  <article class="postlist-item <?php echo get_post_type( $post->ID ); ?>-legend">
                    <!-- Post header -->
                    <header class="postlist-header">
                      <!-- Post title -->
                      <h2>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Direktlänk till <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                      </h2>
                      <!-- End - Post title -->
					  <?php if ( !is_search() ) { ?>
                      <div class="post-meta-wrap">
                      <!-- Post information -->
                      <p class="postlist-header-meta">Postat den <time datetime="<?php the_time('c') ?>"><?php the_time('j M, Y') ?></time> i <span class="post-cats"><?php if ( 'blogg' == get_post_type() ) { echo get_the_term_list( $post->ID, 'bloggkategori', '', ', ', '' ); } else { echo get_the_term_list( $post->ID, 'category', '', ', ', '' ); } ?></span> <span class="post-author-meta"><a href="#"><?php the_author(); ?></a></span></p>
                      <!-- End - Post information -->
                      <!-- Post comment link -->
                      <p class="postlist-header-comments">
                        <?php comments_popup_link('0 kommentarer', '1 kommentar', '% kommentarer'); ?>
                      </p>
                      <!-- End - Post comment link -->
                      </div>
					  <?php } ?>
                    </header>
                    <!-- End - Post header -->
                    <!-- Post thumbnail -->
					<?php if ( has_post_thumbnail() ) { ?>
                     <a class="element-holder media-link" href="<?php the_permalink() ?>" title="Permanent länk till <?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail( 'post-main-img' ); ?>
                     </a>
                    <?php } ?>
                    <!-- End - Post thumbnail -->
                    <!-- Post intro -->
                    <section class="postlist-intro">
                      <?php the_excerpt('Läs mer') ?>
                    </section>
                    <!-- End - Post intro -->
                    <!-- Post link -->
                    <a class="btn" href="<?php the_permalink() ?>" title="Läs hela inlägget">Läs mer...</a>
                    <!-- End - Post link -->
                  </article>
                  <!-- End - Post item -->
                  
                  <?php endwhile; ?>
                  
                  <!-- Pager -->
				  <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
      
                  <nav class="pager-navigation" id="pager">
                      <div class="nav-previous"><?php next_posts_link('<span class="meta-nav">&larr;</span> Äldre inlägg') ?></div>
                      <div class="nav-next"><?php previous_posts_link('Nyare inlägg <span class="meta-nav">&rarr;</span>') ?></div>
                  </nav>
                  
                  <?php } endif; ?>
                  <!-- End - Pager -->
                  
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