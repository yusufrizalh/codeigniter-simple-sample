<?php 

class Belajar extends CI_Controller {
    function index() {
        echo "<h1>Ini method index pada controller Belajar</h1>";
    }

    function halo() {
        // echo "<h1>Ini method halo pada controller Belajar</h1>";
        $data['nama_web'] = "www.inixcodeigniter.id";
        $this->load->view('view_belajar', $data);
    }

    function helo() {
        $data = array(
            'judul' => "CodeIgniter",
            'deskripsi' => "Membuat View pada CodeIgniter"
        );
        $this->load->view('view_belajar', $data);
    }
}