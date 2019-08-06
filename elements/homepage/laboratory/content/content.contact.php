<?php

    $lab_options = get_field( 'lab_homepage_options' );

    $contact_information = $lab_options[ 'contact_information' ];

    $location = $contact_information[ 'location' ];
    $phone    = $contact_information[ 'phone' ];
    $email    = $contact_information[ 'email' ];
    $social   = $contact_information[ 'social_media_option' ];

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
            <p>

                <?php echo $email; ?>

            </p>
            <!-- END text -->

            <?php if ( $social ) : ?>

            <div class="social-media-links">

                <a class="social-link facebook" href="#">

                    <!-- label -->
                    <span class="link-label">

                        facebook

                    </span>
                    <!-- END label -->

                    <svg x="0px" y="0px" viewBox="-786 630 32 32" enable-background="new -786 630 32 32" xml:space="preserve">

                    	<path fill="#FFFFFF" d="M-768,662v-16h5.1l0.9-5h-6v-2.9c0-1.6,0.8-2.6,3.1-2.6h2.9v-5.3c-0.5-0.1-2.2-0.2-4.2-0.2 c-4.2,0-7.8,2.7-7.8,7.5v3.5h-4v5h4v16H-768z"/>

                    </svg>

                </a>

                <a class="social-link twitter" href="#">

                    <!-- label -->
                    <span class="link-label">

                        twitter

                    </span>
                    <!-- END label -->

                    <svg x="0px" y="0px" viewBox="-786 630 32 32" enable-background="new -786 630 32 32" xml:space="preserve">

                    	<path fill="#FFFFFF" d="M-754.9,634.5c-1.3,0.8-2.7,1.3-4.2,1.6c-1.2-1.3-2.9-2.1-4.8-2.1c-3.6,0-6.6,3-6.6,6.7c0,0.5,0.1,1,0.2,1.5 c-5.5-0.3-10.3-3-13.5-7c-0.6,1-2.5,5.5,2,9c-1.5,0-3-0.8-3-0.8s-0.2,5.4,5.3,6.7c-1.5,0.4-3,0.1-3,0.1s1.2,4.5,6.1,4.7 c-4.1,3.4-9.2,2.8-9.7,2.8c2.9,1.9,6.4,3,10.1,3c12.1,0,18.7-10.3,18.7-19.2c0-0.3,0-0.6,0-0.9c1.3-0.9,2.4-2.1,3.3-3.5 c-1.2,0.5-2.4,0.9-3.8,1.1C-756.4,637.4-755.4,636.1-754.9,634.5z"/>

                    </svg>

                </a>

                <a class="social-link linkedin" href="#">

                    <!-- label -->
                    <span class="link-label">

                        LinkedIn

                    </span>
                    <!-- END label -->

                    <svg x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">

                    	<g transform="translate(16.000000, 17.000000)">

                    		<path fill="#FFFFFF" d="M-9.3,14.9V-6.2h-6.5v21.1H-9.3z M-9.3-13.6c0-1.9-1.3-3.3-3.3-3.3s-3.4,1.4-3.4,3.3 c0,1.8,1.3,3.3,3.3,3.3l0,0C-10.6-10.3-9.3-11.8-9.3-13.6z M1.3,14.9v-12c0-0.6,0-1.3,0.2-1.7C2-0.1,3.2-1.4,5.2-1.4 c2.6,0,4.2,1.5,4.2,4.4v12H16V2.6c0-6.6-3.5-9.7-8.2-9.7c-3.9,0-5.5,2.2-6.5,3.6v-2.8h-6.6c0.1,2,0,21.2,0,21.2L1.3,14.9L1.3,14.9 z" />

                    	</g>

                    </svg>

                </a>

            </div>

            <?php endif; ?>

        </div>
        <!-- END content -->

    </article>
    <!-- END slide -->

</section>
<!-- END container -->
