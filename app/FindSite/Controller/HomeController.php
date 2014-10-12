<?php
/**
 * Created by PhpStorm.
 * User: Huisan
 * Date: 12/10/14
 * Time: 1:24 PM
 */

namespace FindSite\Controller;


class HomeController extends BaseController{

    function __construct(){
        parent::__construct();
    }

    public function indexAction(){
        $this->render('Home/index');
    }
} 