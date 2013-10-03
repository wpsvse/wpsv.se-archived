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
                
                <div class="no-support-cf box-1 round-3 box-warning"><strong>Ursäkta röran, vi bygger om dokumentationen</strong><br />
				Vi byter mjukvara för dokumentationen. Det kan innebära att vissa saker ser lite konstiga ut just nu.</div>
                                
                   <?php  
				   $myWikicats = get_terms('incsub_wiki_category','child_of=0&hide_empty=0'); 
				  
					  foreach ($myWikicats as $cat) :
					  $args = array(
						  'post_type' => 'incsub_wiki',
						  'post__not_in' => array ( 3024 ),
						  'posts_per_page' => 50,
						  'tax_query' => array(
								'relation' => 'AND',
								array(
									'taxonomy' => 'incsub_wiki_category',
									'field' => 'id',
									'terms' => array( $cat->term_id ),
									'operator' => 'IN'
								)
							)
					  );
				  
					  $myInCatQuery = new WP_Query($args); 
				  
					  if ($myInCatQuery->have_posts()) : 
					  echo '<div>';
					  echo '<h2>'.$cat->name.'</h2>';
					  echo '<ul>';    
					  while ($myInCatQuery->have_posts()) : $myInCatQuery->the_post(); ?>
				  
					  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				  
				  <?php
				  endwhile; 
				  echo '</ul></div>'; 
				  ?>
				  
				  <?php else : 
				  echo '<h2>'.$cat->name.'</h2>';
				  echo '<em>Det finns för närvarande inga dokument under '.$cat->name.'</em>';                
				  endif; 
				  wp_reset_query();
				  endforeach; 
				  ?>
                  
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