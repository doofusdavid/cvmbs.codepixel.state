// filter controls
var filterControl = $('.filter_control');

// event handler
filterControl.on( 'click', function( e ) {

    function getHashFilter() {

        var hash = location.hash;

        // get filter=filterName
        var matches = location.hash.match( /filter=([^&]+)/i );
        var hashFilter = matches && matches[ 1 ];

        return hashFilter && decodeURIComponent( hashFilter );

    }

    $( function() {

        var grid = $('.places-archive__grid-inner').isotope({

            itemSelector: '.places-archive__grid-item'

        });

        // bind filter button click
        var filters = $('.places-archive__filters').on( 'click', 'button', function() {

            // get filter attribute
            var filterAttr = $( this ).attr( 'data-filter' );

            // set filter in hash
            location.hash = 'filter=' + encodeURIComponent( filterAttr );

        });

        var isIsotopeInit = false;

        function onHashchange() {

            var hashFilter = getHashFilter();

            if ( !hashFilter && isIsotopeInit ) {

              return;

            }

            isIsotopeInit = true;

            // filter isotope
            grid.isotope({

                itemSelector : '.places-archive__grid-item',
                filter       : hashFilter

            });

            // set selected class on button
            if ( hashFilter ) {

              filters.find('.is-checked').removeClass('is-checked');
              filters.find('[data-filter="' + hashFilter + '"]').addClass('is-checked');

            }

        }

        // console.log( filterAttr );

        $(window).on( 'hashchange', onHashchange );

        // window->back listener
        window.onload = function( e ) {

            alert( 'back so hard' );

        }

        // trigger event handler to init Isotope
        onHashchange();

    });

});
