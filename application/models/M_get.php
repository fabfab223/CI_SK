<?php
class M_get extends CI_Model {
    
    
    function bacadata_user(){
        $baca = $this->db->get('m_user');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function bacadata_surat(){
        $baca = $this->db->get('m_izin');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
}
    
?>