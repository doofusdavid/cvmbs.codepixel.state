
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

    var homepage;
    var sectionFX = {};

// ================================================================================
// END :: globals
// ================================================================================



// ================================================================================
// START :: activate.article                                        EXPORT
// ================================================================================

export var sections = {

    // register script + define globals
    init: function ( render ) {

        // check in
        console.log(

            '%c[ %cload.section %c] %cscript%c.%cinitialized',
            log.brack, log.activ, log.brack, log.init, log.brack, log.brite

        );

        // call method
        sections.activate();

    },

    // event listener
    activate: function( homepage ) {

        // assign globals
        homepage = site.ui.content;

        // empty vars
        var billboard;
        var imageattr;
        var background;
        var colorlayer;
        var spotlight;
        var featureimg;
        var headline;

        // event listener
        homepage.on( 'activate.ui.article', function( e, target ) {

            // section billboard
            billboard  = target.find( '.section-image' );
            imageattr  = 'background-image';
            background = billboard.data( 'background' );

            // color overlay
            colorlayer = target.find( '.section-base' );

            // spotlight
            spotlight  = target.find( '.section-content' );
            featureimg = spotlight.data( 'background' );
            headline   = target.find( '.section-title' );

            sectionFX.activate = [

                {

    				e : $( billboard ),

    				p : {

                        opacity    : [ 1, 0 ]

    				},

    				o : {

                        begin         : function() {

                            if ( background === null ) {

                                return;

                            } else {

                                billboard.css( imageattr, 'url(' + background + ')' );

                            }

                            billboard.attr( 'data-load', 'loaded' );

                        },
    					queue 		  : false,
    					duration 	  : 960,
    					delay 		  : 120,
    					easing 		  : 'linear',
    					sequenceQueue : false,
    					complete 	  : function() {



    					}

    				}

    			}, {

                    e : $( colorlayer ),

    				p : {

                        opacity    : [ 1, 1 ]

    				},

    				o : {

                        begin         : function() {

                            site.ui.content.trigger( 'load.article.content', [ target ] );

                        },
    					queue 		  : false,
    					duration 	  : 3600,
    					delay 		  : 0,
    					easing 		  : 'linear',
    					sequenceQueue : false,
    					complete 	  : function() {

                            // the emptiness

    					}

    				}

                }

            ];

            if ( target.attr( 'data-load' ) === 'pending' ) {

                // sequence
                $.Velocity.RunSequence( sectionFX.activate );

            }

            target.attr( 'data-load', 'loaded' );

        });

    }

};

// ================================================================================
// END :: activate.article
// ================================================================================
