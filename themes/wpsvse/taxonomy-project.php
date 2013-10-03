<?php get_header(); ?>

  <!-- Page body -->
  <section class="container-block" id="page-body">
    <div class="container-inner">
      <!-- Page title -->
      <header class="container-aligner" id="page-title">
      	<h1>Tracker</h1>
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
                  <h1 class="tracker-heading"><?php echo get_the_term_list( $post->ID, 'project', '', ', ', '' ); ?></h1>
                  <?php
					$terms = get_the_terms( $post->ID, 'project' );
											
					if ( $terms && ! is_wp_error( $terms ) ) : 
					
						$project_desc = array();
					
						foreach ( $terms as $term ) {
							$project_desc[] = $term->description;
						}
											
						$project = join( ", ", $project_desc );
				  ?>
                  <span class="project-desc"><?php echo $project; ?></span>
                  <?php endif; ?>
                  <a href="<?php echo esc_url( home_url( '/rapportera/' ) ); ?>" class="new-ticket-btn">+ Ny rapport</a>
                  <table>
                    <tr>
                      <th>#ID</th>
                      <th>Rapport</th>
                      <th>Komponent</th>
                      <th>Typ</th>
                      <th>Prioritet</th>
                      <th>Allvarlighetsgrad</th>
                      <th>Målversion</th>
                    </tr>
                                
                  <?php if (have_posts()) : ?>

		          <?php while (have_posts()) : the_post(); ?>
                
                    <tr>
                      <td><a href="<?php the_permalink() ?>" rel="bookmark" title="Visa rapport #<?php the_ID(); ?>" class="ticket-<?php echo is_object_in_term($post->ID,'ticket_status',array('Åtgärdad','Åtgärdad i trunk','Inte en bugg','Kommer inte åtgärdas','Redan åtgärdad','Kunde inte återskapas')) ? 'closed' : 'open'; ?>">#<?php the_ID(); ?></a></td>
                      <td><a href="<?php the_permalink() ?>" rel="bookmark" title="Visa rapport #<?php the_ID(); ?>" class="ticket-<?php echo is_object_in_term($post->ID,'ticket_status',array('Åtgärdad','Åtgärdad i trunk','Inte en bugg','Kommer inte åtgärdas','Redan åtgärdad','Kunde inte återskapas')) ? 'closed' : 'open'; ?>"><?php the_title(); ?></a></td>
                      <td><?php echo get_the_term_list( $post->ID, 'component', '', ', ', '' ); ?></td>
                      <td><?php echo get_the_term_list( $post->ID, 'typ', '', ', ', '' ); ?></td>
                      <td><?php the_terms( $post->ID, 'prioritet', ' ', ', ', ' ' ); ?></td>
                      <td><?php echo get_the_term_list( $post->ID, 'allvarlighetsgrad', '', ', ', '' ); ?></td>
                      <td><?php echo get_the_term_list( $post->ID, 'milestone', '', ', ', '' ); ?></td>
                    </tr>
   
                  <?php endwhile; ?>
                  
                  </table>
                  
                  <!-- Pager -->
				  <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
      
                  <nav class="pager-navigation" id="pager">
                      <div class="nav-previous"><?php next_posts_link('<span class="meta-nav">&larr;</span> Äldre rapporter') ?></div>
                      <div class="nav-next"><?php previous_posts_link('Nyare rapporter <span class="meta-nav">&rarr;</span>') ?></div>
                  </nav>
                  
                  <?php } endif; ?>
                  <!-- End - Pager -->
                                             
                </div>
                <!-- End - Page content -->

        </div>
      </section>
      <!-- End - Page body content -->
    </div>
  </section>
  <!-- End - Page body -->
                  
<?php get_footer(); ?>