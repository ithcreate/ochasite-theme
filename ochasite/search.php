<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package ochasite
 */

get_header(); ?>

<div class="container">
    <div class="pagewraps">
        <?php get_sidebar('left');?>
            <section class="site-content-wrap">
                <div class="contentbox">
    				<?php if ( have_posts() ) : ?>
                        <header>
                            <h1 class="entry-title"><?php /* translators: %s: post title */  printf( esc_html__( 'Search Results for: %s', 'ochasite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                        </header>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', 'search' ); ?>
                        <?php endwhile; ?>
                        <?php 
    					// Previous/next post navigation.
    					the_posts_pagination( array(
    						'mid_size' => 2,
    						'prev_text' => __( 'Back', 'ochasite' ),
    						'next_text' => __( 'Next', 'ochasite' ),
    						'screen_reader_text' => __( 'Posts navigation', 'ochasite' )
    					) ); 
    					?>
                    <?php else : ?>
                        <?php get_template_part( 'no-results', 'search' ); ?>
                    <?php endif; ?>
                </div>
            </section>
        <?php get_sidebar();?>
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- container -->

<?php get_footer(); ?>
