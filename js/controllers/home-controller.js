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

        var homeHeight = $(window).height() - $('header').height();
        $('#home-main').height(homeHeight);
        $('.home').css('visibility', 'visible');
    }

    exports.init = init;
});