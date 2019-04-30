<div class="careers program-block">

	<div class="careers__intro">
		<h3 class="careers__title program-block__title">
			<?php _e( 'Career Opportunties', 'cvmbsPress' ); ?>
		</h3>

		<?php if ( get_sub_field('desc') ) : ?>
		<div class="careers__desc">
			<?php the_sub_field('desc'); ?>
		</div>
		<?php endif; ?>
	</div><!-- .careers__intro -->

	<div class="careers__content">

		<?php if ( have_rows( 'careers' ) ) : ?>
		<ul class="careers__list">

			<?php while ( have_rows( 'careers' ) ) : the_row(); ?>
			<li class="careers__item">
				<?php the_sub_field('career'); ?>
			</li>
			<?php endwhile; ?>

		</ul><!-- .careers__list -->
		<?php endif; ?>

	</div><!-- .careers__content -->

</div><!-- .careers -->
