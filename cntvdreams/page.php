<?php get_header(); ?>
	<?php //get_template_part('silder');
	/*
	?>
	<div class="container">
		<div class="span4">
			<?php //get_template_part('sidebar');?>
		</div>
		<div class="span8 space-left-10">
			<?php if (false || have_posts() ) : ?>
			<div class="block2">
				<div class="title">
					<h3><?php the_title(); ?></h3>
				</div>
				<div class="info">dddffff
					<span>时间:</span><?php the_time('Y年m月d日 H:i');?>
					<span>来源:</span>传媒梦工场 
					<!--span>点击:</span>12次-->
				</div>
				<?php the_content();?>
			</div>
			<?php endif; // end have_posts() check ?>
		</div>
	</div><!-- container -->
	<?php */ ?>

	<?php
	$page_id = isset($_GET['page_id']) ? $_GET['page_id'] : 0;

	$page = 'index';
	switch($page_id){
		case 6: $page = 'apply'; break;
		default:break;
	}

	get_template_part('page', $page);
	?>

<?php get_footer(); ?>