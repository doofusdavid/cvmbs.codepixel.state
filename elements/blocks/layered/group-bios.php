<section class="group-bios">
	<?php if ( get_sub_field('heading') ) : ?>
	<h2 class="group-bios__heading"><?php the_sub_field('heading'); ?></h2>
	<?php endif; ?>

	<?php if ( have_rows('contacts') ) : ?>
	<div class="group-bios__grid">

		<?php while ( have_rows('contacts') ) : the_row(); ?>
		<div class="group-bios__grid-item">
			<div class="group-bios__image">
				<?php echo wp_get_attachment_image( get_sub_field('photo'), 'thumbnail' ); ?>
			</div><!-- .group-bios__image -->

			<div class="group-bios__details">
				<p class="group-bios__name"><?php the_sub_field('name'); ?></p>

				<?php if ( get_sub_field('desc') ) : ?>
				<div class="group-bios__desc">
					<?php the_sub_field('desc'); ?>
				</div><!-- .group-bios__desc -->
				<?php endif; ?>

				<?php if ( have_rows('phones') || get_sub_field('email') ) : ?>
				<div class="group-bios__contact">

					<?php while ( have_rows('phones') ) : the_row(); ?>
					<p>
						<?php if ( get_sub_field('type') ) : ?>
						<span class="group-bios__contact-detail"><?php the_sub_field('type'); ?></span>:
						<?php endif; ?>

						<?php the_sub_field('number'); ?>
					</p>
					<?php endwhile; ?>

					<?php if ( get_sub_field('email') ) : ?>
					<p><a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></p>
					<?php endif; ?>
				</div><!-- .group-bios__contact -->
				<?php endif; ?>

			</div><!-- .group-bios__details -->
		</div><!-- .group-bios__grid-item -->
		<?php endwhile; ?>

	</div><!-- .group-bios__grid -->
	<?php endif; ?>
</section><!-- .group-bios -->
