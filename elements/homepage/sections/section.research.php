<?php

    // college homepage options
    $college_options = get_field( 'college_homepage_options' );

    // research content
    $research_content = $college_options[ 'research_content' ];

?>

<section id="research" class="section-research">

    <div class="section-research__inner lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo $research_content[ 'background' ][ 'url' ]; ?>">

        <div class="section-research__content">

            <h3 class="headline">

                <?php echo $research_content[ 'title' ]; ?>

            </h3>

            <p class="text">

                <?php echo $research_content[ 'text' ]; ?>

            </p>

            <p class="cta">
                <a href="/research" class="content-button">

                    <?php echo $research_content[ 'link' ][ 'title' ]; ?>

                </a>
            </p>

        </div><!-- .section-research__content -->

    </div><!-- .section-research__inner -->

</section><!-- #research -->
