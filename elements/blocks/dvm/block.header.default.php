<?php

    $header  = get_field( 'page_header' );
    $options = $header[ 'header_options' ];
    $image   = $header[ 'background_image' ];

?>

<!-- page header -->
<header class="page-header default">

    <!-- page title -->
    <h1 class="entry-title">

        <?php the_title(); ?>

    </h1>
    <!-- END page title -->

</header>
<!-- END page header -->
