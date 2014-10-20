"use strict";

define(['require',
    'exports',
    'map-module',
    'search-bar-module'], function (require,exports,mapModule, searchBar) {

    function init() {
        mapModule.init($('#map-canvas'));
        searchBar.init('map');
    }

    exports.init = init;
});