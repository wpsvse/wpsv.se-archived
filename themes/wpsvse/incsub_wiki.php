<?php
global $blog_id, $wp_query, $wiki, $post, $current_user;
get_header( 'wiki' );
?>

  <!-- Page body -->
  <section class="container-block" id="page-body">
    <div class="container-inner">
      <!-- Page title -->
      <header class="container-aligner" id="page-title">
      	<h1>Dokumentation</h1>
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

                <div id="primary" class="wiki-primary-event">
                    <div id="content">
                        <div class="padder">
                            <div id="wiki-page-wrapper">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                                <?php if ( !post_password_required() ) { ?>
                                <div class="incsub_wiki incsub_wiki_single">
                                    <div class="incsub_wiki_tabs incsub_wiki_tabs_top"><?php echo $wiki->tabs(); ?><div class="incsub_wiki_clear"></div></div>
                                </div>
                                <?php
                                $revision_id = isset($_REQUEST['revision'])?absint($_REQUEST['revision']):0;
                                $left        = isset($_REQUEST['left'])?absint($_REQUEST['left']):0;
                                $right       = isset($_REQUEST['right'])?absint($_REQUEST['right']):0;
                                $action      = isset($_REQUEST['action'])?$_REQUEST['action']:'view';
                
                                if ($action == 'discussion') {
                                   comments_template( '', true );
                                } else {
                                    echo $wiki->decider(apply_filters('the_content', $post->post_content), $action, $revision_id, $left, $right, false);
                                }
                                ?>
                        <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                  <div class="box-info wiki-info-box round-5">
                    <div class="box-content">
                    <p>Du vet väl att <a href="http://wpsv.se/dokumentation/information-for-wordpress-sveriges-dokumentation/">vem som helst kan delta</a> i dokumentationen. Redigera felaktigheter, uppdatera dokument, skapa nya dokument. <a href="http://wpsv.se/dokumentation/hjalp-for-dokumentation/">Läs mer om hur</a>. Undrar du över något i dokumentationen? Då är du välkommen in i vårt <a href="http://wpsv.se/forum/forum.php">forum</a>.</p>
                    </div>
                  </div>

                </div>
                <!-- End - Page content -->

<?php get_sidebar('wiki'); ?>

        </div>
      </section>
      <!-- End - Page body content -->
    </div>
  </section>
  <!-- End - Page body -->

<?php get_footer('wiki'); ?>