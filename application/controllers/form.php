<?php
class form extends CI_Controller {
 
	public function form_evaluasi(){
		$this->load->view('form_evaluasi');
	}
	
	public function form_penilaian(){
		$this->load->view('form_penilaian');
	}
	
	public function form_skripsi(){
		$this->load->view('form_skripsi');
	}
}
?>