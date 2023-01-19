<?php

get_header();

$heading     = get_field( 'serv_heading', 'options' );
$description = get_field( 'serv_description', 'options' );
?>

<?php if ( $heading || $description ): ?>
    <div class="page-heading">
        <h1 class="display-3">
			<?php echo esc_html( $heading ); ?>
        </h1>

        <div class="page-description">
			<?php echo $description; ?>
        </div>
    </div>
    <div class="separated my-lg-5"></div>
<?php endif; ?>

<?php
if (have_posts()) {
    echo '<div class="row row-cols-2">';
	// Start Loop
	while ( have_posts() ) { the_post();
		wk_template( 'partials/content/content', 'services' );
	} // End Loop
    echo '</div>';
}

get_footer();