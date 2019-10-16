<?php

    $homepage_options = get_field( 'dvm_homepage_options' );

    $learning_opportunities_content = $homepage_options[ 'learning_opportunities_content' ];

?>

<!-- overlay -->
<div class="panel-overlay">

    <!--  -->

</div>
<!-- END overlay -->

<!-- content -->
<div class="panel-content">

    <h2>

        <?php echo $learning_opportunities_content[ 'title' ]; ?>

    </h2>

    <p>

        <?php echo $learning_opportunities_content[ 'text' ]; ?>

    </p>

    <!-- buttons -->
    <div class="button-row">

        <!-- advising -->
        <a class="document-link" href="<?php echo $learning_opportunities_content[ 'link' ][ 'url' ]; ?>">

            <?php echo $learning_opportunities_content[ 'link' ][ 'title' ]; ?>

        </a>
        <!-- END advising -->

    </div>
    <!-- END buttons -->

</div>
<!-- END content -->
