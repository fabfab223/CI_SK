<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller {

    public function index() {

        $data['setMeta'] = $this->M_layout->setMeta("Master User");
        $data['setHeader'] = $this->M_layout->setHeader();
        $data['setFooter'] = $this->M_layout->setFooter();
        $this->parser->parse('V_User', $data);
        
    }
    
    function tambahdata(){
 
        if($this->input->post('submit')){
            $this->load->model('M_entry');
            $this->M_entry->tambah();
            redirect('C_User');
        }
        $this->load->view('V_User');
    }
}
