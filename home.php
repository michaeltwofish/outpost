<?php $theme->display( 'header' ); ?>

<?php $theme->display( 'sidebar' ); ?>

<div id="main">
	<div id="content">
		<?php
		foreach ( $posts as $post ) {
			$theme->content_out($post);
		}
		?>
	</div> <!-- #content -->
	<nav>
		<?php $theme->prev_page_link(); ?> <?php $theme->page_selector(); ?> <?php $theme->next_page_link(); ?>
	</nav>
</div> <!-- #main -->

<?php $theme->display( 'footer' ); ?>
