<?php

/**
 * Search 
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<form role="search" method="get" id="bbp-search-form" action="<?php bbp_search_url(); ?>">
<label class="screen-reader-text hidden" for="bbp_search"><?php _e( 'Search for:', 'bbpress' ); ?></label>
<div class="input-group">
 <!-- Start BBPRESS SEARCH FORM -->
  <input type="text" value="<?php echo esc_attr( bbp_get_search_terms() ); ?>" name="bbp_search" id="bbp_search" class="form-control">
  <input type="hidden" name="action" value="bbp-search-request" />
  <span class="input-group-btn">
    <button class="btn btn-primary" type="submit" id="bbp_search_submit">Sök</button>
  </span>
 <!-- End BBPRESS SEARCH FORM -->
</div><!-- /input-group -->
</form>
