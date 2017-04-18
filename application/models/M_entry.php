<?php
class M_entry extends CI_Model {
    function tambah($data){        
        $this->db->insert('m_user',$data);
    }
}
?>