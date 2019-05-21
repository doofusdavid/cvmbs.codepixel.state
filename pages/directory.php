<?php

    // template name: directory

?>

<?php get_header(); ?>

<?php

    // determine directory data source
    $site_type = get_field( 'site_type', 'options' );

    // create json store
    $filestore = $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/cvmbsPress/library/directory/data/directory.json';

    // convert store to data
    $getdata     = file_get_contents( $filestore );
    $membersdata = json_decode( $getdata );

    // setup data object
    $members = $membersdata->members;

    // get site path
    $siteinfo = get_blog_details();

    // parse URL for site path
    $siteurl = str_replace( '/', '', $siteinfo->path );

    // set department ID for REST API tasks
    if ( $siteurl == 'bms' ) {

        $department_ID = '207';

    } else if ( $siteurl == 'cs' ) {

        $department_ID = '135';

    } else if ( $siteurl == 'erhs' ) {

        $department_ID = '208';

    } else if ( $siteurl == 'mip' ) {

        $department_ID = '209';

    }

?>

<!-- directory -->
<main id="site-layout" class="off-canvas-content <?php echo $site_type; ?>" data-off-canvas-content>

    <!-- directory -->
    <div id="directory" class="page-container">

        <!-- page header -->
        <header class="header">

            <h1>

                <?php

                    $directory_page = get_the_title();

                    if ( $site_type == 'department' ) {

                        $directory_type = 'department';

                    } elseif ( $site_type == 'college' ) {

                        $directory_type = 'college';

                    }

                    echo $directory_type . ' ' . $directory_page . ' [ ' . $department_ID . ' ]';

                ?>

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
        <table id="directory-records" class="sloaded">

            <!-- sortable header -->
            <thead>

                <tr>

                    <!-- <th width="180"> -->
                    <th>

                        Name

                    </th>

                    <th>

                        E-mail Address

                    </th>

                    <th width="180">
                    <!-- <th> -->

                        Phone

                    </th>

                    <th>

                        Department

                    </th>

                </tr>

            </thead>
            <!-- END sortable header -->

            <!-- data table -->
            <tbody>

                <?php

                    // college data
                    if ( $site_type == 'college' ) {

                        foreach ( $members as $member ) {

                            $query      = $member->memberID;
                            $ename      = $member->eName;
                            $lastName   = $member->lastName;
                            $firstName  = $member->firstName;
                            $tableName  = $lastName . ', ' . $firstName;
                            $eMail      = strtolower( $member->email );
                            $phone      = $member->phone;
                            $department = $member->department;

                            $results .= '<tr class="record"><td><a class="member-link" href="' . esc_url( home_url() ) . '/member/?id=' . $query . '">' . $tableName . '</a></td><td><a class="email-link" href="mailto:' . $eMail . '">' . $eMail . '</a></td><td>' . $phone . '</td><td>' . $department . '</td></tr>';

                        }

                        echo $results;

                    }

                    // department data
                    if ( $site_type == 'department' ) {

                        foreach ( $members as $member ) {

                            if ( $member->primaryGroupID == $department_ID ) {

                                $query      = $member->memberID;
                                $ename      = $member->eName;
                                $lastName   = $member->lastName;
                                $firstName  = $member->firstName;
                                $tableName  = $lastName . ', ' . $firstName;
                                $eMail      = strtolower( $member->email );
                                $phone      = $member->phone;
                                $department = $member->department;

                                $results .= '<tr class="record"><td><a class="member-link" href="' . esc_url( home_url() ) . '/member/?id=' . $query . '">' . $tableName . '</a></td><td><a class="email-link" href="mailto:' . $eMail . '">' . $eMail . '</a></td><td>' . $phone . '</td><td>' . $department . '</td></tr>';

                            }

                        }

                        echo $results;

                    }

                ?>

            </tbody>
            <!-- END data table -->

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

        <pre class="hide">

            <?php

                echo '<br />';
                print_r( $members );

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
