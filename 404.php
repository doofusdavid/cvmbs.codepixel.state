<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="error404__container">

	<div class="error404__inner">

		<main class="error404__content">

			<p class="error404__hidden" aria-hidden="true">404</p>

			<h1 class="error404__heading"><?php _e( 'Sorry, that page cannot be found.', 'cvmbsPress' ); ?></h1>

			<p class="error404__message"><?php _e( 'We apologise for the inconvenience, but the page or section you have attempted to access cannot be found.', 'cvmbsPress' ); ?></p>

		</main><!-- .error404__content -->

	</div><!-- .error404__inner -->

</div><!-- .error404__container -->

<?php
get_template_part( 'elements/layout/layout.footer' );

get_footer();
