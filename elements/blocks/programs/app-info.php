<?php
$bg_img = get_sub_field('img') ? 'style="background-image:url(' . get_sub_field('img') .');"' : 'style="background-image:url(' . get_template_directory_uri() . '/dist/assets/img/modules/app-info/background.00.jpg);"';
?>

<div class="app-info program-block image--<?php the_sub_field('img_pos'); ?>">

	<div class="app-info__image" <?php echo $bg_img; ?>>
	</div><!-- .research__image -->

	<div class="app-info__content">

		<div class="app-info__inner">

			<h2 class="app-info__title program-block__title">
				<?php _e( 'Application Information and Deadlines', 'cvmbsPress' ); ?>
			</h2>

			<?php the_sub_field('desc'); ?>

			<?php if ( have_rows('dates') ) : ?>
			<table class="app-info__table">
				<tbody>
					<tr>
						<th scope="col">Date</th>
						<th scope="col">Action</th>
					</tr>

					<?php while ( have_rows('dates') ) : the_row(); ?>
					<tr>
						<td><?php the_sub_field('date'); ?></td>
						<td><?php the_sub_field('action'); ?></td>
					</tr>
					<?php endwhile; ?>
				</tbody>
			</table><!-- .app-info__table -->
			<?php endif; ?>

			<?php
			if ( have_rows('ctas') ) :
				while ( have_rows('ctas') ) : the_row();
					$link = get_sub_field('link');
			?>

			<p class="app-info__cta">
				<a class="app-info__button" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>
			</p>

			<?php
				endwhile;
			endif;
			?>

		</div><!-- .app-info__inner -->

	</div><!-- .research__content -->

</div><!-- .research -->
