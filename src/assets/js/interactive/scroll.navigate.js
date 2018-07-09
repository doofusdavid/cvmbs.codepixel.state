
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
    var layout;
    var footer;
    var offset;
    var slides;
    var article;
    var next;
    var prev;
    var curr;

// ================================================================================
// END :: globals
// ================================================================================



// ================================================================================
// START :: scroll.navigate                                         EXPORT
// ================================================================================

export var scrollUI = {

    // register script + define globals
    init: function ( render ) {

        // check in
        console.log(

            '%c[ %cscrollUI %c] %cscript%c.%cinitialized',
            log.brack, log.activ, log.brack, log.init, log.brack, log.brite

        );

        views = [

            site.ui.content,
            site.ui.billboard

        ];

        layout = site.ui.layout;

        article = $('.ui-article');

        scrollUI.main( views, article );

    },

    // event listener + handler routing
    main: function( layout, article ) {

        var scrollcue;
        var trigger;
        var direction;

        var viewport  = $(window);
        var billboard = site.ui.billboard;
        var content   = site.ui.content;
        var control   = $('#billboard-tagline');

        control.on( 'click', function( e ) {

            console.log( 'ball so hard' );

            scrollUI.curtain( billboard, 'raise', views );

        });

        viewport.on( 'keydown scroll wheel', function( e, views, stopwheel ) {

            slides = site.ui.slides;

            // event trigger
            trigger = e.which;

            // directional cue
            scrollcue = e.originalEvent.wheelDelta / 120;

            // console.log( scrollcue );

            // eval scroll threshold
            if ( e.originalEvent.deltaY > 20 ) {

                // scrollUI.curtain( billboard, 'raise', views );
                console.log( 'positive' );

            } else if ( e.originalEvent.deltaY < 0 ) {

                // scrollUI.curtain( billboard, 'lower', views );
                console.log( 'negative' );

            } else {

                console.log( 'neutral' );

            }

            // measure
            offset = site.ui.content.offset();

            // control billboard slides
            if ( billboard.is( '.visible' ) ) {

                if ( trigger == 39 ) {

                    slides.slick( 'slickNext' );

                } else if ( trigger == 37 ) {

                    slides.slick( 'slickPrev' );

                }

            } else {

                return;

            }

            // debug
            // scrollUI.record( e, trigger, scrollcue, offset );

        });

        billboard.on( 'keydown', function( e, views ) {

            scrollcue = e.which;

            if ( scrollcue == 40 && billboard.is( '.visible' ) ) {

                scrollUI.curtain( billboard, 'raise', views );

            } else if ( scrollcue == 38 && billboard.is( '.hidden' ) ) {

                scrollUI.curtain( billboard, 'lower', views );

            } else {

                return;

            }

        });

        content.on( 'keydown', function( e, views ) {

            scrollcue = e.which;

            article = $('.ui-article:first');

            // console.log( article );

            if ( scrollcue == 38 && billboard.is( '.hidden' ) && article.is( '.active' ) ) {

                scrollUI.curtain( billboard, 'lower', views );

            } else if ( scrollcue == 40 && billboard.is( '.visible' ) ) {

                scrollUI.curtain( billboard, 'raise', views );

            } else {

                return;

            }

        });

        article.on( 'keydown', function( e, article ) {

            scrollcue = e.which;

            article = $(this);

            prev = article.prev( '.ui-article' ).attr( 'id' );
            next = article.next( '.ui-article' ).attr( 'id' );

            var scrollprev = $( '#' + prev );
            var scrollnext = $( '#' + next );

            footer = site.ui.footer;

            offset = site.ui.footer.offset();

            console.log(

                // '%cprevious%c.%carticle %c[ %c' + prev + ' %c]' + '\n' +
                // '%ccurrent%c.%carticle %c[ %c' + article.attr( 'id' ) + ' %c]' + '\n' +
                // '%cnext%c.%carticle %c[ %c' + next + ' %c]',

                // log.displ, log.brack, log.init, log.brack, log.fx, log.brack,
                // log.brite, log.brack, log.init, log.brack, log.fx, log.brack,
                // log.activ, log.brack, log.init, log.brack, log.fx, log.brack

            );

            var scrollend = $('.ui-article:last');

            if ( scrollcue == 40 && billboard.is( '.hidden' ) ) {

                e.preventDefault();

                if ( next == null && footer.is( '.hidden' ) ) {

                    console.log( offset.top );

                    scrollend.velocity( 'scroll', {

                        begin     : function() {

                            // article.toggleClass( 'active' );

                        },
                        container : site.ui.layout,
                        offset    : offset.top,
                        duration  : 480,
                        delay     : 60,
                        easing    : [0.023, 1, 0.32, 1],
                        complete  : function() {

                            footer.toggleClass( 'visible hidden' );

                        }

                    });

                }

                scrollUI.page( scrollnext, 'next', article );

            } else if ( scrollcue == 38 && billboard.is( '.hidden' ) ) {

                e.preventDefault();

                if ( next == null && footer.is( '.visible' ) ) {

                    scrollend.velocity( 'scroll', {

                        begin     : function() {

                            //

                        },
                        container : site.ui.layout,
                        duration  : 480,
                        delay     : 60,
                        easing    : [0.023, 1, 0.32, 1],
                        complete  : function() {

                            footer.toggleClass( 'visible hidden' );

                        }

                    });

                } else {

                    scrollUI.page( scrollprev, 'prev', article );

                }

            }

        });

    },

    // print to console
    record: function( e, trigger, scrollcue, offset ) {

        if ( e.type === 'keydown' ) {

            var direction;
            var keydir = e.which;

            if ( keydir == 37 ) {

                direction = ' + left';

            } else if ( keydir == 38 ) {

                direction = ' + up';

            } else if ( keydir == 39 ) {

                direction = ' + right';

            } else if ( keydir == 40 ) {

                direction = ' + down';

            } else {

                direction = ' invalid';

            }

            trigger = 'key' + direction;

        } else {

            trigger = e.type;

        }

        console.log(

            '%cevent%c.%ctype %c[ %c' + trigger + ' %c]' + '\n' +
            '%cscroll%c.%ccue %c[ %c' + scrollcue + ' %c]' + '\n' +
            '%ctop%c.%coffset %c[ %c' + offset.top + ' %c]',

            log.init, log.brack, log.callb, log.brack, log.pink, log.brack,
            log.init, log.brack, log.callb, log.brack, log.brite, log.brack,
            log.init, log.brack, log.callb, log.brack, log.fx, log.brack

        );

    },

    // curtain controller
    curtain: function( target, direction ) {

        var loadcheck = site.ui.sections.academics.attr( 'data-load' );

        var academics = site.ui.sections.academics;

        layout.toggleClass( 'scrollable' );

        site.ui.header.toggleClass( 'ui-contrast' );

        if ( direction === 'raise' ) {

            if ( loadcheck === 'pending' ) {

                site.ui.content.trigger( 'load.article.content', [ academics ] );

                var billboard  = academics.find( '.section-image' );
                var imageattr  = 'background-image';
                var background = billboard.data( 'background' );

                billboard.velocity( 'fadeIn', {

                    begin    : function() {

                        billboard.css( imageattr, 'url(' + background + ')' );

                    },
                    delay    : 360,
                    duration : 1200,
                    queue    : false,
                    easing   : 'linear',
                    complete : function() {

                        billboard.attr( 'data-load', 'loaded' );

                    }

                });

            }

            academics.attr( 'data-load', 'loaded' );

            target.velocity({

                translateY : [ '-100%', 0 ]

            }, {

                begin    : function() {

                    //

                },
                duration : 480,
                delay 	 : 60,
                easing   : [0.23, 1, 0.32, 1],
                complete : function() {

                    $.each( views, function( index, view ) {

                        view.toggleClass( 'visible hidden' );

                    });

                    site.ui.content.find( '#academics' ).focus().addClass( 'active' );

                    console.log( loadcheck );

                }

            });

        } else if ( direction === 'lower' ) {

            target.velocity({

                translateY : [ 0, '-100%' ]

            }, {

                begin    : function() {

                    // the emptiness

                },
                duration : 480,
                delay 	 : 60,
                easing   : [0.23, 1, 0.32, 1],
                complete : function() {

                    $.each( views, function( index, view ) {

                        view.toggleClass( 'visible hidden' );

                    });

                    site.ui.slides.focus();

                }

            });

        }

    },

    // scroll controller
    page: function( target, direction, article ) {

        if ( direction === 'next' ) {

            target.velocity( 'scroll', {

                begin     : function() {

                    article.toggleClass( 'active' );

                },
                container : site.ui.layout,
                duration  : 640,
                delay     : 60,
                easing    : [0.023, 1, 0.32, 1],
                complete  : function() {

                    $(this).focus().toggleClass( 'active' );

                    site.ui.content.trigger( 'activate.ui.article', [ target ] );

                }

            });

        } else if ( direction === 'prev' ) {

            target.velocity( 'scroll', {

                begin     : function() {

                    article.toggleClass( 'active' );

                },
                container : site.ui.layout,
                duration  : 640,
                delay     : 60,
                easing    : [0.023, 1, 0.32, 1],
                complete  : function() {

                    $(this).focus().toggleClass( 'active' );

                }

            });

        }

    }

};

// ================================================================================
// END :: scroll.navigate
// ================================================================================
