"use strict";

define(['require',
    'exports',
    'base-controller'], function (
    require,
    exports,
    baseController) {

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
                require(['home-controller'], function (homeController) {
                    homeController.init();
                });
                break;
            case 'site':
                require(['site-controller'], function (siteController) {
                    siteController.init();
                });
                break;
            case 'site-list':
                require(['site-list-controller'], function (siteListController) {
                    siteListController.init();
                });
                break;
        }
    }

    exports.init = init;
});