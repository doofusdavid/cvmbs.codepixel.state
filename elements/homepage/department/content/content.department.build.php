
<!-- department.content -->
<section id="department-content" class="homepage-content department">

    <!-- homepage.intro -->
    <article id="department-banner" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.banner' ); ?>

    </article>
    <!-- END homepage.intro -->

    <!-- degree.programs -->
    <article id="department-degree-programs" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.degree.programs' ); ?>

    </article>
    <!-- END degree.programs -->

    <!-- homepage.section -->
    <article id="department-research" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.research' ); ?>

    </article>
    <!-- END homepage.section -->

    <!-- homepage.section -->
    <article id="department-places" class="homepage-section" data-section="facilities" data-load="pending" tabindex="-1">

        <?php get_template_part( 'elements/homepage/department/content/content.places' ); ?>

    </article>
    <!-- END homepage.section -->

    <!-- service.outreach -->
    <article id="department-outreach" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.outreach' ); ?>

    </article>
    <!-- END service.outreach -->

    <!-- news -->
    <article id="department-news" class="homepage-section">

        <!-- container -->
        <div class="article-container" tabindex="-1">

            <!-- title -->
            <button class="section-title scroll-trigger" data-section="news">

                news and updates

                <!-- link -->
                <span href="https://cvmbs.source.colostate.edu/" class="title-link">

                    view all

                </span>
                <!-- END link -->

            </button>
            <!-- END title -->

            <!-- feature + sidebar -->
            <div id="main-source-content">

                <!-- news.feed -->
                <section id="source-feed" class="article-cards ui-news">

                    <!-- automagical -->

                </section>
                <!-- END news.feed -->

            </div>
            <!-- END feature + sidebar -->

        </div>
        <!-- END container -->

    </article>
    <!-- END news -->

    <!-- giving -->
    <article id="department-giving" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.giving' ); ?>

    </article>
    <!-- END giving -->

</section>
<!-- END department.content -->
