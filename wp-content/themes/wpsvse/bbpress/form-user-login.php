<?php

/**
 * User Login Form
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<form method="post" action="<?php bbp_wp_login_action( array( 'context' => 'login_post' ) ); ?>" class="bbp-login-form">
	
    <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#bbp-reply-panel" aria-expanded="false" aria-controls="bbp-reply-panel"><i class="fa fa-user"></i>
		
		<?php _e( 'Log In', 'bbpress' ); ?>
        
        </h3>
    </div>
    
    <div class="panel-body collapse in" id="bbp-reply-panel">

		<div class="bbp-username">
			<label for="user_login"><?php _e( 'Username', 'bbpress' ); ?>: </label>
			<input type="text" name="log" value="<?php bbp_sanitize_val( 'user_login', 'text' ); ?>" size="20" id="user_login" tabindex="<?php bbp_tab_index(); ?>" class="form-control" />
		</div>

		<div class="bbp-password">
			<label for="user_pass"><?php _e( 'Password', 'bbpress' ); ?>: </label>
			<input type="password" name="pwd" value="<?php bbp_sanitize_val( 'user_pass', 'password' ); ?>" size="20" id="user_pass" tabindex="<?php bbp_tab_index(); ?>" class="form-control" />
		</div>

		<div class="bbp-remember-me">
			<input type="checkbox" name="rememberme" value="forever" <?php checked( bbp_get_sanitize_val( 'rememberme', 'checkbox' ) ); ?> id="rememberme" tabindex="<?php bbp_tab_index(); ?>" />
			<label for="rememberme"><?php _e( 'Keep me signed in', 'bbpress' ); ?></label>
		</div>

		<div class="bbp-submit-wrapper">

			<?php do_action( 'login_form' ); ?>

			<button type="submit" tabindex="<?php bbp_tab_index(); ?>" name="user-submit" class="btn btn-primary button submit user-submit"><?php _e( 'Log In', 'bbpress' ); ?></button>

			<?php bbp_user_login_fields(); ?>

		</div>
	</div>
    </div>
</form>
