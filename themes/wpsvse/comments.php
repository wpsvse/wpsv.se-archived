	<aside id="comments">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword">Detta inlägg är lösenordsskyddat. Ange lösenordet för att se eventuella kommentarer.</p>
	</aside><!-- #comments -->
	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h4 id="comments-header" class="underlined-header">Kommentarer</h4>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav class="comments-navigation">
			<div class="comments-nav-previous"><?php previous_comments_link( '&larr; Äldre kommentarer' ); ?></div>
			<div class="comments-nav-next"><?php next_comments_link( 'Nyare kommentarer &rarr;' ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<ul id="commentlist" class="page-comments-list">
			<?php
				wp_list_comments( array( 'type' => 'comment','callback' => 'wpsv_comment' ) );
			?>
		</ul>
		
        <h4 id="pingbacks-header" class="underlined-header">Inkommande länkar</h4>
        <ul id="pinglist" class="page-pingback-list pingback-list">
			<?php
				wp_list_comments( array( 'type' => 'pingback','callback' => 'wpsv_comment' ) );
			?>
		</ul>
        
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav class="comments-navigation">
			<div class="comments-nav-previous"><?php previous_comments_link( '&larr; Äldre kommentarer' ); ?></div>
			<div class="comments-nav-next"><?php next_comments_link( 'Nyare kommentarer &rarr;' ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments">Kommentarer inaktiverade.</p>
	<?php endif; ?>

    <section id="respond" class="comment-form">
      <?php if ('open' == $post->comment_status) : ?>
      
      <h4 class="underlined-header"><?php comment_form_title('Kommentera'); ?></h4>
      
      <div class="cancel-comment-reply">
          <?php cancel_comment_reply_link(); ?>
      </div>
      
      <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
      <p>Du måste vara <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">inloggad</a> för att kunna posta kommentarer.</p>
      <?php else : ?>
      
      <form action="<?php echo esc_url( home_url( '/' ) ); ?>wp-comments-post.php" method="post" id="commentform">
      
      <?php if ( $user_ID ) : ?>
      
      <p>Inloggad som <a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-admin/profile.php"><?php echo $user_identity; ?></a> - <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Logga ut">Logga ut</a></p>
      
      <?php else : ?>
      
      <p>
      	<label for="author">Namn</label>
      	<input type="text" name="author" id="author" required="required" placeholder="Namn" value="<?php echo $comment_author; ?>" size="22" tabindex="1" title="Namn" />
      </p>
      <p>
      	<label for="email">E-post (visas inte)</label>
      	<input type="email" name="email" id="email" required="required" placeholder="E-post (publiceras inte)" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" title="E-postadress" />
      </p>
      <p>
      	<label for="url">Webbplats</label>
      	<input type="url" name="url" id="url" placeholder="Webbplats" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" title="Webbplats" />
      </p>
      
      <?php endif; ?>
      
      <!--<p><small><strong>XHTML:</strong> Du kan anv&auml;nda f&ouml;ljande taggar: <code><?php echo allowed_tags(); ?></code></small></p>-->
      
      <p>
      	<textarea name="comment" id="comment-text" placeholder='Din kommentar...' cols="30" rows="10" tabindex="4" title="Din kommentar"></textarea>
      </p>
      <div class="box-info comment-info-box round-5">
      	<div class="box-content">
        <p><strong>Tips</strong>: du vet väl att du troligen får ett snabbare svar i <a href="<?php echo esc_url( home_url( '/' ) ); ?>forum/">forumet</a> om du har en fråga om support som inte direkt rör detta inlägg?</p>
        </div>
      </div>
      <p>
        <input name="submit" type="submit" id="submit" tabindex="5" value="Skicka kommentar" />
        <?php comment_id_fields(); ?>
      </p>
      <?php do_action('comment_form', $post->ID); ?>
      
      </form>
      
      <?php endif; // If registration required and not logged in ?>
      
      </section>
      
      <?php endif; // if you delete this the sky will fall on your head ?>
      
	</aside><!-- #comments -->
