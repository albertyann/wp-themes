<?php get_header(); 
$cat = array(
	'none'=>'1',
	'teacher'=>'3',
	'star'=>'5',
	'video'=>'7',
	'descript'=>'6',
	'news'=>'4',
	'media'=>'2',
	'school'=>'8',
	'message'=>'10',
);
?>
	<div class="neck-warp superstar">
		<div class="bigstar">梦之星</div>
	</div>
	<div class="main star-main">
		<div class="container star-container">
			<div class="span7 star block">
				<div class="line8 title minus10 bar">
					<h3>星鲜事</h3>
				</div>

				<?php while ( have_posts() ) : the_post(); ?>
						<div class="item">
						<div class="star-head">
						<div class="title"><a href="<?php the_permalink() ?>" title=""><?php the_title(); ?></a></div>
						<div>日期：<?php echo get_the_date('Y-m-d');?></div>
						</div>
						<div class="item-content">

						<?php the_content(); ?>

						</div>
						</div>
				<?php endwhile; ?>
				
			</div>
			<div class="span5 star">
				<div class="line5 title bar plus10">
					<h3>星风采</h3>
				</div>
				
				<div class="member-warp">
				<?php
					$stars = get_posts(array('category'=>$cat['star'], 'numberposts'=>16));

					foreach ($stars as $key => $v) {
						$thumbnail_id = get_post_thumbnail_id($v->ID);
						$img = wp_get_attachment_image($thumbnail_id, 'full');
						echo '<div class="member">';
						echo '<dl>';
						echo '<dt>';
						echo $img;
						echo '</dt>';
						echo '<em>'.$v->post_title.'</em>';
						echo '<dd>';
						echo '<div>'.$v->post_content.'</div>';
						echo '</dd>';
						echo '</dl>';
						echo '</div>';
					}
				?>
				</div>
			</div>
			<div style="clear:both;"></div>
			<div style="text-align:center;">
				<?php 
				if(function_exists('wp_paginate')) {
					wp_paginate(array('title'=>''));
				}
				?>
			</div>
		</div><!-- container -->

	</div>


<?php get_footer(); ?>