<?php

class M_delete extends CI_Model {

    function delete($id) {
        $this->db->where('id_user', $id);
        $this->db->delete('m_user');
        redirect('C_User');
    }

}

?>