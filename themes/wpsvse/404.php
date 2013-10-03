<?php get_header(); ?>

  <!-- Page body -->
  <section class="container-block" id="page-body">
    <div class="container-inner">    
      <!-- Page title -->
      <header class="container-aligner" id="page-title">
      	<h1>Ooops! Kunde inte hittas</h1>
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
                  <section class="info-404">
                  	<h2 class="title-404">Ooops!</h2>
                    <p><strong>Sidan du efterfrågade kunde inte hittas</strong>.</p>
                    <p>Sidan kan ha flyttats, du kan ha kommit hit via en felaktig länk eller så har något blivit tokigt hos oss. <br />
					Men du ska inte känna dig vilsen. En sökning kanske kan hjälpa dig att hitta det du söker? Använd annars menyn i sidhuvudet för att navigera dig fram.</p>
                  </section>
                  <hr />
				  <!-- Latest posts -->
                  <section class="posts-front">
                    <!-- Section description -->
                    <div class="layout-1-4">
                      <h2>Senaste nytt</h2>
                      <p>Senaste nytt och uppdateringar rörande WordPress, communityn och WordPress Sveriges portal.</p>
                      <a class="btn blue" href="<?php echo esc_url( home_url( '/' ) ); ?>senaste-nytt/" title="Visa nyhetsarkivet">Fler nyheter</a>
                    </div>
                    <!-- End - Section description -->
                    <?php $wpsv_news_query = new WP_Query('showposts=3'); ?>
                    <?php while ($wpsv_news_query->have_posts()) : $wpsv_news_query->the_post(); ?>
                    <!-- Post item -->
                    <div class="layout-1-4" id="post-<?php the_ID(); ?>">
                      <!-- Item element -->
                      <a class="element-holder media-link" href="<?php the_permalink() ?>" title="Läs inlägget">
						<?php 
                        if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'post-fp-img' );
                        } else {
                                echo '<img width="220" height="130" src="' . get_bloginfo('stylesheet_directory') .'/images/defaults/thumb-220x130.gif" alt="miniatyr" />';
                        } 
                        ?>
                      </a>
                      <!-- End - Item element -->
                      <!-- Item description -->
                      <h5><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent l&auml;nk till <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                      <div class="posts-front-meta"><?php the_time('j F') ?></div>
                      <?php the_excerpt(); ?>
                      <!-- End - Item description -->
                    </div>
                    <!-- End - Post item -->
                    <?php endwhile; ?>
                  </section>
                  <!-- End - Latest posts -->
                  <hr />
				  <!-- Latest blog posts -->
                  <section class="posts-front">
                    <!-- Section description -->
                    <div class="layout-1-4">
                      <h2>Senaste i bloggen</h2>
                      <p>Senaste blogginläggen på WordPress Sverige, allt från tips på teman till guider.</p>
                      <a class="btn blue" href="<?php echo esc_url( home_url( '/' ) ); ?>sblogg/" title="Visa bloggarkiv">Fler inlägg</a>
                    </div>
                    <!-- End - Section description -->
                    <?php $wpsv_blog_query = new WP_Query('showposts=3&post_type=blogg'); ?>
                    <?php while ($wpsv_blog_query->have_posts()) : $wpsv_blog_query->the_post(); ?>
                    <!-- Post item -->
                    <div class="layout-1-4" id="post-<?php the_ID(); ?>">
                      <!-- Item element -->
                      <a class="element-holder media-link" href="<?php the_permalink() ?>" title="Läs inlägget">
						<?php 
                        if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'post-fp-img' );
                        } else {
                                echo '<img width="220" height="130" src="' . get_bloginfo('stylesheet_directory') .'/images/defaults/thumb-220x130.gif" alt="miniatyr" />';
                        } 
                        ?>
                      </a>
                      <!-- End - Item element -->
                      <!-- Item description -->
                      <h5><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent l&auml;nk till <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                      <div class="posts-front-meta"><?php the_time('j F') ?></div>
                      <?php the_excerpt(); ?>
                      <!-- End - Item description -->
                    </div>
                    <!-- End - Post item -->
                    <?php endwhile; ?>
                  </section>
                  <!-- End - Latest posts -->
                </div>
                <!-- End - Page content -->
        </div>
      </section>
      <!-- End - Page body content -->
    </div>
  </section>
  <!-- End - Page body -->
  
<?php get_footer(); ?>