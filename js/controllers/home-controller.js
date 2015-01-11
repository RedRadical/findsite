"use strict";

define(['require',
    'exports'], function (require,exports) {

    var homeSearchViewModel;

    function init() {
        homeSearchViewModel = {
            optionsIsShown: ko.observable(true)
        };

        homeSearchViewModel.toggleOptions = function(){
            homeSearchViewModel.optionsIsShown(!homeSearchViewModel.optionsIsShown());
        }

        ko.applyBindings(homeSearchViewModel);

        resizeHome();
        $(window).resize(function(){
            resizeHome();
        })
    }

    function resizeHome(){
        var homeHeight = $(window).height() - $('header').height() - 250;
        $('#home-main').height(homeHeight);
        $('.home').css('visibility', 'visible');
    }

    exports.init = init;
});