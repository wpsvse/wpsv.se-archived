<?php get_header(); ?>

  <!-- Page body -->
  <section class="container-block" id="page-body">
    <div class="container-inner">
      <!-- Page title -->
      <header class="container-aligner" id="page-title">
      	<h1><?php if ( is_search() ) { ?>Filsök<?php } else { ?>Filer<?php } ?></h1>
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
                
				  <?php if ( is_search() ) {
				  global $wp_query;
				  $total_results = $wp_query->found_posts;
				  ?>
                  <h2>Sökresultat för &quot;<?php echo $s; ?>&quot;</h2>
                  <span>Din sökning genererade totalt <strong><?php echo $total_results; ?></strong> matchning(ar)</span>
                  <?php } if (is_search() && $total_results == 0) { ?>
                  <article class="filelist-item">
                  <p><em>Tyvärr så matchade inga filer din sökning. Försök med mer generella termer eller andra sökord.</em></p>
                  </article>
                  
                  <?php } else { ?>
                  
                  <section class="file-sort-order">Sortera efter: <a href="<?php if ( is_search() ) { echo '?s='.$s.'&amp;'; } else { echo '?'; } ?>orderby=date&amp;order=asc" title="Sortera efter datum i stigande ordning">Datum</a> &nbsp; <a href="<?php if ( is_search() ) { echo '?s='.$s.'&amp;'; } else { echo '?'; } ?>orderby=date&amp;order=desc" title="Sortera efter datum i fallande ordning (standard)">&darr;</a> &nbsp; | &nbsp; <a href="<?php if ( is_search() ) { echo '?s='.$s.'&amp;'; } else { echo '?'; } ?>orderby=title&amp;order=asc" title="Sortera efter namn i stigande ordning">Namn</a> &nbsp; <a href="<?php if ( is_search() ) { echo '?s='.$s.'&amp;'; } else { echo '?'; } ?>orderby=title&amp;order=desc" title="Sortera efter namn i fallande ordning">&darr;</a> &nbsp; | &nbsp; <a href="<?php if ( is_search() ) { echo '?s='.$s.'&amp;'; } else { echo '?'; } ?>orderby=dl_hit-counter" title="Sortera efter populäritet i fallande ordning">Populäritet</a> &nbsp; <a href="<?php if ( is_search() ) { echo '?s='.$s.'&amp;'; } else { echo '?'; } ?>orderby=dl_hit-counter&amp;order=asc" title="Sortera efter populäritet i stigande ordning">&uarr;</a> &nbsp; | &nbsp; <a href="<?php if ( is_search() ) { echo '?s='.$s.'&amp;'; } else { echo '?'; } ?>orderby=ratings_score" title="Sortera efter betyg i fallande ordning">Betyg</a> &nbsp; <a href="<?php if ( is_search() ) { echo '?s='.$s.'&amp;'; } else { echo '?'; } ?>orderby=ratings_score&amp;order=asc" title="Sortera efter betyg i stigande ordning">&uarr;</a></section>

                  <?php } 
				  
				  // query_posts('posts_per_page=25');
				  
				  if (have_posts()) : ?>

		          <?php while (have_posts()) : the_post(); ?>
                  
                  <!-- File item -->
                  <article class="filelist-item <?php $terms = get_the_terms( $post->ID , 'filkategori' ); foreach( $terms as $term ) { echo $term->slug; unset($term); } ?>">
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