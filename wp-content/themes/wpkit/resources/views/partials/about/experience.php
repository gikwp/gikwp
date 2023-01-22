<?php

/**
 * Displays section Experience.
 */

$resumes = get_field( 'experience' );
if ( ! $resumes ) {
	return;
}

$experience_title = get_field( 'experience_title' );
?>
<div class="separated my-lg-5"></div>
<section id="resume" class="resume-info">
	<?php if ( ! empty( $experience_title ) ): ?>
        <h3 class="display-3">
			<?php echo esc_html( $experience_title ); ?>
        </h3>
	<?php endif; ?>

    <div class="resume-box bg-cinder">
		<?php foreach ( (array) $resumes as $resume ): ?>
            <div class="resume-row p-4">
                <div class="row">
                    <div class="col-2">
						<?php if ( $resume['company_logo'] ) {
							$image_size = apply_filters( 'wpkit_one_attachment_size', 'thumbnail' );
							$get_image = wp_get_attachment_image( $resume['company_logo'],
								$image_size,
								[ 'class' => 'img-fluid' ] );
							$figure_class = 'image-block mb-0 size-' . $image_size;
							printf( '<figure class="%1$s">%2$s</figure>', esc_attr( $figure_class ), $get_image );
						} ?>
                    </div>
                    <div class="col-10">
						<?php if ( $work_title = $resume['work_title'] ) {
							echo "<h6>{$work_title}</h6>";
						} ?>

                        <label class="fs-12 fw-lighter d-block mb-3">
							<?php if ( $resume['company_name'] ) {
								echo esc_html( $resume['company_name'] );
							} ?>
							<?php if ( $resume['start_date'] ) {
								echo ' | ' . esc_html( $resume['start_date'] );
							} ?>
							<?php if ( $resume['end_date'] && ! $resume['present'] ) {
								echo ' – ' . esc_html( $resume['end_date'] );
							} ?>
							<?php if ( $resume['present'] ) {
								echo ' – ' . __( 'Present', 'wpkit' );
							} ?>
                        </label>
						
						<?php if ( $description = $resume['description'] ): ?>
                            <div class="description">
								<?php echo $description; ?>
                            </div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
		<?php endforeach; ?>
    </div>
</section>