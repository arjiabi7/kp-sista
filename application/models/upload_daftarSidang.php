<?php
/**
 * 
 */
class upload_daftarSidang extends CI_Model
{
	
	public function upload(){
    $config['upload_path'] = './upload_daftarSidang/';
    $config['allowed_types'] = 'jpg|png|jpeg|pdf';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
  
    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('bukti_izin_p1') && $this->upload->do_upload('bukti_izin_p2') && $this->upload->do_upload('bukti_izin_r1') && $this->upload->do_upload('bukti_izin_r2') && $this->upload->do_upload('pinjam_perpus') && $this->upload->do_upload('khs')  && $this->upload->do_upload('draft_laporan') && $this->upload->do_upload('sertifikat')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');

      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

 private $table = "tbl_verifikasi_sidang";
 
    public function tampilsidang()
    {
        return $this->db->get($this->table)->result();
    }

     function show_barang(){
        $hasil=$this->db->query("SELECT * FROM tbl_verifikasi_sidang");
        return $hasil;
    }
 function edit_barang($id,$status,$komentar_sidang){
        $hasil=$this->db->query("UPDATE tbl_verifikasi_sidang SET status='$status',komentar_sidang='$komentar_sidang' WHERE id='$id'");
        return $hsl;
    }


  public function save($upload){
    $data = array(
      'nama_lengkap' => $this->input->post('nama_lengkap'),
			'email' => $this->input->post('email'),
			'nim' => $this->input->post('nim'),
			'judul_skripsi' => $this->input->post('judul_skripsi'),
			'kd_pembimbing1' => $this->input->post('kd_pembimbing1'),
			'kd_pembimbing2' => $this->input->post('kd_pembimbing2'),
			'kd_penguji1' => $this->input->post('kd_penguji1'),
			'kd_penguji2' => $this->input->post('kd_penguji2'),
			'izin_maju_p1' => $this->input->post('izin_maju_p1'),
			'bukti_izin_p1' => $this->upload->data("file_name"),
			'izin_maju_p2' => $this->input->post('izin_maju_p2'),
			'bukti_izin_p2' => $this->upload->data("file_name"),
			'izin_maju_r1' => $this->input->post('izin_maju_r1'),
			'bukti_izin_r1' => $this->upload->data("file_name"),
			'izin_maju_r2' => $this->input->post('izin_maju_r2'),
			'bukti_izin_r2' => $this->upload->data("file_name"),
			'link_seminar' => $this->input->post('link_seminar'),
			'pinjam_perpus' => $this->upload->data("file_name"),
			'khs' => $this->upload->data("file_name"),
			'nilai_kosong' => $this->input->post('nilai_kosong'),
			'draft_laporan' => $this->upload->data('file_name'),
			'sertifikat' => $this->upload->data("file_name")
    );
    
    $this->db->insert('tbl_verifikasi_sidang', $data);
  }
}
?>