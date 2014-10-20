 "use strict";

define(['require',
    'exports',
    'user-service',
    'knockout-validation'], function (require, exports, userService, koValidation) {

    var userViewModel,$registerForm;

    function init(){
        $registerForm = $('#form-register');


        userViewModel = {
            firstName: ko.observable('').extend({ required: true,maxLength: 50 }),
            lastName: ko.observable('').extend({ required: true,maxLength: 50 }),
            email: ko.observable('').extend({ required: true, email: true, maxLength: 50 }),
            password: ko.observable('').extend({ required: true, minLength:6, maxLength: 50 }),
            siteType:ko.observable(''),
            daStatus:ko.observable(''),
            sitePrice:ko.observable('')
        }
        userViewModel.errors = ko.validation.group(userViewModel);

        userViewModel.register = register;

        ko.applyBindings(userViewModel, $registerForm[0]);
    }

    function clean() {
        ko.cleanNode($registerForm[0]);
    };

    function register(){
        if (userViewModel.errors().length == 0) {
            userService.register(userViewModel, function(data){
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