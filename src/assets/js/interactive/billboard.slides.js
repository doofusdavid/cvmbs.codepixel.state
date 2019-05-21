
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

    var views = [];
    var arrows = {

        prev: $('#prev-arrow-control'),
        next: $('#next-arrow-control')

    };
    var billboard;
    var contentFX = {};
    var slide;
    var targetID;
    var loadstatus;
    var imageattr;
    var featureimg;
    var artwork;
    var pattern;
    var darken;
    var lighter;

// ================================================================================
// END :: globals
// ================================================================================



// ================================================================================
// START :: billboard.slides                                       EXPORT
// ================================================================================

export var slides = {

    // register script + define globals
    init: function ( render ) {

        // check in
        console.log(

            '%c[ %cslides %c] %cscript%c.%cinitialized',
            log.brack, log.activ, log.brack, log.init, log.brack, log.brite

        );

        // class toggles
        views = [

            //

        ];

        // billboard
        billboard = site.ui.slides;

        // main
        slides.render( billboard );

    },

    // render slides
    render: function( billboard ) {

        // timer function
        var timer;

        // initialize
        billboard.on( 'init', function( e ) {

            slide = $('#billboard-slides .slick-slide.slick-active .ui-slide-article');

            artwork = slide.find( '.slide-billboard' );

            imageattr  = 'background-image';
            featureimg = artwork.data( 'background' );

            artwork.css( imageattr, 'url(' + featureimg + ')' );

            // load inital slide
            setTimeout( function( slide ) {

                slide = $('#billboard-slides .slick-slide.slick-active .ui-slide-article');

                slide.attr( 'data-load', 'true' );

            }, 3000 );

        });

        // config slick
        billboard.slick({

            arrows    : true,
            dots      : false,

            prevArrow : '<button id="prev-arrow-control" class="billboard-control prev-arrow"><svg class="prev-arrow-icon arrow-icon" x="0px" y="0px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><polygon fill="#FFFFFF" points="26.8,30.4 20.3,24 26.8,17.6 27.7,18.4 22.1,24 27.7,29.6" /></svg></button>',
            nextArrow : '<button id="next-arrow-control" class="billboard-control next-arrow"><svg class="next-arrow-icon arrow-icon" x="0px" y="0px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><polygon fill="#FFFFFF" points="22.2,30.4 21.3,29.6 26.9,24 21.3,18.4 22.2,17.6 28.7,24" /></svg></button>',

            autoplay       : false,
            // autoplaySpeed  : 10000,
            fade           : true,

            initialSlide   : 0,
            infinite       : false,
            slidesToShow   : 1,
            slidesToScroll : 1,

            speed     : 720,
            cssEase   : 'cubic-bezier(0.23, 1, 0.32, 1)',

            accessibility  : true,
            waitForAnimate : true

        });

        // load + unload listener
        billboard.on( 'beforeChange', function( e ) {

            slide = $('#billboard-slides .slick-slide.slick-active .ui-slide-article');

            $(this).trigger( 'unload.billboard.slide', [ slide ] );

        }).on( 'afterChange', function( e ) {

            slide = $('#billboard-slides .slick-slide.slick-active .ui-slide-article');

            $(this).trigger( 'load.billboard.slide', [ slide ] );

        });

        // load + unload handler
        billboard.on( 'load.billboard.slide', function( e, slide ) {

            targetID   = slide.attr( 'id' );
            loadstatus = slide.attr( 'data-load' );

            artwork = slide.find( '.slide-billboard' );
            pattern = slide.find( '.slide-pattern' );
            darken  = slide.find( '.slide-color.dark' );
            lighter = slide.find( '.slide-color.lite' );

            imageattr  = 'background-image';
            featureimg = artwork.data( 'background' );

            artwork.css( imageattr, 'url(' + featureimg + ')' );

            contentFX.loadslide = [

                {

                    e : $( pattern ),

                    p : {

                        // translateX : [ 0, '-15%' ],
                        opacity    : [ 1, 0 ]

                    },

                    o : {

                        before        : function() {

                            //

                        },
                        queue 		  : false,
                        duration 	  : 1600,
                        delay 		  : 0,
                        easing 		  : 'easeOutCirc',
                        sequenceQueue : false,
                        complete 	  : function() {

                            //

                        }

                    }

                }, {

                    e : $( darken ),

                    p : {

                        // translateX : [ 0, '-15%' ],
                        opacity    : [ 1, 0 ]

                    },

                    o : {

                        before        : function() {

                            //

                        },
                        queue 		  : false,
                        duration 	  : 1600,
                        delay 		  : 0,
                        easing 		  : 'easeOutCirc',
                        sequenceQueue : false,
                        complete 	  : function() {

                            //

                        }

                    }

                }, {

                    e : $( lighter ),

                    p : {

                        // translateX : [ 0, '-15%' ],
                        opacity    : [ 1, 0 ]

                    },

                    o : {

                        before        : function() {

                            //

                        },
                        queue 		  : false,
                        duration 	  : 1600,
                        delay 		  : 0,
                        easing 		  : 'easeOutCirc',
                        sequenceQueue : false,
                        complete 	  : function() {

                            //

                        }

                    }

                }, {

                    e : $( artwork ),

                    p : {

                        opacity          : [ 1, 0 ]

                    },

                    o : {

                        before        : function() {

                            //

                        },
                        queue 		  : false,
                        duration 	  : 1600,
                        delay 		  : 0,
                        easing 		  : 'linear',
                        sequenceQueue : false,
                        complete 	  : function() {

                            slide.attr( 'data-load', 'true' );

                        }

                    }

                }

            ];

            if ( loadstatus === 'false' ) {

                $.Velocity.RunSequence( contentFX.loadslide );

            } else {

                return;

            }

        }).on( 'unload.billboard.slide', function( e, slide ) {

            var targetID = slide.attr( 'id' );

            contentFX.unloadslide = [

                {

                    e : $( billboard ),

                    p : {

                        translateX : [ 0, '50%' ],
                        opacity    : [ 1, 0 ]

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

                    e : $( views ),

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

                }

            ];

            $.Velocity.RunSequence( contentFX.unloadslide );

        });

        // pause + start billboard
        billboard.on( 'pause.homepage.feature', function( e, menu ) {

            // billboard.slick( 'slickPause' );

        }).on( 'start.homepage.feature', function( e, menu ) {

            // billboard.slick( 'slickPlay' );

        });

    },

    // print to console
    record: function( trigger, scrollcue, offset ) {

        console.log(

            '%cevent%c.%ctype %c[ %c' + trigger + ' %c]' + '\n' +
            '%cscroll%c.%ccue %c[ %c' + scrollcue + ' %c]' + '\n' +
            '%ctop%c.%coffset %c[ %c' + offset.top + ' %c]',

            log.init, log.brack, log.callb, log.brack, log.pink, log.brack,
            log.init, log.brack, log.callb, log.brack, log.brite, log.brack,
            log.init, log.brack, log.callb, log.brack, log.fx, log.brack

        );

    }

};

// ================================================================================
// END :: billboard.slides
// ================================================================================
