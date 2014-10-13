<?php
/**
 * Created by PhpStorm.
 * User: Huisan
 * Date: 12/10/14
 * Time: 5:28 PM
 */

namespace FindSite\Controller;


class UserController extends BaseController{

    function __construct(){
        parent::__construct();
    }

    function indexAction(){
        $this->render('User/index');
    }

    function loginAction(){
        $this->render('User/login');
    }

    function registerAction(){
        $this->render('User/register');
    }
} 