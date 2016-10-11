<?php
/**
 * The search form
 *
 * @package WordPress
 * @subpackage Hollandex
 * @since Hollandex 1.0
 */
?>

<div id="row-search" >
	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

		<div class="input-group">
				<input type="search" class="search-field form-control" placeholder="Search" value="" name="s" title="Search for:" />
				<span class="input-group-btn">
					<button class="btn btn-primary" type="button"><?php _e('Search','hollandex'); ?></button>
				</span>

		</div>


	</form>

</div>
