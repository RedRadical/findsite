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
        $this->render('User/login');
    }

    function registerAction(){
        if($this->app->request->isGet()){
            $this->render('User/register');
        }else{
            $user = array(
                'first_name' => 'Sam',
                'last_name' => 'Wang',
                'email' => 'sam.wang@nways.com.au',
                'password' => '12345'
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