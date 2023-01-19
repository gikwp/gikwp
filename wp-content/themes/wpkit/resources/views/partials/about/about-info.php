<?php

/**
 * Displays section about info.
 */

$me_image       = get_field( 'image_im' );
$me_description = get_field( 'description' );
$me_sub_title   = get_field( 'sub_title' );
?>
<section class="about-info">
    <div class="row">
        <div class="col-md-2">
            <figure class="image-block mb-0">
				<?php
				$image_size = apply_filters( 'wpkit_one_attachment_size', 'medium' );
				echo wp_get_attachment_image( $me_image, $image_size, false, [ 'class' => 'rounded-4 img-fluid' ] );
				?>
            </figure>
        </div>
        <div class="col-md-8">
            <h1 class="display-3"><?php the_title(); ?></h1>
			
			<?php if ( $me_description ) {
				echo $me_description;
			} ?>
        </div>
    </div>
</section>