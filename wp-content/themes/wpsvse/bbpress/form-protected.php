<?php

/**
 * Password Protected
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="bbpress-forums">
	
			<div class="panel panel-primary">
				<div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#bbp-reply-panel" aria-expanded="false" aria-controls="bbp-reply-panel"><i class="fa fa-plus-square"></i>
		
		<?php _e( 'Protected', 'bbpress' ); ?></legend>
        
				</h3>
            </div>
            
            <div class="panel-body collapse in" id="bbp-reply-panel">

		<?php echo get_the_password_form(); ?>

			</div>
            
            </div>
</div>