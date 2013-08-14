

	<?php get_template_part('silder');?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="span4">
			<?php get_template_part('sidebar');?>
		</div>
		<div class="span8 space-left-10">
			<div class="block2 minheight"> 
				<div class="title">
					<h3><?php the_title(); ?></h3>
				</div>
				<div class="info">
					<span>时间:</span><?php the_time('Y年m月d日 H:i');?>
					<span>来源:</span>传媒梦工坊 
					<!--span>点击:</span>12次-->
				</div>
				<div class="excerpt">
					<?php the_excerpt_max_charlength(300); ?>
				</div>
				<?php the_content();?>
			</div>
		</div>
	</div><!-- container -->
<?php endwhile; // end of the loop. ?>