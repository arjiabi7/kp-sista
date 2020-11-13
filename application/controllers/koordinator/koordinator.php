<?php

/**
 * 
 */
class koordinator extends CI_Controller
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

	function daftar_TA2(){
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('koordinator/home_koordinator');
		}
    }

    function daftar_seminar_koordinator(){
    	   if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('koordinator/menu_daftarSeminar_koordinator');
		}
    }

    function daftar_sidang_koordinator(){
    	 if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('koordinator/menu_daftarSidang_koordinator');
		}
    }

    
}
?>