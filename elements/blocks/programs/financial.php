<?php
if ( have_rows('tuition_financial_aid') ) :
	while ( have_rows('tuition_financial_aid') ) : the_row();
?>

<div class="financial">

	<div class="financial__inner">

		<div class="financial__content">

			<h2 class="financial__title program-block__title"><?php the_sub_field('heading'); ?></h2>

			<?php
			if ( get_sub_field('desc') ) :
				the_sub_field('desc');
			else :
				echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non dapibus lacus. Aenean sodales, mauris nec ornare eleifend, eros arcu molestie felis, id ornare est erat sed velit. Quisque hendrerit vitae justo a tristique. Nullam purus ipsum, venenatis ultricies dictum ac, lacinia eget dolor. Curabitur et rhoncus augue. Nullam aliquet tortor non ultricies blandit. Proin nec libero at sapien lobortis gravida eu non ipsum. Suspendisse pellentesque dapibus gravida. Sed faucibus elit in dignissim malesuada.</p>';
			endif;

			if ( $cta = get_sub_field('call_to_action') ) :
			?>

			<p class="financial__cta">
				<a class="financial__button" href="<?php echo esc_url( $cta['url'] ); ?>"><?php echo esc_attr( $cta['title'] ); ?></a>
			</p>

			<?php endif; ?>

		</div>

	</div><!-- .financial__inner -->

</div><!-- .financial -->

<?php
	endwhile;
endif;
