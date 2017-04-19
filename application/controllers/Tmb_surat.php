<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tmb_surat extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        $this->load->model("M_entry");
    }
    
    
    public function index() {

        $data['setMeta'] = $this->M_layout->setMeta("Tambah Surat Ijin");
        $data['setHeader'] = $this->M_layout->setHeader();
        $data['setFooter'] = $this->M_layout->setfooter();
        $this->parser->parse('/Surat_Ijin/V_Tmb_Srt', $data);
    }
    
    function tambahdata(){
//        $d['nama'] = $this->input->post('jabatan');
        $d['id_izin'] = $this->input->post('0');
        $d['nama'] = $this->input->post('nama');
        $d['jenis_kelamin'] = $this->input->post('jk');
        $d['divisi'] = $this->input->post('jabatan');
        $d['keperluan'] = $this->input->post('keperluan');
        $d['alasan'] = $this->input->post('alasan');
        $d['tawal_izin'] = $this->input->post('from');
        $d['takhir_izin'] = $this->input->post('to');
        $d['tanggal_setuju'] = $this->input->post('from');
        
//        print_r($d);
        $this->M_entry->tambahSurat($d);
//        
        header("location:".base_Url('/index.php/Tmb_surat'));
    }
  
}