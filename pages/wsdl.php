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

    // ID test
    $memberID = 33704;
    // $memberID = 3980;
    $groupID = 619;

    // output magic
    $getGroups = $service->GetGroupsByMemberId( array( 'memberId' => $memberID ) );

    // output magic
    $getResearchers = $service->GetMembersByGroupId( array( 'id' => $groupID ) );

    // output magic
    $getMember = $service->GetMemberById( array( 'id' => $memberID ) );

    // output magic
    $getGroupKey = $service->GetGroupByGroupKey( array( 'groupKey' => 'ERHSEpidemFaculty' ) );

    // get returned data object
    $member      = json_encode( $getMember->GetMemberByIdResult, JSON_PRETTY_PRINT );
    $researchers = json_encode( $getResearchers->GetMembersByGroupIdResult->MemberResponse, JSON_PRETTY_PRINT );

    // create JSON store
    $filestore = $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/cvmbsPress/data/directory.json';

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

        <pre>

        <?php

            // $title = $researchers

            // echo '<br />' . $;
            print_r( $researchers );

            echo '<br  />GetMemberById ';
            print_r( $member );

            // echo '<br /><br />';

        ?>

        </pre>

    </div>
    <!-- END directory -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- END directory -->

<?php get_footer(); ?>
