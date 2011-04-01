<?php $theme->display( 'header' ); ?>

<?php $theme->display( 'sidebar' ); ?>

<!-- page.single -->
<div id="main">
	<div id="content">
		<article id="post-<?php echo $post->id; ?>" class="page <?php echo $post->statusname; ?>">
			<header>
				<h1 class="post-title">
					<a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>">
						<?php echo $post->title_out; ?>
					</a>
				</h1>

				<?php if ( $loggedin ) : ?>
					<a href="<?php URL::out( 'admin', 'page=publish&id=' . $post->id); ?>" title="Edit post"> (<?php _e('edit'); ?>)</a>
				<?php endif; ?><br>
			</header>

			<div class="post-content">
				<?php echo $post->content_out; ?>
			</div> <!-- .post-content -->

		</article>

	</div> <!-- #content -->
</div> <!-- #main -->

<!-- /page.single -->
<?php $theme->display( 'footer' ); ?>
