<?php

    $heading_level = get_sub_field( 'heading_level' );

?>

<div class="template-block">

	<div class="template-block__inner">

		<?php if ( have_rows( 'accordions' ) ) : ?>

		<div class="cvmbs-accordions">

			<?php while ( have_rows( 'accordions' ) ) : the_row(); ?>

			<div class="cvmbs-accordion">

				<?php echo '<' . $heading_level . ' class="cvmbs-accordion__title">'; ?>

					<?php the_sub_field( 'heading' ); ?>

				<?php echo '</' . $heading_level . '>'; ?>

				<div class="cvmbs-accordion__content">

					<?php the_sub_field( 'content' ); ?>

				</div>

			</div><!-- .cvmbs-accordion -->

			<?php endwhile; ?>

		</div>
        <!-- .cvmbs-accordions -->

		<?php endif; ?>

	</div>
    <!--.template-block__inner -->

</div>
<!-- .template-block -->
