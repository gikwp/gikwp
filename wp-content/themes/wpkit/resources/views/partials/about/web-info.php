<?php

/**
 * Displays section web info.
 */

$heading   = get_field( 'webinfo_heading' );
$content_1 = get_field( 'webinfo_content_1' );
$content_2 = get_field( 'webinfo_content_2' );

if ( empty( $heading ) && empty( $content_1 ) && empty( $content_2 ) ) {
	return;
}

$col_1_class = ! empty( $content_2 ) ? 'col-7' : 'col-12';
$col_2_class = ! empty( $content_1 ) ? 'col-5' : 'col-12';
?>
<div class="separated my-lg-5"></div>
<section id="web" class="web-info">
	<?php if ( ! empty( $heading ) ): ?>
        <h2 class="display-3">
			<?php echo esc_html( $heading ); ?>
        </h2>
	<?php endif; ?>

    <div class="row">
		<?php if ( ! empty( $content_1 ) ): ?>
            <div class="<?php echo esc_attr( $col_1_class ); ?>">
                <div class="text-block bg-cinder p-4 h-100">
					<?php echo $content_1; ?>
                </div>
            </div>
		<?php endif; ?>
		<?php if ( ! empty( $content_2 ) ): ?>
            <div class="<?php echo esc_attr( $col_2_class ); ?>">
                <div class="text-block bg-cinder p-4 h-100">
					<?php echo $content_2; ?>
                </div>
            </div>
		<?php endif; ?>
    </div>
</section>