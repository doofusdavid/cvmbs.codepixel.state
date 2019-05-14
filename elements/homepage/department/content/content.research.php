<?php

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

    // research content
    $research_content = $department_options[ 'research_content' ];

    // resources
    $resources = $research_content[ 'resources' ];

?>

<!-- visual FX -->
<div class="design-layer">

    <!-- image -->
    <div class="image fx-layer layer" style="background-image:url(<?php echo $research_content[ 'background' ]; ?>)">

        <!-- ball so hard -->

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

    <?php if ( $research_content[ 'title' ] ) : ?>

    <span class="headline">

        <?php echo $research_content[ 'title' ]; ?>

    </span>

    <?php endif; ?>

    <?php if ( $research_content[ 'text' ] ) : ?>

    <span class="text">

        <?php echo $research_content[ 'text' ]; ?>

    </span>

    <?php endif; ?>

    <div class="research-content">

        <?php

            foreach( $resources as $resource ) {

                $title  = $resource[ 'resource' ];

                $content .= '

                    <span class="research-resource">

                        ' . $title . '

                    </span>

                ';

            }

            echo $content;

        ?>

    </div>

</div>
<!-- END content -->
