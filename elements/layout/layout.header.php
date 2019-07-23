<?php

    $site_type  = get_field( 'site_type', 'options' );
    $wrapper    = ( is_front_page() ) ? 'h1' : 'div';
    $college    = __( 'College of Veterinary Medicine and Biomedical Sciences' );

    $line_break        = get_field( 'site_title_line_break', 'options' );
    $site_title_line_1 = get_field( 'site_title_line_1', 'options' );
    $site_title_line_2 = get_field( 'site_title_line_2', 'options' );

?>

<!-- header -->
<header id="site-header" class="site-header <?php echo $site_type; ?>" role="banner" aria-owns="content">

    <!-- .site-branding -->
    <div class="site-branding">

        <!-- .csu-signature -->
        <div class="csu-signature">

            <a href="https://www.colostate.edu/" class="signature-link">

                <span class="screen-reader-text"><?php _e( 'Colorado State University', 'cvmbsPress' ); ?></span>

            </a>

        </div>
        <!-- END .csu-signature -->

        <?php if ( $site_type == 'department' || $site_type == 'special' || $site_type == 'laboratory' ) : ?>

        <!-- .site-identifier -->
        <<?php echo $wrapper; ?> class="site-identifier">

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="identifier-link" rel="home">

                <?php if ( $line_break ) : ?>

                <?php echo $site_title_line_1 . '<br />' . $site_title_line_2; ?>

                <?php else : ?>

                <?php the_field( 'site_title', 'options' ); ?>

                <?php endif; ?>

            </a>

        </<?php echo $wrapper; ?>>
        <!-- END .site-identifier -->

        <!-- .site-identifier -->
        <div class="site-identifier identifier--college">

            <a href="<?php echo esc_url( home_url( '../' ) ); ?>" class="identifier-link"><?php echo $college; ?></a>

        </div>
        <!-- END .site-identifier -->

        <?php else : ?>

        <<?php echo $wrapper; ?> class="site-identifier identifier--college">

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="identifier-link" rel="home"><?php echo $college; ?></a>

        </<?php echo $wrapper; ?>>
        <!-- END .site-identifier -->

        <?php endif; ?>

    </div>
    <!-- END .site-branding -->

    <?php get_template_part( 'elements/buttons/button.site.menu' ); ?>

</header>
<!-- END header -->
