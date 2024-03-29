<?php

/**
 * 
 */
class pembimbing extends CI_Controller
{
	
	function __construct() {
        parent::__construct();
        
        $this->load->helper('form');
      	$this->load->model('upload_pengajuanSeminar');
      	$this->load->model('upload_pengajuanSidang');
      	$this->load->model('m_penilaianSeminarPembimbing');
      	$this->load->model('m_penilaianSidangPembimbing');
       
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
    }

    function pengajuan_seminar(){
    	
		$data['pengajuan_seminar'] = $this->upload_pengajuanSeminar->tampilpengajuanseminar();
		$data['data']=$this->upload_pengajuanSeminar->show_barang();
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('pembimbing/menu_pengajuanSeminar',$data);
		}
    }

     function edit_pengajuan_seminar(){
		$id=$this->input->post('id');
        $status=$this->input->post('status');
        $komentar_pengajuan_seminar=$this->input->post('komentar_pengajuan_seminar');
       
        $this->upload_pengajuanSeminar->edit_barang($id,$status,$komentar_pengajuan_seminar);
        redirect('pembimbing/pembimbing/pengajuan_seminar');

    }

 

    function pengajuan_sidang(){
    	$data['pengajuan_sidang'] = $this->upload_pengajuanSidang->tampilpengajuansidang();
    	$data['data']=$this->upload_pengajuanSidang->show_barang();
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('pembimbing/menu_pengajuanSidang',$data);
		}
    }

     function edit_pengajuan_sidang(){
		$id=$this->input->post('id');
        $status=$this->input->post('status');
        $komentar_pengajuan_sidang=$this->input->post('komentar_pengajuan_sidang');
       
        $this->upload_pengajuanSidang->edit_barang($id,$status,$komentar_pengajuan_sidang);
        redirect('pembimbing/pembimbing/pengajuan_sidang');

    }

	function penilaian_seminar(){
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('pembimbing/menu_nilaiSeminar_pembimbing');
		}
		 if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
 
        $this->m_penilaianSeminarPembimbing->save();
         redirect('pembimbing/pembimbing/penilaian_seminar');
        
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
			$this->load->view('pembimbing/menu_nilaiSidang_pembimbing');
		}

		 if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
 
        $this->m_penilaianSidangPembimbing->save();
         redirect('pembimbing/pembimbing/penilaian_sidang');
        
        // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }


}

?>