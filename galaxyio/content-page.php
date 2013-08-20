<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage GalaxyIO
 * @since GalaxyIO 0.1
 */
?>

<!--   -->
<div class="article-title">
     <h3><?php the_title(); ?></h3>
</div>
    <hr>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-content">
                    <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->

            <?php //edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>

    </article><!-- #post-<?php the_ID(); ?> -->
