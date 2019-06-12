<div class="template-block flexible-quote">
	<div class="template-block__inner">

		<blockquote class="page-quote__wrap">
			<div class="page-quote__icon--open" aria-hidden="true">
				<svg class="page-quote__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 102 69.6">
					<path xmlns="http://www.w3.org/2000/svg" d="M4.6,43.7c1.7-9.4,6-15.4,15.8-25L40.1,0h13.2L29.5,32.2h15.1l-6.7,37.4H0L4.6,43.7z M53.3,43.7c1.7-9.4,6-15.4,15.8-25   L88.8,0H102L78.2,32.2h15.1l-6.7,37.4H48.7L53.3,43.7z"/>
				</svg>
			</div><!-- .page-quote__icon--open -->

			<div class="page-quote__quotation">
				<?php the_sub_field( 'quote' ); ?>
			</div><!-- .page-quote__quotation -->

			<div class="page-quote__icon--closed" aria-hidden="true">
				<svg class="page-quote__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 102 69.6">
					<path xmlns="http://www.w3.org/2000/svg" d="M97.4,25.9c-1.7,9.4-6,15.4-15.8,25L61.9,69.6H48.7l23.8-32.2H57.4L64.1,0H102L97.4,25.9z M48.7,25.9   c-1.7,9.4-6,15.4-15.8,25L13.2,69.6H0l23.8-32.2H8.6L15.4,0h37.9L48.7,25.9z"/>
				</svg>
			</div><!-- .page-quote__icon--closed -->

			<div class="page-quote__attribution">
				<p>
					<cite class="page-quote__cite"><span class="page-quote__name"><?php the_sub_field( 'name' ); ?></span><?php echo ( $title = get_sub_field( 'title' ) ) ? ', ' . esc_attr( $title ) : ''; ?></cite>
				</p>
			</div><!-- .page-quote__attribution -->
		</blockquote><!-- .page-quote__wrap -->

	</div><!--. template-block__inner -->
</div><!--. template-block -->
