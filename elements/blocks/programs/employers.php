<div class="employers program-block">

	<div class="employers__intro">
		<h2 class="employers__title program-block__title">
			<?php _e( 'Potential Employers', 'cvmbsPress' ); ?>
		</h2>

		<?php if ( get_sub_field('desc') ) : ?>
		<div class="employers__desc">
			<?php the_sub_field('desc'); ?>
		</div>
		<?php endif; ?>
	</div><!-- .employers__intro -->

	<div class="employers__content">

		<?php if ( have_rows( 'employers' ) ) : ?>
		<ul class="employers__list">

			<?php while ( have_rows( 'employers' ) ) : the_row(); ?>
			<li class="employers__item">
				<?php the_sub_field('employer'); ?>
			</li>
			<?php endwhile; ?>

		</ul><!-- .employers__list -->
		<?php endif; ?>

	</div><!-- .employers__content -->

</div><!-- .employers -->
