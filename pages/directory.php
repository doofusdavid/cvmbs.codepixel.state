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
    // $data = json_encode( $directory, JSON_PRETTY_PRINT );
    $data = json_encode( $directory );

    // create json store
    $storage = $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/cvmbsPress/data/directory.json';

    // send data to json store
    // file_put_contents( $storage, $data );

    // revise array data
    $data = $directory->GetMembersBySearchNameResult->MemberResponse;

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

        <!-- toolbar.DEV -->
        <div id="directory-toolbar" class="toolbar">

            <!-- alphabet -->
            <div id="directory-alphabet" class="toolbar-control-group">



            </div>
            <!-- END alphabet -->

            <!-- fiels -->
            <div id="directory-fields" class="toolbar-control-group">



            </div>
            <!-- END fiels -->

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
                        $eMail     = strtolower( $person->EmailAddress );
                        $phone     = $person->MemberContacts->MemberContactResponse->PhoneNumber;

                        $results .= '<tr class="record"><td>' . $firstName . ' ' . $lastName . '</td><td><a class="email-link" href="mailto:' . $eMail . '">' . $eMail . '</a></td><td>' . $phone . '</td></tr>';

                    }

                    echo $results;

                ?>

            </tbody>

        </table>
        <!-- END table -->

        <!-- pagination -->
        <div id="directory-controls" class="toolbar">



        </div>
        <!-- END pagination -->

        <!-- info -->
        <div id="directory-info" class="toolbar">



        </div>
        <!-- END info -->

        <pre>

            <?php

                print_r( $data );

            ?>

        </pre>

        <!-- Data Tables -->
        <script type="text/javascript" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">

            // alphabet search
            var _alphabetSearch = '';

            // push search settings to app
            $.fn.dataTable.ext.search.push( function ( settings, searchData ) {

                if ( ! _alphabetSearch ) {

                    return true;

                }

                if ( searchData[0].charAt(0) === _alphabetSearch ) {

                    return true;

                }

                return false;

            });

            // ready
            $(document).ready(function(){

                // initialization
                var controlphabet = $('#directory-alphabet');
                var controlfields = $('#directory-fields');
                var directoryinfo = $('#directory-info');
                var controlpages  = $('#directory-controls');
                var table   = $('#directory-records').DataTable( {

                    'order'   : [[ 0, 'asc' ]],
                    stateSave : true

                });

                // alphabet search
                var alphabet = $('<div class="alphabet"/>').append( '<span class="alphabet-label">Last Name: </span>' );

                // add clear action to alphabet
                $('<span class="alphabet-control clear active"/>')
                    .data( 'letter', '' )
                    .html( 'None' )
                    .appendTo( alphabet );

                // increment
                for ( var i = 0 ; i < 26 ; i++ ) {

                    var letter = String.fromCharCode( 65 + i );

                    $('<span class="alphabet-control letter"/>')
                        .data( 'letter', letter )
                        .html( letter )
                        .appendTo( alphabet );

                }

                // prepend to page content container
                // alphabet.insertBefore( table.table().container() );
                alphabet.appendTo( controlphabet );

                $('#directory-records_length').appendTo( controlfields );
                $('#directory-records_filter').appendTo( controlfields );
                $('#directory-records_info').appendTo( directoryinfo );
                $('#directory-records_paginate').appendTo( controlpages );

                // toggle classes
                alphabet.on( 'click', 'span', function () {

                    alphabet.find( '.active' ).removeClass( 'active' );

                    $(this).addClass( 'active' );

                    _alphabetSearch = $(this).data('letter');

                    table.draw();

                } );

            });

        </script>

    </div>
    <!-- END directory -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- END directory -->

<?php get_footer(); ?>
