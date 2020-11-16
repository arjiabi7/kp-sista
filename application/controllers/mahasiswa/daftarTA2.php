<?php

/**
 * 
 */
class daftarTA2 extends CI_Controller
{
	
	function __construct() {
        parent::__construct();
        
        $this->load->helper('form');
         $this->load->model('upload_daftarTA2');
      
       
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
    }

	function index(){
       // $data['daftar_ta2'] = $this->m_data->tampil_data()->result();
		$data['khs'] = $this->db->get('tbl_verifikasi_daftarta2');
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('mahasiswa/menu_daftarTA');
		}
    }

    function status_persetujuan(){
    	 if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else
		{
			$this->load->view('menu_persetujuan_daftarTA');
		}
    }

     public function tambah(){
    $data = array();
    
    if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
      $upload = $this->upload_daftarTA2->upload();
      
      if($upload['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
        $this->upload_daftarTA2->save($upload);
        
        
        redirect('mahasiswa/daftarTA2/status_persetujuan'); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
      	redirect('mahasiswa/Home');
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
}
    
   


 //    function proses()
	// {
	// 	$config['upload_path']          = './upload_daftarTA2/';
	// 	$config['allowed_types']        = 'gif|jpg|png|pdf';
	// 	$config['max_size']             = 100;
	// 	$config['max_width']            = 1024;
	// 	$config['max_height']           = 768;
	// 	$config['encrypt_name']			= TRUE;
	// 	$this->load->library('upload', $config);
	// 	if ( ! $this->upload->do_upload('khs'))
	// 	{
	// 			$error = array('error' => $this->upload->display_errors());
	// 			$this->load->view('content_daftarTA', $error);
	// 	}
	// 	else
	// 	{
	// 		'nama_lengkap' => $this->input->post('nama_lengkap');
	// 		'email' => $this->input->post('email');
	// 		'nim' => $this->input->post('nim');
	// 		'no_hp' => $this->input->post('no_hp');
	// 		'semester' => $this->input->post('semester');
	// 		'jk' => $this->input->post('jk');
	// 		'peminatan' => $this->input->post('peminatan');
	// 		'jumlah_sks_proses' => $this->input->post('jumlah_sks_proses');
	// 		'jumlah_sks_lulus' => $this->input->post('jumlah_sks_lulus');
	// 		'ipk' => $this->input->post('ipk');
	// 		'jumlah_nilai_D' => $this->input->post('jumlah_nilai_D');
	// 		'jumlah_nilai_E' => $this->input->post('jumlah_nilai_E');
	// 		'judul_skripsi' => $this->input->post('judul_skripsi');
	// 		'pembimbing_1' => $this->input->post('pembimbing_1');
	// 		'pembimbing_2' => $this->input->post('pembimbing_2');
	// 		'khs' => $this->upload->data("file_name");
	// 		'krs' => $this->upload->data("file_name");

	// 		$this->db->insert('tbl_verifikasi_daftarta2',$data);
	// 		redirect('daftarTA2');
	// 	}
	// }
    }

?>