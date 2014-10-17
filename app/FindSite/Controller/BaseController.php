<?php
/**
 * Created by PhpStorm.
 * User: Huisan
 * Date: 12/10/14
 * Time: 1:22 PM
 */

namespace FindSite\Controller;


class BaseController extends \SlimController\SlimController{

    protected $app;
    protected $requestBody;
    protected $currentUser;

    function __construct(){
        $this->app =  $app = \Slim\Slim::getInstance();

        parent::__construct($app);

        if(isset($_SESSION['userInfo'])){
            $this->currentUser = $_SESSION['userInfo'];
        }else{
            $this->currentUser = null;
        }
    }

    protected function getRequestBody(){
        $this->requestBody = $this->app->request->getBody();

        if(!is_array($this->requestBody)){
            throw new \Exception('Not a valid JSON request. Please check your data.', 10005);
        }
    }

    protected function json($result) {
        echo \FindSite\Infrastructure\Helper\ResponseHelper::json($this->app, $result);
    }

    protected function success(){
        echo \FindSite\Infrastructure\Helper\ResponseHelper::json($this->app, $message= 'success');
    }
} 