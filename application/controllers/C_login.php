<?php

class C_login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_get');
    }

    function index() {
        $this->load->view('V_login');
    }

    function aksi_login() {
        $username = $this->input->post('username');
        $password = md5(md5($this->input->post('password')));
        $this->db->from('m_user');
        $this->db->where(array('username' => $username, 'password' => $password));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $Fields = $query->row();

            $data_session = array(
                'id_user' => $Fields->id_user,
                'nama' => $Fields->nama,
                'id_jabatan' => $Fields->id_jabatan,
                'divisi' => $Fields->divisi,
                'status' => TRUE
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("index.php/C_Dashboard"));
        } else {
            echo "Username dan password salah !";
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

}
