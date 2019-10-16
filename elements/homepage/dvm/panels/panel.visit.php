<?php

    $homepage_options = get_field( 'dvm_homepage_options' );

    $visit_content = $homepage_options[ 'visit_content' ];

?>

<!-- overlay -->
<div class="panel-overlay">

    <!--  -->

</div>
<!-- END overlay -->

<!-- content -->
<div class="panel-content">

    <h2>

        <?php echo $visit_content[ 'title' ]; ?>

    </h2>

    <p>

        <?php echo $visit_content[ 'text' ]; ?>

    </p>

    <a class="document-link" href="<?php echo $visit_content[ 'link' ][ 'url' ]; ?>">

        <?php echo $visit_content[ 'link' ][ 'title' ]; ?>

    </a>

</div>
<!-- END content -->
