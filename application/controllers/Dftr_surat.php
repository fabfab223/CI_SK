<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dftr_surat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("M_entry");
        $this->load->model("M_delete");
        $this->load->model("M_get");
    }

    public function index() {

        $data['setMeta'] = $this->M_layout->setMeta("Daftar Surat Ijin");
        $data['setHeader'] = $this->M_layout->setHeader();
        $data['setFooter'] = $this->M_layout->setfooter();
        $this->load->model('M_get');
        $data['hasil'] = $this->M_get->bacadata_surat();
        $this->parser->parse('/Surat_Ijin/V_Dftr_Srt', $data);
    }
    
    function updatedata(){
//        $d['nama'] = $this->input->post('jabatan');
//        $d['id_izin'] = $this->input->post('id_izin');
        $d['nomor_surat'] = $this->input->post('nosur');
        $d['nama'] = $this->input->post('nama');
        $d['jenis_kelamin'] = $this->input->post('jk');
        $d['divisi'] = $this->input->post('jabatan');
        $d['keperluan'] = $this->input->post('keperluan');
        $d['alasan'] = $this->input->post('alasan');
        $d['tawal_izin'] = $this->input->post('from');
        $d['takhir_izin'] = $this->input->post('to');
        $id_izin = $this->input->post('id_izin');
                
//        print_r($d);
        $this->M_entry->updatesurat($d, $id_izin);
//        
        header("location:".base_Url('/index.php/Dftr_surat'));
    }
    
    public function delete($id) {
        $this->M_entry->deletesurat($id);
        header("location:" . base_Url('/index.php/Dftr_surat'));
    }
    public function getizin() {
        $where['id_izin'] = $this->input->post('id');
        $c = $this->M_get->getizin($where);

        echo json_encode($c);
    }

}

?>
