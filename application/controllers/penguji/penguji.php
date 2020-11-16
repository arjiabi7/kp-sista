<?php

/**
 * 
 */
class penguji extends CI_Controller
{
	
	function __construct() {
        parent::__construct();
        
        $this->load->helper('form');
      
        $this->load->model('m_penilaianSeminar');
        $this->load->model('m_penilaianSidang');
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
    }

	function penilaian_seminar(){
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('penguji/menu_nilaiSeminar_penguji');
		}

		 if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
 
        $this->m_penilaianSeminar->save();
         redirect('penguji/penguji/penilaian_seminar');
        
        // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }

    function penilaian_sidang(){
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('penguji/menu_nilaiSidang_penguji');
		}

		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
 
        $this->m_penilaianSidang->save();
         redirect('penguji/penguji/penilaian_sidang');
        
        // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
}

?>