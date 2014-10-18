<?php
/**
 * Created by PhpStorm.
 * User: Huisan
 * Date: 12/10/14
 * Time: 5:28 PM
 */

namespace FindSite\Controller;


class UserController extends BaseController{

    private $userService;

    function __construct(){
        parent::__construct();

        $this->userService = new \FindSite\Service\UserService();
    }

    function indexAction(){
        $this->render('User/index');
    }

    function loginAction(){
        if($this->app->request->isGet()){
            $this->render('User/login');
        }else{
            $this->requestBody();
            $this->validate(array('email', 'password'));

            //TODO validate password
        }
    }

    function registerAction(){
        if($this->app->request->isGet()){
            $this->render('User/register');
        }else{
            $this->getRequestBody();
            $this->validate(array('firstName','lastName', 'email', 'password'));

            $user = array(
                'first_name' => $this->requestBody['firstName'],
                'last_name' => $this->requestBody['lastName'],
                'email' => $this->requestBody['email'],
                'password' => $this->requestBody['password'] //TODO hash password
            );

            $result = $this->userService->create($user);

            if($result){
                return $this->success();
            }else{
                throw new \Exception('User registration failed');
            }
        }
    }
} 