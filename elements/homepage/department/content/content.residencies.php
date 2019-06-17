<?php

	// set global blog variable
	global $blog_id;

	// get global WP taxonomies
	global $wp_taxonomies;

	// taxonomies used for queries
	$tax_terms = array( 'department' );

	// set dynamic blog id
	$currentsite = $blog_id;

	// get site path
	$siteinfo = get_blog_details();

	// parse URL for site path
	$dept_slug = str_replace( '/', '', $siteinfo->path );

	$department_options = get_field( 'department_homepage_options' );

	$postdoc = $department_options['internships_externships'];
	$internships = $postdoc['internships'];
	$externships = $postdoc['externships'];

	// switch to main site for query
	switch_to_blog( 1 );

	// grant switch_to_blog() access to query taxonomies
	foreach ( $tax_terms as $term ) {
		if ( !taxonomy_exists( $term ) ) {
			$wp_taxonomies[$term] = '';
		}
	}

	$args = array(
		'post_type'      => 'residency',
		'orderby'        => 'title',
		'order'          => 'ASC',
		'posts_per_page' =>  99,
		'tax_query'      =>  array(
			array(
				'taxonomy' => 'department',
				'field'    => 'slug',
				'terms'    =>  array( $dept_slug )
			)
		)
	);

	$query = new WP_Query( $args );

	if ( $query->have_posts() || $internships || $externships ) :

		$titles = array();

		if ( $query->have_posts() ) {
			$titles[] = __( 'Residencies', 'cvmbsPress' );
		}

		if ( $internships ) {
			$titles[] = __( 'Internships', 'cvmbsPress' );
		}

		if ( $externships ) {
			$titles[] = __( 'Externships', 'cvmbsPress' );
		}

?>

<!-- residencies -->
<section id="department-residencies" class="residencies homepage-section">

	<!-- visual FX -->
	<div class="design-layer">

		<!-- color -->
		<div class="color fx-layer layer">
			<!--  -->
		</div>
		<!-- END color -->

		<!-- image -->
		<div class="image fx-layer layer">
			<!-- -->
		</div>
		<!-- END image -->

	</div>
	<!-- END visual FX -->

	<!-- programs -->
	<div id="department-residencies-content" class="residencies__content">

		<?php
		$title_count = count( $titles );

		if ( $title_count == 3 ) {
			echo '<h2 class="section-heading">' . $titles[0] . ', ' . $titles[1] . ', and ' . $titles[2] . '</h2>';
		} elseif ( $title_count == 2 ) {
			echo '<h2 class="section-heading">' . $titles[0] . ' and ' . $titles[1] . '</h2>';
		} else {
			echo '<h2 class="section-heading">' . $titles[0] . '</h2>';
		}
		?>

		<?php if ( $query->have_posts() ) : ?>

			<div class="programs-container">

				<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<a class="program-link" href="<?php the_permalink(); ?>">

					<span class="program-link__title"><?php the_title(); ?></span>

				</a><!-- .program-link -->

				<?php endwhile; wp_reset_postdata(); ?>

			</div><!-- .programs-container -->

		<?php endif; ?>

		<?php if ( $internships || $externships ) : ?>

			<div class="programs-container">

				<?php if ( $internships ) : ?>
					<a class="program-link" href="/internships">
						<?php _e( 'View Available Internships', 'cvmbsPress' ); ?>
					</a><!-- .program-link -->
				<?php endif; ?>

				<?php if ( $externships ) : ?>
					<a class="program-link" href="/externships">
						<?php _e( 'View Available Externships', 'cvmbsPress' ); ?>
					</a><!-- .program-link -->
				<?php endif; ?>
			</div><!-- .programs-container -->

		<?php endif; ?>

	</div>
	<!-- END programs -->

</section>
<!-- END residencies -->

<?php
endif;

// return to getting data from current site
switch_to_blog( $currentsite );
