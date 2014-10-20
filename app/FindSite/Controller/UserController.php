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
            $this->getRequestBody();
            $this->validate(array('email', 'password'));
            $email = $this->requestBody['email'];
            $password = $this->requestBody['password'];

            //TODO validate password
            $user = $this->userService->getUserByEmail($email);
            if($user){
               if($password == $user['password']){
                   return $this->success();
               }else{
                   throw new \Exception("Password is incorrect");
               }
            }else{
                throw new \Exception("User doesn't exist");
            }
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
                'password' => $this->requestBody['password'], //TODO hash password
                'prefer_type'=> $this->requestBody['siteType'],
                'prefer_da_status'=> $this->requestBody['daStatus'],
                'prefer_price_high'=> $this->requestBody['sitePrice'],
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