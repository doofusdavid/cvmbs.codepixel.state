<?php

    $site_type = get_field( 'site_type', 'options' );
    $wrapper = ( is_front_page() ) ? 'h1' : 'div';
    $college = __( 'College of Veterinary Medicine and Biomedical Sciences' );

?>

<!-- header -->
<header id="site-header" class="site-header <?php echo $site_type; ?>" role="banner" aria-owns="content">

    <div class="site-branding">
        <div class="csu-signature">
            <a href="https://www.colostate.edu/" class="signature-link">
                <span class="screen-reader-text"><?php _e( 'Colorado State University', 'cvmbsPress' ); ?></span>
            </a>
        </div><!-- .csu-signature -->

        <?php if ( $site_type == 'department' || $site_type == 'special' ) : ?>

            <<?php echo $wrapper; ?> class="site-identifier">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="identifier-link" rel="home"><?php the_field( 'site_title', 'options' ); ?></a>
            </<?php echo $wrapper; ?>><!-- .site-identifier -->

            <div class="site-identifier identifier--college">
                <a href="<?php echo esc_url( home_url( '../' ) ); ?>" class="identifier-link"><?php echo $college; ?></a>
            </div><!-- .site-identifier -->

        <?php else : ?>

            <<?php echo $wrapper; ?> class="site-identifier identifier--college">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="identifier-link" rel="home"><?php echo $college; ?></a>
            </<?php echo $wrapper; ?>><!-- .site-identifier -->

        <?php endif; ?>
    </div><!-- .site-branding -->

    <?php get_template_part( 'elements/buttons/button.site.menu' ); ?>

</header>
<!-- END header -->
