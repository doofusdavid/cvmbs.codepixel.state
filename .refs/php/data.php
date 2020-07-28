<?php

    // template name: Data

    get_header();

    // file
    $filelocation = $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/themes/cvmbsPress/data/';

    // create JSON store
    $filestore = $filelocation . 'research.json';

    // set WSDL service URL
    $serviceURL = 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl';

    // instantiate DirectoryService
    $service = new SoapClient( $serviceURL );

    // output list of functions for debug
    $response = $service->__getFunctions();

    // create storage array
    $storage = array(

        'metadata'   => array(),
        'groupindex' => array(),
        'groups'     => array()

    );

    // create human index
    $storage[ 'groupindex' ] = array(

        // ERHS
        619 => 'Epidemiology',
        620 => 'Health Physics',
        621 => 'Industrial Hygiene',
        622 => 'Radiation Cancer Biology & Oncology',
        623 => 'Toxicology',
        624 => 'Veterinary Diagnostic Imaging',

        // MIP
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
        695 => 'Regulatory Issues',
        696 => 'RNA Biology',
        697 => 'Vector Biology',
        698 => 'Virology',

        // BMS
        714 => 'Cardiovascular Physiology',
        715 => 'Reproductive Physiology',
        716 => 'Neurobiology',
        717 => 'Neuroendocrinology',
        718 => 'Pedagogy',

    );

    // set global post object
    global $post;

    // get posts
    $posts = get_posts(

        array(

            'post_type'      => 'research-topic',
            'posts_per_page' => -1

        )

    );

    // set group IDs
    $storage[ 'groups' ] = array();

    // iterate
    foreach ( $posts as $post ) {

        setup_postdata( $post );

        $topicID = get_field( 'research_topic_id' );
        $title   = get_the_title();

        $members = $service->GetMembersByGroupId( array( 'id' => $topicID ) )->GetMembersByGroupIdResult->MemberResponse;

        $topic = array(

            'topicID'  => ( int ) $topicID,
            'topic'    => $title,
            'records'  => count( $members ),
            'members'  => $members,

        );

        array_push( $storage[ 'groups' ], $topic );

    }

    // JSON-ify
    $data = json_encode( $storage, JSON_PRETTY_PRINT );

    // send data to json store
    file_put_contents( $filestore, $data );

?>

<!-- directory -->
<main id="site-layout" class="off-canvas-content <?php echo $site_type; ?>" data-off-canvas-content>

    <!-- directory -->
    <div id="directory" class="page-container">



    </div>
    <!-- END directory -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- END directory -->

<?php get_footer(); ?>
