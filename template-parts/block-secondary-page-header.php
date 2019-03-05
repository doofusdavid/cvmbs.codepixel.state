<?php
$header_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'x-large' ) . ');"' : '';

if ( have_rows('page_header') ) :
	while ( have_rows('page_header') ) : the_row();
?>

<header class="secondary-page-header" <?php echo $header_bg; ?>>
	<div class="secondary-page-header__inner">
		<div class="secondary-page-header__content">
			<div class="secondary-page-header__content-inner">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<?php if ( $subtitle = get_sub_field('subtitle') ) : ?>

				<p class="entry-subtitle"><?php the_sub_field('subtitle'); ?></p>

				<?php endif; ?>

				<?php the_sub_field('intro'); ?>
			</div><!-- .secondary-page-header__content-inner -->
		</div><!-- .secondary-page-header__content -->
	</div><!-- .secondary-page-header__inner -->
</header><!-- .secondary-page-header -->

<?php
	endwhile;
endif;
