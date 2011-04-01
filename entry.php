<article id="post-<?php echo $content->id; ?>" class="<?php echo $content->statusname; ?>">
	<header>
		<time datetime="<?php echo $content->pubdate->out('c'); ?>" pubdate="pubdate"><?php echo $content->pubdate_out; ?></time>
		<h1 class="post-title">
			<a href="<?php echo $content->permalink; ?>" title="<?php echo $content->title; ?>">
				<?php echo $content->title_out; ?>
			</a>
		</h1>

			<?php if ( count( $content->tags ) > 0 ) : ?>
				<span class="entry-tags"><?php echo $content->tags_out; ?></span>
			<?php endif; ?>
			<?php if ( $loggedin ) : ?>
				<span class="entry-edit">
					<a href="<?php URL::out( 'admin', 'page=publish&id=' . $content->id); ?>" title="Edit post"> (edit)</a>
				</span>
			<?php endif; ?><br>
	</header>

	<div class="post-content">
		<?php echo $content->content_out; ?>
	</div> <!-- .post-content -->
</article> <!-- .post -->
