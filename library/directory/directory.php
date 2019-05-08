
<?php

    // call class library
    include_once( 'classes/DirectoryService.php' );

    // set WSDL service URL
    $serviceURL = 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl';

    // instantiate DirectoryService
    $service = new SoapClient( $serviceURL );

    // output list of functions
    $response = $service->__getFunctions();

    // ID variable
    $id = '36422';

    // output magic
    $memberName = $service->GetMembersBySearchName(

        array( 'searchName' => 'koncar' )

    );

    // stuff
    $memberId = $service->GetMemberById(

        array( 'id' => $id )

    );

    // output magic
    $memberGroups = $service->GetGroupsByMemberId(

        array( 'memberId' => $id )

    );

    // output magic
    $memberContacts = $service->GetMemberContactsByMemberId(

        array( 'id' => $id )

    );

    // stuff
    $memberDirectory = $service->GetDirectoryInfoByMemberId(

        array( 'id' => $id )

    );

    // stuff
    $memberCV = $service->GetCVByMemberId(

        array( 'id' => $id )

    );

    // stuff
    $memberProfile = $service->GetDirectoryProfileByMemberId(

        array( 'id' => $id )

    );

    // data
    $name      = $memberName->GetMembersBySearchNameResult->MemberResponse;
    $data      = $memberData->GetMemberByIdResult->MemberResponse;
    $groups    = $memberGroups->GetGroupsByMemberIdResult->GroupResponse;
    $contacts  = $memberContacts->GetMemberContactsByMemberIdResult->MemberContactResponse;
    $directory = $memberDirectory->GetDirectoryInfoByMemberIdResult->DirectoryInfoResponse;
    $cv        = $memberCV->GetCVByMemberIdResult->MemberDirectoryCVResponse;
    $profile   = $memberProfile->GetDirectoryProfileByMemberIdResult->MemberDirectoryProfileResponse;

?>

<!-- <pre> -->

    <?php

        // var_dump( $response );

        // echo '<br />';
        // echo 'name => ';
        // echo '<br />';
        // print_r( json_encode( $name, JSON_PRETTY_PRINT ) );
        // echo '<br />';

        // echo '<br />';
        // echo 'data => ';
        // echo '<br />';
        // print_r( json_encode( $data, JSON_PRETTY_PRINT ) );
        // echo '<br />';

        // echo 'groups => ';
        // echo '<br />';
        // print_r( json_encode( $groups, JSON_PRETTY_PRINT ) );
        // echo '<br />';

        // echo 'contacts => ';
        // echo '<br />';
        // print_r( json_encode( $contacts, JSON_PRETTY_PRINT ) );
        // echo '<br />';

        // echo 'directory => ';
        // echo '<br />';
        // print_r( json_encode( $directory, JSON_PRETTY_PRINT ) );
        // echo '<br />';

        // echo 'cv => ';
        // echo '<br />';
        // print_r( json_encode( $cv, JSON_PRETTY_PRINT ) );
        // echo '<br />';

        // echo 'profile => ';
        // echo '<br />';
        // print_r( json_encode( $profile, JSON_PRETTY_PRINT ) );
        // echo '<br />';

    ?>

<!-- </pre> -->
