<?php

    // hide a bunch of PHP error notices
    error_reporting( E_ERROR | E_WARNING | E_PARSE );

    // url vars
    $groupID = $_GET[ 'groupID' ];
    $topicID = $_GET[ 'topicID' ];
    $siteID  = $_GET[ 'siteID' ];

    // set file location
    // $filelocation = '/home/vetmedbiosci/public_html/wp-content/themes/cvmbsPress/data/';
    $filelocation = $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/cvmbsPress/data/research/departments/' . $siteID . '/';

    // set WSDL service URL
    $serviceURL = 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl';

    try {

        // instantiate DirectoryService
        $service = new SoapClient( $serviceURL );

        // output list of functions
        $response = $service->__getFunctions();

        // output magic
        $directory = $service->GetMembersByGroupId(

            array( 'id' => $groupID )

        );

        // get returned data object
        $members = $directory->GetMembersByGroupIdResult->MemberResponse;

        // create JSON store
        $filestore = $filelocation . $topicID . '.json';
        $tempfilestore = $filelocation . $topicID . '-temp.json';

        // code depends on this file existing
        if ( !file_exists( $filestore ) ) {

            touch( $filestore );

        }

        // create storage array
        $storage = array(

            'data'     => array(),
            'members'  => array(),
            'topics'   => array()

        );

        // iterate over data
        foreach( $members as $member ) {

            // use member ID to find departments
            $queryId = $member->Id;

            // get department groups
            $groups = $service->GetGroupsByMemberId( array( 'memberId' => $queryId ) );

            // get contact info
            $contacts = $service->GetMemberContactsByMemberId( array( 'id' => $queryId ) );

            // get returned data object(s)
            $memberGroups   = $groups->GetGroupsByMemberIdResult->GroupResponse;
            $memberContacts = $contacts->GetMemberContactsByMemberIdResult->MemberContactResponse;

            // test for department group data type
            if ( is_array( $memberGroups ) ) {

                $multipleGroups = true;

                foreach ( $memberGroups as $memberGroup ) {

                    $departmentID = $memberGroup->IsPrimaryGroup;

                    if ( $departmentID ) {

                        $department     = $memberGroup->GroupFriendlyName;
                        $primaryGroupId = $memberGroup->Id;

                    }

                }

            } else {

                $multipleGroups = false;

                $department     = $memberGroups->GroupFriendlyName;
                $primaryGroupId = $memberGroups->Id;

            }

            // test for contact info data type
            if ( is_array( $memberContacts ) ) {

                $phone = $memberContacts[0]->PhoneNumber;

            } else {

                $phone = $memberContacts->PhoneNumber;

            }

            // setup department sorting
            switch ( $primaryGroupId ) {

                case 203 :
                case 210 :

                    $directoryGroupId   = 1001;
                    $directoryGroupName = 'College Office';
                    break;

                case 135 :
                case 140 :
                case 177 :

                    $directoryGroupId   = 1002;
                    $directoryGroupName = 'Clinical Sciences';
                    break;

                case 207 :

                    $directoryGroupId   = 1003;
                    $directoryGroupName = 'Biomedical Sciences';
                    break;

                case 209 :
                case 205 :

                    $directoryGroupId   = 1004;
                    $directoryGroupName = 'Microbiology, Immunology, and Pathology';
                    break;

                case 208 :
                case 215 :

                    $directoryGroupId   = 1005;
                    $directoryGroupName = 'Environmental and Radiological Health Sciences';
                    break;

                case 134 :

                    $directoryGroupId   = 1006;
                    $directoryGroupName = 'Veterinary Diagnostic Laboratory';
                    break;

                case 136 :
                case 139 :
                case 176 :
                case 182 :
                case 188 :
                case 193 :

                    $directoryGroupId   = 1007;
                    $directoryGroupName = 'Veterinary Teaching Hospital';
                    break;

                case 674 :
                case 539 :

                    $directoryGroupId   = 1008;
                    $directoryGroupName = 'Center for Environmental Medicine';
                    break;

                case 206 :

                    $directoryGroupId   = 1009;
                    $directoryGroupName = 'Molecular, Cellular, and Integrative Neurosciences';
                    break;

                default :

                    $directoryGroupId   = 1010;
                    $directoryGroupName = 'undefined';

            }

            // setup variables
            $email = strtolower( $member->EmailAddress );
            $name  = $member->FirstName . ' ' . $member->LastName;

            // remove LocalHR admin accounts -> push to [ members ] array
            if ( strpos( $member->LastName, 'lhr' ) !== false ) {

                continue;

            } else {

                // push to members array
                $storage[ 'members' ][] = array(

                    'memberID'     => $member->Id,
                    'eName'        => $member->EName,
                    'firstName'    => $member->FirstName,
                    'lastName'     => $member->LastName,
                    'fullName'     => $member->FirstName . ' ' . $member->LastName,
                    'email'        => strtolower( $member->EmailAddress ),
                    'phone'        => $phone,
                    'department'   => $directoryGroupName,

                );

            }

        }

        // filestore metadata
        $storage[ 'data' ] = array(

            'filestore' => $filestore,
            'modified'  => date( 'Y m d H:i:s', filemtime( $filestore ) ),
            'records'   => count( $members )

        );

        // departments array
        $storage[ 'topics' ] = array(

            618 => '================ ERHS ================',
            619 => 'Epidemiology',
            620 => 'Health Physics',
            621 => 'Industrial Hygiene',
            622 => 'Radiation Cancer Biology & Oncology',
            623 => 'Toxicology',
            624 => 'Veterinary Diagnostic Imaging',

            683 => '================ MIP ================',
            684 => 'Anatomic Pathology',
            686 => 'Bacteriology',
            687 => 'Cancer Biology',
            688 => 'Clinical Pathology',
            689 => 'Computational Biology',
            690 => 'Diagnostics',
            691 => 'Immunology',
            692 => 'Parasitology',
            693 => 'Pedagogy',
            694 => 'Prion Biology',
            695 => 'Biosafety',
            696 => 'RNA Biology',
            697 => 'Vector Biology',
            698 => 'Virology',

            713 => '================ BMS ================',
            714 => 'Cardiovascular Physiology',
            715 => 'Reproductive Physiology',
            716 => 'Neurobiology',
            717 => 'Neuroendocrinology',
            718 => 'Pedagogy',

        );

        // prettify
        $data = json_encode( $storage, JSON_PRETTY_PRINT );

        // send data to json store
        file_put_contents( $tempfilestore, $data );

        // overwrite JSON file
        rename( $tempfilestore, $filestore );

    }

    catch ( Exception $e ) {

        echo 'Caught exception: ',  $e->getMessage(), "\n";

    }
