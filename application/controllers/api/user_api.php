<?php

class User_Api extends CI_Controller {

    public function index() {
        /*
         * TODO: Toss in an error here, if no action is specified or use routing?
         */
    }

    public function login() {

        $this->load->model('user_model');

        // This is just to illustrate a json response, we'll wrap this in a custom controller later (eg; $this->response(flag, data))
        // once we've decided a suitable format to serve json

        echo json_encode(array(
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ));
    }

    public function logout() {
        /*
         * TODO: Logout model
         */
    }

    public function register() {
        /*
         * TODO: Registration model
         */
    }
    
    public function isUniqueUsername() {
        echo json_encode(true);
    }

}