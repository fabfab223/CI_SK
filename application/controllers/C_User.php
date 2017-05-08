<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("M_entry");
        $this->load->model("M_get");
    }

    public function index() {

        $data['setMeta'] = $this->M_layout->setMeta("Master User");
        $data['setHeader'] = $this->M_layout->setHeader();
        $data['setFooter'] = $this->M_layout->setFooter();
        $this->load->model('M_get');
        $data['hasil'] = $this->M_get->bacadata_user();
        $this->parser->parse('V_User', $data);
    }

    function tambahdata() {
        $d['id_jabatan'] = $this->input->post('jabatan');
        $d['nama'] = $this->input->post('nama');
        $d['jenis_kelamin'] = $this->input->post('jk');
        $d['divisi'] = $this->input->post('divisi');
        $d['tanggal_lahir'] = $this->input->post('tgl');
        $d['alamat'] = $this->input->post('alamat');
        $d['nomor_telp'] = $this->input->post('nomer');
        $d['username'] = $this->input->post('username');
        $d['password'] = $this->input->post('password');
        $id_user = $this->input->post('id_user');
        $form_mode = $this->input->post('formMode');

        if ($form_mode == "Tambah") {
            $d['password'] = md5(md5($this->input->post('password')));
            $this->M_entry->tambah($d);
        } else if ($form_mode == "Ubah") {
            $this->db->from('m_user');
            $this->db->where('id_user', $id_user);
            $query = $this->db->get();
            $Fields = $query->row();
            if ($Fields->password == $d['password']) {
                $d['password'] = $Fields->password;
            } else {
                $d['password'] = md5(md5($d['password']));
            }
            $this->M_entry->update($d, $id_user);
        }


        header("location:" . base_Url('/index.php/C_User'));
    }

    public function delete($id) {
        $this->M_entry->delete($id);
        header("location:" . base_Url('/index.php/C_User'));
    }

    public function getUser() {
        $where['id_user'] = $this->input->post('id');
        $c = $this->M_get->getUser($where);

        echo json_encode($c);
    }

}
