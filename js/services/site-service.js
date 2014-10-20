"use strict";

define(['require',
    'exports'], function (require,exports) {

    function addSite(site, callback) {
        $.ajax({
            url: '/site/add',
            data: ko.toJSON(site),
            type: 'POST',
            contentType: 'application/json',
            success: function (data) {
                callback(data);
            }
        });
    }

    exports.addSite = addSite;
});
