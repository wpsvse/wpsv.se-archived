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

                  <?php if (have_posts()) : ?>

		          <?php while (have_posts()) : the_post(); ?>

                  <!-- File item -->
                  <article class="ticketlist-item">
                    <!-- Post header -->
                    <header class="ticketlist-header">
                      <!-- File information -->
                      <section class="ticketlist-header-meta">
                      <!-- File title -->
                      <h2>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Direktlänk till <?php the_title_attribute(); ?>" class="ticket-<?php echo is_object_in_term($post->ID,'ticket_status',array('Åtgärdad','Åtgärdad i trunk','Inte en bugg','Kommer inte åtgärdas','Redan åtgärdad','Kunde inte återskapas')) ? 'closed' : 'open'; ?>"><?php the_title(); ?></a>
                      </h2>
                      <!-- End - Post title -->
                      <!-- Post information -->
                      <p><span class="ticket-typ-id"><a href="<?php the_permalink() ?>" rel="bookmark" class="ticket-<?php echo is_object_in_term($post->ID,'ticket_status',array('Åtgärdad','Åtgärdad i trunk','Inte en bugg','Kommer inte åtgärdas','Redan åtgärdad','Kunde inte återskapas')) ? 'closed' : 'open'; ?>">Rapport #<?php the_ID(); ?></a> (<?php echo get_the_term_list( $post->ID, 'component', '', ', ', '' ); ?>, <?php echo get_the_term_list( $post->ID, 'typ', '', ', ', '' ); ?>)</span></p>
					  </section>
                      <!-- End - File information -->
                    </header>
                    <!-- End - File header -->
                    <section class="ticket-full-meta">
                      <ul class="list-info">
                        <li>Rapporterat av: <?php if (get_the_author_meta('ID') == '13') { echo '<a href="'.get_post_meta($post->ID, 'blogurl', true).'">'.get_post_meta($post->ID, 'blogname', true).'</s>'; } else { echo get_the_author_link(); } ?></li>
                        <li>Komponent: <?php echo get_the_term_list( $post->ID, 'component', '', ', ', '' ); ?></li>
                        <li>Prioritet: <?php the_terms( $post->ID, 'prioritet', ' ', ', ', ' ' ); ?></li>
                        <li>Allvarlighetsgrad: <?php echo get_the_term_list( $post->ID, 'allvarlighetsgrad', '', ', ', '' ); ?></li>
                        <li class="ticket-status">Status: <span class="ticket-<?php echo is_object_in_term($post->ID,'ticket_status',array('Åtgärdad','Åtgärdad i trunk','Inte en bugg','Kommer inte åtgärdas','Redan åtgärdad','Kunde inte återskapas')) ? 'closed' : 'open'; ?>"><?php if (get_the_term_list( $post->ID, 'ticket_status', '', ', ', '' ) !== '') { echo get_the_term_list( $post->ID, 'ticket_status', '', ', ', '' ); } else { echo 'Ny'; } ?></span></li>
                      </ul>
                      <ul class="list-info">
                        <li>Tilldelat: <?php echo get_the_term_list( $post->ID, 'ticket_assign', '', ', ', '' ); ?></li>
                        <li>Typ: <?php echo get_the_term_list( $post->ID, 'typ', '', ', ', '' ); ?></li>
                        <li>Version: <?php echo get_the_term_list( $post->ID, 'component_version', '', ', ', '' ); ?></li>
                        <li>Målversion: <?php echo get_the_term_list( $post->ID, 'milestone', '', ', ', '' ); ?></li>
                        <li>Nyckelord: <?php echo get_the_term_list( $post->ID, 'tracker_tags', '', ', ', '' ); ?></li>
                      </ul>
                    </section>
                    <!-- File desc -->
                    <section class="ticket-desc">
                      <h5>Beskrivning</h5> <span class="ticket-created">Skapad <time datetime="<?php the_time('c') ?>"><?php the_time('Y-m-d') ?> kl. <?php the_time('H:i') ?></time></span>
                      <?php 
					  	the_content(); 
					  	edit_post_link('Redigera', '<p class="post-edit"><em>', '</em></p>');
					  ?>
                    </section>
                    <span class="ticket-rss"><?php post_comments_feed_link( 'Prenumerera på uppföljningar för den här rapporten' ) ?></span>
                  </article>
                  <!-- End - Post content -->

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