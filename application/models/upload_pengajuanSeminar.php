<?php
/**
 * 
 */
class upload_pengajuanSeminar extends CI_Model
{
	

     function show_barang(){
        $hasil=$this->db->query("SELECT * FROM tbl_pengajuan_seminar");
        return $hasil;
    }
 function edit_barang($id,$status,$komentar_pengajuan_seminar){
        $hasil=$this->db->query("UPDATE tbl_pengajuan_seminar SET status='$status',komentar_pengajuan_seminar='$komentar_pengajuan_seminar' WHERE id='$id'");
        return $hsl;
    }

	 public function save(){
    $data = array(
      'nama_lengkap' => $this->input->post('nama_lengkap'),
			'email' => $this->input->post('email'),
			'nim' => $this->input->post('nim'),
			'jumlah_sks_proses' => $this->input->post('jumlah_sks_proses'),
			'jumlah_sks_lulus' => $this->input->post('jumlah_sks_lulus'),
			'jumlah_nilai_D' => $this->input->post('jumlah_nilai_D'),
			'jumlah_nilai_E' => $this->input->post('jumlah_nilai_E'),
			'ipk' => $this->input->post('ipk'),
			'judul_skripsi' => $this->input->post('judul_skripsi')
    );
    
    $this->db->insert('tbl_pengajuan_seminar', $data);
  }
private $table = "tbl_pengajuan_seminar";
  public function tampilpengajuanseminar()
    {
        return $this->db->get($this->table)->result();
    }
}

?>