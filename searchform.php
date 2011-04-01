<?php Plugins::act( 'theme_searchform_before' ); ?>
<form id="searchform" method="get" action="<?php URL::out( 'display_search' ); ?>">
	<p><input type="search" name="criteria" id="s" placeholder="Search" size="15"></p>
	<p><input type="submit" name="submit" value="<?php _e('Search'); ?>"></p>
</form>
<?php Plugins::act( 'theme_searchform_after' ); ?>
