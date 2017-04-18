<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("M_entry");
    }

    public function index() {

        $data['setMeta'] = $this->M_layout->setMeta("Master User");
        $data['setHeader'] = $this->M_layout->setHeader();
        $data['setFooter'] = $this->M_layout->setFooter();
        $this->parser->parse('V_User', $data);
        
    }
    
    function tambahdata(){
        $d['id_jabatan'] = $this->input->post('jabatan');
        $d['nama'] = $this->input->post('nama');
        $d['jenis_kelamin'] = $this->input->post('jk');
        $d['divisi'] = $this->input->post('divisi');
        $d['tanggal_lahir'] = $this->input->post('tgl');
        $d['alamat'] = $this->input->post('alamat');
        $d['nomor_telp'] = $this->input->post('nomer');
        $d['username'] = $this->input->post('username');
        $d['password'] = $this->input->post('password');
        
        $this->M_entry->tambah($d);
        
        header("location:".base_Url('/index.php/C_User'));
    }
}
