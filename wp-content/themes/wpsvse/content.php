<?php
/**
 * @package WordPress Sverige
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
    <div class="post-image">
      <a href="<?php the_permalink(); ?>" rel="bookmark">
          <?php if ( has_post_thumbnail() ) { 
            the_post_thumbnail('post-img');
          } else { ?>
            <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/default.jpg" alt="" />
          <?php } ?>
      </a>
        <div class="entry-meta-comments"><?php comments_popup_link('0 kommentarer', '1 kommentar', '% kommentarer'); ?></div>
        <div class="entry-meta-date"><time><?php the_time('l, j F Y'); ?></time></div>
    </div><!-- .post-image -->
    
    <div class="entry-content clearfix">
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <div class="entry-excerpt"><?php the_excerpt('&hellip;'); ?></div>
        <div class="entry-footer-meta">
	        <div class="entry-meta-category">Postat under <?php the_category(', '); ?></div>
            <div class="entry-meta-user"> av <?php echo get_avatar( get_the_author_meta('ID'), 48 ); ?> <?php the_author(); ?></div>
        	<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-small entry-meta-read-more">Läs mer</a>
        </div>
    </div><!-- .entry-meta -->
    
</article><!-- #post-## -->
