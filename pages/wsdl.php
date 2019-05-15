<?php

    // template name: Directory Service WSDL

?>

<?php get_header(); ?>

<?php

    // set WSDL service URL
    $serviceURL = 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl';

    // instantiate DirectoryService
    $service = new SoapClient( $serviceURL );

    // output list of functions
    $response = $service->__getFunctions();

    // output magic
    $getMember = $service->GetMemberById(

        array( 'id' => '33704' )

    );

    // get returned data object
    $member = $getMember->GetMemberByIdResult->MemberResponse;

    // create JSON store
    $filestore = $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/cvmbsPress/library/directory/data/directory.json';

?>

<!-- directory -->
<main id="site-layout" class="off-canvas-content <?php echo $site_type; ?>" data-off-canvas-content>

    <!-- directory -->
    <div id="directory" class="page-container">

        <!-- page header -->
        <header class="header">

            <h1>

                <?php the_title(); ?>

            </h1>

        </header>
        <!-- END page header -->

        <span>method => GetMemberById => 33704</span>

        <pre>

        <?php

            // echo 'method => GetMembersBySearchName';

            print_r( $service );

            echo '<br  />DEFAULT RESPONSE OBJECT<br  />';
            print_r( $member );

            // prettify
            $json = json_encode( $member, JSON_PRETTY_PRINT );

            echo '<br />JSON FORMATTED OBJECT<br />';
            print_r( $json );

        ?>

        </pre>

    </div>
    <!-- END directory -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- END directory -->

<?php get_footer(); ?>
