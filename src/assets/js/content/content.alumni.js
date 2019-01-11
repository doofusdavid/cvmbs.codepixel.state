
// ================================================================================
// START :: require + modules + dependencies
// ================================================================================

    // jQuery
    import $ from 'jquery';

    // site.object
    import { site, log } from './../cvmbs.app';

    // slick.js
    require( 'slick-carousel' );
    import slick from 'slick-carousel';

// ================================================================================
// END :: require + modules + dependencies
// ================================================================================



// ================================================================================
// START :: globals
// ================================================================================

    var alumni;
    var targetID;
    var contentFX = {};
    var imageattr;
    var featureimg;
    var spotlights;
    var slide;
    var artwork;
    var arrows = {

        prev: $('#prev-arrow-control'),
        next: $('#next-arrow-control')

    };

// ================================================================================
// END :: globals
// ================================================================================



// ================================================================================
// START :: load.academics                                        EXPORT
// ================================================================================

export var alumniUI = {

    // register script + define globals
    init: function ( render ) {

        // check in
        console.log(

            '%c[ %cload.alumni %c] %cscript%c.%cinitialized',
            log.brack, log.activ, log.brack, log.init, log.brack, log.brite

        );

        // call loader method
        alumniUI.loader();

        spotlights = $('#alumni-slides');

        // init slick
        alumniUI.slides( spotlights );

    },

    // event listener
    loader: function( target ) {

        // assign globals
        alumni = site.ui.sections.alumni;

        // event listener
        site.ui.content.on( 'load.article.content', function( e, target ) {

            targetID = target.attr( 'id' );

            var spotlight = alumni.find( '.section-content' );
            var container = alumni.find( '.slider-layer' );
            var layerbase = alumni.find( '.slider-base' );
            var sliderbox = alumni.find( '.slider' );
            var controls  = $('#alumni-slider-controls');
            var colorized = alumni.find( '.color-layer' );
            var patterned = alumni.find( '.pattern-layer' );
            var metadata  = alumni.find( '.slide-meta' );
            var headline  = alumni.find( '.section-title' );

            imageattr  = 'background-image';
            featureimg = spotlight.data( 'background' );

            contentFX.loadtime = [

                {

                    e : $( headline ),

                    p : {

                        // translateY : [ 0, '50%' ],
                        translateY : [ 0, 0 ],
                        // opacity    : [ 1, 0 ]
                        opacity    : [ 1, 1 ]

    				},

    				o : {

    					queue 		  : false,
    					duration 	  : 720,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( spotlight ),

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

                            spotlight.css( imageattr, 'url(' + featureimg + ')' );

                        },
    					queue 		  : false,
    					duration 	  : 1200,
    					delay 		  : 3600,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            spotlight.attr( 'data-load', 'loaded' );

    					}

    				}

                }, {

                    e : $( headline ),

    				p : {

                        translateY : [ '-50%', 0 ],
                        opacity    : [ 0, 1 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 640,
    					delay 		  : 1200,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {



    					}

    				}

                }, {

                    e : $( layerbase ),

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
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( sliderbox ),

    				p : {

                        translateX : [ 0, '-100%' ],
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

                    e : $( controls ),

    				p : {

                        translateX : [ 0, -96 ],
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

                    e : $( metadata ),

    				p : {

                        translateX : [ 0, '100%' ],
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

                    e : $( colorized ),

    				p : {

                        opacity    : [ 1, 0 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 1200,
    					delay 		  : 240,
    					easing 		  : 'easeOutExpo',
    					sequenceQueue : false,
    					complete 	  : function() {

                            // init slick
                            alumniUI.slides( spotlights );

    					}

    				}

                }

            ];

            if ( targetID === 'alumni' ) {

                // sequence
                $.Velocity.RunSequence( contentFX.loadtime );

            } else {

                $.Velocity.RunSequence( contentFX.loadtime );

            }

        });

    },

    // slides
    slides: function( spotlights ) {

        // config slick
        spotlights.slick({

            arrows    : true,
            dots      : false,

            prevArrow : arrows.prev,
            nextArrow : arrows.next,

            initialSlide   : 0,
            infinite       : false,
            slidesToShow   : 1,
            slidesToScroll : 1,

            speed     : 360,
            fade      : true,
            // cssEase   : 'cubic-bezier(0.23, 1, 0.32, 1)',

            accessibility  : true,
            waitForAnimate : true

        });

        // load + unload listener
        spotlights.on( 'beforeChange', function( e ) {

            slide = $('#alumni-slides .slick-slide.slick-active .ui-slide-article');

            artwork = slide.data( 'background' );

            // $(this).trigger( 'load.spotlights.slide', [ slide, artwork ] );

            console.log( 'beforeChange' );

        }).on( 'afterChange', function( e ) {

            slide = $('#alumni-slides .slick-slide.slick-active .ui-slide-article');

            artwork = slide.data( 'background' );

            $(this).trigger( 'load.spotlights.slide', [ slide, artwork ] );

            console.log( 'afterChange' );

        });

        // load + unload handler
        spotlights.on( 'load.spotlights.slide', function( e, slide, artwork ) {

            console.log( slide );

            console.log(

                '%cartwork %c: %c' + artwork, log.fx, log.brack, log.activ

            );

            var billboard = $('#spotlight-billboard');

            imageattr  = 'background-image';
            featureimg = artwork;

            // billboard.css( imageattr, 'url(' + featureimg + ')' );

        });

    }

};

// ================================================================================
// END :: load.academics
// ================================================================================
