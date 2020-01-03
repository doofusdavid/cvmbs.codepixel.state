<?php

	$h_level = get_sub_field('h_level');

?>

<div class="template-block accordion-block">
	<div class="template-block__inner">

	<?php

        // heading options
        $heading_option  = get_sub_field( 'heading_option' );
        $heading_content = get_sub_field( 'heading' );

        if ( $heading_option ) : ?>

            <<?php echo $heading_content[ 'html_tag' ]; ?> class="description-title">

                <?php echo $heading_content[ 'title' ]; ?>

            </<?php echo $heading_content[ 'html_tag' ]; ?>>

        <?php endif; ?>

		<?php if ( have_rows('accordions') ) : ?>

		<div class="cvmbs-accordions">

			<?php while ( have_rows( 'accordions' ) ) : the_row(); ?>

			<div class="cvmbs-accordion">
				<?php echo '<' . $h_level . ' class="cvmbs-accordion__title">'; ?>
					<?php the_sub_field( 'heading' ); ?>
				<?php echo '</' . $h_level . '>'; ?>

				<div class="cvmbs-accordion__content">
					<?php the_sub_field( 'content' ); ?>
				</div>
			</div><!-- .cvmbs-accordion -->

			<?php endwhile; ?>

		</div><!-- .cvmbs-accordions -->

		<?php endif; ?>

	</div><!--.template-block__inner -->
</div><!-- .template-block -->
