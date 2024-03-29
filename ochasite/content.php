<?php
/**
 * @package ochasite
 */
?>

          <?php if (has_post_thumbnail() ){ ?>
			<div class="thumbbox">
             <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
		   <?php }  ?>

        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary contentspace">
        	<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <?php if ( 'post' == get_post_type() ) : ?>
                <div class="postmeta">
                    <div class="post-date"><?php echo get_the_date(); ?></div><!-- post-date -->
                    <div class="post-comment"><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
                </div><!-- postmeta -->
            <?php endif; ?>
           	<?php the_excerpt(); ?>
            <span class="read-more"><a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More &rarr;','ochasite'); ?></a></span>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ochasite' ) ); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'ochasite' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        <?php endif; ?>
        <hr>
