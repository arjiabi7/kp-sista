<?php
/**
 * 
 */
class m_penilaianSeminar extends CI_Model	
{
	
	public function save(){
    $data = array(
      'nama_lengkap' => $this->input->post('nama_lengkap'),
			'nim' => $this->input->post('nim'),
			'email' => $this->input->post('email'),
			'kd_penguji' => $this->input->post('kd_penguji'),
			'peran_dosen' => $this->input->post('peran_dosen'),
			'pemahaman_teori' => $this->input->post('pemahaman_teori'),
			'komentar_pemahaman_teori' => $this->input->post('komentar_pemahaman_teori'),
			'pemahaman_kebutuhan' => $this->input->post('pemahaman_kebutuhan'),
			'komentar_pemahaman_kebutuhan' => $this->input->post('komentar_pemahaman_kebutuhan'),
			'pemahaman_pl' => $this->input->post('pemahaman_pl'),
			'komentar_pemahaman_pl' => $this->input->post('komentar_pemahaman_pl'),
			'maju_sidang' => $this->input->post('maju_sidang'),
			'komentar_maju_sidang' => $this->input->post('komentar_maju_sidang')
			
    );
    
    $this->db->insert('tbl_penilaian_seminar', $data);
  }
}
?>