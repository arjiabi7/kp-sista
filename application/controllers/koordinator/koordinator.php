<?php

/**
 * 
 */
class koordinator extends CI_Controller
{
	
	function __construct() {
        parent::__construct();
        
        $this->load->helper('form');
       $this->load->model('upload_daftarTA2');
       $this->load->model('upload_daftarSeminar');
       $this->load->model('upload_daftarSidang');
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
    }

	function daftar_TA2(){
		$data['daftar_TA2']='data';
		$data['daftar_TA2'] = $this->upload_daftarTA2->tampilta2();

        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('koordinator/home_koordinator',$data);

		}
    }

    function daftar_seminar_koordinator(){
    	$data['daftar_seminar']='data';
		$data['daftar_seminar'] = $this->upload_daftarSeminar->tampilseminar();
    	   if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('koordinator/menu_daftarSeminar_koordinator',$data);
		}
    }

    function daftar_sidang_koordinator(){
    	$data['daftar_sidang']='data';
		$data['daftar_sidang'] = $this->upload_daftarSidang->tampilsidang();
    	 if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('koordinator/menu_daftarSidang_koordinator',$data);
		}
    }

   

    
}
?>