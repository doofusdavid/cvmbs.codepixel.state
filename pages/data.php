<?php

    // template name: data

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
    $directory = $service->GetMembersBySearchName(

        array( 'searchName' => ' ' )

    );

    // departments array
    $departments = array(

        '210' => 'College Office',
        '135' => 'Clinical Sciences',
        '172' => 'Clinicians',
        '626' => 'Orthopaedic Research Center',
        '208' => 'Environmental Health & Radiological Health Sciences',
        '134' => 'Veterinary Diagnostic Lab',
        '136' => 'Veterinary Teaching Hospital',
        '209' => 'Microbiology, Immunology, & Pathology',
        '205' => 'Cellular & Molecular Biology'

    );

    // get returned data object
    $members = $directory->GetMembersBySearchNameResult->MemberResponse;

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

                echo '<br />';
                print_r( $departments );

                echo '<br />';
                print_r( $getGroups );

                // create storage array
                $output = array(

                    'members' => array()

                );

                // iterate
                foreach( $members as $member ) {

                    // use member ID to find departments
                    $queryGroups = $member->Id;

                    // get department groups
                    $groups = $service->GetGroupsByMemberId(

                        array( 'memberId' => $queryGroups )

                    );

                    // get returned data object
                    $memberGroups = $groups->GetGroupsByMemberIdResult->GroupResponse;

                    if ( is_array( $memberGroups ) ) {

                        // $department = 'array';
                        $department = $memberGroups[0]->GroupFriendlyName;
                        $primaryGroupId = $memberGroups[0]->Id;

                    } else {

                        // $department = 'object';
                        $department = $memberGroups->GroupFriendlyName;
                        $primaryGroupId = $memberGroups->Id;

                    }

                    $output[ 'members' ][] = array(

                        'ID'           => $member->Id,
                        'eName'        => $member->EName,
                        'firstName'    => $member->FirstName,
                        'lastName'     => $member->LastName,
                        // 'memberGroups' => $memberGroups,
                        'primaryGroup' => $primaryGroupId,
                        'department'   => $department

                    );

                }

                // prettify
                $data = json_encode( $output, JSON_PRETTY_PRINT );

                echo '<br />';
                print_r( $data );

            ?>

        </pre>

        <pre>

            <?php

                echo '<br />';
                print_r( $members );

            ?>

        </pre>

    </div>
    <!-- END directory -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- END directory -->

<?php get_footer(); ?>
