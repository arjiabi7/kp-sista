<?php
/**
 * 
 */
class m_penilaianSidangPembimbing extends CI_Model	
{
	
	public function save(){
    $data = array(
      'nama_lengkap' => $this->input->post('nama_lengkap'),
			'nim' => $this->input->post('nim'),
			'email' => $this->input->post('email'),
			'kd_penguji' => $this->input->post('kd_penguji'),
			'peran_dosen' => $this->input->post('peran_dosen'),
			'materi_penilaian' => $this->input->post('materi_penilaian'),
			'pemahaman_teori' => $this->input->post('pemahaman_teori'),
			'pemahaman_penelitian' => $this->input->post('pemahaman_penelitian'),
			'pencapaian_target' => $this->input->post('pencapaian_target'),
			'aspek_kedisiplinan' => $this->input->post('aspek_kedisiplinan'),
			'teori_keilmuan' => $this->input->post('teori_keilmuan'),
			'metode_penelitian' => $this->input->post('metode_penelitian'),
			'analisis_penelitian' => $this->input->post('analisis_penelitian'),
			'teknik_presentasi' => $this->input->post('teknik_presentasi'),
			'teknik_penulisan' => $this->input->post('teknik_penulisan'),
			'pemahaman_software' => $this->input->post('pemahaman_software'),
			'revisi_saran' => $this->input->post('revisi_saran')
			
    );
    
    $this->db->insert('tbl_penilaian_sidang', $data);
  }
}
?>