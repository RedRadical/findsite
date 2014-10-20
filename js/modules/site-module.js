/**
 * Created by xxfei on 20/10/14.
 */
"use strict";

define(['require',
    'exports',
    'site-service',
    'knockout-validation'], function (require, exports, siteService, koValidation) {

    var siteViewModel,$addSiteForm;

    function init(){
        $addSiteForm = $('#form-addsite');

        siteViewModel = {
            siteType: ko.observable('').extend({ required: true,digit: true }),
            suburb: ko.observable('').extend({ required: true,maxLength: 200 }),
            address: ko.observable('').extend({ required: true,maxLength: 400 }),
            daStatus: ko.observable('').extend({ required: true, digit: true }),
            price: ko.observable('').extend({ required: true, digit: true }),
            description: ko.observable('').extend({ required: true })
        }
        siteViewModel.errors = ko.validation.group(siteViewModel);

        siteViewModel.addSite = addSite;

        ko.applyBindings(siteViewModel, $addSiteForm[0]);
    }

    function clean() {
        ko.cleanNode($addSiteForm[0]);
    };

    function addSite(){
        if (siteViewModel.errors().length == 0) {
            siteService.addSite(siteViewModel, function(data){
                if (data.errorCode > 0) {
                    alert(data.message);
                } else {
                    window.location.href = '/site';
                }
            });
        }else {
            siteViewModel.errors.showAllMessages();
        }
    }

    exports.init = init;
    exports.clean = clean;
});