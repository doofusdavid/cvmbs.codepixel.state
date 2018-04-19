
// ================================================================================
// START :: require + modules + dependencies
// ================================================================================

    // import modules
    import $ from 'jquery';
    // import whatInput from 'what-input';
    import { menusFX } from './components/menus.ui';
    import { scrollUI } from './interactive/scroll.navigate';
    import { slides } from './interactive/billboard.slides';
    import { sections } from './components/load.section';
    import { academicsUI, academicsFX } from './content/content.academics';
    import { alumniUI } from './content/content.alumni';
    import { researchUI } from './content/content.research';
    import { facilitiesUI } from './content/content.facilities';
    import { newsUI, newsFX } from './content/content.news';

    import './library/foundation.explicit';

    // global jQuery object
    window.jQuery = window.$ = $;

    // global velocity object
    var velocity = $.velocity = require( 'velocity-animate' );

    // foundation module
    import Foundation from 'foundation-sites';

    // initialize foundation
    $(document).foundation();

// ================================================================================
// END :: require + modules + dependencies
// ================================================================================



// ================================================================================
// START :: config.objects
// ================================================================================

    // base object
    export var site = {};

    // functions
    site.fx = {

        // scrollpage

    };

    // brand
    site.brand = {

        camelot : $('#brand-rams'),
        state   : $('#brand-state'),
        local   : $('#brand-cvmbs')

    };

    // site.ui
    site.ui = {

        header    : $('#site-header'),
        layout    : $('#site-layout'),
        billboard : $('#billboard-homepage'),
        slides    : $('#billboard-slides'),
        content   : $('#content-homepage'),
        articles  : $('#content-homepage .ui-article'),
        active    : $('#content-homepage .ui-article.active' ),
        footer    : $('#site-footer')

    };

    // menus
    site.ui.menus = {};

    // controls + buttons
    site.ui.controls = {

        university : 'university',
        college    : 'college'
        // department : 'department'

    };

    // menu.navigation
    site.ui.menus.navigation = {

        component  : $('#site-menu'),
        controller : $('#site-menu-button')

    };

    // menu.programs
    site.ui.menus.programs = {};

    // menu.content
    site.ui.menus.content = {};

    // homepage.sections
    site.ui.sections = {

        academics: $('#academics'),
        research: $('#research'),
        facilities: $('#facilities'),
        alumni: $('#alumni'),
        events: $('#events'),
        news: $('#news')

    };

    // visual debug
    export var log = {

        brite : 'color: rgba(144, 187, 34, 1.00)',
        callb : 'color: rgba(85, 168, 182, 0.80)',
        proms : 'color: rgba(85, 168, 182, 0.47)',
        init  : 'color: rgba(214, 221, 242, 0.80)',
        brack : 'color: rgba(255, 255, 255, 0.35)',
        activ : 'color: rgba(243, 133, 72, 1.000)',
        reset : 'color: rgba(243, 133, 72, 0.47)',
        load  : 'color: rgba(188, 197, 60, 0.60)',
        displ : 'color: rgba(219, 27, 137, 1.00)',
        fail  : 'color: rgba(255, 45, 45, 0.85)',
        fx    : 'color: rgba(76, 185, 246, 1.00)',
        prnth : 'color: rgba(255, 255, 255, 1.00)',
        pink  : 'color: rgba(249, 87, 231, 1.00)',
        purpl : 'color: rgba(140, 108, 206, 1.00)'

    };

// ================================================================================
// END :: config.objects
// ================================================================================



// ================================================================================
// START :: initialize
// ================================================================================

    $(document).ready(function() {

        // billboard
        slides.init();

        // menus
        menusFX.init();

        // homepage scroll
        scrollUI.init();

        // section load
        sections.init();

        // academics load
        academicsUI.init();

        // academics interact
        academicsFX.init();

        // alumni load
        alumniUI.init();

        // research load
        researchUI.init();

        // facilities load
        facilitiesUI.init();

        // news load
        newsUI.init();

        // news interact
        newsFX.init();

        // display content
        site.ui.layout.velocity( 'fadeIn', {

            visibility : 'visible',
            delay      : 2400,
            duration   : 1600,
            easing     : 'easeOutExpo',
            complete   : function() {

                site.ui.billboard.focus();

            }

        });

    });

    var pageURL;
    var pagelink = $('.link');

    // handle links (temp)
    pagelink.on( 'click', function( e ) {

        pageURL = $(this).attr( 'data-url' );

        window.open( pageURL, '_self' );

    });

// ================================================================================
// END :: initialize
// ================================================================================
