
<!-- header -->
<header id="site-header" class="ui-element layout-element" role="banner">

    <?php $site_type = get_field( 'site_type', 'options' ); ?>

    <?php get_template_part( 'elements/brand/brand.rams' ); ?>

    <?php get_template_part( 'elements/brand/brand.state' ); ?>

    <?php get_template_part( 'elements/brand/brand.cvmbs' ); ?>

    <?php if ( $site_type == 'department' || $site_type == 'special' ) {

        get_template_part( 'elements/brand/brand.local' );

    } ?>

    <?php get_template_part( 'elements/buttons/button.site.menu' ); ?>

</header>
<!-- END header -->
