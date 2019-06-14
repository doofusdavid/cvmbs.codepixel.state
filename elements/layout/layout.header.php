
<?php $site_type = get_field( 'site_type', 'options' ); ?>

<!-- header -->
<header id="site-header" class="header <?php echo $site_type; ?>" role="banner" aria-owns="cvmbs-content">

    <?php get_template_part( 'elements/brand/brand.rams' ); ?>

    <?php get_template_part( 'elements/brand/brand.state' ); ?>

    <?php get_template_part( 'elements/brand/brand.cvmbs' ); ?>

    <?php if ( $site_type == 'department' || $site_type == 'special' ) {

        get_template_part( 'elements/brand/brand.local' );

    } ?>

    <?php get_template_part( 'elements/buttons/button.site.menu' ); ?>

</header>
<!-- END header -->
