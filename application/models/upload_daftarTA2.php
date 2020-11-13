<?php
/**
 * 
 */
class upload_daftarTA2 extends CI_Model
{
	public function upload(){
    $config['upload_path'] = './upload_daftarTA2/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
  
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

  public function save($upload){
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
			'pembimbing_2' => $this->input->post('pembimbing_2'),
			'khs' => $this->upload->data("file_name"),
			'krs' => $this->upload->data("file_name")
    );
    
    $this->db->insert('tbl_verifikasi_daftarta2', $data);
  }
}
?>