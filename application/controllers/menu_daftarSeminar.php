<?php

/**
 * 
 */
class menu_daftarSeminar extends CI_Controller
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

	function daftarSeminar(){
        
          if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('menu_daftarSeminar');
		}
    }

    function jadwal(){
        
          if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('menu_jadwalSeminar');
		}
    }
    
}

?>