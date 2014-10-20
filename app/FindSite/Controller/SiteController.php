<?php
/**
 * Created by PhpStorm.
 * User: Huisan
 * Date: 12/10/14
 * Time: 5:14 PM
 */

namespace FindSite\Controller;


class SiteController extends BaseController{

    private $siteService;

    function __construct(){
        parent::__construct();
        $this->siteService = new \FindSite\Service\SiteService();
    }

    public function indexAction(){
        $this->render('Site/index');
    }

    public function listAction(){
        $this->render('Site/list');
    }

    public function detailAction(){
        $this->render('Site/detail');
    }

    public function addAction(){
        if($this->app->request->isGet()){
            $this->render('Site/add');
        }else{
            $this->getRequestBody();
            $this->validate(array('siteType','suburb', 'address', 'daStatus','price','description'));

            $site = array(
                'type' => $this->requestBody['siteType'],
                'suburb' => $this->requestBody['suburb'],
                'address' => $this->requestBody['address'],
                'dastatus' => $this->requestBody['daStatus'],
                'price'=> $this->requestBody['price'],
                'description'=> $this->requestBody['description'],
                'user_id' => 1
            );

            $result = $this->siteService->create($site);

            if($result){
                return $this->success();
            }else{
                throw new \Exception('Site creation failed');
            }
        }
    }
}