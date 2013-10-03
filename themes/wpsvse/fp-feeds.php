<?php
/*
Template Name: Feeds, Startsida
*/
get_header(); 

if (is_page('poststab')) { ?>

                        <div id="tab1posts">
                        <?php // Custom loop using column class
                        $blogg_query = new WP_Query('showposts=9&post_type=blogg');?>
                        <?php foreach(new WP_Query_Columns($blogg_query, 3) as $column_count) : ?>
                          <div class="layout-1-3">
                            <ul class="widget-list recent-posts-list">
                              <?php while ($column_count--) : $blogg_query->the_post(); ?>
                              <!-- Post item -->
                              <li>
                              <a class="element-holder media-link" href="<?php the_permalink() ?>" title="Läs mer">
                                <?php 
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'tab-thumb-img' );
                                } else {
                                    echo '<img width="60" height="60" src="' . get_bloginfo('stylesheet_directory') .'/images/defaults/thumb-60x60.gif" alt="miniatyr" />';
                                } 
                                ?>
                              </a>
                                <a class="post-link" href="<?php the_permalink() ?>" rel="bookmark" title="<?php echo get_the_excerpt(); ?>">
                                  <?php the_title(); ?>
                                </a>
                                <time class="post-created" datetime="<?php the_time('c') ?>"><?php the_time('j M, Y') ?></time>
                                <span class="post-cats">Postat i <?php echo get_the_term_list( $post->ID, 'bloggkategori', '', ', ', '' ); ?></span>
                              </li>
                              <!-- End - Post item -->
                              <?php endwhile; ?>
                            </ul>
                          </div>
                          <?php endforeach; ?>
                          <div class="fp-more-link"><a href="<?php echo esc_url( home_url( '/blogg/' ) ); ?>">Gå till bloggen &rarr;</a></div>
                        </div>

