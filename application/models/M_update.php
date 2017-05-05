<?php

class M_update extends CI_Model {

    function updatedata() {
        $nama = $this->input->post('nama');
        $jk = $this->input->post('jenis_kelamin');
        $divisi = $this->input->post('divisi');
        $tgl_lahir = $this->input->post('tanggal_lahir');
        $alamat = $this->input->post('alamat');
        $nomer = $this->input->post('nomor_telp');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'nama' => $nama,
            'jenis_kelamin' => $jk,
            'divisi' => $divisi,
            'tanggal_lahir' => $tgl,
            'alamat' => $alamat,
            'nomor_telp' => $nomer,
            'username' => $username,
            'password' => $password
        );
        $this->db->where(array('nama' => $nama,
            'jenis_kelamin' => $jk,
            'divisi' => $divisi,
            'tanggal_lahir' => $tgl,
            'nomor_telp' => $nomer,
            'username' => $username,
            'password' => $password,));
        $this->db->update('m_user', $data);
    }

    function filterdata($id) {
        $this->db->where('nis', $id);
        return $this->db->get('siswa')->result();
    }
}

?>