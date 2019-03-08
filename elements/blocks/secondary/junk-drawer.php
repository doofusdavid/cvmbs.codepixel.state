<?php
if ( ( $heading = get_sub_field('heading') ) && have_rows('links') ) :
?>

<section class="junk-drawer">
	<h2 class="junk-drawer__title"><?php echo esc_attr( $heading ); ?></h2>

	<ul class="junk-drawer__list">

		<?php
		while ( have_rows('links') ) : the_row();
			$link = get_sub_field('link_array');
		?>

		<li class="junk-drawer__list-item">
			<a class="junk-drawer__link" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>
		</li><!-- .junk-drawer__list-item -->

		<?php endwhile; ?>

	</ul><!-- .junk-drawer__list -->
</section><!-- .junk-drawer -->

<?php
endif;
