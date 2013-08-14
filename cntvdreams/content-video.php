<div class="tex" id="video-<?php the_ID();?>">
	<dl>
		<dt>
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('thumbnail'); ?>
			</a>
		</dt>
		<dd>
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<b><?php the_title(); ?></b><br>
				<?php the_excerpt_max_charlength(300); ?>
			</a>
		</dd>
	</dl>
</div>