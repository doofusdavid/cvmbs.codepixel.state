console.log( 'ball so hard' );

// document.write("<script async src='//HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'></script>".replace("HOST", location.hostname));
document.write(`<script id='__bs_script__'><script async src='//HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'></script></script>`.replace("HOST", location.hostname));

// ================================================================================
// START :: require + modules + dependencies
// ================================================================================

    // import modules
    import $ from 'jquery';
    import './library/foundation.explicit';

    // global jQuery object
    window.jQuery = window.$ = $;

    // global velocity object
    var velocity = $.velocity = require( 'velocity-animate' );

    // foundation module
    import Foundation from 'foundation-sites';


// ================================================================================
// END :: require + modules + dependencies
// ================================================================================



// ================================================================================
// START :: config.objects
// ================================================================================

    // initialize foundation
    $(document).foundation();

    // set menu var
    var adminMainMenu = $('#adminmenu');

    // configure admin menu
    var adminMainMenu = new Foundation.AccordionMenu( adminMainMenu, {

        multiOpen : false

    });

// ================================================================================
// END :: config.objects
// ================================================================================
