<section class="content-with-image image--<?php the_sub_field('img_pos'); ?>">
	<div class="content-with-image__img">
		<?php echo wp_get_attachment_image( get_sub_field('img_id'), 'full' ); ?>
	</div><!-- .content-with-image__img -->

	<div class="content-with-image__content">
		<h2 class="content-with-image__title"><?php the_sub_field('heading'); ?></h2>

		<?php the_sub_field('content'); ?>

		<?php if ( $cta = get_sub_field('cta_array') ) : ?>

		<p>
			<a class="content-with-image__button" href="<?php echo esc_url( $cta['url'] ); ?>"><?php echo esc_attr( $cta['title'] ); ?></a>
		</p>

		<?php endif; ?>

		<?php
		if ( have_rows('other_links') ) :
			while ( have_rows('other_links') ) : the_row();
		?>

		<div class="content-with-image__links">

			<?php if ( get_sub_field('heading') ) : ?>

			<h3 class="content-with-image__links-title"><?php the_sub_field('heading'); ?></h3>

			<?php endif; ?>

			<ul class="content-with-image__links-list">

				<?php
				if ( have_rows('links') ) :
					while ( have_rows('links') ) : the_row();
						$link = get_sub_field('link_array');
				?>

				<li class="content-with-image__links-item">
					<a href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>
				</li>

				<?php
					endwhile;
				endif;
				?>

			</ul><!-- .content-with-image__links-list -->
		</div><!-- .content-with-image__links -->

		<?php
			endwhile;
		endif;
		?>

	</div><!-- .content-with-image__content -->
</section><!-- .content-with-image -->
