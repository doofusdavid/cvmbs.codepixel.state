<?php

    $header  = get_field( 'page_header' );
    $options = $header[ 'header_options' ];
    $image   = $header[ 'background_image' ];

?>

<!-- page header -->
<header class="page-header styled" style="background-image:url(<?php echo $image[ 'url' ]; ?>);">

    <!-- page title -->
    <h1 class="page-title">

        <?php the_title(); ?>

    </h1>
    <!-- END page title -->

    <!-- page subtitle -->
    <span class="page-subtitle">

        <?php echo $options[ 'subtitle' ]; ?>

    </span>
    <!-- END page subtitle -->

    <!-- text -->
    <p class="page-intro">

        <?php echo $options[ 'introduction' ]; ?>

    </p>
    <!-- END text -->

</header>
<!-- END page header -->
