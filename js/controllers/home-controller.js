"use strict";

define(['require',
    'exports',
    'async!http://maps.googleapis.com/maps/api/js?sensor=true&libraries=places,weather',
    'jquery-slick'], function (require,
                                  exports,
                                  googleMap,
                                  jquerySlick) {

    function init() {
        initCarousel();
        initGoogleMap();
    }

    function initGoogleMap(){
        var mapOptions = {
            disableDoubleClickZoom: true,
            disableDefaultUI: true,
            center: new google.maps.LatLng(-33.881902, 151.151772),
            zoom: 10
        };
        new google.maps.Map(document.getElementById("home-map-canvas"), mapOptions);
    }

    function initCarousel(){
        $('#home-carousel').slick({
            centerMode: true,
            centerPadding: '30%',
            slidesToShow: 1
        });
    }
    exports.init = init;
});