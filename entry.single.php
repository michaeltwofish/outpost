<?php $theme->display( 'header' ); ?>

<?php $theme->display( 'sidebar' ); ?>

<!-- entry.single -->
<div id="main">
	<div id="content">
		<?php $theme->content_out( $post ); ?>

		<?php $theme->comments( $post ); ?>

		<nav>
			<?php if ( $previous = $post->descend() ): ?>
			<a class="previous" href="<?php echo $previous->permalink ?>" title="<?php echo $previous->slug ?>">&laquo; <?php echo $previous->title ?></a>
			<?php endif; ?>
			<?php if ( $next = $post->ascend() ): ?>
			<a class="next" href="<?php echo $next->permalink ?>" title="<?php echo $next->slug ?>"><?php echo $next->title ?> &raquo;</a>
			<?php endif; ?>
		</nav>

	</div> <!-- #content -->
</div> <!-- #main -->

<!-- /entry.single -->
<?php $theme->display( 'footer' ); ?>
