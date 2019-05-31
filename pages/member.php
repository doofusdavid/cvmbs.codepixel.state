<?php

    // template name: Directory Member View

?>

<?php get_header(); ?>

<?php

    // set static query
    $query = $_GET[ 'id' ];

    // create json store
    $filestore = $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/cvmbsPress/data/directory.json';

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
    $getMemberProfileInfo = $service->GetDirectoryProfileByMemberId(

        array( 'id' => $query )

    );

    // output
    $getMemberDirectoryInfo = $service->GetDirectoryInfoByMemberId(

        array( 'id' => $query )

    );

    // contacts
    $getMemberContactInfo = $service->GetMemberContactsByMemberId(

        array( 'id' => $query )

    );

    // get department groups
    $groups = $service->GetGroupsByMemberId(

        array( 'memberId' => $query )

    );

    // test
    $getMember = $service->GetMemberById(

        array( 'id' => $query )

    );

    // prettify
    $memberDirectoryInfo = $getMemberDirectoryInfo->GetDirectoryInfoByMemberIdResult->DirectoryInfoResponse;

    $memberGroups   = $groups->GetGroupsByMemberIdResult->GroupResponse;

    // photoURL
    $photoURL = 'http://www.cvmbs.colostate.edu/DirectorySearch/Search/MemberPhoto/' . $query;

    // setup CV array
    $directory = array(

        'certifications' => array(),
        'degrees'        => array(),
        'publications'   => array(),
        'links'          => array()

    );

?>

<!-- directory -->
<main id="site-layout" class="off-canvas-content <?php echo $site_type; ?>" data-off-canvas-content>

    <!-- directory -->
    <div id="directory" class="page-container">

        <?php

            // setup bio content
            foreach ( $getMemberProfileInfo as $memberProfileInfo ) {

                $profile = $memberProfileInfo->ProfileText;

            }

            // setup CV content
            foreach ( $memberDirectoryInfo as $directoryInfo ) {

                // setup CV content types
                $directoryType = $directoryInfo->DirectoryType;

                if ( $directoryType == 'Certification' ) {

                    $directory[ 'certifications' ][] = $directoryInfo->DirectoryHeader;

                }

                if ( $directoryType == 'Degree' ) {

                    $directory[ 'degrees' ][] = array(

                        'degree' => $directoryInfo->DirectoryHeader,
                        'level'  => $directoryInfo->DirectoryDescription,
                        'year'   => $directoryInfo->DirectoryYear,
                        'notes'  => $directoryInfo->DirectoryNotes

                    );

                }

                if ( $directoryType == 'Publication' ) {

                    $directory[ 'publications' ][] = $directoryInfo->DirectoryHeader;

                }

                if ( $directoryType == 'Link' ) {

                    $directory[ 'links' ][] = array(

                        'url'   => $directoryInfo->DirectoryDescription,
                        'title' => $directoryInfo->DirectoryHeader

                    );

                }

            }

            // setup photo + contact info
            foreach ( $members as $member ) {

                if ( $member->memberID == $query ) {

                    $memberID   = $member->memberID;
                    $fullName   = $member->fullName;
                    $firstName  = $member->firstName;
                    $email      = $member->email;
                    $title      = $member->title;
                    // $department = $member->department;
                    $department = $member->directoryGroup;

                    if ( is_array( $member->contactInfo ) ) {

                        $phone = $member->contactInfo[0]->PhoneNumber;

                    } else {

                        $phone = $member->contactInfo->PhoneNumber;

                    }

                }

            }

        ?>

        <!-- listing -->
        <div class="directory-listing">

            <!-- profile -->
            <div class="listing-profile">

                <!-- photo -->
                <div class="profile-photo" style="background-image:url(<?php echo $photoURL; ?>);">

                    <!--  -->

                </div>
                <!-- END photo -->

                <!-- name/title -->
                <div class="profile-name">

                    <!-- name -->
                    <h1 class="name">

                        <?php echo $fullName; ?>

                    </h1>
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

                <pre class="developer hide">

                    <?php

                        print_r( $memberGroups );

                    ?>

                </pre>

                <!-- listing group -->
                <div class="listing-group bio">

                    <h3 class="listing-heading">About <?php echo $firstName; ?></h3>

                    <!-- listing -->
                    <div class="listing">

                        <p><?php echo $profile; ?></p>

                    </div>
                    <!-- END listing group -->

                </div>
                <!-- END listing -->

                <?php if ( count( $directory[ 'degrees' ] ) > 0 ) : ?>

                <!-- listing -->
                <div class="listing-group cv">

                    <h4>Education</h4>

                    <?php

                        foreach( $directory[ 'degrees' ] as $degree ) {

                            $school  = $degree[ 'degree' ];
                            $year    = $degree[ 'year' ];
                            $level   = $degree[ 'level' ];

                            $degrees .= '<span class="entry">' . $school . ', ' . $year . '<br />' . $level . '</span>';

                        }

                        echo $degrees;

                    ?>

                </div>
                <!-- END listing -->

                <?php endif; ?>

                <?php if ( count( $directory[ 'certifications' ] ) > 0 ) : ?>

                <!-- listing -->
                <div class="listing-group cv">

                    <h4>Certifications</h4>

                    <?php

                        foreach( $directory[ 'certifications' ] as $certification ) {

                            $entry  = $certification[ 'certification' ];

                            $certifications .= '<span class="entry">' . $certification . '</span>';

                        }

                        echo $certifications;

                    ?>

                </div>
                <!-- END listing -->

                <?php endif; ?>

                <?php if ( count( $directory[ 'publications' ] ) > 0 ) : ?>

                <!-- listing -->
                <div class="listing-group cv">

                    <h4>Publications</h4>

                    <?php

                        foreach( $directory[ 'publications' ] as $publication ) {

                            $entry  = $publication[ 'publication' ];

                            $publications .= '<span class="entry">' . $publication . '</span>';

                        }

                        echo $publications;

                    ?>

                </div>
                <!-- END listing -->

                <?php endif; ?>

                <?php if ( count( $directory[ 'links' ] ) > 0 ) : ?>

                <!-- listing -->
                <div class="listing-group cv">

                    <h4>Links</h4>

                    <?php

                        foreach( $directory[ 'links' ] as $link ) {

                            $title  = $link[ 'title' ];
                            $url    = $link[ 'url' ];

                            $links .= '<a href="' . $url . '" class="entry">' . $title . '</a>';

                        }

                        echo $links;

                    ?>

                </div>
                <!-- END listing -->

                <?php endif; ?>

            </div>
            <!-- END info -->

        </div>
        <!-- END listing -->

        <pre class="developer hide">

            <?php

                print_r( $getMemberProfileInfo );
                echo '<br />';
                print_r( $getMemberDirectoryInfo );
                echo '<br />';
                echo '<br />';
                print_r( $getMemberContactInfo );

                // profile text
                foreach ( $getMemberProfileInfo as $memberProfileInfo ) {

                    $profile = $memberProfileInfo->ProfileText;

                }

            ?>

        </pre>

    </div>
    <!-- END directory -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- END directory -->

<?php get_footer(); ?>
