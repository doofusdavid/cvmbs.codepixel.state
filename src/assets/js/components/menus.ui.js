
// ================================================================================
// START :: require + modules + dependencies
// ================================================================================

    // jQuery
    import $ from 'jquery';

    // site.object
    import { site, log } from './../cvmbs.app';

// ================================================================================
// END :: require + modules + dependencies
// ================================================================================



// ================================================================================
// START :: globals
// ================================================================================

    var views = [];
    var menu;
    var toolbar;
    var button;

// ================================================================================
// END :: globals
// ================================================================================



// ================================================================================
// START :: access.menus                                        EXPORT
// ================================================================================

export var menusFX = {

    // register script + define globals
    init: function ( render ) {

        // check in
        console.log(

            '%c[ %cmenusFX %c] %cscript%c.%cinitialized',
            log.brack, log.activ, log.brack, log.init, log.brack, log.brite

        );

        views = [

            site.ui.layout,
            site.ui.header,
            site.ui.billboard,
            site.ui.slides,
            site.ui.active,
            site.ui.menus.navigation.component,
            site.ui.menus.navigation.controller,
            site.ui.footer
            // $('#content-homepage')

        ];

        menu   = site.ui.menus.navigation.component;
        button = site.ui.menus.navigation.controller;

        menusFX.access( menu, button );

        menusFX.panels( menu );

    },

    // event listener
    access: function( menu, button ) {

        // check viewport for menu position
        var mediaQ = Foundation.MediaQuery.current;
        var menuX;

        // handle ZURB offcanvas event
        $(window).on( 'opened.zf.offcanvas', function( e, target, menuX ) {

            // event emitter
            $('#billboard-slides').trigger( 'pause.homepage.feature', [ menu ] );

            // slide content
            var slidecontent = $('#billboard-slides .slick-current.slick-active .ui-slide-article .slide-content');

            // toolbar
            toolbar = site.ui.toolbar;

            $.each( views, function( index, view ) {

                view.toggleClass( 'site-menu-open' );

            });

            $('#site-content .ui-article.active').toggleClass( 'site-menu-open' );

            // hide slide content
            slidecontent.velocity({

                translateX : [ '-100%', 0 ],
                opacity    : [ 0, 1 ]

            }, {

                begin    : function() {

                    //

                },
                duration : 240,
    			delay 	 : 80,
    			easing   : [0.23, 1, 0.32, 1],
    			complete : function() {

    				//

    			}

            });

            // test viewport size
            if ( mediaQ == 'large' || mediaQ == 'xlarge' ) {

                menuX = '-5rem';

            } else if ( mediaQ == 'small' ) {

                menuX = '-4rem';

            }

            // show menu
            menu.velocity({

                translateX : [ menuX, '28rem' ],
                // translateX : [ 0, '100%' ],
                opacity    : [ 1, 0 ]

            }, {

                begin    : function() {

                    //

                },
                duration : 380,
    			delay 	 : 240,
    			easing   : [0.23, 1, 0.32, 1],
    			complete : function() {

    				$(this).toggleClass( 'site-menu-open' );

    			}

            });

            // show toolbar
            toolbar.velocity({

                translateX : [ 0, '100%' ]
                // opacity    : [ 1, 0 ]

            }, {

                begin    : function() {

                    //

                },
                duration : 480,
    			delay 	 : 20,
    			easing   : [0.23, 1, 0.32, 1],
    			complete : function() {

    				$(this).toggleClass( 'site-menu-open' );

    			}

            });

        }).on( 'closed.zf.offcanvas', function( e, target, menuX ) {

            // event emitter
            $('#billboard-slides').trigger( 'start.homepage.feature', [ menu ] );

            // slide content
            var slidecontent = $('#billboard-slides .slick-current.slick-active .ui-slide-article .slide-content');

            // show slide content
            slidecontent.velocity({

                translateX : [ 0, '-100%' ],
                opacity    : [ 1, 0 ]

            }, {

                begin    : function() {

                    //

                },
                duration : 220,
    			delay 	 : 20,
    			easing   : [0.23, 1, 0.32, 1],
    			complete : function() {

    				//

    			}

            });

            // test viewport size
            if ( mediaQ == 'large' || mediaQ == 'xlarge' ) {

                menuX = '-5rem';

            } else if ( mediaQ == 'small' ) {

                menuX = '-4rem';

            }

            // hide menu
            menu.velocity({

                translateX : [ '28rem', menuX ],
                // translateX : [ '100%', 0 ],
                opacity    : [ 0, 1 ]

            }, {

                begin    : function() {

                    $('#site-content .ui-article.active').toggleClass( 'site-menu-open' );

                    $.each( views, function( index, view ) {

                        view.toggleClass( 'site-menu-open' );

                    });

                },
                duration : 380,
    			delay 	 : 40,
    			easing   : [0.23, 1, 0.32, 1],
    			complete : function() {

    				$(this).toggleClass( 'site-menu-open' );

                    // $('section.visible').focus();

    			}

            });

            // hide toolbar
            toolbar.velocity({

                translateX : [ '100%', 0 ]
                // opacity    : [ 0, 1 ]

            }, {

                begin    : function() {

                    //

                },
                duration : 480,
    			delay 	 : 220,
    			easing   : [0.23, 1, 0.32, 1],
    			complete : function() {

    				$(this).toggleClass( 'site-menu-open' );

    			}

            });

        });

    },

    // menu panels
    panels: function( menu, panel ) {

        // button class
        var panelcue = $('.site-menu-button');

        // global target panel
        var targetpanel;
        var activepanel;

        // event listener
        panelcue.on( 'click', function( e ) {

            // global target panel
            targetpanel = $('#menu-panel-' + $(this).attr( 'data-target' ));
            activepanel = $('.menu-panel.active');

            // activate target panel
            targetpanel.toggleClass( 'active inactive' );

            // deactivate panel
            activepanel.toggleClass( 'active inactive' );

        });

    }

};

// ================================================================================
// END :: access.menus
// ================================================================================
