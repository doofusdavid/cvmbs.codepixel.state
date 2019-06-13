<?php

    $header  = get_field( 'page_header' );
    $options = $header[ 'header_options' ];
    $image   = $header[ 'background_image' ];

if ( have_rows('page_header') ) :
	while ( have_rows('page_header') ) : the_row();
		if ( get_sub_field('styled_header') ) :
?>

<header class="flexible-page-header--styled" style="background-image:url(<?php echo $image[ 'url' ]; ?>);">
	<div class="flexible-page-header--styled__inner">
		<div class="flexible-page-header--styled__content">
            <!-- page title -->
            <h1 class="entry-title">

                <?php the_title(); ?>

            </h1>
            <!-- END page title -->

            <!-- page subtitle -->
            <p class="entry-subtitle"> <?php echo $options[ 'subtitle' ]; ?></p>
            <!-- END page subtitle -->

            <?php if ( $options[ 'introduction' ] ) : ?>

            <span>

                <?php echo $options[ 'introduction' ]; ?>

            </span>

            <?php endif; ?>

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
