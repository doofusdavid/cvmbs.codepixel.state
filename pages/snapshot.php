<?php

    // Template Name: Student Snapshot [TEMPORARY]

?>

<?php get_header(); ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content snapshot" data-off-canvas-content>

    <!-- content -->
    <div id="content-container" class="ui-section">

        <?php

            while ( have_posts() ) : the_post();

            $header = get_field( 'page_header' );

            if( $header[ 'styled_header' ] ) {

                get_template_part( 'elements/blocks/block.header.styled' );

                $content_class = 'styled';

            } else {

                get_template_part( 'elements/blocks/block.header.default' );

                $content_class = 'default';

            }

        ?>

        <!-- page content -->
        <section id="primary" class="content-area <?php echo $content_class; ?>">

            <!-- demographics -->
            <div id="demographics" class="content-row thirds">

                <div class="content-block">

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/content/snapshot/snapshot.demographic.00.gif" alt="">

                </div>

                <div class="content-block">

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/content/snapshot/snapshot.demographic.01.gif" alt="">

                </div>

                <div class="content-block">

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/content/snapshot/snapshot.demographic.02.gif" alt="">

                </div>

            </div>
            <!-- END demographics -->

            <!-- map -->
            <div id="map" class="content-row full">

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/content/snapshot/snapshot.map.gif" alt="5 countries and 26 states represented">

            </div>
            <!-- END map -->

            <!-- statistics -->
            <div id="statistics" class="content-row thirds">

                <!-- block -->
                <div id="underrepresented" class="content-block stats">

                    <span class="number">

                        18%

                    </span>

                    <span class="title">

                        underrepresented<br />minority

                    </span>

                    <span class="caption">

                        Ethnicity/Race categories include<br />
                        American Indian/Alaska Native, Asian,<br />
                        Black, Hispanic, and Pacific Islander

                    </span>

                </div>
                <!-- END block -->

                <!-- block -->
                <div id="rural-areas" class="content-block stats">

                    <span class="number">

                        28%

                    </span>

                    <span class="title">

                        from rural<br />areas

                    </span>

                    <span class="caption">

                        Rural is defined as coming from a<br />
                        hometown with a population of fewer<br />
                        than 20,000

                    </span>

                </div>
                <!-- END block -->

                <!-- block -->
                <div id="first-generation" class="content-block stats">

                    <span class="number">

                        22%

                    </span>

                    <span class="title">

                        first<br />generation

                    </span>

                    <span class="caption">

                        First Generation indicates that a<br />
                        student's parents have not completed<br />
                        a bachelor's degree

                    </span>

                </div>
                <!-- END block -->

            </div>
            <!-- END statistics -->

            <!-- languages -->
            <div id="languages" class="content-row halfsies">

                <div class="content-block">

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/content/snapshot/snapshot.language.02.gif" alt="13 langugaes spoken">

                </div>

                <div class="content-block">

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/content/snapshot/snapshot.language.01.gif" alt="Armenian, Chinese, Dutch French, Hindi, Japanese, Korean, Persian, Punjabi, Russian, Spanish, Thai, and American Sign Language">

                </div>

            </div>
            <!-- END languages -->

        </section>
        <!-- END page content -->

        <?php endwhile; ?>

    </div>
    <!-- END content -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->

<?php get_footer(); ?>
