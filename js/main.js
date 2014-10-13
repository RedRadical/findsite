"use strict";

define(['require',
    'exports',
    'base-controller',
    'home-controller',
    'site-controller',
    'site-list-controller'], function (
    require,
    exports,
    baseController,
    homeController,
    siteController,
    siteListController) {

    function init() {
        /*
         * Initialize some global setting
         */
        var $loading = $('#loading-overlay');

        $(document).ajaxError(function (event, jqxhr, settings, exception) {
            alertify.alert('Unexpected error. Please try again later.');
        }).ajaxStart(function() {
                $loading.show();
            }).ajaxStop(function() {
                $loading.hide();
            });

        //Always run base controller
        baseController.init();

        var controllerName = $('#main').data('controller');
        switch (controllerName){
            case 'home':
                homeController.init();
                break;
            case 'site':
                siteController.init();
                break;
            case 'site-list':
                siteListController.init();
                break;
        }
    }

    exports.init = init;
});