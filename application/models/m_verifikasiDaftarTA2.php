<?php
 /**
  * 
  */
 class m_verifikasiDaftarTA2 extends CI_Model
 {
 	
 	public function __construct()
	{
		$this->load->database();
	}

 	public function all()
	{
		$data = $this->db->query("SELECT * from tbl_verifikasi_daftarta2");
		return $data->result();
	}
 	

 	// public function filter($search, $limit, $start, $order_field, $order_ascdesc){
  //   $this->db->like('nama_lengkap', $search); // Untuk menambahkan query where LIKE
  //   $this->db->or_like('email', $search); // Untuk menambahkan query where OR LIKE
  //   $this->db->or_like('nim', $search); // Untuk menambahkan query where OR LIKE
  //   $this->db->or_like('no_hp', $search);
  //   $this->db->or_like('semester', $search);
  //   $this->db->or_like('jk', $search);
  //   $this->db->or_like('peminatan', $search);
  //   $this->db->or_like('jumlah_sks_proses', $search); 
  //   $this->db->or_like('jumlah_sks_lulus', $search);
  //   $this->db->or_like('ipk', $search);
  //   $this->db->or_like('jumlah_nilai_D', $search);
  //   $this->db->or_like('jumlah_nilai_E', $search);
  //   $this->db->or_like('judul_skripsi', $search);
  //   $this->db->or_like('pembimbing_1', $search);
  //   $this->db->or_like('pembimbing_2', $search);
  //   $this->db->or_like('khs', $search);
  //   $this->db->or_like('krs', $search);
  //   $this->db->or_like('status', $search);// Untuk menambahkan query where OR LIKE
  //   $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
  //   $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
  //   return $this->db->get('tbl_verifikasi_daftarta2')->result_array(); // Eksekusi query sql sesuai kondisi diatas
  // 	}

  //   public function count_all(){
  //   return $this->db->count_all('tbl_verifikasi_daftarta2'); // Untuk menghitung semua data siswa
  // 	}

  // 	public function count_filter($search){
  //  $this->db->like('nama_lengkap', $search); // Untuk menambahkan query where LIKE
  //   $this->db->or_like('email', $search); // Untuk menambahkan query where OR LIKE
  //   $this->db->or_like('nim', $search); // Untuk menambahkan query where OR LIKE
  //   $this->db->or_like('no_hp', $search);
  //   $this->db->or_like('semester', $search);
  //   $this->db->or_like('jk', $search);
  //   $this->db->or_like('peminatan', $search);
  //   $this->db->or_like('jumlah_sks_proses', $search); 
  //   $this->db->or_like('jumlah_sks_lulus', $search);
  //   $this->db->or_like('ipk', $search);
  //   $this->db->or_like('jumlah_nilai_D', $search);
  //   $this->db->or_like('jumlah_nilai_E', $search);
  //   $this->db->or_like('judul_skripsi', $search);
  //   $this->db->or_like('pembimbing_1', $search);
  //   $this->db->or_like('pembimbing_2', $search);
  //   $this->db->or_like('khs', $search);
  //   $this->db->or_like('krs', $search);
  //   $this->db->or_like('status', $search); // Untuk menambahkan query where OR LIKE
  //   return $this->db->get('tbl_verifikasi_daftarta2')->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
 	//  }
 
 }

?>