<?php

/**
 * Archive Forum Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="bbpress-forums">

	<?php do_action( 'bbp_template_before_forums_index' ); ?>
    
    <a href="#" title="Skapa ett nytt ämne i forumet" class="btn btn-primary bbp-new-topic-btn"><i class="fa fa-plus-square"></i> Nytt ämne</a>
    
    <div class="bbp-breadcrumb"><?php bbp_breadcrumb(); ?></div>

	<?php if ( bbp_has_forums() ) : ?>

		<?php bbp_get_template_part( 'loop',     'forums'    ); ?>

	<?php else : ?>

		<?php bbp_get_template_part( 'feedback', 'no-forums' ); ?>

	<?php endif; ?>
    
    <a href="#" title="Skapa ett nytt ämne i forumet" class="btn btn-primary bbp-new-topic-btn"><i class="fa fa-plus-square"></i> Nytt ämne</a>

	<?php do_action( 'bbp_template_after_forums_index' ); ?>

</div>
