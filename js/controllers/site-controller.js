"use strict";

define(['require',
    'exports',
    'map-module',
    'search-bar-module',
    'site-module'], function (require,exports,mapModule, searchBar, siteModule) {

    function init() {
        mapModule.init($('#map-canvas'));
        searchBar.init('map');
        siteModule.init();
    }

    exports.init = init;
});