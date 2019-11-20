<?php

    $args = array(
        'number' => 999,
        'public' => 1
    );

    $labs = get_sites( $args );

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content labs-archive default" data-off-canvas-content style="background-image:url(<?php echo $place_image; ?>);">

	<!-- content container -->
	<div class="content-container">

        <?php

            // define storage array
            $labs_list = array();

            // iterate
            foreach ( $labs as $lab ) {

                $lab_url  = $lab->path;
                $lab_name = $lab->blogname;

                $lab_site = array(

                    'name' => $lab->blogname,
                    'link' => $lab->path

                );

                array_push( $labs_list, $lab_site );

            }

            // alphabetize
            sort( $labs_list );

            foreach ( $labs_list as $site ) {

                $lab_url  = $site[ 'link' ];
                $lab_name = $site[ 'name' ];

                $labs_index .= '

                    <a class="lab-link" href="' . $lab_url . '">

                        <span class="link-label">' . $lab_name . '</span>

                    </a>

                ';

            }

            echo $labs_index;

        ?>

    </div>
    <!-- END content container -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->

<?php get_footer(); ?>
