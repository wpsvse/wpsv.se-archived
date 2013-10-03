<?php get_header(); ?>

     <div class="quick-buttons">
     	<div class="container">
        	<div class="row">
              <ul id="action-buttons">
	          	<li><a href="<?php echo esc_url( home_url( '/support/' ) ); ?>" id="action-support"><h2>Support</h2><span>Ta del av support för WordPress</span></a></li>
    	        <li><a href="<?php echo esc_url( home_url( '/forum/' ) ); ?>" id="action-forum"><h2>Forum</h2><span>Diskussioner och hjälp via communityn</span></a></li>
        	    <li><a href="<?php echo esc_url( home_url( '/filer/' ) ); ?>" id="action-files"><h2>Filer</h2><span>Ladda ner översättningar, tillägg &amp; teman</span></a></li>
            	<li><a href="<?php echo esc_url( home_url( '/dokumentation/' ) ); ?>" id="action-docs"><h2>Dokumentation</h2><span>Svensk dokumentation för WordPress</span></a></li>
              </ul>
            </div>
        </div>
     </div>

  <div class="body-content">

	<div class="container">
    
        <!-- Main body content -->
        <div class="row wpsv-latest-news">
            <div class="col-lg-3">
            	<h2>Senaste nytt</h2>
                <p>Senaste nytt och uppdateringar rörande WordPress, communityn och WordPress Sveriges portal.</p>
                <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/senaste-nytt/' ) ); ?>" title="Visa nyhetsarkivet">Fler nyheter</a>
            </div>
            <?php $wpsv_news_query = new WP_Query('showposts=3'); ?>
            <?php while ($wpsv_news_query->have_posts()) : $wpsv_news_query->the_post(); ?>
            <div class="col-lg-3" id="post-<?php the_ID(); ?>">
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
                <h5><a href="<?php the_permalink() ?>" rel="bookmark" title="Läs <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                <div class="posts-front-meta"><?php the_time('j F') ?></div>
                <?php the_excerpt(); ?>
                <!-- End - Item description -->
            </div>
            <?php endwhile; ?>
        </div>
        <hr />
        <div class="row">
        	<div class="col-lg-12">
            	<a href="http://click.adrecord.com/?p=99&amp;c=8239" title="WordPress Sverige sponsras av FSdata" class="fsdata-banner"><img src="http://wpsv.se/wp-content/themes/wpsv.se/images/fsdata-940x100.png" width="940" height="100" alt="fsdata"></a>
            </div>
        </div>
        <hr />
        <div class="row">
        	<div class="col-lg-12">
            <h3>Portalaktivitet</h3>
            <div class="tabs-block">
                      <ul class="nav nav-tabs tab-controller">
                        <li id="tablink1" class="active"><a href="#tab1" data-toggle="tab">I bloggen</a></li>
                        <li id="tablink2"><a href="#tab2" data-toggle="tab">Senaste kommentarer</a></li>
                        <li id="tablink3"><a href="#tab3" data-toggle="tab">Gruppuppdateringar</a></li>
                        <li id="tablink4"><a href="#tab4" data-toggle="tab">Senaste filerna</a></li>
                        <li id="tablink5"><a href="#tab5" data-toggle="tab">Twitter @WPSverige</a></li>
                      </ul>
                      <div class="tab-content">

                        <div id="tab1" class="tab-pane active">
                        Tab1
                        </div>

                        <div id="tab2" class="tab-pane">
                        Tab2
                        </div>

                        <div id="tab3" class="tab-pane">
                        Tab3
                        </div>
                    
                        <div id="tab4" class="tab-pane">
                        Tab4
                        </div>
                        
                        <div id="tab5" class="tab-pane">
                        Tab5
                        </div>
                        
                      </div>
                    </div>            
        	</div>
        </div>
		<hr />
        <div class="row">
        	<div class="col-lg-8">Senaste i forum</div>
            <div class="col-lg-4">Medlemsinfo</div>
        </div>

    </div> <!-- /container --> 

  </div> <!--/ .body-content --> 

<?php get_footer(); ?>