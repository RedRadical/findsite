"use strict";

define(['require',
    'exports',
    'site-module'], function (require,exports,siteModule) {

    function init() {
        siteModule.init();
    }

    exports.init = init;
});