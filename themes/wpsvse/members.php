		<?php global $userdata;
      		$current_user = wp_get_current_user();
	  		if ( is_user_logged_in() ) { ?>
			<section class="logged-in-member">
            	<a class="post-author-image element-holder media-link" href="<?php echo esc_url( home_url( '/' ) ); ?>forum/profile.php?do=editavatar" title="Min profil">
                	<?php if ( ($current_user instanceof WP_User) ) { echo get_avatar( $current_user->user_email, 60 ); } ?>
                </a>
            	<p class="member-links">Välkommen <a href="<?php echo esc_url( home_url( '/' ) ); ?>forum/usercp.php"><strong><?php echo $current_user->user_login; ?></strong></a> (<a href="<?php echo wp_logout_url(); ?>" title="Logga ut från ditt konto">Logga ut</a>)<br />
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>forum/usercp.php">Aviseringar</a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>forum/profile.php?do=editprofile" class="sep">Min profil</a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>forum/usercp.php" class="sep">Inställningar</a></p>
        	</section>
        <?php } else { ?>
            <section class="not-logged-in">
                <ul class="nouser">
                    <li class="login-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>forum/register.php" rel="nofollow">Registrera</a></li>
                    <li class="login-link"><a rel="help" href="<?php echo esc_url( home_url( '/' ) ); ?>forum/faq.php">Hjälp</a></li>
                    <li>
                    <form action="<?php echo wp_login_url( get_permalink() ); ?>" method="post">
                      <input type="text" class="textbox" name="log" id="user_login" placeholder="Anv&auml;ndarnamn" />
                      <input type="password" class="textbox" style="display:inline;" name="pwd" id="user_pass" placeholder="L&ouml;senord" />
                      <input type="hidden" name="testcookie" value="1" />
                      <input type="submit" class="loginbutton" name="wp-submit" id="login-btn" value="Logga in" />
                    </form>
                    </li>
                </ul>
            </section>
		<?php } ?>