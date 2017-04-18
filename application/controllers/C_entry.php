 <?php
class C_entry extends CI_Controller {
    function tambahdata(){
 
        if($this->input->post('submit')){
            $this->load->model('M_entry');
            $this->M_entry->tambah();
            redirect('C_User');
        }
        $this->load->view('V_User');
    }
}
?>