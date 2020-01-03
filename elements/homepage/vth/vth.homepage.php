<?php

    $homepage_options = get_field( 'vth_homepage_options' );

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content vth" data-off-canvas-content>

    <?php get_template_part( 'elements/homepage/vth/vth.billboard' ); ?>

    <?php get_template_part( 'elements/homepage/vth/vth.content' ); ?>

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->

<?php get_template_part( 'elements/homepage/special/toolbar/toolbar.menu' ); ?>
