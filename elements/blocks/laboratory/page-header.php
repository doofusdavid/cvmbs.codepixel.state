<?php

$header_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'x-large' ) . ');"' : '';

if ( have_rows('page_header') ) :

	while ( have_rows('page_header') ) : the_row();

?>

<header class="laboratory-page-header" <?php echo $header_bg; ?>>

	<div class="laboratory-page-header__inner">

		<div class="laboratory-page-header__content">

			<div class="laboratory-page-header__content-inner">

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<?php if ( $subtitle = get_sub_field( 'subtitle' ) ) : ?>

				<p class="entry-subtitle"><?php the_sub_field( 'subtitle' ); ?></p>

				<?php endif; ?>

				<?php the_sub_field( 'description' ); ?>

			</div><!-- .laboratory-page-header__content-inner -->

		</div><!-- .laboratory-page-header__content -->

	</div><!-- .laboratory-page-header__inner -->

</header><!-- .laboratory-page-header -->

<?php

	endwhile;

endif;
