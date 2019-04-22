
<?php

    // call class library
    include_once( 'classes/DirectoryService.php' );

    // set WSDL service URL
    $serviceURL = 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl';

    // instantiate DirectoryService
    $service = new SoapClient( $serviceURL );

    // output list of functions
    $response = $service->__getFunctions();

    // output magic
    $directory = $service->GetMembersBySearchName(

        array( 'searchName' => 'cox' )

    );

?>
