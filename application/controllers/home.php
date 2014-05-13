<?php

class Home extends OB_Auth_Controller {
    
    public function index() {
        $js = array('view/home.js');
        
        $this->load->view('templates/header_view', array('user' => $this->getUserForPublic()));
        $this->load->view('components/navbar_user_view');
        $this->load->view('home_view');
        $this->load->view('templates/footer_view', array('js' => $js));
    }
    
    public function logout() {
        $this->ob_auth->clear();
        redirect('login');
    }
    
}