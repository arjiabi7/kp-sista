<?php
/**
 * 
 */
class upload_daftarSeminar extends CI_Model
{
	
		public function upload(){
    $config['upload_path'] = './upload_daftarSeminar/';
    $config['allowed_types'] = 'jpg|png|jpeg|pdf';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
  
    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('bukti_lunas') && $this->upload->do_upload('draft_laporan')  && $this->upload->do_upload('khs')  && $this->upload->do_upload('sertifikat')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');

      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

 
 private $table = "tbl_verifikasi_seminar";
 
    public function tampilseminar()
    {
        return $this->db->get($this->table)->result();
    }

     function show_barang(){
        $hasil=$this->db->query("SELECT * FROM tbl_verifikasi_seminar");
        return $hasil;
    }
 function edit_barang($id,$status,$komentar_seminar){
        $hasil=$this->db->query("UPDATE tbl_verifikasi_seminar SET status='$status',komentar_seminar='$komentar_seminar' WHERE id='$id'");
        return $hsl;
    }

     function edit_jadwal($id,$hari_seminar,$tgl_seminar,$jam_seminar,$tempat_seminar,$kd_penguji1,$kd_penguji2){
        $hasil=$this->db->query("UPDATE tbl_verifikasi_seminar SET hari_seminar='$hari_seminar',tgl_seminar='$tgl_seminar',jam_seminar='$jam_seminar',tempat_seminar='$tempat_seminar',kd_penguji1='$kd_penguji1',kd_penguji2='$kd_penguji2' WHERE id='$id'");
        return $hsl;
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
			'jml_bimbingan1' => $this->input->post('jml_bimbingan1'),
			'jml_bimbingan2' => $this->input->post('jml_bimbingan2'),
			'pelunasan' => $this->input->post('pelunasan'),
			'bukti_lunas' => $this->upload->data('file_name'),
			'matkul_sedang_diambil' => $this->input->post('pembimbing_2'),
			'draft_laporan' => $this->upload->data('file_name'),
			'khs' => $this->upload->data("file_name"),
			'sertifikat' => $this->upload->data("file_name")
    );
    
    $this->db->insert('tbl_verifikasi_seminar', $data);
  }
}
?>