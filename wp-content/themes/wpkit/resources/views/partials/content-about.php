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
					
					<?php /*if ( ! empty( $me_sub_title ) ): */ ?><!--
                        <h3 class="fs-24 mb-4"><?php /*echo esc_html( $me_sub_title ); */ ?></h3>
					--><?php /*endif; */ ?>
					
					<?php if ( $me_description ) {
						echo $me_description;
					} ?>
                </div>
            </div>
        </section>

        <div class="separated my-lg-5"></div>
	<?php endif; ?>

    <section id="web" class="needed-info">
        <h2 class="display-3">
            Why do you need a website?
        </h2>
        <div class="row">
            <div class="col-7">
                <div class="text-block bg-cinder p-4 h-100">
                    <h5>
                        A website is your opportunity to present yourself and your company.
                    </h5>
                    <p>
                        You can order a small website to
                        present your company, or create a huge online store with feedback, payment, delivery and personal account
                        forms
                        for each customer.
                    </p>
                    <p class="mb-0">
                        The website is the face of your company or store. The main goal is to create a website competently so that
                        buyers can easily remember it, be able to use it comfortably and have no questions when looking at the
                        interface.
                    </p>
                </div>
            </div>
            <div class="col-5">
                <div class="text-block bg-cinder p-4 h-100">
                    <h5>I'm creating:</h5>
                    <ul class="list-line mb-0">
                        <li>Online stores of any complexity;</li>
                        <li>Information resources with many sections or topics;</li>
                        <li>Online stores based on ready-made solutions;</li>
                        <li>Small websites and landings;</li>
                        <li>Mobile applications.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="separated my-lg-5"></div>
	
	<?php if ( $resumes = get_field( 'experience' ) ): ?>
        <section id="resume" class="resume-info">
			<?php if ( $experience_title = get_field( 'experience_title' ) ): ?>
                <h2 class="display-3">
					<?php echo esc_html( $experience_title ); ?>
                </h2>
			<?php endif; ?>

            <div class="resume-box bg-cinder">
				<?php foreach ( (array) $resumes as $resume ): ?>
                    <div class="resume-row p-4">
                        <div class="row">
                            <div class="col-2">
								<?php if ( $resume['company_logo'] ) {
									$image_size   = apply_filters( 'wpkit_one_attachment_size', 'thumbnail' );
									$get_image    = wp_get_attachment_image( $resume['company_logo'],
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
	<?php endif; ?>

    <div class="separated my-lg-5"></div>
    <section id="contact" class="contact-me">
        <h3 class="display-3">
            Get in touch.
        </h3>
        <div class="row">
            <div class="col-5">
                <div class="contact-info d-flex flex-column bg-cinder p-4 h-100">
                    <h5 class="mb-3">What’s your story? Get in touch</h5>
                    <p>
                        Hello! I’m available for freelance work. If you have something that you need help with, feel free to
                        contact me at any time.
                    </p>
                    <p>
                        I believe that all interaction between our customers and me should be carried out
                        <strong>only by email</strong>. I don’t want to lose or smudge over telephone conversations. Short or
                        insignificant
                        moments can be solved through instant messengers or social networks.
                    </p>

                    <div class="contact-links mt-auto">
                        <label class="text-white fw-light mb-2">Contact Me:</label>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <i class="bi bi-envelope-fill text-emerald"></i>
                                <a href="mailto:support@gikwp.com" target="_blank">
                                    Send me an email
                                </a>
                            </li>
                            <li>
                                <i class="bi bi-skype text-emerald"></i>
                                <a href="https://join.skype.com/invite/CAyTiWJ1Nd5q" target="_blank">
                                    Send me a message
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-7">
                <div class="contact-form bg-cinder p-4 h-100">
                    <h5 class="mb-3">Say Something</h5>
	                <?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form"]' ); ?>
                </div>
            </div>
        </div>
    </section>
</div>
