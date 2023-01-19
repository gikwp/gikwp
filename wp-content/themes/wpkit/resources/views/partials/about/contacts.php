<?php

/**
 * Displays section contacts.
 */

$get_forms   = get_field( 'contact_forms' );
$description = get_field( 'contact_description' );
$heading     = get_field( 'contact_heading' );
$get_links   = get_field( 'contact_links' );

$title = $get_forms['title'];
$forms = $get_forms['forms'];
$links = $get_links['contacts'];
$label = $get_links['label'];

$col_forms_class = $description ? 'col-7' : 'col-12';
$col_info_class  = $forms ? 'col-5' : 'col-12';

?>
<div class="separated my-lg-5"></div>
<section id="contact" class="contact-me">
	<?php if ( ! empty( $heading ) ): ?>
        <h3 class="display-3">
			<?php echo esc_html( $heading ); ?>
        </h3>
	<?php endif; ?>
    <div class="row">
		<?php if ( ! empty( $description ) ): ?>
            <div class="<?php echo esc_html( $col_info_class ); ?>">
                <div class="contact-info d-flex flex-column bg-cinder p-4 h-100">
                    <div class="contact-contains">
						<?php echo $description; ?>
                    </div>
					<?php if ( $links ): ?>
                        <div class="contact-links mt-auto">
							<?php if ( $label ): ?>
                                <label class="text-white fw-light mb-2">
									<?php echo esc_html( $label ); ?>
                                </label>
							<?php endif; ?>
                            <ul class="list-unstyled mb-0">
								<?php foreach ( (array) $links as $link ): ?>
                                    <li>
                                        <i class="bi bi-<?php echo esc_attr( $link['icon'] ); ?> text-emerald"></i>
                                        <a href="<?php echo esc_url( $link['link'] ); ?>"
											<?php echo $link['target'] ? esc_attr( 'target="_blank"' ) : ''; ?>
                                        >
											<?php echo esc_html( $link['text'] ); ?>
                                        </a>
                                    </li>
								<?php endforeach; ?>
                            </ul>
                        </div>
					<?php endif; ?>
                </div>
            </div>
		<?php endif; ?>
		
		<?php if ( $forms ): ?>
            <div class="<?php echo esc_attr( $col_forms_class ); ?>">
                <div class="contact-form bg-cinder p-4 h-100">
					<?php if ( $title ): ?>
                        <h5 class="mb-3"><?php echo esc_html( $title ); ?></h5>
					<?php endif; ?>
					<?php echo do_shortcode( $forms ); ?>
                </div>
            </div>
		<?php endif; ?>
    </div>
</section>