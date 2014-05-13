<?php

class User_Api extends OB_Ajax_Controller {

    public function login() {

        $this->load->model('user_model');

        $credentials = array(
            'username' => $_POST['username'],
            'password' => $_POST['password']
        );

        $user = $this->user_model->getByCredentials($credentials);

        if ($user) {
            // We got a user matching the given credentials, let's store the user id in a session,
            // so backend knows that that specific user is authenticated
            $this->ob_auth->setId($user->id);
        }

        $this->response(!!($user !== null));
    }

    public function register() {
 
         $this->load->model('user_model');
        
         $data = to_object($this->input->post('data'));
         $state = $this->user_model->register($data);
         
         $this->response($state);
    }

    public function isUniqueUsername() {
       
        $username = $this->input->post('username');
        
        $this->load->model('user_model');
        $isUnique = $this->user_model->isUniqueUsername($username);
        
        $data = ($isUnique) ? null : 'This username is already used';
        $this->response($isUnique, $data);
    }

}
