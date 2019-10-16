<?php

    $homepage_options = get_field( 'dvm_homepage_options' );

    $curriculum_content = $homepage_options[ 'curriculum_content' ];

?>

<!-- overlay -->
<div class="panel-overlay">

    <!--  -->

</div>
<!-- END overlay -->

<!-- content -->
<div class="panel-content">

    <h2>

        <?php echo $curriculum_content[ 'title' ]; ?>

    </h2>

    <p>

        <?php echo $curriculum_content[ 'text' ]; ?>

    </p>

    <a class="document-link" href="<?php echo $curriculum_content[ 'link' ][ 'url' ]; ?>">

        <?php echo $curriculum_content[ 'link' ][ 'title' ]; ?>

    </a>

</div>
<!-- END content -->
