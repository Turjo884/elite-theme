<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elite
 */
?>

<!-- New Blog Create Start -->
<div class="col-md-4">

    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
       
    <?php endif; ?>


</div>
<!-- New Blog Create End -->

