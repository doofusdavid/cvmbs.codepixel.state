<?php

    // template name: directory

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

    }

    // output magic
    $directory = $service->GetMembersBySearchName(

        array( 'searchName' => $query )

    );

    // store in normalized array
    $data = json_encode( $directory, JSON_PRETTY_PRINT );

    // revise array data
    $data = $directory->GetMembersBySearchNameResult->MemberResponse;

?>

<!-- directory -->
<main id="directory" class="off-canvas-content <?php echo $site_type; ?>" data-off-canvas-content>

    <!-- toolbar.DEV -->
    <div id="directory-toolbar" class="toolbar">

        <span id="query">

            <span class="query-label">

                you searched for&nbsp;

            </span>

            <span class="query-string">

                <?php echo $query; ?>

            </span>

        </span>

        <span id="title">

            directory<span>.</span><em>app</em><span>[</span>&nbsp;<strong>prototype</strong>&nbsp;<span>]</span>

        </span>

    </div>
    <!-- END toolbar.DEV -->

    <!-- table -->
    <table id="directory-records">

        <thead>

            <tr>

                <th>

                    Name

                </th>

                <th>

                    E-mail Address

                </th>

                <th>

                    Phone

                </th>

            </tr>

        </thead>

        <tbody>

            <?php

                foreach ( $data as $person ) {

                    $ename     = $person->EName;
                    $lastName  = $person->LastName;
                    $firstName = $person->FirstName;
                    $eMail     = $person->EmailAddress;
                    $phone     = $person->MemberContacts->MemberContactResponse->PhoneNumber;

                    $results .= '<tr class="record"><td>' . $firstName . ' ' . $lastName . '</td><td><a class="email-link" href="mailto:' . $eMail . '">' . $eMail . '</a></td><td>' . $phone . '</td></tr>';

                }

                echo $results;

            ?>

        </tbody>

    </table>
    <!-- END table -->

    <pre>

        <?php

            print_r( $data );

        ?>

    </pre>

</main>
<!-- END directory -->

<?php get_footer(); ?>
