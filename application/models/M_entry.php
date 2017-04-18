<?php
class M_entry extends CI_Model {
    function tambah(){
        $nama = $this->input->post('nama');
        $jenis_k = $this->input->post('jenis_k');
        $divisi = $this->input->post('divisi');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $data = array(
                'id_user'=>'1',
                'id_jabatan'=>'2',
                'nama'=>$nama,
                'jenis_kelamin'=>$jenis_k,
                'divisi'=>$divisi,
                'tanggal_lahir'=>$tgl_lahir,
                'alamat'=>$alamat,
                'nomor_telp'=>$no_hp,
                'username'=>$username,
                'password'=>$password,
                );
        $this->db->insert('m_user',$data);
    }
}
?>