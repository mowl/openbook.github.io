<?php

class OB_Auth {
    
    private $ci = null;
    
    public function __construct() {
        $this->ci = &get_instance();
    }
    
    public function setId($id) {
        $this->ci->session->set_userdata(array(
            'uid' => $id
        ));
    }
    
    public function getId() {
        $uid = $this->ci->session->userdata('uid');
        
        if (!$uid) {
            return null;
        }
        
        return $uid;
    }
    
    public function clear() {
        $this->ci->session->sess_destroy();
    }
    
}