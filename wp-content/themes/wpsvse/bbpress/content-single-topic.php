<?php

/**
 * Single Topic Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="bbpress-forums" <?php bbp_topic_class(); ?>>

	<?php do_action( 'bbp_template_before_single_topic' ); ?>

	<?php if ( post_password_required() ) : ?>

		<?php bbp_get_template_part( 'form', 'protected' ); ?>

	<?php else : ?>

		<?php bbp_single_topic_description(); ?>

		<?php if ( bbp_show_lead_topic() ) : ?>

			<?php bbp_get_template_part( 'content', 'single-topic-lead' ); ?>

		<?php endif; ?>

		<?php if ( bbp_has_replies() ) : ?>
        
        <?php // Check if topic is closed
		$is_topic_closed = bbp_get_topic_status( $topic_id );
		if ($is_topic_closed == 'closed') { ?>
        
        <span title="Detta ämne är stängt för nya svar" class="btn btn-primary bbp-new-reply-btn"><i class="fa fa-lock"></i> Stängt</span>
        
        <?php } else { ?>
        
        <a href="#new-post" title="Svara på detta ämne" class="btn btn-primary bbp-new-reply-btn" data-toggle="collapse" data-target="#bbp-reply-panel" aria-expanded="false" aria-controls="bbp-reply-panel"><i class="fa fa-plus-square"></i> Svara</a>
        
        <?php } ?>
        
        <div class="bbp-search-form-topic">    
            <form role="search" method="get" id="bbp-search-form" action="<?php the_permalink(); ?>">
            <label class="screen-reader-text hidden" for="bbp_search"><?php _e( 'Search for:', 'bbpress' ); ?></label>
            <div class="input-group">
             <!-- Start BBPRESS SEARCH FORM -->
              <input type="text" value="<?php echo esc_attr( bbp_get_search_terms() ); ?>" placeholder="Sök i ämne&hellip;" name="bbp_search" id="bbp_search" class="form-control">
              <input type="hidden" name="action" value="bbp-search-request" />
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit" id="bbp_search_submit">Sök</button>
              </span>
             <!-- End BBPRESS SEARCH FORM -->
            </div><!-- /input-group -->
            </form>
        </div>

			<?php bbp_get_template_part( 'pagination', 'replies' ); ?>

			<?php bbp_get_template_part( 'loop',       'replies' ); ?>

			<?php bbp_get_template_part( 'pagination', 'replies' ); ?>
            
        <?php // Check if topic is closed
		$is_topic_closed = bbp_get_topic_status( $topic_id );
		if ($is_topic_closed == 'closed') { ?>
        
        <span title="Detta ämne är stängt för nya svar" class="btn btn-primary bbp-new-reply-btn"><i class="fa fa-lock"></i> Stängt</span>
        
        <?php } else { ?>
        
        <a href="#new-post" title="Svara på detta ämne" class="btn btn-primary bbp-new-reply-btn" data-toggle="collapse" data-target="#bbp-reply-panel" aria-expanded="false" aria-controls="bbp-reply-panel"><i class="fa fa-plus-square"></i> Svara</a>
        
        <?php } ?>

		<?php endif; ?>
        
        <?php bbp_topic_tag_list(); ?>

		<?php bbp_get_template_part( 'form', 'reply' ); ?>

	<?php endif; ?>

	<?php do_action( 'bbp_template_after_single_topic' ); ?>

</div>
