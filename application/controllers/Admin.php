<?php 

class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();

        if($this->session->userdata('status') != "login") {
            redirect(base_url('index.php/web/login'));
        }
    }

    function index() {
        $this->load->view('view_admin');
    }
}