<?php get_header(); ?>

  <!-- Page body -->
  <section class="container-block" id="page-body">
    <div class="container-inner">
      <!-- Page title -->
      <header class="container-aligner" id="page-title">
      	<h1>Filer</h1>
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
                
                  <section class="file-search">
                      <form action="<?php echo esc_url( home_url( '/filer/' ) ); ?>" id="site-file-search" method="get">
                        <fieldset><legend>Hitta filer</legend><label for="site-file-search-submit" class="hidden">Sök</label>
                        <input class="file-big-search" name="s" placeholder="Sök efter fil..." type="text" />
                        <input id="site-file-search-submit" type="submit" value="Sök" /></fieldset>
                      </form>
                  </section>
                  
				  <?php 
				  $dterm = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
				  global $wp_query;
				  $total_results = $wp_query->found_posts;
				  ?>
                  <h2>Visar filer med versionsnummer &quot;<?php echo $dterm->name; ?>&quot;</h2>
                  <span><strong><?php echo $total_results; ?></strong> fil(er) är associerad(e) med detta versionsnummer</span>
                
                  <section class="file-sort-order">Sortera efter: <a href="?orderby=date&amp;order=asc" title="Sortera efter datum i stigande ordning">Datum</a> &nbsp; <a href="?orderby=date&amp;order=desc" title="Sortera efter datum i fallande ordning (standard)">&darr;</a> &nbsp; | &nbsp; <a href="?orderby=title&amp;order=asc" title="Sortera efter namn i stigande ordning">Namn</a> &nbsp; <a href="?orderby=title&amp;order=desc" title="Sortera efter namn i fallande ordning">&darr;</a> &nbsp; | &nbsp; <a href="?orderby=dl_hit-counter" title="Sortera efter populäritet i fallande ordning">Populäritet</a> &nbsp; <a href="?orderby=dl_hit-counter&amp;order=asc" title="Sortera efter populäritet i stigande ordning">&uarr;</a> &nbsp; | &nbsp; <a href="?orderby=ratings_score" title="Sortera efter betyg i fallande ordning">Betyg</a> &nbsp; <a href="?orderby=ratings_score&amp;order=asc" title="Sortera efter betyg i stigande ordning">&uarr;</a></section>

                  <?php if (have_posts()) : ?>

		          <?php while (have_posts()) : the_post(); ?>
                  
                  <!-- File item -->
                  <article class="filelist-item">
                    <!-- Post header -->
                    <header class="filelist-header">
                      <!-- File information -->
                      <section class="filelist-header-meta">
                      <!-- File title -->
                      <h2>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Direktlänk till <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                      </h2>
                      <!-- End - Post title -->
                      <!-- Post information -->
                      <p><span class="file-cats"><?php echo get_the_term_list( $post->ID, 'filkategori', '', ', ', '' ); ?></span><span class="file-time"><time datetime="<?php the_time('c') ?>"><?php the_time('Y-m-d') ?></time></span></p>
					  </section>
                      <!-- End - File information -->
                      <!-- File download link -->
                      <a href="<?php echo get_post_meta($post->ID, 'file_dl', true); ?>" class="file-dl-btn">Ladda ner</a>
                      <!-- End - File download link -->
                    </header>
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