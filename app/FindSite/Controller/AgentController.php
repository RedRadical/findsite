<?php
/**
 * Created by PhpStorm.
 * User: Huisan
 * Date: 12/10/14
 * Time: 1:40 PM
 */

namespace FindSite\Controller;


class AgentController extends BaseController{

    function __construct(){
        parent::__construct();
    }

    public function indexAction(){
        $this->render('Agent/index');
    }
} 