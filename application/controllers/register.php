<?php

class Register extends OB_Public_Controller {
    
    public function index() {
        $css = array('register.css');
        $js = array('register.js');
        
        $this->load->view('templates/header_view', array('css' => $css, 'js' => $js));
        $this->load->view('components/navbar_general_view');
        $this->load->view('register_view');
        $this->load->view('templates/footer_view');
    }
    
}