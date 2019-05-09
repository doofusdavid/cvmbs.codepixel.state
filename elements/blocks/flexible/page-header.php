<?php
$header_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'x-large' ) . ');"' : '';

if ( have_rows('page_header') ) :
	while ( have_rows('page_header') ) : the_row();
		if ( get_sub_field('styled_header') ) :
?>

<header class="flexible-page-header--styled" <?php echo $header_bg; ?>>
	<div class="flexible-page-header--styled__inner">
		<div class="flexible-page-header--styled__content">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<?php
			if ( have_rows('header_options') ) :
				while ( have_rows('header_options') ) : the_row();

				if ( $subtitle = get_sub_field('subtitle') ) :
			?>

				<p class="entry-subtitle"><?php the_sub_field('subtitle'); ?></p>

			<?php
				endif;

				the_sub_field('intro');

				endwhile;
			endif;
			?>
		</div><!-- .flexible-page-header--styled__content -->
	</div><!-- .flexible-page-header--styled__inner -->
</header><!-- .flexible-page-header--styled -->

<?php else : ?>

<div class="flexible-page-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</div><!-- .flexible-page-header -->

<?php
		endif;
	endwhile;
endif;
