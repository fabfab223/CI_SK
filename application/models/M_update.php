<?php
class M_update extends CI_Model {
    

function updatedata(){
        $nama = $this->input->post('nama');
        $jk = $this->input->post('jenis_kelamin');
        $divisi = $this->input->post('divisi');
        $tgl_lahir = $this->input->post('tanggal_lahir');
        $alamat = $this->input->post('alamat');
        $no = $this->input->post('nomer_telp');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
                'nama'=>$nama,
                'jenis_kelamin'=>$jk,
                'divisi'=>$divisi,
                'tanggal_lahir'=>$tgl_lahir,
                'alamat'=>$alamat,
                'nomer_telp'=>$no,
                'username'=>$username,
                'password'=>$password
                );
        $this->db->where(array('nama'=>$nama,
                                'nomer_telp'=>$no));
        $this->db->update('m_user',$data);
    }
 
    function filterdata($no,$nama){
        return $this->db->get_where('m_user',
                          array('nomer_telp'=>$no,
                                'nama'=>$nama))->row();
    }
    
}
?>