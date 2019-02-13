
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

    var academics;
    var targetID;
    var headline;
    var contentFX = {};

// ================================================================================
// END :: globals
// ================================================================================



// ================================================================================
// START :: load.academics                                        EXPORT
// ================================================================================

export var academicsUI = {

    // register script + define globals
    init: function ( render ) {

        // check in
        console.log(

            '%c[ %cload.academics %c] %cscript%c.%cinitialized',
            log.brack, log.activ, log.brack, log.init, log.brack, log.brite

        );

        // call method
        academicsUI.loader();

    },

    // event listener
    loader: function( homepage ) {

        // assign globals
        academics = site.ui.sections.academics;

        // event listener
        site.ui.content.on( 'load.article.content', function( e, target ) {

            targetID = target.attr( 'id' );

            // console.log( 'ball so hard' );

        });

    }

};

// ================================================================================
// END :: load.academics
// ================================================================================



// ================================================================================
// START :: run.academics                                        EXPORT
// ================================================================================

export var academicsFX = {

    // register script + define globals
    init: function ( render ) {

        // check in
        console.log(

            '%c[ %cacademicsFX %c] %cscript%c.%cinitialized',
            log.brack, log.activ, log.brack, log.init, log.brack, log.brite

        );

        // call method
        academicsFX.interact();

    },

    // event listener
    launch: function( render ) {

        // the emptiness

    },

    // event listener
    interact: function( homepage ) {

        // assign globaals
        var targetID;
        var viewport;

        // academics global
        academics = site.ui.sections.academics;

        // sequence storage object
        var runtimeFX = {

            expand   : {},
            collapse : {}

        };

        // contact form button
        var contactFX = $('#degree-programs-form-button');
        var contactUI = $('#degree-programs-form .select-list');

        // degrees control object
        var programsFX = {

            expand   : $('#explore-programs-button'),
            collapse : $('#collapse-programs')

        };
        // programs content object
        var programsUI = {

            element : $('#programs-static-panel'),
            dynamic : $('#programs-dynamic-panel'),
            content : $('#programs-content'),
            views   : [

                programsFX.collapse,
                $('#academics .section-image')

            ]

        };

        // degrees control object
        var degreesFX = {

            expand   : $('#explore-degrees-button'),
            collapse : $('#collapse-degrees')

        };
        // degrees content object
        var degreesUI = {

            element : $('#degree-programs'),
            content : $('#degree-programs .degree-programs-content-wrap'),
            views   : [

                degreesFX.collapse

            ]

        };

        // careers control object
        var careersFX = {

            expand   : $('#explore-careers-button'),
            collapse : $('#collapse-careers')

        };
        // careers content
        var careersUI = {

            element : $('#career-interests'),
            content : $('#career-interests .degree-programs-content-wrap'),
            views   : [

                careersFX.collapse

            ]

        };

        // expand degrees listener
        programsFX.expand.on( 'click', function( e, viewport, headline ) {

            // define expand sequence
            runtimeFX.expand.programs = [

                {

                    e : $( programsUI.content ),

    				p : {

                        translateY : [ '100%', 0 ],
                        opacity    : [ 0, 1 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : true,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( programsUI.element ),

    				p : {

                        width      : [ '100%', '50%' ]

    				},

    				o : {

                        begin         : function() {

                            // toggle class
                            $(this).toggleClass( 'collapsed expanded' );

                            // toggle class
                            $(programsUI.views).toggleClass( 'collapsed expanded' );

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : true,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( programsUI.dynamic ),

    				p : {

                        translateX : [ '100%', 0 ],
                        opacity    : [ 0, 1 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }

            ];

            // test for UI state
            if ( programsUI.element.is( '.collapsed' ) ) {

                // expand sequence
                $.Velocity.RunSequence( runtimeFX.expand.programs );

            }

        });

        // expand degrees listener
        degreesFX.expand.on( 'click', function( e, viewport, headline ) {

            // define expand sequence
            runtimeFX.expand.degrees = [

                {

                    e : $( degreesUI.element ),

    				p : {

                        height     : [ '100%', '50%' ]

    				},

    				o : {

                        begin         : function() {

                            // toggle class
                            $(this).toggleClass( 'collapsed expanded' );

                            // toggle sibling class
                            careersUI.element.toggleClass( 'displaced' );

                            // toggle class
                            $(degreesUI.views).toggleClass( 'collapsed expanded' );

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( careersUI.element ),

    				p : {

                        translateY : [ '100%', 0 ],
                        opacity    : [ 0, 1 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( programsUI.dynamic ),

    				p : {

                        width      : [ '100%', '50%' ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : true,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( programsUI.element ),

    				p : {

                        translateX : [ '-100%', 0 ],
                        opacity    : [ 0, 1 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }

            ];

            // test for UI state
            if ( degreesUI.element.is( '.collapsed' ) ) {

                // expand sequence
                $.Velocity.RunSequence( runtimeFX.expand.degrees );

            }

        });

        // expand careers listener
        careersFX.expand.on( 'click', function( e, headline, viewport ) {

            // define expand sequence
            runtimeFX.expand.careers = [

                {

                    e : $( careersUI.element ),

    				p : {

                        height     : [ '100%', '50%' ]

    				},

    				o : {

                        begin         : function() {

                            // toggle element class
                            $(this).toggleClass( 'collapsed expanded' );

                            // toggle sibling class
                            degreesUI.element.toggleClass( 'displaced' );

                            // toggle class
                            $(careersUI.views).toggleClass( 'collapsed expanded' );

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( degreesUI.element ),

    				p : {

                        translateY : [ '-100%', 0 ],
                        opacity    : [ 0, 1 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( programsUI.dynamic ),

    				p : {

                        width      : [ '100%', '50%' ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : true,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( programsUI.element ),

    				p : {

                        translateX : [ '-100%', 0 ],
                        opacity    : [ 0, 1 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }

            ];

            // test for UI state
            if ( careersUI.element.is( '.collapsed' ) ) {

                // expand sequence
                $.Velocity.RunSequence( runtimeFX.expand.careers );

            }

        });

        // collapse programs listener
        programsFX.collapse.on( 'click', function( e, viewport, headline ) {

            // define collapse sequence
            runtimeFX.collapse.programs = [

                {

                    e : $( programsUI.content ),

    				p : {

                        translateY : [ 0, '100%' ],
                        opacity    : [ 1, 0 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : true,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( programsUI.element ),

    				p : {

                        width      : [ '50%', '100%' ]

    				},

    				o : {

                        begin         : function() {

                            // toggle class
                            $(this).toggleClass( 'collapsed expanded' );

                            // toggle class
                            $(programsUI.views).toggleClass( 'collapsed expanded' );

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : true,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( programsUI.dynamic ),

    				p : {

                        translateX : [ 0, '100%' ],
                        opacity    : [ 1, 0 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }

            ];

            // test for UI state
            if ( programsUI.element.is( '.expanded' ) ) {

                // collapse sequence
                $.Velocity.RunSequence( runtimeFX.collapse.programs );

            }

        });

        // collapse degrees listener
        degreesFX.collapse.on( 'click', function( e, viewport, headline ) {

            // define collapse sequence
            runtimeFX.collapse.degrees = [

                {

                    e : $( degreesUI.element ),

    				p : {

                        height     : [ '50%', '100%' ]

    				},

    				o : {

                        begin         : function() {

                            // toggle class
                            $(this).toggleClass( 'collapsed expanded' );

                            // toggle sibling class
                            careersUI.element.toggleClass( 'displaced' );

                            // toggle class
                            $(degreesUI.views).toggleClass( 'collapsed expanded' );

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( careersUI.element ),

    				p : {

                        translateY : [ 0, '100%' ],
                        opacity    : [ 1, 0 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( programsUI.dynamic ),

    				p : {

                        width      : [ '50%', '100%' ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : true,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( programsUI.element ),

    				p : {

                        translateX : [ 0, '-100%' ],
                        opacity    : [ 1, 0 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }

            ];

            // test for UI state
            if ( degreesUI.element.is( '.expanded' ) ) {

                // collapse sequence
                $.Velocity.RunSequence( runtimeFX.collapse.degrees );

            }

        });

        // collapse careers listener
        careersFX.collapse.on( 'click', function( e, viewport ) {

            // define collapse sequence
            runtimeFX.collapse.careers = [

                {

                    e : $( careersUI.element ),

    				p : {

                        height     : [ '50%', '100%' ]

    				},

    				o : {

                        begin         : function() {

                            // toggle class
                            $(this).toggleClass( 'collapsed expanded' );

                            // toggle sibling class
                            degreesUI.element.toggleClass( 'displaced' );

                            // toggle class
                            $(careersUI.views).toggleClass( 'collapsed expanded' );

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( degreesUI.element ),

    				p : {

                        translateY : [ 0, '-100%' ],
                        opacity    : [ 1, 0 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( programsUI.dynamic ),

    				p : {

                        width      : [ '50%', '100%' ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : true,
    					complete 	  : function() {

                            //

    					}

    				}

                }, {

                    e : $( programsUI.element ),

    				p : {

                        translateX : [ 0, '-100%' ],
                        opacity    : [ 1, 0 ]

    				},

    				o : {

                        begin         : function() {

                            //

                        },
    					queue 		  : false,
    					duration 	  : 480,
    					delay 		  : 0,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }

            ];

            // test for UI state
            if ( careersUI.element.is( '.expanded' ) ) {

                // collapse sequence
                $.Velocity.RunSequence( runtimeFX.collapse.careers );

            }

        });

        // interactive tag filter
        $('#careers-content-UI .tag, #degrees-content-UI .tag').on( 'click', function( e ) {

            $(this).toggleClass( 'selected' );

        });

    },

    // department [ BUILD ]
    department: function( department ) {

        $.ajax({

            dataType: 'json',

            // return items
            // url: 'http://cvmbs.codepixel.state/wp-json/wp/v2/degree-program/?department=32',
            url: 'http://cvmbs.codepixel.state/wp-json/wp/v2/degree-program/?filter[department]=environmental-health-and-radiological-sciences',

            type: 'GET',

            error : function ( jqXHR, exception ) {

                console.log( jqXHR.responseText );

                var emptyPrograms = '';
                var programsError = '';
                var signal = null;

                if ( jqXHR.status === 0 ) {

                    programsError = 'There was a problem loading news content.';

                } else if ( jqXHR.status === 404 ) {

                    programsError = 'Resource not found [404]';

                } else if ( jqXHR.status === 500 ) {

                    programsError = 'Internal Server Error [505]';

                } else if ( exception === 'parserror' ) {

                    programsError = 'JSON parse failed';

                } else if ( exception === 'timeout' ) {

                    programsError = 'Request timed out.';

                } else if ( exception === 'abort' ) {

                    programsError = 'Search connection aborted.';

                } else {

                    programsError = 'Configuration error.';

                }

                emptyPrograms += '<span class="message">' + programsError + '<br /><em>please try again later</em></span>';

                $( newsFeedReturnError ).fadeIn( 2400, 'easeInOutExpo', function() {

                    signal = setTimeout( function() {

                        $( newsFeedErrorMessage ).html( emptyPrograms );

                    }, 2400 );

                });

            },

            success: function( response ) {

                // confirm response
                console.log( '%csuccessfully connected to CVMBS degree programs repository', log.callb );

                // article(s) HTML
                var program = '';

                $.each( response, function( index ) {

                    // remove HTTPS from article link
                    var programLink = response[ index ].link;
                    var programHTTP = programLink.replace(/^https:\/\//i, 'http://');

                    // program link
                    program += "<span class='program card' data-url='" + programHTTP + "' target='_blank' tabindex='-1'>";

                        // content
                        program += '<span class="text">' + response[ index ].title.rendered + '</span>';

                    program += "</span>";

                });

                // test degree type
                var degreetype =

                // insert HTML
                $('#department-degree-programs .program-list').append( program );

            }

        });

    }

};

// ================================================================================
// END :: run.academics
// ================================================================================
