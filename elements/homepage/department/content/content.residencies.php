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

?>

<!-- postdoc-training -->
<section id="department-postdoc-training" class="postdoc-training homepage-section">

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
	<div id="department-postdoc-training-content" class="postdoc-training__content">

		<h2 class="section-heading">Residencies</h2>

		<?php
		// switch to main site for query
		switch_to_blog( 1 );

		// grant switch_to_blog() access to query taxonomies
		foreach ( $tax_terms as $term ) {
			if ( !taxonomy_exists( $term ) ) {
				$wp_taxonomies[$term] = '';
			}
		}
		?>


		<?php
		$args = array(
			'post_type'      => 'residency',
			'orderby'        => 'menu_order',
			'order'          => 'ASC',
			'posts_per_page' =>  99,
			'tax_query'      => array(
				array(
					'taxonomy' => 'department',
					'field'    => 'slug',
					'terms'    =>  array( $dept_slug )
				)
			)
		);

		$query = new WP_Query( $args );

		if ( $query->have_posts() ) :
		?>

		<div class="postdoc-training__type">

			<?php while ( $query->have_posts() ) : $query->the_post(); ?>

			<a class="program-link" href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a><!-- .program-link -->

			<?php endwhile; wp_reset_postdata(); ?>

		</div><!-- .postdoc-training__type -->

		<?php endif; ?>


		<?php
		// return to getting data from current site
		switch_to_blog( $currentsite );
		?>

	</div>
	<!-- END programs -->

</section>
<!-- END postdoc-training -->
