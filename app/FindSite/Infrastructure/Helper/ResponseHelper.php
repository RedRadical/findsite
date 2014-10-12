<?php
namespace FindSite\Infrastructure\Helper;


/**
 * Format response as an JSON object
 *
 * @package PPost\Infrastructure\Helper
 */
class ResponseHelper {

    static function json($app, $result = '', $status_code = 200, $error_code = 0, $message = '', $debug = '') {
        // Http response code
        $app->status($status_code);

        // setting response content type to json
        $app->contentType('application/json');

        $response = array();
        $response['errorCode'] = $error_code;
        $response['message'] = $message;

        // Remove debug message on live server
        if(ENVIRONMENT === 'live'){
            $debug = '';
        }

        $response['debug'] = $debug;
        $response['result'] = $result;

        return json_encode($response);
    }
} 