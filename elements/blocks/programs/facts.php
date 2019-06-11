<div class="program-facts program-block">
	<div class="program-facts__inner">
		<h2 class="program-facts__title program-block__title">
			<?php _e( 'Program Highlights', 'cvmbsPress'); ?>
		</h2>

		<div class="program-facts__content">

			<?php if ( have_rows( 'facts' ) ): ?>

				<ul class="program-facts__list">

					<?php while ( have_rows( 'facts' ) ): the_row(); ?>

					<li class="program-facts__item">

						<h3 class="program-facts__name"><?php the_sub_field('fact'); ?></h3>

						<?php the_sub_field('desc'); ?>

					</li>

					<?php endwhile; ?>

				</ul>

			<?php endif; ?>

		</div><!-- .program-facts__list -->
	</div><!-- .program-facts__inner -->
</div><!-- .program-facts -->
