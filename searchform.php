<!-- search -->
<link href="<?php echo get_stylesheet_directory_uri() ?>/css/search.css" rel="stylesheet" />
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Typ een zoekwoord in...', 'cheapweb' ); ?>">
	<button class="search-submit btn--k" type="submit" role="button"><?php _e( 'ZOEK', 'cheapweb' ); ?></button>
</form>
<!-- /search -->
