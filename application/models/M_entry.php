<?php

class M_entry extends CI_Model {

    function tambah($data) {
        $this->db->insert('m_user', $data);
    }

    function update($data, $id_user) {
        $this->db->where('id_user', $id_user);
        $this->db->update('m_user', $data);
    }
    
    function delete($id_user) {
        $this->db->where('id_user', $id_user);
        $this->db->delete('m_user');
    }

    function tambahSurat($data_s) {
        $this->db->insert('m_izin', $data_s);
    }
    
    function deletesurat ($id) {
        $this->db->where('id_izin', $id);
        $this->db->delete('m_izin');
    }
    
    function updatesurat ($data, $id_izin){
        $this->db->where('id_izin', $id_izin);
        $this->db->update('m_izin', $data);
    }

}

?>