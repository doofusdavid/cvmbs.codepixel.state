<?php

    // site title
    $site_title  = get_field( 'site_title', 'options' );
    $title_break = get_field( 'site_title_line_break', 'options' );
    $site_line_1 = get_field( 'site_title_line_1', 'options' );
    $site_line_2 = get_field( 'site_title_line_2', 'options' );

?>

<!-- billboard.title -->
<header id="homepage-title" class="homepage-section">

    <!-- site.title -->
    <span class="site-title standalone">

        <?php echo $site_title; ?>

    </span>
    <!-- END site.title -->

</header>
<!-- END billboard.title -->
