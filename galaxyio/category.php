<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div class="content blog">
            <div class="span12">
		<?php while ( have_posts() ) : the_post(); ?>
                        <?php
                                get_template_part('content', 'blog');
                        ?>
                <?php endwhile; ?>
            </div>
</div>


<?php get_footer(); ?>
