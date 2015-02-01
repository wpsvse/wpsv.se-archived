<?php

/**
 * User Lost Password Form
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<form method="post" action="<?php bbp_wp_login_action( array( 'action' => 'lostpassword', 'context' => 'login_post' ) ); ?>" class="bbp-login-form">

    <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#bbp-reply-panel" aria-expanded="false" aria-controls="bbp-reply-panel"><i class="fa fa-question-circle"></i>
		
		<?php _e( 'Lost Password', 'bbpress' ); ?>
        
        </h3>
    </div>
    
    <div class="panel-body collapse in" id="bbp-reply-panel">

		<div class="bbp-username">
			<p>
				<label for="user_login" class="hide"><?php _e( 'Username or Email', 'bbpress' ); ?>: </label>
				<input type="text" name="user_login" value="" size="20" id="user_login" tabindex="<?php bbp_tab_index(); ?>" class="form-control" />
			</p>
		</div>

		<div class="bbp-submit-wrapper">

			<?php do_action( 'login_form', 'resetpass' ); ?>

			<button type="submit" tabindex="<?php bbp_tab_index(); ?>" name="user-submit" class="btn btn-primary button submit user-submit"><?php _e( 'Reset My Password', 'bbpress' ); ?></button>

			<?php bbp_user_lost_pass_fields(); ?>

		</div>
	</div>
    </div>
</form>
