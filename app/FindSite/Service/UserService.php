<?php
/**
 * Created by PhpStorm.
 * User: Huisan
 * Date: 17/10/14
 * Time: 11:03 PM
 */

namespace FindSite\Service;


class UserService extends BaseService {

    function __construct(){
        parent::__construct();
    }

    public function create($user){
        $user['date_created'] = date('Y-m-d H:i:s');
        return $this->db->user()->insert($user);
    }

    public function update($user, $data){
        $data['date_updated'] = date('Y-m-d H:i:s');
        return $user->update($data);
    }

    public function getUserByEmail($email){
        $user = $this->db->user()->where("email", $email);
        if($data = $user->fetch()){
            return $data;
        }else{
            return null;
        }
    }
} 