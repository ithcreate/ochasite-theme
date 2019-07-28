<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ochasite
 */

get_header(); ?>


    <div class="content clearfix">
      <article>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'single' ); ?>
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
                    ?>
                <?php endwhile; // end of the loop. ?>
        </article>
        <?php get_sidebar();?>
    </div>
<?php get_footer(); ?>

