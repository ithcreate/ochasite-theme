<?php
/**
 * The template for displaying 404 pages.
 *
 * @package ochasite
 */

get_header(); ?>

<div class="container">
  <div class="pagewraps">
    <section class="site-content-wrap">
      <header class="page-header">
        <h1 class="entry-title">
          <?php esc_html_e( 'Oops! page Not Found', 'ochasite' ); ?>
        </h1>
      </header><!-- .page-header -->
      <div class="page-content">
        <p>
          <?php esc_html_e( 'It looks like nothing was found at this location.', 'ochasite' ); ?>
        </p>
      </div><!-- .page-content --> 
    </section>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer(); ?>
