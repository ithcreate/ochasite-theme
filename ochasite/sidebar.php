<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ochasite
 */
?>

<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>        
    <aside> 
     <h3 class="widget-title"><?php esc_html_e( 'Archives', 'ochasite' ); ?></h3>          
        <ul>
            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
        </ul>
    </aside>
<?php endif; // end sidebar widget area ?>
