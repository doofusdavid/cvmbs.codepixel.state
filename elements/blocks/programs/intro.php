<?php
if ( have_rows('program_intro') ) :
	while ( have_rows('program_intro') ) : the_row();

	$terms      = wp_get_post_terms( $post->ID, 'academic_level' );
	$children   = get_children( array(
		'post_parent' => $post->ID,
		'post_status' => 'publish',
		'tax_query'   =>  array( array(
			'taxonomy' => 'academic_level',
			'operator' => 'EXISTS'
		) )
	) );
?>

<div class="degree-program-intro program-block">
	<div class="degree-program-intro__inner">

		<div class="degree-program-intro__desc">
			<?php the_sub_field('desc'); ?>
		</div><!-- .degree-program-intro__desc -->

		<?php if ( have_rows('buttons') ) : ?>
		<div class="degree-program-intro__sidebar">

			<?php
			while ( have_rows('buttons') ) : the_row();
				$link = get_sub_field('link');
			?>

			<a class="degree-program-intro__button" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>

			<?php endwhile; ?>

		</div><!-- .degree-program-intro__sidebar -->
		<?php endif; ?>

	</div><!-- .degree-program-intro__inner -->

	<?php if ( $children ) : ?>
	<div class="degree-program-intro__grid">

		<?php
		if ( $terms ) :
			if ( $terms[0]->slug == 'undergraduate' ) :
				echo '<h2>' . __('Concentrations', 'cvmbsPress') . ' (' . count( $children ) . ')</h2>';
			elseif ( $terms[0]->slug == 'graduate' ) :
				echo '<h2>' . __('Specializations', 'cvmbsPress') . ' (' . count( $children ) . ')</h2>';
			endif;
		endif;

		foreach ( $children as $child ) :
			echo '<p><a href="' . esc_url( get_permalink( $child->ID ) ) . '">' . $child->post_title . '</a></p>';
		endforeach;
		?>

	</div><!-- .degree-program-intro__grid -->
	<?php endif; ?>
</div>

<?php
	endwhile;
endif;
