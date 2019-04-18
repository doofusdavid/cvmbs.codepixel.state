<?php
$bg_img = get_sub_field('img') ? 'style="background-image:url(' . get_sub_field('img') .')";' : '';
?>

<div class="research program-block">

	<div class="research__image" <?php echo $bg_img; ?>>
	</div><!-- .research__image -->

	<div class="research__content">

		<h3 class="research__title program-block__title">
			<?php _e( 'Research Opportunities', 'cvmbsPress' ); ?>
		</h3>

		<?php the_sub_field('desc'); ?>

		<?php if ( have_rows('opportunities') ) : ?>
		<ul>

			<?php while ( have_rows('opportunities') ) : the_row(); ?>
			<li>

				<?php
				if ( $link = get_sub_field('link') ) :
					echo '<a href="' . esc_url( $link ) . '">' . esc_attr( get_sub_field('name') ) . '</a>';
				else :
					the_sub_field('name');
				endif;
				?>

			</li>
			<?php endwhile; ?>

		</ul>
		<?php endif; ?>

	</div><!-- .research__content -->

</div><!-- .research -->
