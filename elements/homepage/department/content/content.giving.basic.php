<?php

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

    // research content
    $giving_content = $department_options[ 'giving_content' ];

?>

<!-- visual FX -->
<div class="design-layer">

    <!-- image -->
    <div class="image fx-layer layer" style="background-image:url(<?php echo $giving_content[ 'background' ]; ?>)">

        <!-- empty -->

    </div>
    <!-- END image -->

    <!-- color -->
    <div class="color fx-layer layer">

        <!--  -->

    </div>
    <!-- END color -->

</div>
<!-- END visual FX -->

<!-- content -->
<div class="content-layer">

    <a href="<?php echo $giving_content[ 'button' ][ 'url' ]; ?>" class="content-button">

        <?php echo $giving_content[ 'button' ][ 'title' ]; ?>

    </a>

</div>
<!-- END content -->
