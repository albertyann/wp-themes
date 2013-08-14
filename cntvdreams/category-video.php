<?php get_header(); 
get_template_part('silder');?>

	<div style="height:10px;"></div>
	<div class="container">
		<div class="span4">
			<?php get_template_part('sidebar');?>
		</div>
		<div class="span8 space-left-10">
			<div class="block">
				<div class="title">
					<h3>活动视频</h3>
				</div>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part('content', 'video');
					?>

				<?php endwhile; ?>

				<div style="text-align:center;">
					<?php 

					if(function_exists('wp_paginate')) {
						wp_paginate(array('title'=>''));
					}
					?>
				</div>
			</div>
		</div>
	</div><!-- container -->


<?php get_footer(); ?>