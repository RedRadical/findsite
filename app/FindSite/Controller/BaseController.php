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
} 