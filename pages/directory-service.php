<?php

    // template name: Directory Service

?>

<?php get_header(); ?>

<?php

    // set WSDL service URL
    $serviceURL = 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl';

    // instantiate DirectoryService
    $service = new SoapClient( $serviceURL );

    // output list of functions
    $response = $service->__getFunctions();

    // set static query
    $query = $_GET[ 'query' ];

    // test for value
    if ( !$query ) {

        $query = ' ';
        // $query = 'dev';

    }

    // output magic
    $yagerDataRequest = $service->GetMembersBySearchName(

        array( 'searchName' => 'yager' )

    );

    // output magic
    $yagerInfoRequest = $service->GetDirectoryInfoByMemberId(

        array( 'id' => '33704' )

    );

    // output magic
    $koncarIDRequest = $service->GetMemberById(

        array( 'id' => 40133 )

    );

    // output magic
    $koncarDataRequest = $service->GetMembersBySearchName(

        array( 'searchName' => 'koncar' )

    );

    // output magic
    $koncarInfoRequest = $service->GetDirectoryInfoByMemberId(

        array( 'id' => '40133' )

    );

    // get returned data object
    $yagerData = $yagerDataRequest->GetMembersBySearchNameResult->MemberResponse;
    // get returned data object
    $yagerInfo = $yagerInfoRequest->GetMembersBySearchNameResult->MemberResponse;

    // get returned data object
    $koncarID   = $koncarIDRequest->GetMemberByIdResult->MemberResponse;
    // get returned data object
    $koncarData = $koncarDataRequest->GetMembersBySearchNameResult->MemberResponse;
    // get returned data object
    $koncarInfo = $koncarInfoRequest->GetMembersBySearchNameResult->MemberResponse;

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

        <span>method => GetMemberById => 40133</span>

        <pre>

        <?php

            // echo 'method => GetMembersBySearchName';

            echo '<br  />DEFAULT RESPONSE OBJECT<br  />';
            print_r( $koncarID );

            // prettify
            $koncar = json_encode( $koncarID, JSON_PRETTY_PRINT );

            echo '<br />JSON FORMATTED OBJECT<br />';
            print_r( $koncar );

        ?>

        </pre>

        <span>method => GetMembersBySearchName => 'yager'</span>

        <pre>

        <?php

            // echo 'method => GetMembersBySearchName';

            echo '<br  />DEFAULT RESPONSE OBJECT<br  />';
            print_r( $yagerData );

            // prettify
            $yager = json_encode( $yagerData, JSON_PRETTY_PRINT );

            echo '<br />JSON FORMATTED OBJECT<br />';
            print_r( $yager );

        ?>

        </pre>

        <span>method => GetDirectoryInfoByMemberId => 33704</span>

        <pre>

        <?php

            // echo 'method => GetMembersBySearchName';

            echo '<br  />DEFAULT RESPONSE OBJECT<br  />';
            print_r( $yagerInfo );

            // prettify
            $yager = json_encode( $yagerInfo, JSON_PRETTY_PRINT );

            echo '<br />JSON FORMATTED OBJECT<br />';
            print_r( $yager );

        ?>

        </pre>

        <span>method => GetMembersBySearchName => 'koncar'</span>

        <pre>

        <?php

            // echo 'method => GetMembersBySearchName';

            echo '<br  />DEFAULT RESPONSE OBJECT<br  />';
            print_r( $koncarData );

            // prettify
            $koncar = json_encode( $koncarData, JSON_PRETTY_PRINT );

            echo '<br />JSON FORMATTED OBJECT<br />';
            print_r( $koncar );

        ?>

        </pre>

        <span>method => GetDirectoryInfoByMemberId => 40133</span>

        <pre>

        <?php

            // echo 'method => GetMembersBySearchName';

            echo '<br  />DEFAULT RESPONSE OBJECT<br  />';
            print_r( $koncarInfo );

            // prettify
            $koncar = json_encode( $koncarInfo, JSON_PRETTY_PRINT );

            echo '<br />JSON FORMATTED OBJECT<br />';
            print_r( $koncar );

        ?>

        </pre>

    </div>
    <!-- END directory -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- END directory -->

<?php get_footer(); ?>
