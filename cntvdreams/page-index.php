<?php get_template_part('silder');?>
	
	<div class="container">
		<div class="span4">
			<?php get_template_part('sidebar');?>
		</div>
		<div class="span8 space-left-10">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="block2 minheight">
				<div class="title">
					<h3><?php the_title(); ?></h3>
				</div>
				<?php the_content();?>
			</div>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div><!-- container -->
	