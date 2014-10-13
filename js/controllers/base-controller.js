"use strict";

define(['require',
    'exports',
    'jquery-fancybox'], function (require,exports, fancyBox) {

    function init() {
        activeMenu();
        initFancyBox();
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

    function initFancyBox(){
        $('*[data-click="login"]').click(function(){
            loadPopup('/user/login');
        });

        $('*[data-click="register"]').click(function(){
            loadPopup('/user/register');
        });

        $('*[data-click="contact"]').click(function(){
            loadPopup('/agent/contact');
        });
    }

    function loadPopup(url){
        $.fancybox({
            href: url,
            type: 'ajax',
            afterClose: function () {

            },
            afterLoad:function() {

            },
            beforeShow: function () {

            }
        });
    }

    exports.init = init;
});