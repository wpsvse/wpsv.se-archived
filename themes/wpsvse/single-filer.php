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

                  <?php if (have_posts()) : ?>

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
                      <p><span class="file-cats"><?php echo get_the_term_list( $post->ID, 'filkategori', '', ', ', '' ); ?></span></p>
					  </section>
                      <!-- End - File information -->
                      <!-- File download link -->
                      <a href="<?php echo get_post_meta($post->ID, 'file_dl', true); ?>" class="file-dl-btn">Ladda ner</a>
                      <!-- End - File download link -->
                    </header>
                    <!-- End - File header -->
                    <!-- File desc -->
                    <section class="file-desc">
                      <h5>Beskrivning</h5>
                      <?php if ( has_post_thumbnail() ) { ?>
						  <?php if (get_post_meta($post->ID, 'previewurl', true) !== '') { ?>
                            <figure class="alignright">
                               <a class="element-holder media-link" href="<?php echo get_post_meta($post->ID, 'previewurl', true); ?>" title="Förhandsgranska <?php the_title_attribute(); ?>" target="_blank">
                                  <?php the_post_thumbnail( 'file-thumb-img' ); ?>
                               </a>
                            </figure>
                          <?php } else { ?>
                            <figure class="alignright">
								<?php
                                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                                    echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" class="element-holder" rel="prettyPhoto" >';
                                    the_post_thumbnail('file-thumb-img');
                                    echo '</a>'; 
                                ?>
                            </figure>
					  <?php }
					  } ?>
                      <?php the_content(); ?>
                      <?php if (get_post_meta($post->ID, 'previewurl', true) !== '') { ?>
                      		<a href="<?php echo get_post_meta($post->ID, 'previewurl', true); ?>" class="btn" target="_blank">Förhandsgranska</a>
                      <?php } ?>
                      <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                    </section>
                    <!-- End - File desc -->
                    <section class="file-full-meta box-1">
                    <h5 class="box-head">Filinformation:</h5><?php edit_post_link('Redigera', '<p class="file-edit"><em>', '</em></p>'); ?>
                      <ul class="list-info">
                      	<li>Tillagd: <strong><time datetime="<?php the_time('c') ?>"><?php the_time('Y-m-d') ?></time></strong></li>
                        <li>Typ: <strong><?php echo get_the_term_list( $post->ID, 'filkategori', '', ', ', '' ); ?></strong></li>
                        <li>Skapad av: <strong><?php echo '<a href="'.get_post_meta($post->ID, 'blogurl', true).'">'.get_post_meta($post->ID, 'filecreatername', true).'</a>'; if (get_post_meta($post->ID, 'blogurl', true) !== '') { echo ', <a href="'.get_post_meta($post->ID, 'xtraurl', true).'">'.get_post_meta($post->ID, 'xtraname', true).'</a>'; } ?></strong></li>
                        <li>Taggar: <strong><?php the_terms( $post->ID, 'filtagg', ' ', ', ', ' ' ); ?></strong></li>
                      </ul>
                      <ul class="list-info">
                        <?php 
						  $fileoutput = get_post_meta($post->ID, 'file_dl', true);
						  $dlfilename = str_replace('http://wpsv.se/','/home/wpsv_se/wpsv.se/',$fileoutput);
						  $dlfile = @filesize($dlfilename);
						  if (FALSE === $dlfile)
							  $dlfile = 'okänt';
						  else
							  $dlfile = size_format($dlfile,1);
						?>
                        <li>Filstorlek: <strong><?php echo $dlfile; ?></strong></li>
                        <li>Version: <strong><?php the_terms( $post->ID, 'filversion', ' ', ', ', ' ' ); ?></strong></li>
                        <li><strong><a href="<?php echo get_post_meta($post->ID, 'kurl', true); ?>" target="_blank">Kataloglänk - WordPress.org</a></strong></li>
                        <li><strong><a href="<?php echo get_post_meta($post->ID, 'tturl', true); ?>" target="_blank">Webbplats för tema/tillägg</a></strong></li>
                      </ul>
                      <div class="file-ver-search"><a href="<?php echo esc_url( home_url( '/filer/' ) ). '?s=' .get_post_meta($post->ID, 'ttname', true); ?>" class="file-ver-link btn">Visa alla versioner för <strong><?php echo get_post_meta($post->ID, 'ttname', true); ?></strong></a></div>
                    </section>
                    <a href="<?php the_permalink() ?>" rel="bookmark" class="file-permalink">Direktlänk till denna fil</a>
                    <a href="<?php echo esc_url( home_url( '/behover-du-hjalp-med-filen/' ) ) ?>" class="file-help-link">Behöver du hjälp med filen?</a>
                    
                    <!-- Social Share Buttons -->
                      <div id="social-share" style="margin-top:10px">
                        <div id="sharebuttons" data-url="<?php the_permalink() ?>" data-text="<?php the_title_attribute(); ?>"></div>
                      </div>
                    <!-- Social Share Buttons -->
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