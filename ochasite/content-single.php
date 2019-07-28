<?php
/**
 * @package ochasite
 */
?>

    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

  <div class="postmeta">
    <div class="post-date"><?php echo get_the_date(); ?>に投稿されたブログ記事です。</div><!-- post-date -->
  </div> <!-- postmeta -->

  <?php 
  if (has_post_thumbnail() ){
      echo '<div class="post-thumb">';
      the_post_thumbnail();
      echo '</div>';
  }
  ?>

  <div class="entry-content">
    <?php the_content(); ?>
    <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'ochasite' ),
            'after'  => '</div>',
        ) );
    ?>
  </div>

<h2>記事情報</h2>

      <div class="post-categories">
        この記事のカテゴリーは<?php the_category(' '); ?>です。
      </div>

      <div class="post-tags">
        この記事のタグは<?php the_tags(' '); ?>です。
      </div>

    <div class="post-comment"> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>

  
  <footer class="entry-meta">
    <?php edit_post_link( __( 'Edit', 'ochasite' ), '<span class="edit-link">', '</span>' ); ?>
  </footer> <!-- .entry-meta --> 
