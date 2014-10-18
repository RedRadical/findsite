"use strict";

var paths = {
    'alertify': 'vendor/alertify/alertify.min',
    'async': 'vendor/requirejs-plugins/async',
    'jquery': 'vendor/jquery-1.10.2.min',
    'knockout': 'vendor/knockout-3.1.0',
    'knockout-validation': 'vendor/knockout.validation.min',
    'knockout-mapping': 'vendor/knockout.mapping',
    'google-map-info-box': 'vendor/google-map-info-box',
    'bootstrap':'vendor/bootstrap.min',
    'jquery-slick':'vendor/slick.min',
    'jquery-bx-slider':'vendor/jquery.bxslider.min',
    'jquery-fancybox':'vendor/jquery.fancybox',
    'google-map-marker-clusterer':'vendor/markerclusterer',
    'google-map-infobox': 'vendor/google-map-info-box',

    /* Custom JS */
    'main': 'main',

    /* Controllers */
    'base-controller' : 'controllers/base-controller',
    'home-controller': 'controllers/home-controller',
    'site-controller': 'controllers/site-controller',
    'site-list-controller' : 'controllers/site-list-controller',

    /* Services */
    'site-service': 'services/site-service',
    'user-service': 'services/user-service',
    /* Modules */
    'map-module': 'modules/map-module',
    'search-bar-module' : 'modules/search-bar-module',
    'login-module': 'modules/login-module',
    'register-module':'modules/register-module'
};

require.config({
    baseUrl: '/js',
    waitSeconds: 60,
    paths: paths,
    shim: {
        'bootstrap': {
            deps: ['jquery']
        },
        'knockout-mapping':{
            deps: ["knockout"]
        },
        "knockout-validation": {
            deps: ["knockout"]
        },
        "jquery-slick":{
            deps: ['jquery']
        },
        "jquery-bx-slider":{
            deps: ['jquery']
        },
        "jquery-fancybox":{
            deps: ['jquery']
        }
    },
    // Prevent cache for dev.
    urlArgs: "cache=" + (new Date()).getTime()
});

// Start the app:
require(['main',
	'bootstrap',
    'knockout',
    'knockout-mapping',
    'jquery',
    'alertify'
], function (main, bootstrap, knockout, komapping) {
    window.ko = knockout;
    window.ko.mapping = komapping;
    window.alertify = Alertify.dialog;

    window.ko.bindingHandlers.stopBinding = {
        init: function () {
            return { controlsDescendantBindings: true };
        }
    };
    window.ko.virtualElements.allowedBindings.stopBinding = true;


    main.init();
});