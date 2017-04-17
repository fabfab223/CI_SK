<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

    public function index() {

        $data['setMeta'] = $this->M_layout->setMeta("Dashboard");
        $data['setHeader'] = $this->M_layout->setHeader();
        $this->parser->parse('V_Dashboard', $data);
    }

}
