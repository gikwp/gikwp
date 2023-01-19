<div class="col mb-4">
    <div class="feature-box d-flex flex-column p-4">
        <h5 class="fea-title mb-4">
			<?php the_title(); ?>
        </h5>
        <div class="fea-excerpt">
			<?php the_excerpt(); ?>
        </div>
        <div class="fea-footer pt-4 mt-auto">
            <a href="#" class="btn-fea">
				<?php echo esc_html_e( 'Request price', 'wpkit' ); ?>
                <span><i class="bi bi-arrow-right"></i></span>
            </a>
        </div>
    </div>
</div>
