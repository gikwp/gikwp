<?php
/**
 * Displays content about-me.
 */

$me_image       = get_field( 'image_im' );
$me_description = get_field( 'description' );
?>

<div id="post-<?php the_id(); ?>" class="about-me">
    <!-- Start section about-info -->
    <?php if ( ! empty( $me_image ) || ! empty( $me_description ) ): ?>
		<?php wk_template( 'partials/about/about-info' ); ?>
	<?php endif; ?>
    <!-- End section about-info -->

    <!-- Start section web-info -->
	<?php wk_template( 'partials/about/web-info' ); ?>
    <!-- End section web-info -->

    <!-- Start section experience -->
	<?php wk_template( 'partials/about/experience' ); ?>
    <!-- End section experience -->

    <!-- Start section contacts -->
	<?php wk_template( 'partials/about/contacts' ); ?>
    <!-- End section contacts -->
</div>
