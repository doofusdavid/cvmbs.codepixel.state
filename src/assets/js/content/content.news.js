
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

    var news;
    var targetID;
    var contentFX = {};

// ================================================================================
// END :: globals
// ================================================================================



// ================================================================================
// START :: load.news                                              EXPORT
// ================================================================================

export var newsUI = {

    // register script + define globals
    init: function ( render ) {

        // check in
        console.log(

            '%c[ %cload.news %c] %cscript%c.%cinitialized',
            log.brack, log.activ, log.brack, log.init, log.brack, log.brite

        );

        // call method
        newsUI.loader();

    },

    // event listener
    loader: function( homepage ) {

        // assign globals
        news = site.ui.sections.news;

        // event listener
        site.ui.content.on( 'load.article.content', function( e, target ) {

            targetID = target.attr( 'id' );

            var toolbar = $('#news-map-toolbar');

            contentFX.loadtime = [

                {

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
    					delay 		  : 640,
    					easing 		  : 'easeOutCirc',
    					sequenceQueue : false,
    					complete 	  : function() {

                            //

    					}

    				}

                }

            ];

            if ( targetID === 'news' ) {

                // sequence
                $.Velocity.RunSequence( contentFX.loadtime );

            } else {

                return;

            }

        });

    }

};

// ================================================================================
// END :: load.news
// ================================================================================



// ================================================================================
// START :: run.news                                               EXPORT
// ================================================================================

export var newsFX = {

    // register script + define globals
    init: function( render ) {

        // load news method
        newsFX.collect();

    },

    // event listener(s)
    interact: function( articles ) {

        // article class
        var article = $('#source-feed .article');

        // global link
        var url;

        // event handler
        article.on( 'click', function( e, url ) {

            url = $(this).attr( 'data-url' );

            console.log( url );

        });

    },

    // load SOURCE data
    collect: function( homepage ) {

        $.ajax({

            dataType: 'json',

            // return items -> default = [10]
            url: 'https://source.colostate.edu/wp-json/wp/v2/posts/?filter[tag]=college-of-veterinary-medicine-and-biomedical-sciences&per_page=9',

            type: 'GET',

            error : function ( jqXHR, exception ) {

                console.log( jqXHR.responseText );

                var emptyNews = '';
                var newsError = '';
                var signal = null;

                if ( jqXHR.status === 0 ) {

                    newsError = 'There was a problem loading news content.';

                } else if ( jqXHR.status === 404 ) {

                    newsError = 'Resource not found [404]';

                } else if ( jqXHR.status === 500 ) {

                    newsError = 'Internal Server Error [505]';

                } else if ( exception === 'parserror' ) {

                    newsError = 'JSON parse failed';

                } else if ( exception === 'timeout' ) {

                    newsError = 'Request timed out.';

                } else if ( exception === 'abort' ) {

                    newsError = 'Search connection aborted.';

                } else {

                    newsError = 'Configuration error.';

                }

                emptyNews += '<span class="message">' + newsError + '<br /><em>please try again later</em></span>';

                $( newsFeedReturnError ).fadeIn( 2400, 'easeInOutExpo', function() {

                    signal = setTimeout( function() {

                        $( newsFeedErrorMessage ).html( emptyNews );

                    }, 2400 );

                });

            },

            success: function( response ) {

                // confirm response
                console.log( '%csuccessfully connected to SOURCE', log.callb );

                // article(s) HTML
                var storyContent = '';
                var storySidebar = '';
                var storyFeature = '';

                $.each( response, function( index ) {

                    // remove HTTPS from article link
                    var articleLink = response[ index ].link;
                    var articleHTTP = articleLink.replace(/^https:\/\//i, 'http://');

                    // article link
                    storyContent += "<article class='article card' data-url='" + articleHTTP + "' target='_blank' tabindex='-1'>";

                        // header w/ image and title + meta
                        storyContent += "<header class='header'>";

                            // image
                            if ( response[ index ].featured_image ) {

                                storyContent += '<span class="image" style="background-image:url(' + response[ index ].featured_image.source_url + ');"></span>';

                            } else {

                                storyContent += "<span class='image' style='background-image:url(assets/img/billboards/billboard_00_HHS.jpg);'></span>";

                            }

                            // meta
                            storyContent += "<span class='meta'>";

                                // date
                                storyContent += "<span class='tags'>";

                                    $.each( response[ index ].categories,function( catindex, value ){

                                        // storyContent += "<span class='post-category category-" + response[ index ].categories[0] + ' ' + newsFX.categorySlug( value ) + "'>" + newsFX.categoryID( value ) + "</span>";

                                    });

                                    var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
                                    var date = new Date( response[ index ].date );
                                    // var formatDate = ( monthNames[ date.getMonth() ] ) + ' ' + date.getDate() + ', ' +  date.getFullYear();
                                    var formatDate = ( monthNames[ date.getMonth() ] ) + ' ' + date.getDate();

                                // tags
                                storyContent += "</span>";

                                // date
                                storyContent += "<span class='date'>" + formatDate + "</span>";

                            storyContent += "</span>";

                        storyContent += "</header>";

                        // article content
                        storyContent += "<section class='content'>";

                            // title
                            storyContent += '<h2 class="title">' + response[ index ].title.rendered + "</h2>";

                            // content
                            storyContent += '<span class="text">' + response[ index ].excerpt.rendered + '</span>';

                        storyContent += "</section>";

                    storyContent += "</article>";

                    // article sidebar
                    storySidebar += "<article class='article sidebar' data-url='" + articleHTTP + "'>";

                        // title
                        storySidebar += '<h4 class="title">' + response[ index ].title.rendered + "</h4>";

                    storySidebar += "</article>";

                });

                // feature article
                storyFeature += '<article id="feature-article" class="feature-article">';

                    // image
                    storyFeature += '<section class="image" style="background-image:url(' + response[ 0 ].featured_image.source_url + ');"></section>';

                    // content
                    storyFeature += '<section class="content">';

                        // title
                        storyFeature += "<span class='title'>" + response[ 0 ].title.rendered + "</span>";

                        // text
                        storyFeature += '<span class="text">' + response[ 0 ].excerpt.rendered + '</span>';

                    // content
                    storyFeature += "</section>";

                // feature article
                storyFeature += "</article>";

                // insert HTML
                $('#source-feed').append( storyContent );
                $('#source-sidebar').append( storySidebar );
                $('#source-feature').append( storyFeature );

                // run news method
                newsFX.interact();

            }

        });

    },

    // load SOURCE categories
    categoryID: function( category ) {

        var catName;

        $.ajax({

            dataType: 'json',

            async: false,

            url: 'https://source.colostate.edu/wp-json/wp/v2/categories/' + category,

            type: 'GET',

            success: function( response ) {

                catName = response.name;

            }

        });

        return catName;

    },

    // load SOURCE categories
    categorySlug: function( slug ) {

        var slug;

        $.ajax({

            dataType: 'json',

            async: false,

            url: 'https://source.colostate.edu/wp-json/wp/v2/categories/' + slug,

            type: 'GET',

            success: function( response ) {

                slug = response.slug;

            }

        });

        return slug;

    }

};

// ================================================================================
// END :: run.news
// ================================================================================
