
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

    var research;
    var targetID;
    var imageattr;
    var featureimg;
    var headline
    var globalmap;
    var contentFX = {};

// ================================================================================
// END :: globals
// ================================================================================



// ================================================================================
// START :: load.academics                                        EXPORT
// ================================================================================

export var researchUI = {

    // register script + define globals
    init: function ( render ) {

        // check in
        console.log(

            '%c[ %cload.research %c] %cscript%c.%cinitialized',
            log.brack, log.activ, log.brack, log.init, log.brack, log.brite

        );

        // call method
        researchUI.loader();

    },

    // event listener
    loader: function( homepage ) {

        // assign globals
        research = site.ui.sections.research;

        // event listener
        site.ui.content.on( 'load.article.content', function( e, target ) {

            targetID = target.attr( 'id' );

            toolbar    = $('#research-map-toolbar');
            imageattr  = 'background-image';
            globalmap  = research.find( '.pattern-layer' );
            featureimg = globalmap.data( 'background' );
            headline   = research.find( '.section-title' );

            contentFX.loadtime = [

                {

                    e : $( headline ),

    				p : {

                        translateY : [ '-50%', 0 ],
                        opacity    : [ 0, 1 ]

    				},

    				o : {

                        begin         : function() {

                            globalmap.css( imageattr, 'url(' + featureimg + ')' );

                        },
    					queue 		  : false,
    					duration 	  : 640,
    					delay 		  : 1600,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( toolbar ),

    				p : {

                        translateY : [ 0, '100%' ],
                        opacity    : [ 1, 0 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 640,
    					delay 		  : 360,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( globalmap ),

                    p : {

                        opacity          : [ 1, 0 ],
                        transformOriginX : [ '50%', '50%' ],
                        transformOriginY : [ '50%', '50%' ],
                        scaleX           : [ 1, 1.5 ],
                        scaleY           : [ 1, 1.5 ],
                        translateZ       : 0

    				},

    				o : {

                        begin         : function() {



                        },
    					queue 		  : false,
    					duration 	  : 720,
    					delay 		  : 960,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }

            ];

            if ( targetID === 'research' ) {

                // sequence
                $.Velocity.RunSequence( contentFX.loadtime );

            } else {

                return;

            }

        });

    }

};

// ================================================================================
// END :: load.academics
// ================================================================================
