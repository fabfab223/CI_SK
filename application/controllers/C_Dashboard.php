<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {
    
    function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/C_login"));
		}
	}

    public function index() {

        $data['setMeta'] = $this->M_layout->setMeta("Dashboard");
        $data['setHeader'] = $this->M_layout->setHeader();
        $this->parser->parse('V_Dashboard', $data);
    }
   
}
