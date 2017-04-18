<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dftr_surat extends CI_Controller {

    public function index() {

        $data['setMeta'] = $this->M_layout->setMeta("Daftar Surat Ijin");
        $data['setHeader'] = $this->M_layout->setHeader();
        $data['setFooter'] = $this->M_layout->setfooter();
        $this->parser->parse('/Surat_Ijin/V_Dftr_Srt', $data);
    }

}
