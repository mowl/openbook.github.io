<?php

class OB_Controller extends CI_Controller {
    
}

class OB_Output {

    public static function jsonHeaders() {
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
    }

}

class OB_Public_Controller extends OB_Controller {

    function __construct() {
        parent::__construct();

        $ci = &get_instance();
        if ($ci->ob_auth->getId() !== null) {
            redirect('home');
        }
    }

}

class OB_Auth_Controller extends OB_Controller {

    private $user = null;
    
    function __construct() {
        parent::__construct();

        $ci = &get_instance();
        if ($ci->ob_auth->getId() === null) {
            redirect('login');
        }
        
        $this->user = $this->fetchUser();
    }
    
    public function getUserForPublic() {
        $user = $this->user;
        $this->load->model('user_model');
        return $this->user_model->stripForPublic($user);
    }
    
    public function getUser() {
        return $this->user;
    }
    
    public function fetchUser() {
        $id = $this->ob_auth->getId();
        
        $this->load->model('user_model');
        return $this->user_model->getById($id);
    }

}

class OB_Ajax_Controller extends OB_Controller {

    private $error = null;

    function __construct() {
        parent::__construct();

        OB_Output::jsonHeaders();
    }

    private function wrapResponse($status, $data) {
        $o = new stdClass();

        $o->status = $status;
        $o->data = $data;

        return $o;
    }

    private function wrapError() {
        $o = new stdClass();

        $o->error_code = $this->error['code'];
        $o->message = $this->error['message'];

        return $o;
    }

    public function error($code, $message = null) {
        if ($message === null) {
            $message = '';
        }

        $this->error = array(
            'code' => $code,
            'message' => $message
        );
    }

    public function response($status, $data = null) {
        if ($this->error !== null) {
            $status = false;
            $data = $this->wrapError();
        }

        echo json_encode($this->wrapResponse($status, $data));
        exit();
    }

}
