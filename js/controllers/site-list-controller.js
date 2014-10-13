"use strict";

define(['require',
    'exports',
    'search-bar-module'], function (require,exports,searchBar) {

    function init() {
        searchBar.init('list');
    }

    exports.init = init;
});