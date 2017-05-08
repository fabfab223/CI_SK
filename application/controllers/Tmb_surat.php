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

    function tambahdata() {
//        $d['nama'] = $this->input->post('jabatan');
        $d['id_izin'] = $this->input->post('0');
        $d['nomor_surat'] = $this->input->post('nosur');
        $d['id_user'] = $this->session->userdata('id_user');
        $d['nama'] = $this->input->post('nama');
        $d['jenis_kelamin'] = $this->input->post('jk');
        $d['divisi'] = $this->input->post('jabatan');
        $d['keperluan'] = $this->input->post('keperluan');
        $d['alasan'] = $this->input->post('alasan');
        $d['tawal_izin'] = $this->input->post('from');
        $d['takhir_izin'] = $this->input->post('to');
        $d['status'] = FALSE;

//        print_r($d);
        $this->M_entry->tambahSurat($d);

        header("location:" . base_Url('/index.php/Tmb_surat'));
    }

    function verifikasi($id_izin = "") {
//        $id_izin = $this->input->post('id_izin');
        $this->db->from('m_izin');
        $this->db->where('id_izin', $id_izin);
        $query = $this->db->get();
        $Fields = $query->row();

        $this->db->from('m_user');
        $this->db->where('id_user', $Fields->id_user);
        $query1 = $this->db->get();
        $Fields1 = $query1->row();

        $this->db->from('m_user');
        $this->db->where('divisi', $Fields1->divisi);
        $this->db->where('id_jabatan', 2);
        $query2 = $this->db->get();
        $Fields2 = $query2->row();

        $this->db->query('insert into m_verifikasi(id_dari, id_tujuan, status) values (' . $Fields1->id_user . ', ' . $Fields2->id_user . ', FALSE)');
        $this->db->query('UPDATE m_izin SET status=TRUE WHERE id_izin=' . $id_izin);
        header("location:" . base_Url('/index.php/Dftr_surat'));
    }

}
