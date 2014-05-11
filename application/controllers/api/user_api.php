<?php

class User_Api extends CI_Controller
{
    public function index()
    {
        /*
         * TODO: Toss in an error here, if no action is specified or use routing?
         */
    }
    
    public function login()
    {
        /*
         * Should it load just the login section from actions model instead of the entire model?
         */
        $this->load->model('user_model');
    }
    
    public function logout()
    {
        /*
         * TODO: Logout model
         */
    }
    
    public function register()
    {
        /*
         * TODO: Registration model
         */
    }
}