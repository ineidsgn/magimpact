<form role="search" method="get" class="magimpact-search search-form" action="<?php echo home_url( '/' ); ?>">
	<label class="search-form-label">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
		<input type="search" class="search-field" placeholder="Search here" value="<?php echo get_search_query() ?>" name="s" title="Search here" />
		<button class="btn button-primary submit-button" type="submit"><i class="fa fa-search"></i></button>
	</label>

</form>