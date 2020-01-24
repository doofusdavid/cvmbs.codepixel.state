<?php

    $lab_options = get_field( 'lab_homepage_options' );

    $contact_information = $lab_options[ 'contact_information' ];

    $location  = $contact_information[ 'location' ];
    $phone     = $contact_information[ 'phone' ];
    $email     = $contact_information[ 'email' ];
    $social    = $contact_information[ 'social_media_option' ];
    $social_platforms = $contact_information[ 'social_media_links' ];

?>

<!-- container -->
<section id="contact" class="laboratory-content">

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
            <a class="email" href="mailto:<?php echo $email; ?>">

                <?php echo $email; ?>

            </a>
            <!-- END text -->

            <?php if ( $social ) : ?>

            <div class="social-media-links">

                <?php

                    foreach( $social_platforms as $social_platform ) {

                        $icon_class = $social_platform[ 'platform' ];
                        $social_link = $social_platform[ 'link_url' ];

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
<!-- END container -->
