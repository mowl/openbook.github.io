<?php

class Login extends OB_Public_Controller {
    
    public function index() {
        $css = array('login.css');
        $js = array('view/login.js');
        
        $this->load->view('templates/header_view', array('css' => $css, 'js' => $js));
        $this->load->view('components/navbar_general_view');
        $this->load->view('login_view');
        $this->load->view('templates/footer_view');
    }
    
}