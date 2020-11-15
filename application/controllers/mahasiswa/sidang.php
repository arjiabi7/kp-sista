<?php

/**
 * 
 */
class sidang extends CI_Controller
{
	
	function __construct() {
        parent::__construct();
        
        $this->load->helper('form');
      $this->load->model('upload_daftarSidang');
       $this->load->model('upload_pengajuanSidang');
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
    }

        function pengajuanSidang(){
    	if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('mahasiswa/menu_pengajuanSidang');
		}

		  if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
 
        $this->upload_pengajuanSidang->save();
         redirect('mahasiswa/sidang/status_persetujuan_pengajuan');
        
        // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }

     function status_persetujuan_pengajuan(){
    	 if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('menu_persetujuan_pengajuan_sidang');
		}
    }
    function status_persetujuan_sidang(){
    	 if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('menu_persetujuan_sidang');
		}
    }

	function daftarSidang(){
		$data['berkas'] = $this->db->get('tbl_verifikasi_sidang');
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('mahasiswa/menu_daftarSidang');
		}
		 $data = array();
		  if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
	      // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
	      $upload = $this->upload_daftarSidang->upload();
	      
	      if($upload['result'] == "success"){ // Jika proses upload sukses
	         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
	        $this->upload_daftarSidang->save($upload);
	        
	        
	        redirect('mahasiswa/sidang/status_persetujuan_sidang'); // Redirect kembali ke halaman awal / halaman view data
	      }else{ // Jika proses upload gagal
	      	redirect('mahasiswa/Home');
	        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
	      }
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
			$this->load->view('mahasiswa/menu_jadwalSidang');
		}
    }

}
?>