<?php

    // template name: data

?>

<?php get_header(); ?>

<?php

    // set WSDL service URL
    $serviceURL = 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl';

    // instantiate DirectoryService
    $service = new SoapClient( $serviceURL );

    // output list of functions [ debug ]
    $response = $service->__getFunctions();

    // set static query
    $query = $_GET[ 'query' ];

    // test for value
    if ( !$query ) {

        $query = ' ';

    }

    // output magic
    $directory = $service->GetMembersBySearchName(

        array( 'searchName' => ' ' )

    );

    // get returned data object
    $members = $directory->GetMembersBySearchNameResult->MemberResponse;

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

        <pre>

        <?php

            // create storage array
            $storage = array(

                'data' => array(),
                'departments' => array(),
                'members' => array()

            );

            // filestore metadata
            $storage[ 'data' ] = array(

                'filestore' => $filestore,
                'modified'  => date( 'Y m d H:i:s', filemtime( $filestore ) ),
                'records'   => count( $members ),

            );

            // departments array
            $storage[ 'departments' ] = array(

                '134' => 'Veterinary Diagnostic Lab',
                '135' => 'Clinical Sciences Department',
                '136' => 'Veterinary Teaching Hospital',
                '139' => 'Veterinary Teaching Hospital Working Group',
                '140' => 'Clinical Sciences Department Working Group',
                '172' => 'Clinicians',
                '193' => 'VTH Medical Records - Read Only',
                '203' => 'CVMBS College Office',
                '204' => 'CVMBS Finance & Strategic Services',
                '205' => 'Cellular & Molecular Biology',
                '206' => 'CVMBS Molecular, Cellular & Integrative Neurosciences',
                '207' => 'CVMBS Biomedical Sciences Dept',
                '208' => 'CVMBS Environmental & Radiological Health Sciences Dept',
                '209' => 'CVMBS Microbiology, Immunology & Pathology Dept',
                '210' => 'College Office',
                '215' => 'CVMBS Environmental & Radiological Health Sciences Dept  Working Group',
                '539' => 'Center for Environmental Medicine',
                '626' => 'Orthopaedic Research Center',
                '674' => 'Center for Environmental Medicine Department',

            );

            // iterate over data
            foreach( $members as $member ) {

                // use member ID to find departments
                $queryId = $member->Id;

                // get department groups
                $groups = $service->GetGroupsByMemberId(

                    array( 'memberId' => $queryId )

                );

                // get contact info
                $contacts = $service->GetMemberContactsByMemberId(

                    array( 'id' => $queryId )

                );

                // get photo
                $photos = $service->GetMemberPhotoByMemberId(

                    array( 'id' => $queryId )

                );

                // get returned data object(s)
                $memberGroups   = $groups->GetGroupsByMemberIdResult->GroupResponse;
                $memberContacts = $contacts->GetMemberContactsByMemberIdResult->MemberContactResponse;
                $memberPhotos   = $photos->GetMemberPhotoByMemberIdResult->MemberPhotoResponse;

                // test for department group data type
                if ( is_array( $memberGroups ) ) {

                    $department = $memberGroups[0]->GroupFriendlyName;
                    $primaryGroupId = $memberGroups[0]->Id;

                } else {

                    $department = $memberGroups->GroupFriendlyName;
                    $primaryGroupId = $memberGroups->Id;

                }

                // test for contact info data type
                if ( is_array( $memberContacts ) ) {

                    $phone = $memberContacts[0]->PhoneNumber;

                } else {

                    $phone = $memberContacts->PhoneNumber;

                }

                // setup variables
                $email = strtolower( $member->EmailAddress );
                $name  = $member->FirstName . ' ' . $member->LastName;

                // push to members array
                $storage[ 'members' ][] = array(

                    'memberID'        => $member->Id,
                    'eName'           => $member->EName,
                    'firstName'       => $member->FirstName,
                    'lastName'        => $member->LastName,
                    'fullName'        => $member->FirstName . ' ' . $member->LastName,
                    'email'           => strtolower( $member->EmailAddress ),
                    'title'           => $member->EmployeeTitle,
                    'primaryGroupID'  => $primaryGroupId,
                    'groups'          => $memberGroups,
                    'department'      => $department,
                    'phone'           => $phone,
                    'contactInfo'     => $memberContacts,
                    'photo'           => $memberPhotos

                );

            }

            // prettify
            $data = json_encode( $storage, JSON_PRETTY_PRINT );

            // send data to json store
            file_put_contents( $filestore, $data );

            echo '<br />';
            print_r( $memberPhotos );
            echo '<br />';
            print_r( $data );

        ?>

        </pre>

    </div>
    <!-- END directory -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- END directory -->

<?php get_footer(); ?>
