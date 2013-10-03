                <!-- Page sidebar -->
                <aside class="page-sidebar">
					<?php if ( 'filer' == get_post_type() && is_single() || is_page('1609') ) { ?>
                        <section class="file-sb-search widget-container">
                            <form action="<?php echo esc_url( home_url( '/filer/' ) ); ?>" id="site-sb-search" method="post">
                              <fieldset><legend>Hitta filer</legend><label for="site-sb-search-submit" class="hidden">Sök</label>
                              <input class="sidebar-search" name="s" placeholder="Sök efter fil..." type="text" />
                              <input id="site-sb-search-submit" type="submit" value="Sök" /></fieldset>
                            </form>
                        </section>
                    <?php }
                     
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidofält - Övre') ) : 
					endif;
               		
                    if ( 'blogg' == get_post_type() ) {
                    $comments = get_comments('status=approve&number=5&type=comment'); ?>
                    <section class="widget-container">
                    <h2 class="widget-heading">Kommentarer</h2>
                        <ul class="widget-list comments-list widget_recent_comments">
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
                        </section>
                    <?php }
                    
                    if ( 'filer' == get_post_type() && is_single() || is_page('1609') ) { ?>
                    <section class="widget-container widget_tag_cloud">
                    <h2 class="widget-heading">Populära taggar</h2>
                    <div class="tagcloud">
                    	<?php wp_tag_cloud('taxonomy=filtagg&order=rand&number=60'); ?>
                    </div>
                    </section>
                    <?php }
                    
                	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidofält - Nedre') ) : 
					endif; 
					?>
                </aside>
                <!-- End - Page sidebar -->
