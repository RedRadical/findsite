"use strict";

define(['require',
    'exports',
    'user-service',
    'knockout-validation'], function (require, exports, userService, koValidation) {

    var userViewModel,$loginForm;

    function init(){
        $loginForm = $('#form-login');

        userViewModel = {
            email: ko.observable('').extend({ required: true, email: true, maxLength: 50 }),
            password: ko.observable('').extend({ required: true, minLength:6, maxLength: 50 })
        }
        userViewModel.errors = ko.validation.group(userViewModel);

        userViewModel.login = login;

        ko.applyBindings(userViewModel, $loginForm[0]);
    }
    function clean() {
        ko.cleanNode($loginForm[0]);
    };

    function login(){
        if (userViewModel.errors().length == 0) {
            userService.login(userViewModel, function(data){
                if (data.error) {
                    alert(data.message);
                } else {
                    window.location.href = '/user';
                }
            });
        }else {
            userViewModel.errors.showAllMessages();
        }
    }

    exports.init = init;
    exports.clean = clean;
});
