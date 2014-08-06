<?php
/**
 * The template for displaying the front page.
 *
 * Contains all front page specific parts.
 *
 * @package WordPress Sverige
 */
get_header(); ?>

    <div class="container">
      <section id="header-content" class="row">
        <!-- Start welcome -->
        <section id="welcome" class="section col-md-7">
        
        	<?php while ( have_posts() ) : the_post();
            
            	the_content('Läs mer');
                
            endwhile; ?>
            
            <section id="latest-downloads">
                <h3>Ladda ner senaste WordPress</h3>
                    <div id="dl-btns" class="row">
                      <div class="col-md-8">
                            <a class="btn btn-blue btn-sv-se" href="#"><i class="fa fa-cloud-download"></i>WordPress 4.0 <span>(internationell)</span><br /><span>Det officiella paketet från wordpress.org</span></a>
                          </div>
                          <p class="col-md-12"><a href="#" class="extra-download-link">Behöver du andra format? Ladda ner dom här &rarr;</a></p>
                    </div>
            </section>
        </section>
        <!-- End welcome -->
        <!-- Start Slider -->
        <section id="header-slider" class="section carousel slide col-md-5 hidden-xs">
        <!-- Start Slider Navigation -->
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#header-slider"></li>
            <li data-slide-to="1" data-target="#header-slider"></li>
        </ol>
        <!-- End Slider Navigation -->
        <div class="carousel-inner">
          <!-- Start SLIDER -->
		  <?php // WP_Query arguments
          $slider_args = array (
		  		'posts_per_page' 	=> '3',
		  		'post_type' 		=> 'wpsvse_slider' 
		  );
          
          // The Query
          $slider_query = new WP_Query( $slider_args );
          
          // The Loop
          if ( $slider_query->have_posts() ) {
              while ( $slider_query->have_posts() ) {
                  $slider_query->the_post(); ?>

              <div class="item row">
              	  <?php the_content(); ?>
              </div>

          <?php }
          }
          
          // Restore original Post Data
          wp_reset_postdata(); ?>
          <!-- End SLIDER -->
        </div>
        </section>
      </section>
    </div>
    <!-- End Slider -->
   	</div>
	<!-- End Top-part -->


	<!-- Start Quick Buttons -->
    <section id="quick-buttons" class="section">
		<div class="container">
			<div class="row">
              <!-- Start QUICK BUTTONS -->
				<?php get_template_part( 'quickbuttons' ); ?>
              <!-- End QUICK BUTTONS -->
            </div>
        </div>
    </section>
    <!-- Start Quick Buttons -->

    <!-- Start Latest News -->
	<section id="latest-news" class="section">
		<div class="container">
			<div class="row">
              <!-- Start NEWS LOOP -->
              <?php // WP_Query arguments
			  $news_args = array ( 'posts_per_page' => '3' );
			  
			  // The Query
			  $news_query = new WP_Query( $news_args );
			  
			  // The Loop
			  if ( $news_query->have_posts() ) {
				  while ( $news_query->have_posts() ) {
					  $news_query->the_post(); ?>
                      
                    <div class="col-md-4 article-item">
                        <article>
                          <div class="news-meta">
                              <div class="news-comments"><?php comments_number( '0 kommentarer', '1 kommentar', '% kommentarer' ); ?></div>
                              <time datetime="<?php the_time('c'); ?>"><?php the_time('l, j F'); ?></time>
                              <a href="<?php the_permalink() ?>" title="Direktlänk till <?php the_title_attribute(); ?>" class="img-overlay">
							  <?php if ( has_post_thumbnail() ) {	
                                	the_post_thumbnail( 'post-image', array('class' => 'img-responsive') );
                        	  } else { ?>
                              	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/default.jpg" />
                              <?php } ?>
                              </a>
                          </div>
                          <div class="news-title-frame">
                              <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                              <div class="news-category">Postat under <span class="news-category"><?php the_category(', '); ?></span></div>
                          </div>
                        </article>
                    </div>
                      
			  <?php  }
			  }
			  
			  // Restore original Post Data
			  wp_reset_postdata(); ?>
              <!-- End NEWS LOOP -->
			</div>
		</div>
	</section>
	<!-- End Latest News -->
	
	<!-- Start Sponsor -->
	<section id="sponsor" class="section">
		<div class="container">
			<div class="row">
             <!-- Start SPONSOR WIDGET -->
	             <?php if ( ! dynamic_sidebar( 'sponsor-widget' ) ) : endif; // end sidebar widget area ?>
             <!-- End SPONSOR WIDGET -->
			</div>		
		</div>
	</section>
	<!-- End Sponsor -->

	<!-- Start Latest Blog Header -->			
	<section id="latest-blog-header" class="section">
		<div class="container">	
			<div class="row">
				<div class="section-headline white-heading">
					<h2>Senaste ur bloggen</h2>
					<span>Det senaste ur <?php bloginfo( 'name' ); ?>s blogg</span>
				</div>
			</div>	
		</div>
        <div class="carr-down"></div>
	</section>
	<!-- End Latest Blog Header -->

	<!-- Start Latest Blog Items -->
	<section id="latest-blog-items" class="section">
	<div class="container">
        <div class="row">
          <div class="blog-item-content">
              <!-- Start BLOG LOOP -->
              <?php // WP_Query arguments
              $args = array (
                  'post_type'              => 'wpsvse_blog',
                  'posts_per_page'         => '4',
              );
              
              // The Query
              $blog_query = new WP_Query( $args );
              
              // The Loop
              if ( $blog_query->have_posts() ) {
                  while ( $blog_query->have_posts() ) {
                      $blog_query->the_post(); ?>
                      
                    <article class="col-md-3 blog-item">
                        <a href="<?php the_permalink() ?>" title="Direktlänk till <?php the_title_attribute(); ?>" class="img-overlay">
						<?php if ( has_post_thumbnail() ) {	
                              the_post_thumbnail( 'post-image', array('class' => 'img-responsive img-thumbnail') );
                        } else { ?>
                          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/default.jpg" />
                        <?php } ?>
                        </a>
                        <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                        <span><i class="fa fa-clock-o"></i> <time datetime="<?php the_time('c'); ?>"><?php the_time('j F'); ?></time> <i class="fa fa-comments-o"></i> <?php comments_number( '0 kommentarer', '1 kommentar', '% kommentarer' ); ?></span>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink() ?>" class="btn-primary btn-sm">Läs mer</a>
                    </article>
                
              <?php  }
              }
              
              // Restore original Post Data
              wp_reset_postdata(); ?>
              <!-- End BLOG LOOP -->
            <div class="clearfix"></div>
          </div>
        </div>
	</div>
	</section>
	<!-- End Latest Blog Items -->

	<!-- Start Latest Forum -->
	<section id="latest-forum" class="section">
		<div class="container">
			<div class="row">
				<div class="section-headline">
					<h2>Diskussionsforum</h2>
					<span>Behöver du hjälp, har du funderingar, vill du hjälpa andra eller vara en del av communityn? Då är vårt forum platsen för dig!</span>
				</div>
			</div>
			<div class="row">
              	
            	<div class="latest-forum-topics col-md-9">
                <!-- Start LATEST FORUM POSTS -->
                	<?php echo do_shortcode('[bbp-topic-index]'); ?>    
                <!-- End LATEST FORUM POSTS -->
                </div>
                
                <div id="latest-forum-sidebar" class="col-md-3">
                  <div class="forum-widget bbp-forum-search">
                  	<h3>Hitta svar</h3>
                    <p>Vårt forum är som en stor databas med frågor och svar. Testa att söka efter din fråga och få ett svar direkt&hellip;</p>
                    <div class="input-group">
                     <!-- Start INSERT BBPRESS SEARCH FORM -->
                      <input type="text" class="form-control">
                      <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">Sök</button>
                      </span>
                     <!-- End INSERT BBPRESS SEARCH FORM -->
                    </div><!-- /input-group -->
                  </div>
                  
                  <div class="forum-widget new-bbp-post">
                	<h3>Ställ en fråga</h3>
                    <p>Behöver du hjälp? Då är vårt forum den perfekta platsen för att be om support. Skapa ett inlägg med din fråga nu&hellip;</p>
                    <!-- Start INSERT BBPRESS NEW POST BUTTON -->
                    <button type="button" class="btn btn-dark btn-bbp-new-post"><i class="fa fa-plus-square"></i> Nytt inlägg</button>
                    <!-- End INSERT BBPRESS NEW POST BUTTON -->
                  </div>
                  
                  <!-- Start BBPRESS TAGCLOUD -->
                  <div class="forum-widget bbp-forum-tagcloud widget_tag_cloud">
                      <h3 class="widgettitle">Populära taggar</h3>
                      <div class="tagcloud">
                        <?php echo do_shortcode('[bbp-topic-tags]'); ?> 
                      </div>
                  </div>
                  <!-- End BBPRESS TAGCLOUD -->
                </div>
			</div>
		</div>
	</section>
	<!-- End Latest Forum -->
	
	<!-- Start Statistics -->
	<section id="statistics" class="section">
		<div class="container">
			<div class="row">
              <!-- Start SITEWIDE STATISTICS -->
                <?php $stats = bbp_get_statistics(); ?>
				<?php do_action( 'bbp_before_statistics' ); ?>
				
                <div class="col-md-3 col-xs-6">                                        
					<div class="stats">
						<i class="fa fa-group"></i>
						<h1><?php echo esc_html( $stats['user_count'] ); ?><span>Medlemmar</span></h1>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="stats">
						<i class="fa fa-thumb-tack"></i>
						<h1><?php echo esc_html( $stats['topic_count'] ); ?><span>Ämnen</span></h1>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="stats">
						<i class="fa fa-comments"></i>
						<h1><?php echo esc_html( $stats['reply_count'] ); ?><span>Svar</span></h1> 
					</div>
				</div>
 
                <?php do_action( 'bbp_after_statistics' ); ?>
                
                <?php unset( $stats ); ?>

				<div class="col-md-3 col-xs-6">
					<div class="stats">
						<i class="fa fa-sitemap"></i>
						<h1><?php echo bp_get_total_group_count(); ?><span>Grupper</span></h1>
					</div>
				</div>
              <!-- End SITEWIDE STATISTICS -->
			</div>
		</div>
	</section>
	<!-- End Statistics -->
	
	<!-- Start Activity -->
	<section id="activity" class="section">
		<div class="container">
			<div class="row">
				<div class="section-headline">
					<h2>Aktivitetsflöde</h2>
					<span>Följ den senaste aktiviteten på <?php bloginfo( 'name' ); ?></span>
				</div>
			</div>
			<div class="row">
				<?php do_action( 'bp_before_directory_activity' ); ?>
            
            <div id="buddypress">
            
                <?php do_action( 'bp_before_directory_activity_content' ); ?>
            
                <?php if ( is_user_logged_in() ) : ?>
                
                  <div class="bp-statuses">            
                    <?php bp_get_template_part( 'activity/post-form' ); ?>
                  </div>
            
                <?php endif; ?>
            
                <?php do_action( 'template_notices' ); ?>
            
                <div class="item-list-tabs activity-type-tabs" role="navigation">
                    <ul>
                        <?php do_action( 'bp_before_activity_type_tab_all' ); ?>
            
                        <li class="selected" id="activity-all"><a href="<?php bp_activity_directory_permalink(); ?>" title="<?php _e( 'The public activity for everyone on this site.', 'buddypress' ); ?>"><?php printf( __( 'All Members <span>%s</span>', 'buddypress' ), number_format_i18n( bp_get_total_member_count() ) ); ?></a></li>
            
                        <?php if ( is_user_logged_in() ) : ?>
            
                            <?php do_action( 'bp_before_activity_type_tab_friends' ); ?>
            
                            <?php if ( bp_is_active( 'friends' ) ) : ?>
            
                                <?php if ( bp_get_total_friend_count( bp_loggedin_user_id() ) ) : ?>
            
                                    <li id="activity-friends"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/' . bp_get_friends_slug() . '/'; ?>" title="<?php _e( 'The activity of my friends only.', 'buddypress' ); ?>"><?php printf( __( 'My Friends <span>%s</span>', 'buddypress' ), number_format_i18n( bp_get_total_friend_count( bp_loggedin_user_id() ) ) ); ?></a></li>
            
                                <?php endif; ?>
            
                            <?php endif; ?>
            
                            <?php do_action( 'bp_before_activity_type_tab_groups' ); ?>
            
                            <?php if ( bp_is_active( 'groups' ) ) : ?>
            
                                <?php if ( bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ) : ?>
            
                                    <li id="activity-groups"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/' . bp_get_groups_slug() . '/'; ?>" title="<?php _e( 'The activity of groups I am a member of.', 'buddypress' ); ?>"><?php printf( __( 'My Groups <span>%s</span>', 'buddypress' ), number_format_i18n( bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ) ); ?></a></li>
            
                                <?php endif; ?>
            
                            <?php endif; ?>
            
                            <?php do_action( 'bp_before_activity_type_tab_favorites' ); ?>
            
                            <?php if ( bp_get_total_favorite_count_for_user( bp_loggedin_user_id() ) ) : ?>
            
                                <li id="activity-favorites"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/favorites/'; ?>" title="<?php _e( "The activity I've marked as a favorite.", 'buddypress' ); ?>"><?php printf( __( 'My Favorites <span>%s</span>', 'buddypress' ), number_format_i18n( bp_get_total_favorite_count_for_user( bp_loggedin_user_id() ) ) ); ?></a></li>
            
                            <?php endif; ?>
            
                            <?php if ( bp_activity_do_mentions() ) : ?>
            
                                <?php do_action( 'bp_before_activity_type_tab_mentions' ); ?>
            
                                <li id="activity-mentions"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/mentions/'; ?>" title="<?php _e( 'Activity that I have been mentioned in.', 'buddypress' ); ?>"><?php _e( 'Mentions', 'buddypress' ); ?><?php if ( bp_get_total_mention_count_for_user( bp_loggedin_user_id() ) ) : ?> <strong><span><?php printf( _nx( '%s new', '%s new', bp_get_total_mention_count_for_user( bp_loggedin_user_id() ), 'Number of new activity mentions', 'buddypress' ), number_format_i18n( bp_get_total_mention_count_for_user( bp_loggedin_user_id()  )) ); ?></span></strong><?php endif; ?></a></li>
            
                            <?php endif; ?>
            
                        <?php endif; ?>
            
                        <?php do_action( 'bp_activity_type_tabs' ); ?>
                    </ul>
                </div><!-- .item-list-tabs -->
            
                <div class="item-list-tabs no-ajax" id="subnav" role="navigation">
                    <ul>
                        <li class="feed"><a href="<?php bp_sitewide_activity_feed_link(); ?>" title="<?php _e( 'RSS Feed', 'buddypress' ); ?>"><i class="fa fa-rss-square"></i> <?php _e( 'RSS', 'buddypress' ); ?></a></li>
            
                        <?php do_action( 'bp_activity_syndication_options' ); ?>
            
                        <li id="activity-filter-select" class="last">
                            <label for="activity-filter-by"><?php _e( 'Show:', 'buddypress' ); ?></label>
                            <select id="activity-filter-by" class="form-control">
                                <option value="-1"><?php _e( 'Everything', 'buddypress' ); ?></option>
                                <option value="activity_update"><?php _e( 'Updates', 'buddypress' ); ?></option>
            
                                <?php if ( bp_is_active( 'blogs' ) ) : ?>
            
                                    <option value="new_blog_post"><?php _e( 'Posts', 'buddypress' ); ?></option>
                                    <option value="new_blog_comment"><?php _e( 'Comments', 'buddypress' ); ?></option>
            
                                <?php endif; ?>
            
                                <?php if ( bp_is_active( 'forums' ) ) : ?>
            
                                    <option value="new_forum_topic"><?php _e( 'Forum Topics', 'buddypress' ); ?></option>
                                    <option value="new_forum_post"><?php _e( 'Forum Replies', 'buddypress' ); ?></option>
            
                                <?php endif; ?>
            
                                <?php if ( bp_is_active( 'groups' ) ) : ?>
            
                                    <option value="created_group"><?php _e( 'New Groups', 'buddypress' ); ?></option>
                                    <option value="joined_group"><?php _e( 'Group Memberships', 'buddypress' ); ?></option>
            
                                <?php endif; ?>
            
                                <?php if ( bp_is_active( 'friends' ) ) : ?>
            
                                    <option value="friendship_accepted,friendship_created"><?php _e( 'Friendships', 'buddypress' ); ?></option>
            
                                <?php endif; ?>
            
                                <option value="new_member"><?php _e( 'New Members', 'buddypress' ); ?></option>
            
                                <?php do_action( 'bp_activity_filter_options' ); ?>
            
                            </select>
                        </li>
                    </ul>
                </div><!-- .item-list-tabs -->
            
                <?php do_action( 'bp_before_directory_activity_list' ); ?>
            
                <div class="activity" role="main">
            
                    <?php bp_get_template_part( 'activity/activity-loop' ); ?>
            
                </div><!-- .activity -->
            
                <?php do_action( 'bp_after_directory_activity_list' ); ?>
            
                <?php do_action( 'bp_directory_activity_content' ); ?>
            
                <?php do_action( 'bp_after_directory_activity_content' ); ?>
            
                <?php do_action( 'bp_after_directory_activity' ); ?>
            
            </div>
			</div>
		</div>
	</section>
	<!-- End Activity -->
	
	<!-- Start Other -->
	<section id="other" class="section">
		<div class="container">
			<div class="row">
              <div class="col-md-6">
				<div class="section-headline">
					<h2>Aktiva grupper</h2>
					<span>Skapa kontakter via olika grupper inom WordPress</span>
				</div>
                <div id="bp-groups">
                    	<?php bp_get_template_part( 'groups/front' ); ?>
                </div>
              </div>
              <div class="col-md-6">
				<div class="section-headline">
					<h2>Vad skrivs om WordPress?</h2>
					<span>Få koll på vad som skrivs på andra sidor om WordPress <a href="#">#wpse</a></span>
				</div>
                <div id="twitter-feed">
                    	<a class="twitter-timeline" width="100%" href="https://twitter.com/hashtag/wpse" data-widget-id="497073041344442368" data-chrome="noborders transparent">#wpse Tweets</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
              </div>
			</div>
			<div class="row">
			</div>
		</div>
	</section>
	<!-- End Other -->
	
	<!-- Start Social Media -->
	<section id="social-media" class="section">
		<div class="container">
			<div class="row">
				<div class="section-headline nomargin-bottom white-heading">
					<h2>Socialt med WordPress</h2>
					<span>Skapa kontakter socialt med WordPress som gemensam nämnare</span>
                    
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="form-container">
                      <!-- Start INSERT TWITTER @WPSVERIGE -->
						<p>
							WordPress Sverige på Twitter - @WPSverige
						</p>
                      <!-- End INSERT TWITTER @WPSVERIGE -->
					</div>
					<ul class="social">
                     <!-- Start INSERT SOCIAL NETWORK ICONS -->
                      <li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
                     <!-- End INSERT SOCIAL NETWORK ICONS -->
					</ul>
				</div>
			</div>		
		</div>
	</section>
	<!-- End Social Media -->

<?php get_footer(); ?>