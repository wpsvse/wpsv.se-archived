<?php get_header(); ?>

  <!-- Page body -->
  <section class="container-block" id="page-body">
    <div class="container-inner">
      <!-- Page title -->
      <header class="container-aligner" id="page-title">
      	<h1>Dokumentation</h1>
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
                <div id="page-content" class="wpsv-wiki">
                
                <?php $wikiterm = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
                
                <h2>Dokumentkategori: <?php echo $wikiterm->name; ?></h2>
                
                <ul>
                
                  <?php if (have_posts()) :

		          while (have_posts()) : the_post(); ?>
			  
					  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				  
                  <?php endwhile; endif; ?>
                  
                </ul>
                  
                  <div class="box-info round-5">
                    <div class="box-content">
                    <p>Du vet väl att <a href="http://wpsv.se/dokumentation/information-for-wordpress-sveriges-dokumentation/">vem som helst kan delta</a> i dokumentationen. Redigera felaktigheter, uppdatera dokument, skapa nya dokument. <a href="http://wpsv.se/dokumentation/hjalp-for-dokumentation/">Läs mer om hur</a>. Undrar du över något i dokumentationen? Då är du välkommen in i vårt <a href="http://wpsv.se/forum/forum.php">forum</a>.</p>
                    </div>
                  </div>
                                                      
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