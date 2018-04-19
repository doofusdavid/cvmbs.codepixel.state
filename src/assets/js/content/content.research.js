
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

    var map;
    var research;
    var targetID;
    var imageattr;
    var featureimg;
    var headline;
    var globalmap;
    var contentFX = {};

// ================================================================================
// END :: globals
// ================================================================================



// ================================================================================
// START :: load.research                                              EXPORT
// ================================================================================

export var researchUI = {

    // register script + define globals
    init: function ( render ) {

        // check in
        console.log(

            '%c[ %cload.research %c] %cscript%c.%cinitialized',
            log.brack, log.activ, log.brack, log.init, log.brack, log.brite

        );

        // render map
        // researchUI.cartography();

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

                        // translateY : [ '-50%', 0 ],
                        translateY : [ 0, 0 ],
                        // opacity    : [ 0, 1 ]
                        opacity    : [ 1, 1 ]

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

                        opacity          : [ 0.5, 0 ],
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
    					duration 	  : 1280,
    					delay 		  : 1280,
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

    },

    // render map
    cartography: function( map ) {

        map = new google.maps.Map( document.getElementById( 'research-map' ), {

            center: {lat: -34.397, lng: 150.644},
            zoom: 8

        });

    }

};

// ================================================================================
// END :: load.research
// ================================================================================



// ================================================================================
// START :: run.research                                           EXPORT
// ================================================================================

export var researchFX = {

    // register script + define globals
    init: function( render ) {

        // the emptiness

    },

    // event listener(s)
    interact: function( map ) {

        // the emptiness

    }

};

// ================================================================================
// END :: run.research
// ================================================================================
