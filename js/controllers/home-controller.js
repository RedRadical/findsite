"use strict";

define(['require',
    'exports',
    'jquery-bx-slider'], function (require,exports,boxSlider) {

    var homeSearchViewModel;

    function init() {
        homeSearchViewModel = {
            optionsIsShown: ko.observable(false)
        };

        homeSearchViewModel.toggleOptions = function(){
            homeSearchViewModel.optionsIsShown(!homeSearchViewModel.optionsIsShown());
        }

        ko.applyBindings(homeSearchViewModel);

        $('#homes-lider').bxSlider({
            pager: false,
            nextText: "&#xe080;",
            prevText: "&#xe079;"
        });
    }

    exports.init = init;
});