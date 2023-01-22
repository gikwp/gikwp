<?php
/**
 * Displays content about-me.
 */

?>

<div id="post-<?php the_id(); ?>" class="about-me">
    <!-- Start section about-info -->
	<?php wk_template( 'partials/about/about-info' ); ?>
    <!-- End section about-info -->

    <!-- Start section web-info -->
	<?php wk_template( 'partials/about/web-info' ); ?>
    <!-- End section web-info -->
    
    <!-- Start section experience -->
	<?php /*wk_template( 'partials/about/experience' ); */?>
    <!-- End section experience -->

    <!-- Start section contacts -->
	<?php wk_template( 'partials/about/contacts' ); ?>
    <!-- End section contacts -->
</div>
