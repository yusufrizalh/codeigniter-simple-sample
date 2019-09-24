<?php 

class Web extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model_data');
        $this->load->library('form_validation');
    }

    function index() {
        $data['judul'] = "Halaman Depan";
        $data['users'] = $this->model_data->ambil_data()->result();
        $this->load->view('view_header', $data);
        $this->load->view('view_content', $data);
        $this->load->view('view_footer', $data);
    }

    function employee() {
        $data['judul'] = "Halaman Employee";
        $data['employee'] = $this->model_data->ambil_data_emp()->result();
        $this->load->view('view_header', $data);
        $this->load->view('view_content_employee', $data);
        $this->load->view('view_footer', $data);
    }

    function about() {
        $data['judul'] = "Halaman About";
        $this->load->view('view_header', $data);
        $this->load->view('view_content_about', $data);
        $this->load->view('view_footer', $data);
    }

    function gallery() {
        $data['judul'] = "Halaman Gallery";
        $this->load->view('view_header', $data);
        $this->load->view('view_content_gallery', $data);
        $this->load->view('view_footer', $data);
    }

    function contact() {
        $data['judul'] = "Halaman Contact";
        $this->load->view('view_header', $data);
        $this->load->view('view_content_contact', $data);
        $this->load->view('view_footer', $data);
    }

    function form_action() {
        $this->form_validation->set_rules('nama', 'Nama', 'required|max_length[20]');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if($this->form_validation->run() != false) {
            echo "Form Validation is OK!";
        } else {
            $data['judul'] = "Halaman Contact";
            $this->load->view('view_header', $data);
            $this->load->view('view_content_contact', $data);
            $this->load->view('view_footer', $data);
        }
    }

    function login() {
        $data['judul'] = "Halaman Login";
        $this->load->view('view_header', $data);
        $this->load->view('view_content_login', $data);
        $this->load->view('view_footer', $data);
    }

    function login_action() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username, 
            'password' => md5($password)
        );

        $cek_login = $this->model_data->cek_login("admin", $where)->num_rows();
        if($cek_login > 0) {
            $data_session = array(
                'nama' => $username, 
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            redirect(base_url('index.php/admin'));
        } else {
            echo "Username atau Password Salah!";
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('index.php/web/login'));
    }
}