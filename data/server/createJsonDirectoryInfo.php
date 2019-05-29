<?php

    // hide a bunch of PHP error notices
    error_reporting( E_ERROR | E_WARNING | E_PARSE );

    // set file location
    $filelocation = '/home/vetmedbiosci/public_html/wp-content/themes/cvmbsPress/data/';
    // $filelocation = $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/cvmbsPress/data/';

    // set WSDL service URL
    $serviceURL = 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl';

    try {

        // instantiate DirectoryService
        $service = new SoapClient( $serviceURL );

        // output list of functions
        $response = $service->__getFunctions();

        // output magic
        $directory = $service->GetMembersBySearchName(

            array( 'searchName' => ' ' )

        );

        // get returned data object
        $members = $directory->GetMembersBySearchNameResult->MemberResponse;

        // create JSON store
        $filestore = $filelocation . 'directory.json';
        $tempfilestore = $filelocation . 'directory-temp.json';

        // code depends on this file existing
        if ( !file_exists( $filestore ) ) {

            touch( $filestore );

        }

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
            '138' => 'Veterinary Diagnostic Lab',
            '139' => 'Veterinary Teaching Hospital Working Group',
            '140' => 'Clinical Sciences Department Working Group',
            '170' => 'Clinical Pathology',
            '172' => 'Clinicians',
            '176' => 'VTH Interns All',
            '178' => 'Faculty',
            '182' => 'VTH Medical Records',
            '188' => 'VTH Veterinary Technicians',
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

            // get address info
            // $address = $service->GetMemberById(

                // array( 'id' => $queryId )

            // );

            // get photo
            $photos = $service->GetMemberPhotoByMemberId(

                array( 'id' => $queryId )

            );

            // get returned data object(s)
            $memberAddress  = $address->GetMemberByIdResult;
            $memberGroups   = $groups->GetGroupsByMemberIdResult->GroupResponse;
            $memberContacts = $contacts->GetMemberContactsByMemberIdResult->MemberContactResponse;
            $memberPhotos   = $photos->GetMemberPhotoByMemberIdResult->MemberPhotoResponse;

            // test for department group data type
            if ( is_array( $memberGroups ) ) {

                foreach ( $memberGroups as $memberGroup ) {

                    $departmentID = $memberGroup->IsPrimaryGroup;

                    if ( $departmentID ) {

                        $department     = $memberGroup->GroupFriendlyName;
                        $primaryGroupId = $memberGroup->Id;

                    }

                }

            } else {

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

                default :

                    $directoryGroupId   = 1008;
                    $directoryGroupName = 'undefined';

            }

            // setup variables
            $email = strtolower( $member->EmailAddress );
            $name  = $member->FirstName . ' ' . $member->LastName;

            // push to members array
            $storage[ 'members' ][] = array(

                'memberID'          => $member->Id,
                'eName'             => $member->EName,
                'firstName'         => $member->FirstName,
                'lastName'          => $member->LastName,
                'fullName'          => $member->FirstName . ' ' . $member->LastName,
                'email'             => strtolower( $member->EmailAddress ),
                'title'             => $member->EmployeeTitle,
                'directoryGroupID'  => $directoryGroupId,
                'directoryGroup'    => $directoryGroupName,
                'primaryGroupID'    => $primaryGroupId,
                'groups'            => $memberGroups,
                'department'        => $department,
                'phone'             => $phone,
                'contactInfo'       => $memberContacts,
                'addressInfo'       => 'ball so hard',
                // 'addressInfo'       => $member->BusinessAddress1,
                'address'           => $memberAddress->BusinessAddress1,
                'photo'             => $memberPhotos

            );

        }

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
