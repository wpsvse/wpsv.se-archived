<?php
//
//  Custom comments callback
//

//**************************************************
// Create callback function for comments
//**************************************************
if ( ! function_exists( 'wpsv_comment' ) ) :

function wpsv_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php comment_author_link(); ?> <?php edit_comment_link( '(Redigera)', ' ' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?>>
    	<article id="comment-<?php comment_ID(); ?>" class='comment-item'>
          <div class='comment-inner'>
          	<!-- Comment header -->
            <header class='comment-header'>
            	<h5><?php comment_author_link(); ?></h5>
            	<time class='comment-created' datetime='<?php comment_date( 'c' ); ?>'><?php comment_date( 'j F, Y' ); ?>  kl. <?php comment_time('H:i'); ?></time><?php edit_comment_link( '(Redigera)', ' ' ); ?>
            </header>
            <!-- End - Comment header -->
            <!-- Comment text -->
            <?php comment_text(); ?>
            <?php if ( $comment->comment_approved == '0' ) : ?>
                <p class="comment-awaiting-moderation">Din kommentar inväntar granskning.</p>
            <?php endif; ?>
            <!-- End - Comment text -->
            <!-- Comment aside -->
            <aside class='comment-aside'>
            <a class='comment-avatar element-holder' href='#'>
              <?php echo get_avatar( $comment, 36 ); ?>
            </a>
              <?php comment_reply_link( array_merge( $args, array( 'reply_text' => 'Svara', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </aside>
            <!-- End - Comment aside -->
            </div>
          </article>

<?php
			break;
	endswitch;
}
endif; // ends check for wpsv_comment()

?>