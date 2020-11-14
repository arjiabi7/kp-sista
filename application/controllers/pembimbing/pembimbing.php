<?php

/**
 * 
 */
class pembimbing extends CI_Controller
{
	
	function __construct() {
        parent::__construct();
        
        $this->load->helper('form');
      
       
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
			$this->load->view('pembimbing/menu_nilaiSeminar');
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
			$this->load->view('pembimbing/menu_nilaiSidang');
		}
    }

    function pengajuan_seminar(){
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('pembimbing/menu_pengajuanSeminar');
		}
    }

    function pengajuan_sidang(){
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('pembimbing/menu_pengajuanSidang');
		}
    }
}

?>