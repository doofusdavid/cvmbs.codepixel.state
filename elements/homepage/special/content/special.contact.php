<?php

    $location  = get_sub_field( 'location' );
    $phone     = get_sub_field( 'phone' );
    $email     = get_sub_field( 'email' );
    $social    = get_sub_field( 'social_media_option' );
    $platforms = get_sub_field( 'social_media_links' );

?>

<!-- contact -->
<section class="homepage-section contact">

    <!-- slide -->
    <article class="ui-slide">

        <!-- image -->
        <div class="image-container">

            <!-- empty -->

        </div>
        <!-- END image -->

        <!-- content -->
        <div class="content-wrapper">

            <!-- title -->
            <h2>

                contact information

            </h2>
            <!-- END title -->

            <!-- text -->
            <p>

                <?php echo $location; ?>

            </p>
            <!-- END text -->

            <!-- text -->
            <p>

                <?php echo $phone; ?>

            </p>
            <!-- END text -->

            <!-- text -->
            <a href="mailto:<?php echo $email; ?>">

                <?php echo $email; ?>

            </a>
            <!-- END text -->

            <?php if ( $social ) : ?>

            <div class="social-media-links">

                <?php

                    foreach ( $platforms as $platform ) {

                        $icon_class  = $platform[ 'platform' ];
                        $social_link = $platform[ 'link_url' ];

                        $social_media_links = '<a class="social-link ' . $icon_class . '" href="' . $social_link . '"><span class="link-label">' . $icon_class . '</span></a>';

                        echo $social_media_links;

                    }

                ?>

            </div>

            <?php endif; ?>

        </div>
        <!-- END content -->

    </article>
    <!-- END slide -->

</section>
<!-- END contact -->
