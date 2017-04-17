<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller {

    public function index() {

        $data['setMeta'] = $this->M_layout->setMeta("Master User");
        $data['setHeader'] = $this->M_layout->setHeader();
        $data['setFooter'] = $this->M_layout->setFooter();
        $this->parser->parse('V_User', $data);
        
    }
}
