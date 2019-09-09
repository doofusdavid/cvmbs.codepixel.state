<?php

    // template name: Research Topic Directory

?>

<?php get_header(); ?>

<?php

    // hit database for ID and pass through
    function get_research_topic_ID ( $topic_ID ) {

        // get topicID
        $topic_ID = get_field( 'research_topic_id' );

        return $topic_ID;

    }

    // set WSDL service URL
    $serviceURL = 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl';

    // instantiate DirectoryService
    $service = new SoapClient( $serviceURL );

    // output list of functions
    $response = $service->__getFunctions();

    // output magic
    $directory = $service->GetMembersByGroupId(

        array( 'id' => get_research_topic_ID( $topic_ID ) )

    );

    // get returned data object
    $members = $directory->GetMembersByGroupIdResult->MemberResponse;

?>

<!-- directory -->
<main id="site-layout" class="off-canvas-content <?php echo $site_type; ?>" data-off-canvas-content>

    <!-- directory -->
    <div id="directory" class="page-container">

        <!-- page header -->
        <header class="header">

            <h1>

                <?php echo the_title() . ' faculty'; ?>

            </h1>

            <button id="research-topic-menu-button" class="open-modal-button" data-open="directory-menu">

                research topics

            </button>

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

                    foreach ( $members as $member ) {

                        // setup ID for additional WSDL queries
                        $memberID = $member->Id;

                        // get department groups
                        $groups = $service->GetGroupsByMemberId( array( 'memberId' => $memberID ) );

                        // get contact info
                        $contacts = $service->GetMemberContactsByMemberId( array( 'id' => $memberID ) );

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
                        $LastName   = $member->LastName;
                        $FirstName  = $member->FirstName;
                        $tableName  = $LastName . ', ' . $FirstName;
                        $eMail      = strtolower( $member->EmailAddress );
                        // $phone      = $phone;
                        $department = $directoryGroupName;

                        $records .= '<tr class="record"><td class="link-column"><span class="mobile-toggle"></span><a class="member-link" href="' . esc_url( home_url() ) . '/directory/member/?id=' . $memberID . '">' . $tableName . '</a></td><td class="link-column"><a class="email-link" href="mailto:' . $eMail . '">' . $eMail . '</a></td><td>' . $phone . '</td><td>' . $department . '</td></tr>';

                    }

                    echo $records;

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

        <pre class="developer hide">

            <?php print_r( $members ); ?>

        </pre>

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

                    'order'    : [[ 0, 'asc' ]],
                    stateSave  : true,
                    responsive : true

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

        <!-- topics menu -->
        <div id="directory-menu" class="reveal research-topic-modal" data-reveal>

            <!-- header -->
            <header>

                faculty research topics

            </header>
            <!-- END header -->

            <?php research_topic_menu(); ?>

        </div>
        <!-- END topics menu -->

    </div>
    <!-- END directory -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- END directory -->

<?php get_footer(); ?>
