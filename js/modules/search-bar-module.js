"use strict";

define(['require',
    'exports'], function (require,exports) {
    var currentMode,
        $switchMap,
        $switchList;

    function init(mode) {
        currentMode = mode;
        $switchMap = $('#switch-map');
        $switchList = $('#switch-list');

        if(currentMode == 'map'){
            $switchMap.addClass('active');
        }else{
            $switchList.addClass('active');
        }

        $switchMap.on('click', function(){
            window.location.href = '/site';
        });

        $switchList.on('click', function(){
            window.location.href = '/site/list';
        });
    }

    exports.init = init;
});