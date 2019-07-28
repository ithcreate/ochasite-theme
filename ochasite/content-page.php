<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ochasite
 */
?>

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ochasite' ),
				'after'  => '</div>',
			) );
		?>

	<?php edit_post_link( __( 'Edit', 'ochasite' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

