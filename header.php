<?php ?>

<!doctype html>

	<html class="no-js" <?php language_attributes(); ?> >

		<head>

			<meta charset="<?php bloginfo( 'charset' ); ?>" />

			<meta http-equiv="X-UA-Compatible" content="IE=edge">

			<meta name="viewport" content="width=device-width, initial-scale=1.0" />

			<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

			<?php wp_head(); ?>

		</head>

		<body <?php body_class(); ?>>

		<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>

			<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>

		<?php endif; ?>

		<header id="site-header" class="ui-element layout-element" role="banner">

			<?php get_template_part( 'elements/brand/brand.rams' ); ?>

			<?php get_template_part( 'elements/brand/brand.state' ); ?>

			<?php get_template_part( 'elements/brand/brand.cvmbs' ); ?>

			<?php get_template_part( 'elements/buttons/button.site.menu' ); ?>

		</header>