<?php } if (is_page('commentstab')) { ?>

                        <div id="tab2comments">
                          <div class="layout-1-3">
                          <?php $comments = get_comments('status=approve&number=5&type=comment'); ?>
                              <ul class="widget-list comments-list">
                                <!-- Comment item -->
								<?php foreach ($comments as $comment) { $title = get_the_title($comment->comment_post_ID); ?>
                                <li>
                                  <a href="<?php echo get_permalink($comment->comment_post_ID); ?>#comment-<?php echo $comment->comment_ID; ?>" class="comment-link" title="Kommentar till inlägget <?php echo $title; ?>"><?php echo wp_html_excerpt( $comment->comment_content, 75 ); ?>&hellip;</a><br />
                                  <time class="comment-created" datetime="<?php echo $comment->comment_date_gmt; ?>"><?php echo $comment->comment_date; ?></time>
                                  <span class="widget-hint">
                                    <a href="#"><?php echo strip_tags($comment->comment_author); ?></a>
                                  </span>
                                </li>
                                <!-- End - Comment item -->
                                <?php } ?>
                              </ul>
                          </div>
                          
                          <div class="layout-1-3">
                          <?php $comments = get_comments('status=approve&number=5&offset=5&type=comment'); ?>
                              <ul class="widget-list comments-list">
                                <!-- Comment item -->
								<?php foreach ($comments as $comment) { $title = get_the_title($comment->comment_post_ID); ?>
                                <li>
                                  <a href="<?php echo get_permalink($comment->comment_post_ID); ?>#comment-<?php echo $comment->comment_ID; ?>" class="comment-link" title="Kommentar till inlägget <?php echo $title; ?>"><?php echo wp_html_excerpt( $comment->comment_content, 75 ); ?>&hellip;</a><br />
                                  <time class="comment-created" datetime="<?php echo $comment->comment_date_gmt; ?>"><?php echo $comment->comment_date; ?></time>
                                  <span class="widget-hint">
                                    <a href="#"><?php echo strip_tags($comment->comment_author); ?></a>
                                  </span>
                                </li>
                                <!-- End - Comment item -->
                                <?php } ?>
                              </ul>
                            </div>
                          
                          <div class="layout-1-3 layout-last">
                          <?php $comments = get_comments('status=approve&number=5&offset=10&type=comment'); ?>
                              <ul class="widget-list comments-list">
                                <!-- Comment item -->
								<?php foreach ($comments as $comment) { $title = get_the_title($comment->comment_post_ID); ?>
                                <li>
                                  <a href="<?php echo get_permalink($comment->comment_post_ID); ?>#comment-<?php echo $comment->comment_ID; ?>" class="comment-link" title="Kommentar till inlägget <?php echo $title; ?>"><?php echo wp_html_excerpt( $comment->comment_content, 75 ); ?>&hellip;</a><br />
                                  <time class="comment-created" datetime="<?php echo $comment->comment_date_gmt; ?>"><?php echo $comment->comment_date; ?></time>
                                  <span class="widget-hint">
                                    <a href="#"><?php echo strip_tags($comment->comment_author); ?></a>
                                  </span>
                                </li>
                                <!-- End - Comment item -->
                                <?php } ?>
                              </ul>
                          </div>
                          <div class="fp-more-link"><a href="<?php echo esc_url( home_url( '/blogg/' ) ); ?>">Visa inläggsakrivet &rarr;</a></div>
                        </div>

<?php } if (is_page('filestab')) { ?>

                        <div id="tab3files">
                        <?php // Custom loop using column class
                        $files_query = new WP_Query('showposts=9&post_type=filer');?>
                        <?php foreach(new WP_Query_Columns($files_query, 3) as $column_count) : ?>
                          <div class="layout-1-3">
                              <ul class="widget-list files-list">
                              <?php while ($column_count--) : $files_query->the_post(); ?>
                                <!-- File item -->
                                <li>
                                  <a href="<?php the_permalink() ?>" class="file-link" title="Ladda ner <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br />
                                  <span><time datetime="<?php the_time('c') ?>"><?php the_time('Y-m-d') ?></time> | <?php echo get_the_term_list( $post->ID, 'filkategori', '', ', ', '' ); ?></span>
                                </li>
                                <!-- End - File item -->
								<?php endwhile; ?>
                            </ul>
                          </div>
                          <?php endforeach; ?>
                          <div class="fp-more-link"><a href="<?php echo esc_url( home_url( '/filer/' ) ); ?>">Gå till filarkivet &rarr;</a></div>
                        </div>

<?php } if (is_page('buzztab')) { ?>

                        <div id="tab4buzz">
                          <div class="layout-1-3">
                              <ul class="widget-list rss-list">
                              <?php if(function_exists('fetch_feed')) {
								wpsv_hourly_feed();
								add_filter( 'wp_feed_cache_transient_lifetime', 'wpsv_hourly_feed');
								$myfeedsone = array('http://wpxl.se/feed/','http://blogg.binero.se/kategorier/wordpress/feed/');
								$feed = fetch_feed($myfeedsone);
								remove_filter('wp_feed_cache_transient_lifetime', 'wpsv_hourly_feed');
								
								$limit = $feed->get_item_quantity(5); // specify number of items
								$items = $feed->get_items(0, $limit); // create an array of items
								}
								if ($limit == 0) echo '<div>Flödet är tomt eller är inte tillgängligt.</div>';
								else foreach ($items as $item) : ?>
                                <!-- RSS item -->
                                <li>
                                  <strong><?php echo $item->get_feed()->get_title(); ?></strong> <a href="<?php echo $item->get_permalink(); ?>" class="rss-link" title="<?php echo substr($item->get_description(), 0, 75); ?>..."><?php echo $item->get_title(); ?></a><br />
                                  <span>den <time class="feed-posted" datetime="<?php echo $item->get_date('c'); ?>"><?php echo $item->get_local_date('%e %B, %Y'); ?> kl. <?php echo $item->get_date('H:i'); ?></time></span>
                                </li>
                                <!-- End - RSS item -->
                                <?php endforeach; ?>
                              </ul>
                          </div>
                          
                          <div class="layout-1-3">
                              <ul class="widget-list rss-list">
                              <?php if(function_exists('fetch_feed')) {
								wpsv_hourly_feed();
								add_filter( 'wp_feed_cache_transient_lifetime', 'wpsv_hourly_feed');
								$feed = fetch_feed(array('http://eyesx.com/kategori/wordpress/feed/','http://blogg.tkj.se/category/internet/bloggar/wordpress/feed/'));
								remove_filter('wp_feed_cache_transient_lifetime', 'wpsv_hourly_feed');
								
								$limit = $feed->get_item_quantity(5); // specify number of items
								$items = $feed->get_items(0, $limit); // create an array of items
								}
								if ($limit == 0) echo '<div>Flödet är tomt eller är inte tillgängligt.</div>';
								else foreach ($items as $item) : ?>
                                <!-- RSS item -->
                                <li>
                                  <strong><?php echo $item->get_feed()->get_title(); ?></strong> <a href="<?php echo $item->get_permalink(); ?>" class="rss-link" title="<?php echo substr($item->get_description(), 0, 75); ?>..."><?php echo $item->get_title(); ?></a><br />
                                  <span>den <time class="feed-posted" datetime="<?php echo $item->get_date('c'); ?>"><?php echo $item->get_local_date('%e %B, %Y'); ?> kl. <?php echo $item->get_date('H:i'); ?></time></span>
                                </li>
                                <!-- End - RSS item -->
                                <?php endforeach; ?>
                              </ul>
                          </div>
                          
                          <div class="layout-1-3 layout-last">
                              <ul class="widget-list rss-list">
                              <?php if(function_exists('fetch_feed')) {
								wpsv_hourly_feed();
								add_filter( 'wp_feed_cache_transient_lifetime', 'wpsv_hourly_feed');
								$feed = fetch_feed(array('http://feeds.feedburner.com/wpsnippets','http://www.webbgaraget.se/category/wordpress/feed/'));
								remove_filter('wp_feed_cache_transient_lifetime', 'wpsv_hourly_feed');
								
								$limit = $feed->get_item_quantity(5); // specify number of items
								$items = $feed->get_items(0, $limit); // create an array of items
								}
								if ($limit == 0) echo '<div>Flödet är tomt eller är inte tillgängligt.</div>';
								else foreach ($items as $item) : ?>
                                <!-- RSS item -->
                                <li>
                                  <strong><?php echo $item->get_feed()->get_title(); ?></strong> <a href="<?php echo $item->get_permalink(); ?>" class="rss-link" title="<?php echo substr($item->get_description(), 0, 75); ?>..."><?php echo $item->get_title(); ?></a><br />
                                  <span>den <time class="feed-posted" datetime="<?php echo $item->get_date('c'); ?>"><?php echo $item->get_local_date('%e %B, %Y'); ?> kl. <?php echo $item->get_date('H:i'); ?></time></span>
                                </li>
                                <!-- End - RSS item -->
                                <?php endforeach; ?>
                              </ul>
                          </div>
                          <div class="fp-more-link"><a href="<?php echo esc_url( home_url( '/wp-buzz/' ) ); ?>">Alla flöden i WP Buzz &rarr;</a></div>
                        </div>


<?php } if (is_page('twittertab')) { ?>

                        <div id="tab5twitter">
                          <div class="latest-tweets">
                          </div>                          
                          <div class="fp-more-link"><a href="http://twitter.com/WPSverige">Följ WordPress Sverige på Twitter &rarr;</a></div>
                        </div>

<?php }
get_footer(); ?>