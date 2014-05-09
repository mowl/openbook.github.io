<?php

class Home extends CI_Controller {
    
    public function index() {
        $this->load->view('templates/header_view');
        $this->load->view('components/navbar_user_view');
        $this->load->view('home_view');
        $this->load->view('templates/footer_view');
    }
    
}