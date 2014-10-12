"use strict";

define(['require',
    'exports'], function (require,
                              exports) {

    function init() {
        activeMenu();
    }

    function activeMenu(){
        var path = window.location.pathname;
        switch(path){
            case '/site':
                $('#nav-find-a-site').addClass('active');
                break;
            case '/site/add':
                $('#nav-list-a-site').addClass('active');
                break;
            case '/user':
                $('#nav-my-site').addClass('active');
                break;
        }
    }

    exports.init = init;
});