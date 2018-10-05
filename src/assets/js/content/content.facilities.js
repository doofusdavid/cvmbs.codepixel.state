
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

    var facilities;
    var targetID;
    var billboard;
    var imageattr;
    var featureimg;
    var background;
    var contentFX = {};

// ================================================================================
// END :: globals
// ================================================================================



// ================================================================================
// START :: load.academics                                        EXPORT
// ================================================================================

export var facilitiesUI = {

    // register script + define globals
    init: function ( render ) {

        // check in
        console.log(

            '%c[ %cload.facilities %c] %cscript%c.%cinitialized',
            log.brack, log.activ, log.brack, log.init, log.brack, log.brite

        );

        // call method
        facilitiesUI.loader();

    },

    // event listener
    loader: function( homepage ) {

        // assign globals
        facilities = site.ui.sections.facilities;

        // thumbnail control
        var thumbnail = $('#facilities-toolbar .facilities-control');

        // load thumbnail backgorund
        thumbnail.each( function( index ) {

            // background data
            imageattr  = 'background-image';
            background = $(this).attr( 'data-background' );

            // set background
            $.each( thumbnail, function( index ) {

                //

            });

            $(this).css( imageattr, 'url(' + background + ')' );

        });

        // event listener
        site.ui.content.on( 'load.article.content', function( e, target ) {

            targetID = target.attr( 'id' );

            imageattr  = 'background-image';
            featureimg = thumbnail.data( 'background' );

            var viewer = $('#facilities-viewer');

            contentFX.loadtime = [

                {

                    e : $( viewer ),

    				p : {

                        translateX : [ 0, '-30%' ],
                        opacity    : [ 1, 0 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 720,
    					delay 		  : 480,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }

            ];

            if ( targetID === 'facilities' ) {

                thumbnail.velocity( 'fadeIn', {

                    begin      : function() {

                        // sequence
                        $.Velocity.RunSequence( contentFX.loadtime );

                    },
                    visibility : 'visible',
                    opacity    : 0.765,
                    duration   : 480,
                    delay 	   : 720,
                    stagger    : 240,
                    drag       : true,
                    easing     : 'easeOutCirc',
                    complete   :  function() {

                        //

                    }

                });

            } else {

                return;

            }

        });

        thumbnail.on( 'click', function() {

            // billboard data
            imageattr  = 'background-image';
            featureimg = $(this).data( 'background' );

            // section billboard
            billboard  = $('#facilities-viewer');

            // fade elements
            facilities.find( '.section-base' ).fadeOut( 1000, 'linear' );

            // remove title
            $('#facilities .section-title').velocity('transition.slideRightBigOut', {

                begin      : function() {

                    //

                },
                duration   : 480,
                delay 	   : 120,
                easing     : 'easeOutCirc',
                complete   :  function() {

                    //

                }

            });

            // set background
            billboard.css( imageattr, 'url(' + featureimg + ')' ).removeClass( 'empty' );

        });

    }

};

// ================================================================================
// END :: load.academics
// ================================================================================
