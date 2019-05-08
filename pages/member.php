<?php

    // template name: member

?>

<?php get_header(); ?>

<?php

    // set static query
    $query = $_GET[ 'id' ];

    // create json store
    $filestore = $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/cvmbsPress/library/directory/data/directory.json';

    // convert store to data
    $getdata     = file_get_contents( $filestore );
    $membersdata = json_decode( $getdata );

    // setup data object
    $members = $membersdata->members;

    // set WSDL service URL
    $serviceURL = 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl';

    // instantiate DirectoryService
    $service = new SoapClient( $serviceURL );

    // output list of functions
    $response = $service->__getFunctions();

    // output
    $directory = $service->GetDirectoryInfoByMemberId(

        array( 'id' => $query )

    );

    // contacts
    $memberContacts = $service->GetMemberContactsByMemberId(

        array( 'id' => $query )

    );

    // get returned data object
    $data = $directory->GetDirectoryInfoByMemberIdResult->DirectoryInfoResponse;
    $contacts = $memberContacts->$GetMemberContactsByMemberIdResult->MemberContactResponse;

    // prettify
    // $data = json_encode( $test, JSON_PRETTY_PRINT );

?>

<!-- directory -->
<main id="site-layout" class="off-canvas-content <?php echo $site_type; ?>" data-off-canvas-content>

    <!-- directory -->
    <div id="directory" class="page-container">

        <pre>

            <?php

                print_r( $contacts );
                print_r( $data );
                print_r( $directory );

            ?>

        </pre>

        <?php

            foreach( $members as $member ) {

                if ( $member->memberID == $query ) {

                    $memberID   = $member->memberID;
                    $fullName   = $member->fullName;
                    $firstName  = $member->firstName;
                    $email      = $member->email;
                    $title      = $member->title;
                    $department = $member->department;
                    $phone      = $member->contactInfo->PhoneNumber;

                }

            }

        ?>

        <!-- listing -->
        <div class="directory-listing">

            <!-- profile -->
            <div class="listing-profile">

                <!-- photo -->
                <div class="profile-photo">

                    <!--  -->

                </div>
                <!-- END photo -->

                <!-- name/title -->
                <div class="profile-name">

                    <!-- name -->
                    <span class="name">

                        <?php echo $fullName; ?>

                    </span>
                    <!-- END name -->

                    <!-- title -->
                    <span class="title">

                        <?php echo $title; ?>

                    </span>
                    <!-- END title -->

                    <!-- department -->
                    <span class="department">

                        <?php echo $department; ?>

                    </span>
                    <!-- END department -->

                </div>
                <!-- END name/title -->

                <!-- contact -->
                <div class="profile-contact">

                    <!-- email -->
                    <a href="mailto:<?php echo $email; ?>" class="email">

                        <?php echo $email; ?>

                    </a>
                    <!-- END email -->

                    <!-- phone -->
                    <span class="phone">

                        <?php echo $phone; ?>

                    </span>
                    <!-- END phone -->

                </div>
                <!-- END contact -->

            </div>
            <!-- END profile -->

            <!-- info -->
            <div class="listing-info">

                <span class="about">About <?php echo $firstName; ?></span>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus. Nullam eget felis eget nunc lobortis mattis aliquam faucibus. Ullamcorper velit sed ullamcorper morbi tincidunt. Lacus vestibulum sed arcu non odio euismod lacinia at quis. Dictum non consectetur a erat. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium. Commodo elit at imperdiet dui accumsan. In massa tempor nec feugiat nisl pretium fusce. Amet massa vitae tortor condimentum lacinia quis vel eros donec. Vitae sapien pellentesque habitant morbi tristique senectus et. Nunc congue nisi vitae suscipit tellus mauris a diam. Phasellus faucibus scelerisque eleifend donec. Nulla aliquet enim tortor at auctor.</p>

                <p>Nullam ac tortor vitae purus faucibus ornare suspendisse sed nisi. Lobortis scelerisque fermentum dui faucibus in ornare quam viverra. Amet dictum sit amet justo donec enim. Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc. Aliquet nibh praesent tristique magna sit. Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Nisi quis eleifend quam adipiscing vitae proin sagittis nisl. Varius duis at consectetur lorem donec massa sapien. Odio eu feugiat pretium nibh. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Quam elementum pulvinar etiam non quam lacus suspendisse faucibus. Rhoncus urna neque viverra justo nec ultrices dui sapien eget. Aliquam vestibulum morbi blandit cursus risus at. At varius vel pharetra vel turpis nunc eget lorem dolor. Non arcu risus quis varius quam quisque. At ultrices mi tempus imperdiet nulla malesuada. Sed nisi lacus sed viverra tellus in.</p>

                <p>Amet cursus sit amet dictum sit amet. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet. Massa placerat duis ultricies lacus sed turpis. Sed blandit libero volutpat sed cras ornare arcu dui. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ornare arcu odio ut sem nulla pharetra diam sit amet. Nullam non nisi est sit amet facilisis magna etiam tempor. Enim diam vulputate ut pharetra sit amet. Arcu non sodales neque sodales ut etiam sit amet nisl. Eu lobortis elementum nibh tellus molestie nunc non blandit massa. Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar. Venenatis tellus in metus vulputate eu scelerisque. Condimentum mattis pellentesque id nibh tortor id aliquet.</p>

            </div>
            <!-- END info -->

        </div>
        <!-- END listing -->

    </div>
    <!-- END directory -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- END directory -->

<?php get_footer(); ?>
