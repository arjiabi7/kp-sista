<?php
/**
 * 
 */
class upload_daftarTA2 extends CI_Model
{
	public function upload(){
    $config['upload_path'] = './upload_daftarTA2/';
    $config['allowed_types'] = 'jpg|png|jpeg|pdf';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
    // $config['file_name'] =  ('krs_',$_SESSION['email']);
  
    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('khs') && $this->upload->do_upload('krs')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');

      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

  private $table = "tbl_verifikasi_daftarta2";
 
    public function tampilta2()
    {
        return $this->db->get($this->table)->result();
    }

     function download($id)
  {
    $data = $this->db->get_where('tbl_verifikasi_daftarta2',['khs'=>$id])->row();
    force_download('upload_daftarTA2/'.$data->khs,NULL);
  }

 function show_barang(){
        $hasil=$this->db->query("SELECT * FROM tbl_verifikasi_daftarta2");
        return $hasil;
    }
 function edit_barang($id,$status,$komentar_ta2){
        $hasil=$this->db->query("UPDATE tbl_verifikasi_daftarta2 SET status='$status',komentar_ta2='$komentar_ta2' WHERE id='$id'");
        return $hsl;
    }

  public function save(){
    $data = array(
      'nama_lengkap' => $this->input->post('nama_lengkap'),
			'email' => $this->input->post('email'),
			'nim' => $this->input->post('nim'),
			'no_hp' => $this->input->post('no_hp'),
			'semester' => $this->input->post('semester'),
			'jk' => $this->input->post('jk'),
			'peminatan' => $this->input->post('peminatan'),
			'jumlah_sks_proses' => $this->input->post('jumlah_sks_proses'),
			'jumlah_sks_lulus' => $this->input->post('jumlah_sks_lulus'),
			'ipk' => $this->input->post('ipk'),
			'jumlah_nilai_D' => $this->input->post('jumlah_nilai_D'),
			'jumlah_nilai_E' => $this->input->post('jumlah_nilai_E'),
			'judul_skripsi' => $this->input->post('judul_skripsi'),
			'pembimbing_1' => $this->input->post('pembimbing_1'),
			'pembimbing_2' => $this->input->post('pembimbing_2')
      
  
    );
    
    $this->db->insert('tbl_verifikasi_daftarta2', $data);
  }
}
?>