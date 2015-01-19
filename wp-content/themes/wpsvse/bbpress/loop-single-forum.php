<?php

/**
 * Forums Loop - Single Forum
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<ul id="bbp-forum-<?php bbp_forum_id(); ?>" <?php bbp_forum_class( bbp_get_forum_id(), array( 'row' ) ); ?>>

  <div class="sub-divider">
	
    <li class="bbp-forum-info col-lg-8">

		<?php do_action( 'bbp_theme_before_forum_title' ); ?>

		<a class="bbp-forum-title" href="<?php bbp_forum_permalink(); ?>" title="<?php bbp_forum_title(); ?>" rel="bookmark"><?php bbp_forum_title(); ?></a>
        
        <?php do_action( 'bbp_theme_before_forum_description' ); ?>

		<div class="bbp-forum-content"><i class="fa fa-info-circle"></i> <?php the_content(); ?></div>

		<?php do_action( 'bbp_theme_after_forum_description' ); ?>

		<?php do_action( 'bbp_theme_after_forum_title' ); ?>

		<?php bbp_forum_row_actions(); ?>

	</li>
    
	<li class="bbp-forum-topic-count col-lg-1">
		<div class="topic-reply-counts">Ämnen: <?php bbp_forum_topic_count(); ?></div>
		<div class="topic-reply-counts">Inlägg: <?php bbp_show_lead_topic() ? bbp_forum_reply_count() : bbp_forum_post_count(); ?></div>
	</li>

	<li class="bbp-forum-freshness col-lg-3">

		<div class="last-posted-topic-title">
			<a href="<?php echo bbp_get_forum_last_topic_permalink(); ?>"><?php echo bbp_get_topic_last_reply_title( bbp_get_forum_last_active_id() ) ?></a>
		</div>
		<div class="last-posted-topic-user">av 
		<span class="bbp-author-avatar"><?php echo get_avatar( bbp_get_forum_last_reply_author_id(), '14' ); ?> </span>
			<?php echo bbp_get_user_profile_link( bbp_get_forum_last_reply_author_id() ); ?>
		</div>
		<div class="last-posted-topic-time">
			<?php echo bbp_get_forum_last_active_time(); ?>
		</div>
	</li>
    
    </div>
    
		<?php do_action( 'bbp_theme_before_forum_sub_forums' ); ?>

		<?php BBP_Default::epicwebs_bbp_list_forums( array (
		'before'            => '<li class="forum-list">',
		'after'             => '</li>',
		'link_before'       => '',
		'link_after'        => '',
		'count_before'      => '<div class="topic-reply-counts">Ämnen: ',
		'count_after'       => '</div>',
		'count_sep'         => '</div><div class="topic-reply-counts">Inlägg: ',
		'separator'         => '',
		'forum_id'          => '',
		'show_topic_count'  => true,
		'show_reply_count'  => true,
		'show_freshness_link' => true,
		)); ?>

		<?php do_action( 'bbp_theme_after_forum_sub_forums' ); ?>

</ul><!-- #bbp-forum-<?php bbp_forum_id(); ?> -->