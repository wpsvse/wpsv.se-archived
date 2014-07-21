<?php
/**
 * The template for displaying the front page.
 *
 * Contains all front page specific parts.
 *
 * @package WordPress Sverige
 */
?>

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
                            <a class="btn btn-blue btn-sv-se" href="#"><i class="fa fa-cloud-download"></i>WordPress 4.0 (internationell)<br /><span>Det officiella paketet från wordpress.org</span></a>
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
          <!-- Start INSERT SLIDER LOOP -->
            <div class="item row active">
                <div class="text-center">
                    <img alt="" class="img-responsive" src="img/slider-1-screens.png">
                </div>
            </div>
            <div class="item row">
                <div class="col-xs-5 text-center">
                    <img alt="" class="img-responsive" src="img/placeholder.png">
                </div>
                <div class="col-xs-7">
                    <h2>Landing Page For Any Purpose.</h2>
                    <p class="hidden-xs">
                         Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.
                    </p>
                    <ul class="listings hidden-xs">
                        <li><i class="fa fa-check"></i>Many addon features</li>
                        <li><i class="fa fa-check"></i>Fully responsive &amp; adaptive</li>
                        <li><i class="fa fa-check"></i>SEO optimized</li>
                        <li><i class="fa fa-check"></i>Attractive with a modern touch</li>
                    </ul>
                </div>
            </div>
          <!-- End INSERT SLIDER LOOP -->
        </div>
        </section>
      </section>
    </div>
    <!-- End Slider -->

	<!-- Start Quick Buttons -->
    <section id="quick-buttons" class="section">
		<div class="container">
			<div class="row">
              <!-- Start INSERT TEMPLATE PART FOR QUICK BUTTONS -->
            	<div id="support-btn" class="col-md-3 quick-btn">
                	<a href="#" class="quick-link">
                        <i class="fa fa-medkit"></i>
                        <h2>Support</h2>
                        <span>Ta del av support för WordPress</span>
                    </a>
                </div>
                <div id="forum-btn" class="col-md-3 quick-btn">
                	<a href="#" class="quick-link">
                        <i class="fa fa-comments"></i>
                        <h2>Forum</h2>
                        <span>Diskussioner och hjälp via vårt forum</span>
                    </a>
                </div>
                <div id="files-btn" class="col-md-3 quick-btn">
                	<a href="#" class="quick-link">
                        <i class="fa fa-cloud-download"></i>
                        <h2>Filer</h2>
                        <span>Ladda ner översättningar, tillägg och teman</span>
                    </a>
                </div>
                <div id="community-btn" class="col-md-3 quick-btn">
                	<a href="#" class="quick-link">
                        <i class="fa fa-group"></i>
                        <h2>Community</h2>
                        <span>Var en del av den svenska communityn</span>
                    </a>
                </div>
              <!-- End INSERT TEMPLATE PART FOR QUICK BUTTONS -->
            </div>
        </div>
    </section>
    <!-- Start Quick Buttons -->

    <!-- Start Latest News -->
	<section id="latest-news" class="section">
		<div class="container">
			<div class="row">
              <!-- Start INSERT NEWS LOOP -->
            	<div class="col-md-4 article-item">
                	<article>
                      <div class="news-meta">
                          <div class="news-comments">0 kommentarer</div>
                          <time>Måndag, 21 januari</time>
                          <img class="img-responsive" src="img/default.jpg" />
                      </div>
                      <div class="news-title-frame">
                          <h3>En titel för en nyhet</h3>
                          <div class="news-category">Postat under <span class="news-category">Nyheter</span></div>
                      </div>
                    </article>
                </div>
                <div class="col-md-4 article-item">
                	<article>
                      <div class="news-meta">
                          <div class="news-comments">0 kommentarer</div>
                          <time>Måndag, 21 januari</time>
                          <img class="img-responsive" src="img/default.jpg" />
                      </div>
                      <div class="news-title-frame">
                          <h3>En titel för en nyhet</h3>
                          <div class="news-category">Postat under <span class="news-category">Nyheter</span></div>
                      </div>
                    </article>
                </div>
                <div class="col-md-4 article-item">
                	<article>
                      <div class="news-meta">
                          <div class="news-comments">0 kommentarer</div>
                          <time>Måndag, 21 januari</time>
                          <img class="img-responsive" src="img/default.jpg" />
                      </div>
                      <div class="news-title-frame">
                          <h3>En titel för en nyhet</h3>
                          <div class="news-category">Postat under <span class="news-category">Nyheter</span></div>
                      </div>
                    </article>
                </div>
              <!-- End INSERT NEWS LOOP -->
			</div>
		</div>
	</section>
	<!-- End Latest News -->
	
	
	<!-- Start Sponsor -->
	<section id="sponsor" class="section">
		<div class="container">
			<div class="row">
             <!-- Start INSERT AD WIDGET -->
              <a href="#" class="sponsor-link">
                WordPress Sverige sponsras av
            	<img src="img/fsdata_sponsor.png" alt="" />
                www.fsdata.se
              </a>
             <!-- End INSERT AD WIDGET -->
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
          <!-- Start INSERT CPT BLOG LOOP -->
            <article class="col-md-3 blog-item">
                <img src="img/default.jpg" class="img-responsive img-thumbnail" alt="" />
                <h4>En bloggpost här</h4>
                <span>29 januari</span>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                <a href="#" class="btn-primary btn-sm">Läs mer</a>
            </article>
            <article class="col-md-3 blog-item">
                <img src="img/default.jpg" class="img-responsive img-thumbnail" alt="" />
                <h4>En bloggpost här</h4>
                <span>29 januari</span>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                <a href="#" class="btn-primary btn-sm">Läs mer</a>
            </article>
            <article class="col-md-3 blog-item">
                <img src="img/default.jpg" class="img-responsive img-thumbnail" alt="" />
                <h4>En bloggpost här</h4>
                <span>29 januari</span>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                <a href="#" class="btn-primary btn-sm">Läs mer</a>
            </article>
            <article class="col-md-3 blog-item">
                <img src="img/default.jpg" class="img-responsive img-thumbnail" alt="" />
                <h4>En bloggpost här</h4>
                <span>29 januari</span>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                <a href="#" class="btn-primary btn-sm">Läs mer</a>
            </article>
           <!-- End INSERT CPT BLOG LOOP -->
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
              <!-- Start INSERT BBPRESS LATEST FORUM POST LOOP -->
            	<div class="latest-forum-topics col-md-9">
                    <ul id="bbp-forum-63467" class="bbp-topics">
                        <li class="bbp-header">
                            <ul class="forum-titles">
                                <li class="bbp-topic-title">Ämne</li>
                                <li class="bbp-topic-counts">Inlägg</li>
                                <li class="bbp-topic-freshness">Aktivitet</li>
                            </ul>
                        </li>
                        <li class="bbp-body">
                    <ul id="topic-120382" class="post-120382 topic type-topic status-publish hentry odd bbp-parent-forum-63467 user-id-12442">
                        <li class="bbp-topic-title">
                            <a class="bbp-topic-permalink" href="http://wpsv.se/forum/amne/text-och-bild/" title="Text och bild">Text och bild</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-started-by">Startat av: <a href="http://wpsv.se/medlemmar/beinar/" title="Visa beinar's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/823e8fe82a8ab08f374253980915ccc8?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-12442-avatar avatar-14 photo" width="14" height="14" alt="Avatar för beinar"></a>&nbsp;<a href="http://wpsv.se/medlemmar/beinar/" title="Visa beinar's profil" class="bbp-author-name" rel="nofollow">beinar</a></span>
                            </p>
                        </li>
                        <li class="bbp-topic-counts"><i class="fa fa-comment"></i><div class="bbp-count-badge">25</div></li>
                        <li class="bbp-topic-freshness">
                            <a href="http://wpsv.se/forum/amne/text-och-bild/#post-126878" title="Sv: Text och bild">3 månader, 2 veckor sedan</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author"><a href="http://wpsv.se/medlemmar/alexbangkok/" title="Visa AlexBangkok's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/2f93fad1510ef3b31dbf233a2c2876b5?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-11908-avatar avatar-14 photo" width="14" height="14" alt="Avatar för AlexBangkok"></a>&nbsp;<a href="http://wpsv.se/medlemmar/alexbangkok/" title="Visa AlexBangkok's profil" class="bbp-author-name" rel="nofollow">AlexBangkok</a></span>
                            </p>
                        </li>
                    </ul><!-- #topic-120382 -->
                    <ul id="topic-120373" class="post-120373 topic type-topic status-publish hentry even bbp-parent-forum-63467 user-id-1695">
                        <li class="bbp-topic-title">
                            <a class="bbp-topic-permalink" href="http://wpsv.se/forum/amne/blanda-wordpress-och-egenutvecklade-sidor-pa-en-sajt/" title="Blanda WordPress och egenutvecklade sidor på en sajt">Blanda WordPress och egenutvecklade sidor på en sajt</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-started-by">Startat av: <a href="http://wpsv.se/medlemmar/bruse/" title="Visa bruse's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/693685197913e4037097eacae4d78b61?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-1695-avatar avatar-14 photo" width="14" height="14" alt="Avatar för bruse"></a>&nbsp;<a href="http://wpsv.se/medlemmar/bruse/" title="Visa bruse's profil" class="bbp-author-name" rel="nofollow">bruse</a></span>
                            </p>
                        </li>
                        <li class="bbp-topic-counts"><i class="fa fa-comment"></i><div class="bbp-count-badge">10</div></li>
                        <li class="bbp-topic-freshness">
                            <a href="http://wpsv.se/forum/amne/blanda-wordpress-och-egenutvecklade-sidor-pa-en-sajt/#post-126875" title="Sv: Blanda WordPress och egenutvecklade sidor på en sajt">3 månader, 2 veckor sedan</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author"><a href="http://wpsv.se/medlemmar/bruse/" title="Visa bruse's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/693685197913e4037097eacae4d78b61?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-1695-avatar avatar-14 photo" width="14" height="14" alt="Avatar för bruse"></a>&nbsp;<a href="http://wpsv.se/medlemmar/bruse/" title="Visa bruse's profil" class="bbp-author-name" rel="nofollow">bruse</a></span>
                            </p>
                        </li>
                    </ul><!-- #topic-120373 -->
                    <ul id="topic-120379" class="post-120379 topic type-topic status-publish hentry odd bbp-parent-forum-63467 user-id-8645">
                        <li class="bbp-topic-title">
                            <a class="bbp-topic-permalink" href="http://wpsv.se/forum/amne/vad-har-hant-min-forstasida-visas-markligt/" title="Vad har hänt? Min förstasida visas märkligt…">Vad har hänt? Min förstasida visas märkligt…</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-started-by">Startat av: <a href="http://wpsv.se/medlemmar/ottossonphoto/" title="Visa OttossonPhoto's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/e5dc6c4778abeddf5e13f89d44a1f29c?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-8645-avatar avatar-14 photo" width="14" height="14" alt="Avatar för OttossonPhoto"></a>&nbsp;<a href="http://wpsv.se/medlemmar/ottossonphoto/" title="Visa OttossonPhoto's profil" class="bbp-author-name" rel="nofollow">OttossonPhoto</a></span>
                            </p>
                        </li>
                        <li class="bbp-topic-counts"><i class="fa fa-comment"></i><div class="bbp-count-badge">3</div></li>
                        <li class="bbp-topic-freshness">
                            <a href="http://wpsv.se/forum/amne/vad-har-hant-min-forstasida-visas-markligt/#post-126866" title="Sv: Vad har hänt? Min förstasida visas märkligt…">3 månader, 3 veckor sedan</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author"><a href="http://wpsv.se/medlemmar/ottossonphoto/" title="Visa OttossonPhoto's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/e5dc6c4778abeddf5e13f89d44a1f29c?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-8645-avatar avatar-14 photo" width="14" height="14" alt="Avatar för OttossonPhoto"></a>&nbsp;<a href="http://wpsv.se/medlemmar/ottossonphoto/" title="Visa OttossonPhoto's profil" class="bbp-author-name" rel="nofollow">OttossonPhoto</a></span>
                            </p>
                        </li>
                    </ul><!-- #topic-120379 -->
                    <ul id="topic-120314" class="post-120314 topic type-topic status-publish hentry even bbp-parent-forum-63467 user-id-388">
                        <li class="bbp-topic-title">
                            <a class="bbp-topic-permalink" href="http://wpsv.se/forum/amne/dolt-inlagg-bara-for-anvandare-hur-gor-man/" title="Dolt inlägg bara för användare, hur gör man?">Dolt inlägg bara för användare, hur gör man?</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-started-by">Startat av: <a href="http://wpsv.se/medlemmar/eke/" title="Visa eke's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/fa5c9f8d0c951e955e9f15c520a4b508?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-388-avatar avatar-14 photo" width="14" height="14" alt="Avatar för eke"></a>&nbsp;<a href="http://wpsv.se/medlemmar/eke/" title="Visa eke's profil" class="bbp-author-name" rel="nofollow">eke</a></span>
                            </p>
                        </li>
                        <li class="bbp-topic-counts"><i class="fa fa-comment"></i><div class="bbp-count-badge">1</div></li>
                        <li class="bbp-topic-freshness">
                            <a href="http://wpsv.se/forum/amne/dolt-inlagg-bara-for-anvandare-hur-gor-man/#post-126840" title="Sv: Dolt inlägg bara för användare, hur gör man?">3 månader, 3 veckor sedan</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author"><a href="http://wpsv.se/medlemmar/eke/" title="Visa eke's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/fa5c9f8d0c951e955e9f15c520a4b508?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-388-avatar avatar-14 photo" width="14" height="14" alt="Avatar för eke"></a>&nbsp;<a href="http://wpsv.se/medlemmar/eke/" title="Visa eke's profil" class="bbp-author-name" rel="nofollow">eke</a></span>
                            </p>
                        </li>
                    </ul><!-- #topic-120314 -->
                    <ul id="topic-120368" class="post-120368 topic type-topic status-publish hentry odd bbp-parent-forum-63467 user-id-12781">
                        <li class="bbp-topic-title">
                            <a class="bbp-topic-permalink" href="http://wpsv.se/forum/amne/allt-ar-lankat-till-min-hemsida-varfor/" title="Allt är länkat till min hemsida. Varför?">Allt är länkat till min hemsida. Varför?</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-started-by">Startat av: <a href="http://wpsv.se/medlemmar/annsofie/" title="Visa AnnSofie's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/821c45d6da644337ba96338e64456c78?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-12781-avatar avatar-14 photo" width="14" height="14" alt="Avatar för AnnSofie"></a>&nbsp;<a href="http://wpsv.se/medlemmar/annsofie/" title="Visa AnnSofie's profil" class="bbp-author-name" rel="nofollow">AnnSofie</a></span>
                            </p>
                        </li>
                        <li class="bbp-topic-counts"><i class="fa fa-comment"></i><div class="bbp-count-badge">11</div></li>
                        <li class="bbp-topic-freshness">
                            <a href="http://wpsv.se/forum/amne/allt-ar-lankat-till-min-hemsida-varfor/#post-126807" title="Sv: Allt är länkat till min hemsida. Varför?">3 månader, 3 veckor sedan</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author"><a href="http://wpsv.se/medlemmar/annsofie/" title="Visa AnnSofie's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/821c45d6da644337ba96338e64456c78?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-12781-avatar avatar-14 photo" width="14" height="14" alt="Avatar för AnnSofie"></a>&nbsp;<a href="http://wpsv.se/medlemmar/annsofie/" title="Visa AnnSofie's profil" class="bbp-author-name" rel="nofollow">AnnSofie</a></span>
                            </p>
                        </li>
                    </ul><!-- #topic-120368 -->
                    <ul id="topic-120365" class="post-120365 topic type-topic status-publish hentry even bbp-parent-forum-63467 user-id-12845">
                        <li class="bbp-topic-title">
                            <a class="bbp-topic-permalink" href="http://wpsv.se/forum/amne/liten-kommentarsruta/" title="Liten kommentarsruta?">Liten kommentarsruta?</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-started-by">Startat av: <a href="http://wpsv.se/medlemmar/mudder/" title="Visa mudder's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/de27aad3ad143ace965d2ec5433d1d8f?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-12845-avatar avatar-14 photo" width="14" height="14" alt="Avatar för mudder"></a>&nbsp;<a href="http://wpsv.se/medlemmar/mudder/" title="Visa mudder's profil" class="bbp-author-name" rel="nofollow">mudder</a></span>
                            </p>
                        </li>
                        <li class="bbp-topic-counts"><i class="fa fa-comment"></i><div class="bbp-count-badge">2</div></li>
                        <li class="bbp-topic-freshness">
                            <a href="http://wpsv.se/forum/amne/liten-kommentarsruta/#post-126802" title="Sv: Liten kommentarsruta?">3 månader, 3 veckor sedan</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author"><a href="http://wpsv.se/medlemmar/mudder/" title="Visa mudder's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/de27aad3ad143ace965d2ec5433d1d8f?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-12845-avatar avatar-14 photo" width="14" height="14" alt="Avatar för mudder"></a>&nbsp;<a href="http://wpsv.se/medlemmar/mudder/" title="Visa mudder's profil" class="bbp-author-name" rel="nofollow">mudder</a></span>
                            </p>
                        </li>
                    </ul><!-- #topic-120365 -->
                    <ul id="topic-120363" class="post-120363 topic type-topic status-publish hentry odd bbp-parent-forum-63467 user-id-4385">
                        <li class="bbp-topic-title">
                            <a class="bbp-topic-permalink" href="http://wpsv.se/forum/amne/robot-txt/" title="Robot txt">Robot txt</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-started-by">Startat av: <a href="http://wpsv.se/medlemmar/saramadeleine/" title="Visa saramadeleine's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/90ae321f9c024c589aa69949fed4aabf?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-4385-avatar avatar-14 photo" width="14" height="14" alt="Avatar för saramadeleine"></a>&nbsp;<a href="http://wpsv.se/medlemmar/saramadeleine/" title="Visa saramadeleine's profil" class="bbp-author-name" rel="nofollow">saramadeleine</a></span>
                            </p>
                        </li>
                        <li class="bbp-topic-counts"><i class="fa fa-comment"></i><div class="bbp-count-badge">214</div></li>
                        <li class="bbp-topic-freshness">
                            <a href="http://wpsv.se/forum/amne/robot-txt/#post-126793" title="Sv: Robot txt">3 månader, 3 veckor sedan</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author"><a href="http://wpsv.se/medlemmar/saramadeleine/" title="Visa saramadeleine's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/90ae321f9c024c589aa69949fed4aabf?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-4385-avatar avatar-14 photo" width="14" height="14" alt="Avatar för saramadeleine"></a>&nbsp;<a href="http://wpsv.se/medlemmar/saramadeleine/" title="Visa saramadeleine's profil" class="bbp-author-name" rel="nofollow">saramadeleine</a></span>
                            </p>
                        </li>
                    </ul><!-- #topic-120363 -->
                    <ul id="topic-120358" class="post-120358 topic type-topic status-publish hentry even bbp-parent-forum-63467 user-id-12833">
                        <li class="bbp-topic-title">
                            <a class="bbp-topic-permalink" href="http://wpsv.se/forum/amne/sidebarwidgets/" title="Sidebar/widgets">Sidebar/widgets</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-started-by">Startat av: <a href="http://wpsv.se/medlemmar/anne-andersson/" title="Visa Anne-Andersson's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/f54e31cf58a1f30104ebe3bc01e42eb6?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-12833-avatar avatar-14 photo" width="14" height="14" alt="Avatar för Anne-Andersson"></a>&nbsp;<a href="http://wpsv.se/medlemmar/anne-andersson/" title="Visa Anne-Andersson's profil" class="bbp-author-name" rel="nofollow">Anne-Andersson</a></span>
                            </p>
                        </li>
                        <li class="bbp-topic-counts"><i class="fa fa-comment"></i><div class="bbp-count-badge">14</div></li>
                        <li class="bbp-topic-freshness">
                            <a href="http://wpsv.se/forum/amne/sidebarwidgets/#post-126787" title="Sv: Sidebar/widgets">3 månader, 3 veckor sedan</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author"><a href="http://wpsv.se/medlemmar/alexbangkok/" title="Visa AlexBangkok's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/2f93fad1510ef3b31dbf233a2c2876b5?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-11908-avatar avatar-14 photo" width="14" height="14" alt="Avatar för AlexBangkok"></a>&nbsp;<a href="http://wpsv.se/medlemmar/alexbangkok/" title="Visa AlexBangkok's profil" class="bbp-author-name" rel="nofollow">AlexBangkok</a></span>
                            </p>
                        </li>
                    </ul><!-- #topic-120358 -->
                    <ul id="topic-120361" class="post-120361 topic type-topic status-publish hentry odd bbp-parent-forum-63467 user-id-12837">
                        <li class="bbp-topic-title">
                            <a class="bbp-topic-permalink" href="http://wpsv.se/forum/amne/widget-bara-pa-en-siida/" title="Widget bara på en siida">Widget bara på en siida</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-started-by">Startat av: <a href="http://wpsv.se/medlemmar/hakim/" title="Visa Hakim's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/14645cb015f7679e27e23f9fca78c651?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-12837-avatar avatar-14 photo" width="14" height="14" alt="Avatar för Hakim"></a>&nbsp;<a href="http://wpsv.se/medlemmar/hakim/" title="Visa Hakim's profil" class="bbp-author-name" rel="nofollow">Hakim</a></span>
                            </p>
                        </li>
                        <li class="bbp-topic-counts"><i class="fa fa-comment"></i><div class="bbp-count-badge">1</div></li>
                        <li class="bbp-topic-freshness">
                            <a href="http://wpsv.se/forum/amne/widget-bara-pa-en-siida/#post-126783" title="Sv: Widget bara på en siida">3 månader, 3 veckor sedan</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author"><a href="http://wpsv.se/medlemmar/alexbangkok/" title="Visa AlexBangkok's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/2f93fad1510ef3b31dbf233a2c2876b5?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-11908-avatar avatar-14 photo" width="14" height="14" alt="Avatar för AlexBangkok"></a>&nbsp;<a href="http://wpsv.se/medlemmar/alexbangkok/" title="Visa AlexBangkok's profil" class="bbp-author-name" rel="nofollow">AlexBangkok</a></span>
                            </p>
                        </li>
                    </ul><!-- #topic-120361 -->
                    <ul id="topic-120360" class="post-120360 topic type-topic status-publish hentry even bbp-parent-forum-63467 user-id-12661">
                        <li class="bbp-topic-title">
                            <a class="bbp-topic-permalink" href="http://wpsv.se/forum/amne/andra-wordpress-address-url/" title="Ändra WordPress Address (URL)?">Ändra WordPress Address (URL)?</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-started-by">Startat av: <a href="http://wpsv.se/medlemmar/titan/" title="Visa titan's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/97e61df4bc03340e86488270429eab06?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-12661-avatar avatar-14 photo" width="14" height="14" alt="Avatar för titan"></a>&nbsp;<a href="http://wpsv.se/medlemmar/titan/" title="Visa titan's profil" class="bbp-author-name" rel="nofollow">titan</a></span>
                            </p>
                        </li>
                        <li class="bbp-topic-counts"><i class="fa fa-comment"></i><div class="bbp-count-badge">2</div></li>
                        <li class="bbp-topic-freshness">
                            <a href="http://wpsv.se/forum/amne/andra-wordpress-address-url/#post-126779" title="Sv: Ändra WordPress Address (URL)?">3 månader, 3 veckor sedan</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author"><a href="http://wpsv.se/medlemmar/titan/" title="Visa titan's profil" class="bbp-author-avatar" rel="nofollow"><img src="http://gravatar.com/avatar/97e61df4bc03340e86488270429eab06?d=http://wpsv.se/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg&amp;s=14&amp;r=G" class="avatar user-12661-avatar avatar-14 photo" width="14" height="14" alt="Avatar för titan"></a>&nbsp;<a href="http://wpsv.se/medlemmar/titan/" title="Visa titan's profil" class="bbp-author-name" rel="nofollow">titan</a></span>
                            </p>
                        </li>
                    </ul><!-- #topic-120360 -->
                        </li>
                        <li class="bbp-footer">
                            <div class="tr">
                                <p>
                                    <span class="td colspan4">&nbsp;</span>
                                </p>
                            </div><!-- .tr -->
                        </li>
                    </ul>
                  <!-- End INSERT BBPRESS LATEST FORUM POST LOOP -->
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
                  
                  <!-- Start INSERT BBPRESS TAGCLOUD WIDGET -->
                  <div class="forum-widget bbp-forum-tagcloud widget_tag_cloud">
                      <h3 class="widgettitle">Populära taggar</h3>
                      <div class="tagcloud">
                        <div id="tag-cloud">
                        <a href="http://wpsv.se/forum/amnestagg/admin/" class="tag-link-877 label tag-" title="6 ämnen" style="font-size: 9.75px;">admin</a>
                        <a href="http://wpsv.se/forum/amnestagg/anvandare/" class="tag-link-745 label tag-" title="7 ämnen" style="font-size: 9.75px;">användare</a>
                        <a href="http://wpsv.se/forum/amnestagg/bilder/" class="tag-link-726 label tag-" title="12 ämnen" style="font-size: 9.75px;">bilder</a>
                        <a href="http://wpsv.se/forum/amnestagg/blogg/" class="tag-link-707 label tag-" title="9 ämnen" style="font-size: 9.75px;">blogg</a>
                        <a href="http://wpsv.se/forum/amnestagg/css/" class="tag-link-739 label tag-" title="8 ämnen" style="font-size: 9.75px;">css</a>
                        <a href="http://wpsv.se/forum/amnestagg/error/" class="tag-link-865 label tag-" title="6 ämnen" style="font-size: 9.75px;">error</a>
                        <a href="http://wpsv.se/forum/amnestagg/facebook/" class="tag-link-754 label tag-" title="9 ämnen" style="font-size: 9.75px;">facebook</a>
                        <a href="http://wpsv.se/forum/amnestagg/galleri/" class="tag-link-1034 label tag-" title="7 ämnen" style="font-size: 9.75px;">galleri</a>
                        <a href="http://wpsv.se/forum/amnestagg/inloggning/" class="tag-link-734 label tag-" title="11 ämnen" style="font-size: 9.75px;">inloggning</a>
                        <a href="http://wpsv.se/forum/amnestagg/inlagg/" class="tag-link-727 label tag-" title="14 ämnen" style="font-size: 9.75px;">inlägg</a>
                        <a href="http://wpsv.se/forum/amnestagg/kommentarer/" class="tag-link-844 label tag-" title="7 ämnen" style="font-size: 9.75px;">kommentarer</a>
                        <a href="http://wpsv.se/forum/amnestagg/multisite/" class="tag-link-709 label tag-" title="7 ämnen" style="font-size: 9.75px;">multisite</a>
                        <a href="http://wpsv.se/forum/amnestagg/plugin/" class="tag-link-788 label tag-" title="19 ämnen" style="font-size: 9.75px;">plugin</a>
                        <a href="http://wpsv.se/forum/amnestagg/problem/" class="tag-link-822 label tag-" title="8 ämnen" style="font-size: 9.75px;">problem</a>
                        <a href="http://wpsv.se/forum/amnestagg/tema/" class="tag-link-750 label tag-" title="15 ämnen" style="font-size: 9.75px;">tema</a>
                        <a href="http://wpsv.se/forum/amnestagg/twenty-eleven/" class="tag-link-817 label tag-" title="9 ämnen" style="font-size: 9.75px;">twenty eleven</a>
                        <a href="http://wpsv.se/forum/amnestagg/widget/" class="tag-link-772 label tag-" title="12 ämnen" style="font-size: 9.75px;">widget</a>
                        <a href="http://wpsv.se/forum/amnestagg/woocommerce/" class="tag-link-755 label tag-" title="12 ämnen" style="font-size: 9.75px;">woocommerce</a>
                        <a href="http://wpsv.se/forum/amnestagg/wordpress/" class="tag-link-907 label tag-" title="16 ämnen" style="font-size: 9.75px;">wordpress</a>
                        <a href="http://wpsv.se/forum/amnestagg/oversattning/" class="tag-link-796 label tag-" title="6 ämnen" style="font-size: 9.75px;">översättning</a>
                        </div>
                      </div>
                  </div>
                  <!-- End INSERT BBPRESS TAGCLOUD WIDGET -->
                </div>
			</div>
		</div>
	</section>
	<!-- End Latest Forum -->
	
	<!-- Start Statistics -->
	<section id="statistics" class="section">
		<div class="container">
			<div class="row">
              <!-- Start INSERT BBPRESS STATISTICS -->
				<div class="col-md-3 col-xs-6">
					<div class="stats">
						<i class="fa fa-group"></i>
						<h1>12 000 <span>Medlemmar</span></h1>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="stats">
						<i class="fa fa-signal color"></i>
						<h1>56 000 <span>Ämnen</span></h1>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="stats">
						<i class="fa fa-comments"></i>
						<h1>9 211<span>Inlägg</span></h1> 
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="stats">
						<i class="fa fa-sitemap"></i>
						<h1>12<span>Grupper</span></h1>
					</div>
				</div>
              <!-- End INSERT BBPRESS STATISTICS -->
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
                    <!-- INSERT BUDDYPRESS ACTIVITY FEED -->
				</div>
			</div>
			<div class="row">
            
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
					<h2>Våra grupper</h2>
					<span>Skapa kontakter via olika grupper inom WordPress</span>
                    <!-- INSERT BUDDYPRESS ACTIV GROUPS -->
				</div>
              </div>
              <div class="col-md-6">
				<div class="section-headline">
					<h2>Vad skrivs om WordPress?</h2>
					<span>Få koll på vad som skrivs på andra sidor om WordPress <a href="#">#wpse</a></span>
                    <!-- INSERT TWITTER FEED FOR #WPSE -->
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
