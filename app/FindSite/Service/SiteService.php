<?php
/**
 * Created by PhpStorm.
 * User: Huisan
 * Date: 18/10/14
 * Time: 5:26 PM
 */

namespace FindSite\Service;


use FindSite\Controller\BaseController;

class SiteService extends BaseController{

    function __construct(){
        parent::__construct();
    }

    public function create($site){
        $site['date_created'] = date('Y-m-d H:i:s');
        return $this->db->site()->insert($site);
    }

    public function update($site, $data){
        $data['date_updated'] = date('Y-m-d H:i:s');
        return $site->update($data);
    }
} 