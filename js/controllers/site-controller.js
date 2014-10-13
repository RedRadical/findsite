"use strict";

define(['require',
    'exports',
    'async!http://maps.googleapis.com/maps/api/js?sensor=true&libraries=places,weather',
    'search-bar-module'], function (require,exports,googleMap,searchBar) {

    var $mapCanvas;

    function init() {
        $mapCanvas = $('#map-canvas');

        resize();
        $(window).on('resize', function(){
            resize();
        });

        initMap();
        searchBar.init('map');
    }

    function resize(){
        var mapHeight = $(window).height() - $('header').height() - $('footer').height() - 50;
        $mapCanvas.height(mapHeight);
    }

    function initMap(){
        var mapOptions = {
            disableDoubleClickZoom: true,
            disableDefaultUI: true,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
                position: google.maps.ControlPosition.RIGHT_CENTER
            },
            center: new google.maps.LatLng(-33.813470, 150.889474),
            zoom: 11
        };
        new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    }

    exports.init = init;
});