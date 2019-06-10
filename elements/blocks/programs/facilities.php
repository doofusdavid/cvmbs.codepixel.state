<?php $places = get_sub_field('places'); ?>

<div class="section-places">
	<div class="section-places__inner">

		<!-- title -->
		<a href="/places" data-section="facilities">

			<h2 class="section-places__heading">

				<?php the_sub_field('heading'); ?>

				<span class="title-link"><?php _e( 'View All', 'cvmbsPress' ); ?></span>

			</h2>

		</a>
		<!-- END title -->

		<?php if ( get_sub_field('desc') ) : ?>
		<div class="section-places__desc">
			<?php the_sub_field('desc'); ?>
		</div>
		<?php endif; ?>

		<div id="facilities-carousel" class="places__grid article-cards">

			<?php
			foreach ( $places as $post ) : // variable must be called $post (IMPORTANT)
				setup_postdata( $post );
				$place_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
				$place_link = ( get_field('place_link') ) ? get_field( 'place_website' )['url'] : get_the_permalink();
			?>

			<a class="article places__grid-item" href="<?php echo esc_url( $place_link ) ?>">

				<!-- artwork -->
				<div class="thumb-artwork" style="background-image:url(<?php echo esc_url( $place_image ); ?>)">
					<!-- the emptiness -->
				</div>
				<!-- END artwork -->

				<!-- overlay -->
				<div class="thumb-overlay">
					<!-- the emptiness -->
				</div>
				<!-- END overlay -->

				<!-- header -->
				<header class="header">

					<!-- title -->
					<span class="place-title">
						<?php the_title(); ?>
					</span>
					<!-- END title -->

					<!-- link -->
					<span class="place-link">learn more</span>
					<!-- END link -->

				</header>
				<!-- END header -->
			</a><!-- .place-link -->

			<?php
			endforeach;

			wp_reset_postdata();
			?>

		</div>
		<!-- END news.feed -->

	</div><!-- .section-places__inner -->
</div><!-- .section-places -->
