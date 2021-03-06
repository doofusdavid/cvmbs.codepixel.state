<?php

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

    // research content
    $giving_content = $department_options[ 'giving_content' ];

?>

<!-- giving -->
<section id="department-giving" class="basic homepage-section">

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

        <span class="headline">

            <?php echo $giving_content[ 'title' ]; ?>

        </span>

        <span class="text">

            <?php echo $giving_content[ 'text' ]; ?>

        </span>

        <a href="<?php echo $giving_content[ 'button' ][ 'url' ]; ?>" class="content-button">

            <?php echo $giving_content[ 'button' ][ 'title' ]; ?>

        </a>

    </div>
    <!-- END content -->

</section>
<!-- END giving -->
