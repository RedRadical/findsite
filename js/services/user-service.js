"use strict";

define(['require',
    'exports'], function (require,exports) {

    function register(user, callback) {
        $.ajax({
            url: '/user/register',
            data: ko.toJSON(user),
            type: 'POST',
            contentType: 'application/json',
            success: function (data) {
                callback(data);
            }
        });
    }
    exports.register = register;
});
