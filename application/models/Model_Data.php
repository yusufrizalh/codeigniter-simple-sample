<?php

class Model_data extends CI_Model {
    function ambil_data() {
        return $this->db->get('users');
    }

    function ambil_data_emp() {
        return $this->db->get('employee');
    }

    function cek_login($table, $where) {
        return $this->db->get_where($table, $where);
    }
}