<?php

    // determine directory data source
    $site_type = get_field( 'site_type', 'options' );

    // create json store
    $filestore = $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/cvmbsPress/data/directory.json';

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
    switch ( $siteurl ) {

        case 'cs' :

            $department_ID = 1002;
            break;

        case 'bms' :

            $department_ID = 1003;
            break;

        case 'mip' :

            $department_ID = 1004;
            break;

        case 'erhs' :

            $department_ID = 1005;
            break;

    }

?>

<!-- panel.directory -->
<section id="menu-panel-directory" class="tabs-panel menu-panel">

    <!-- panel.header -->
    <header id="menu-panel-directory-header" class="panel-header">

        <?php

            $directory_page = get_the_title();

            if ( $site_type == 'department' ) {

                $directory_type = 'department';

            } elseif ( $site_type == 'college' ) {

                $directory_type = 'college';

            }

            echo $directory_type . ' directory';

        ?>

    </header>
    <!-- END panel.header -->

    <!-- panel interior -->
    <div class="panel-interior" id="directory-panel">

        <!-- panel content -->
        <div class="panel-content">

            <!-- table -->
            <table id="directory-records" class="sloaded" width="100%">

                <!-- sortable header -->
                <thead>

                    <tr>

                        <!-- <th width="180"> -->
                        <th>

                            Name

                        </th>

                        <th align="right" width="180">
                        <!-- <th> -->

                            Phone

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
                                $department = $member->directoryGroup;

                                $results .= '<tr class="record"><td class="link-column"><span class="mobile-toggle"></span><a class="member-link" href="' . esc_url( home_url() ) . '/directory/member/?id=' . $query . '">' . $tableName . '</a></td><td>' . $phone . '</td></tr>';

                            }

                            echo $results;

                        }

                        // department data
                        if ( $site_type == 'department' ) {

                            foreach ( $members as $member ) {

                                if ( $member->directoryGroupID == $department_ID ) {

                                    $query      = $member->memberID;
                                    $ename      = $member->eName;
                                    $lastName   = $member->lastName;
                                    $firstName  = $member->firstName;
                                    $tableName  = $lastName . ', ' . $firstName;
                                    $eMail      = strtolower( $member->email );
                                    $phone      = $member->phone;
                                    $department = $member->directoryGroup;

                                    $results .= '<tr class="record"><td class="link-column"><span class="mobile-toggle"></span><a class="member-link" href="' . esc_url( home_url() ) . '/member/?id=' . $query . '">' . $tableName . '</a></td><td>' . $phone . '</td></tr>';

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

        </div>
        <!-- END panel content -->

        <!-- Data Tables -->
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
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
                var table         = $('#directory-records').DataTable( {

                    'order'          : [[ 0, 'asc' ]],
                    stateSave        : true,
                    responsive       : true,
                    // 'lengthChange'   : false,
                    // 'lengthMenu'     : [ 10 ],
                    'pageLength'     : 12

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
    <!-- END panel interior -->

</section>
<!-- END panel.directory -->
