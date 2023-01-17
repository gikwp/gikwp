<?php
/**
 * Displays content about-me.
 */

$me_image       = get_field( 'image_im' );
$me_description = get_field( 'description' );
$me_sub_title   = get_field( 'sub_title' );
?>

<div id="post-<?php the_id(); ?>" class="about-me">
  <?php if ( ! empty( $me_image ) || ! empty( $me_description ) ): ?>
    <section class="about-info">
      <div class="row">
        <div class="col-md-3">
          <figure class="image-block mb-0">
            <?php
            $image_size = apply_filters( 'wpkit_one_attachment_size', 'medium' );
            echo wp_get_attachment_image( $me_image, $image_size, false, [ 'class' => 'rounded-4 img-fluid' ] );
            ?>
          </figure>
        </div>
        <div class="col-md-7">
          <h1 class="display-3"><?php the_title(); ?></h1>

          <?php if ( ! empty( $me_sub_title ) ): ?>
            <h3 class="fs-24 mb-4"><?php echo esc_html( $me_sub_title ); ?></h3>
          <?php endif; ?>

          <?php if ( $me_description ) {
            echo $me_description;
          } ?>
        </div>
      </div>
    </section>

    <div class="separated my-lg-5"></div>
  <?php endif; ?>
</div>
