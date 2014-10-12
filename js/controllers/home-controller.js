"use strict";

define(['require',
    'exports'], function (require,exports) {

    var homeSearchViewModel;

    function init() {
        homeSearchViewModel = {
            optionsIsShown: ko.observable(false)
        };

        homeSearchViewModel.toggleOptions = function(){
            homeSearchViewModel.optionsIsShown(!homeSearchViewModel.optionsIsShown());
        }

        ko.applyBindings(homeSearchViewModel);
    }

    exports.init = init;
});