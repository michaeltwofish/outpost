<!-- sidebar -->
<?php Plugins::act( 'theme_sidebar_top' ); ?>
<aside>

	<ul>
    <?php $theme->pagemenu(); ?>
		<li>
			<a title="Feed for Posts" href="<?php $theme->feed_alternate() ?>">Posts Feed</a>
		</li>
<!--
		<li>
			<a title="Feed for Comments" href="<?php URL::out( 'atom_feed_comments'); ?>">Comments Feed</a>
		</li>
-->
	</ul>

	<ul>
		<li>
			<a href="http://nocleanfeed.com">
			<img width="180" height="60" src="http://nocleanfeed.com/nocensorship.gif" alt="No Clean Feed - Stop Internet Censorship in Australia" />
			</a>
		</li>
	</ul>

	<ul>
		<li>
			<?php $theme->display( 'searchform' ); ?>
		</li>
	</ul>

</aside>
<?php Plugins::act( 'theme_sidebar_bottom' ); ?>
<!-- /sidebar -->
