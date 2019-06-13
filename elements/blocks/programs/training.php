<?php
$bg_img = get_sub_field('img') ? 'style="background-image:url(' . get_sub_field('img') .');"' : 'style="background-image:url(' . get_template_directory_uri() . '/dist/assets/img/modules/postdoc/background.00.jpg);"';
?>

<div class="postdoc-training program-block image--<?php the_sub_field('img_pos'); ?>">

	<div class="postdoc-training__image" <?php echo $bg_img; ?>>
	</div><!-- .research__image -->

	<div class="postdoc-training__content">

		<div class="postdoc-training__inner">

			<h2 class="postdoc-training__title program-block__title">
				<?php the_sub_field('heading'); ?>
			</h2>

			<?php the_sub_field('desc'); ?>

			<?php if ( have_rows('dates') ) : ?>
			<table class="postdoc-training__table">
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
			</table><!-- .postdoc-training__table -->
			<?php endif; ?>

			<?php
			if ( have_rows('ctas') ) :
				while ( have_rows('ctas') ) : the_row();
					$link = get_sub_field('link');
			?>

			<p class="postdoc-training__cta">
				<a class="postdoc-training__button" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>
			</p>

			<?php
				endwhile;
			endif;
			?>

		</div><!-- .postdoc-training__inner -->

	</div><!-- .research__content -->

</div><!-- .research -->
