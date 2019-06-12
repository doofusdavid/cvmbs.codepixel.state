<div class="template-block">
	<div class="template-block__inner">

		<?php
		if ( have_rows('heading') ) :
			while ( have_rows('heading') ) : the_row();

			$tag = get_sub_field('html_tag');

			if ( $title = get_sub_field('title') ) :
				echo "<$tag class='group-bios__heading'>" . esc_attr( $title ) . "</$tag>";
			endif;

			endwhile;
		endif;

		if ( have_rows('contacts') ) :
		?>

		<div class="group-bios__grid">

			<?php while ( have_rows('contacts') ) : the_row(); ?>

			<div class="group-bios__grid-item">
				<div class="group-bios__image">
					<?php echo wp_get_attachment_image( get_sub_field('photo'), 'thumbnail' ); ?>
				</div><!-- .group-bios__image -->
				<div class="group-bios__details">
					<p class="group-bios__name"><?php the_sub_field('name'); ?></p>

					<?php if ( get_sub_field('description') ) : ?>
						<div class="group-bios__desc">
							<?php the_sub_field('description'); ?>
						</div><!-- .group-bios__description -->
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

	</div><!--. template-block__inner -->
</div><!--. template-block -->
