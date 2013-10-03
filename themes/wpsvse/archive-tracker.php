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
                  <h1 class="tracker-heading"><a href="<?php echo esc_url( home_url( '/projekt/svenska-sprakfiler-for-wordpress/' ) ); ?>">Svenska Språkfiler för WordPress</a></h1>
                  <span class="project-desc">Rapporter specifika för svenska språkfiler för WordPress</span>
                  <p><a href="<?php echo esc_url( home_url( '/rapportera/' ) ); ?>" class="new-ticket-btn">+ Ny rapport</a></p>
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
                
                  <?php query_posts( array( 'posts_per_page' => 10, 'project' => 'svenska-sprakfiler-for-wordpress' ) ); ?>
                
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
   
                  <?php endwhile; endif; ?>
                  
                  </table>
                  <a href="<?php echo esc_url( home_url( '/projekt/svenska-sprakfiler-for-wordpress/' ) ); ?>" class="project-link">Visa alla rapporter för detta projekt &rarr;</a>
                  
				  <h1 class="tracker-heading"><a href="<?php echo esc_url( home_url( '/projekt/svenska-paket-av-wordpress/' ) ); ?>">Svenska Paket av WordPress</a></h1>
                  <span class="project-desc">Rapporter specifika för svenska paket av WordPress</span>
                  <p><a href="<?php echo esc_url( home_url( '/rapportera/' ) ); ?>" class="new-ticket-btn">+ Ny rapport</a></p>
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
                    
                    <?php $tracker_2_query = new WP_Query(array('showposts' => 10, 'post_type' => 'tracker', 'project' => 'svenska-paket-av-wordpress')); ?>
		            <?php while ($tracker_2_query->have_posts()) : $tracker_2_query->the_post(); ?>

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
                  <a href="<?php echo esc_url( home_url( '/projekt/svenska-paket-av-wordpress/' ) ); ?>" class="project-link">Visa alla rapporter för detta projekt &rarr;</a>

				  <h1 class="tracker-heading"><a href="<?php echo esc_url( home_url( '/projekt/wordpress-sveriges-portal/' ) ); ?>">WordPress Sveriges Portal</a></h1>
                  <span class="project-desc">Rapporter specifika för funktioner på WordPress Sverige (wpsv.se)</span>
                  <p><a href="<?php echo esc_url( home_url( '/rapportera/' ) ); ?>" class="new-ticket-btn">+ Ny rapport</a></p>
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

                    <?php $tracker_3_query = new WP_Query(array('showposts' => 10, 'post_type' => 'tracker', 'project' => 'wordpress-sveriges-portal')); ?>
		            <?php while ($tracker_3_query->have_posts()) : $tracker_3_query->the_post(); ?>
                    
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
                  <a href="<?php echo esc_url( home_url( '/projekt/wordpress-sveriges-portal/' ) ); ?>" class="project-link">Visa alla rapporter för detta projekt &rarr;</a>
                
                </div>
                <!-- End - Page content -->

        </div>
      </section>
      <!-- End - Page body content -->
    </div>
  </section>
  <!-- End - Page body -->
                  
<?php get_footer(); ?>