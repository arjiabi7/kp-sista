<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cetakpdf_penilaian_sidang extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('Pdf');

    }

    function index(){
        $data = $this->ion_auth_model->tampil_data_verifikasiSidang();
        $data1 = $this->ion_auth_model->tampil_nilai_sidang();
        $data2 = $this->ion_auth_model->tampil_data_verifikasiSeminar();

        foreach ($data as $row) {
    	$pdf = new FPDF('P', 'mm','A4');

        $pdf->AddPage();
        $pdf->setLeftMargin(20);
        $pdf->SetTopMargin(50);


        $pdf->SetFont('Times','B',10);
        $pdf->SetFillColor(187, 237, 26);
        

        $image1 = "assets/img/form/2.png";
        $pdf->Cell(124,25,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(),120,23),1,0);
         $pdf->Cell(3,5,'',0,0);
        $pdf->SetFont('Times','',8);
        $pdf->Cell(23,5,'NO. FORM',1,0);
        $pdf->Cell(27,5,'',1,1,'C');
        $pdf->Cell(124,5,'',0,0,'C');
        $pdf->Cell(3,5,'',0,0);
        $pdf->Cell(23,5,'TGL. BERLAKU',1,0);
        $pdf->Cell(27,5,'',1,1,'C');
        $pdf->Cell(124,5,'',0,0,'C');
        $pdf->Cell(3,5,'',0,0);
        $pdf->Cell(23,5,'NO. REVISI',1,0);
        $pdf->Cell(27,5,'',1,1,'C');
        $pdf->Cell(124,5,'',0,0,'C');
        $pdf->Cell(3,5,'',0,0);
        $pdf->Cell(27,2,'',0,1);
        $pdf->Cell(124,2,'',0,0,'C');
        $pdf->Cell(3,2,'',0,0);
        $pdf->SetFont('Times','',9);
        $pdf->Cell(8,8,'NO.',1,0,'C');
        $pdf->Cell(11,8,'',1,0);
        $pdf->Cell(20,8,'TA. ANGK.',1,0,'C');
        $pdf->Cell(11,8,'',1,1);
        $pdf->SetFillColor(187, 237, 26);
        $pdf->SetFont('Times','B',11);
        $pdf->Cell(127,10,'FORM PENILAIAN DOSEN PENGUJI / REVIEWER 1',0,0,'C');
        $pdf->Cell(50,8,'',1,1,'C');
        $pdf->Cell(3,3,'',0,1);
        $pdf->SetFillColor(25, 28, 27);
        $pdf->SetTextColor(252,252,252);
        $pdf->Cell(25,8,'TA-F16 A',1,0,'C',true);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFillColor(187, 237, 26);
        $pdf->Cell(140.5,8,'FORM PENILAIAN SIDANG SKRIPSI',1,0,'C',true);
        $pdf->SetFillColor(25, 28, 27);
        $pdf->SetTextColor(252,252,252);
        $pdf->Cell(12,8,'R-1',1,1,'C',true);
        $pdf->Cell(3,3,'',0,1);
        $pdf->SetFillColor(187, 237, 26);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Times','',10);
        $pdf->Cell(25,14,'JADWAL',1,0);
        $pdf->Cell(17,7,'HARI',1,0,'C',true);
        $pdf->Cell(30,7,'TGL./BLN./THN.',1,0,'C',true);
        $pdf->Cell(40,7,'WAKTU / TEMPAT',1,0,'C',true);
        $pdf->Cell(66,7,'NOMOR BERITA ACARA',1,1,'C',true);
        $pdf->Cell(25,14,'',0,0);
        $pdf->Cell(17,7,$row->hari_sidang,1,0);
        $pdf->Cell(30,7,$row->tgl_sidang,1,0,'');
        $pdf->Cell(26,7,$row->jam_sidang,1,0,'C');
        $pdf->Cell(14,7,$row->tempat_sidang,1,0,'C');
        $pdf->Cell(66,7,'',1,1,'C');
        $pdf->Cell(3,3,'',0,1);

        $pdf->Cell(25,28,'PESERTA',1,0);
        $pdf->Cell(30,7,'NAMA LENGKAP',1,0,'C',true);
        $pdf->Cell(75,7,$row->nama_lengkap,1,0,'C');
        $pdf->Cell(14,7,'NIM',1,0,'C',true);
        $pdf->Cell(34,7,$row->nim,1,1,'C');
        $pdf->Cell(25,14,'',0,0);
        }
        foreach ($data2 as $row2) {
        $pdf->Cell(30,7,'SEMESTER',1,0,'C',true);
        $pdf->Cell(17,7,$row2->semester,1,0,'C');
        $pdf->Cell(35,7,'PEMINATAN',1,0,'C',true);
        $pdf->Cell(71,7,$row2->peminatan,1,1,'C');
        $pdf->Cell(25,14,'',0,0);
        }
        $pdf->Cell(30,14,'JUDUL',1,0,'C',true);
        $pdf->Cell(123,14,$row->judul_skripsi,1,1,'C');
        
        $pdf->Cell(3,3,'',0,1);
        foreach ($data1 as $row1) {
        $pdf->Cell(25,7,'PENILAIAN',1,0,'C',true);
        $pdf->Cell(8,7,'NO.',1,0,'C',true);
        $pdf->Cell(97,7,'KOMPONEN YANG DINILAI',1,0,'C',true);
        $pdf->Cell(24,7,'NILAI MAKS',1,0,'C',true);
        $pdf->Cell(24,7,'NILAI',1,1,'C',true);
        $pdf->Cell(25,49,'BIMBINGAN',1,0,'C');
        $pdf->Cell(8,7,'1.',1,0,'C');
        $pdf->Cell(97,7,'PEMAHAMAN PENELITIAN',1,0);
        $pdf->Cell(24,7,'15',1,0,'C');
        $pdf->Cell(24,7,$row1->pemahaman_penelitian,1,1,'C');
        $pdf->Cell(25,14,'',0,0);
        $pdf->Cell(8,7,'2.',1,0,'C');
        $pdf->Cell(97,7,'KEDALAMAN TEORI KEILMUAN',1,0);
        $pdf->Cell(24,7,'20',1,0,'C');
        $pdf->Cell(24,7,$row1->teori_keilmuan,1,1,'C');
        $pdf->Cell(25,7,'',0,0,'C');
        $pdf->Cell(8,7,'3.',1,0,'C');
        $pdf->Cell(97,7,'METODE PENELITIAN',1,0);
        $pdf->Cell(24,7,'15',1,0,'C');
        $pdf->Cell(24,7,$row1->metode_penelitian,1,1,'C');
        $pdf->Cell(25,7,'',0,0,'C');
        $pdf->Cell(8,7,'4.',1,0,'C');
        $pdf->Cell(97,7,'ANALISIS HASIL PENELITIAN',1,0);
        $pdf->Cell(24,7,'20',1,0,'C');
        $pdf->Cell(24,7,$row1->analisis_penelitian,1,1,'C');
        $pdf->Cell(25,7,'',0,0,'C');
        $pdf->Cell(8,7,'5.',1,0,'C');
        $pdf->Cell(97,7,'TEKNIK PRESENTASI',1,0);
        $pdf->Cell(24,7,'10',1,0,'C');
        $pdf->Cell(24,7,$row1->teknik_presentasi,1,1,'C');
        $pdf->Cell(25,7,'',0,0,'C');
        $pdf->Cell(8,7,'6.',1,0,'C');
        $pdf->Cell(97,7,'TEKNIK PENULISAN',1,0);
        $pdf->Cell(24,7,'10',1,0,'C');
        $pdf->Cell(24,7,$row1->teknik_penulisan,1,1,'C');
        $pdf->Cell(25,7,'',0,0,'C');
        $pdf->Cell(8,7,'7.',1,0,'C');
        $pdf->Cell(97,7,'PEMAHAMAN PENGEMBANGAN PERANGKAT LUNAK',1,0);
        $pdf->Cell(24,7,'10',1,0,'C');
        $pdf->Cell(24,7,$row1->pemahaman_software,1,1,'C');
        $jumlah = $row1->pemahaman_penelitian + $row1->teori_keilmuan + $row1->metode_penelitian + $row1->analisis_penelitian + $row1->teknik_presentasi + $row1->teknik_penulisan + $row1->pemahaman_software;

        $pdf->Cell(130,7,'JUMLAH NILAI',1,0,'R');
        $pdf->Cell(24,7,'100',1,0,'C');
        $pdf->Cell(24,7,$jumlah,1,1,'C');

        $pdf->Cell(3,3,'',0,1);

        $pdf->Cell(25,70,'SARAN',1,0,'C');
        $pdf->Cell(153,70,$row1->revisi_saran,1,1,'C');

        $pdf->Cell(3,3,'',0,1);

        $pdf->Cell(25,30,'PENGESAHAN',1,0,'C');
        $pdf->Cell(76.5,30,'PERHATIAN : DOKUMEN HARUS DISETUJUI',1,0,'C');
        $pdf->Cell(76.5,15,'PERSETUJUAN',1,1,'C',true);
        $pdf->Cell(101.5,4,'',0,0,'C');
        $pdf->Cell(38.25,7.5,'YA',1,0,'C');
        $pdf->Cell(38.25,7.5,'TIDAK',1,1,'C');
        $pdf->Cell(101.5,4,'',0,0,'C');
        $pdf->Cell(38.25,7.5,'',1,0,'C');
        $pdf->Cell(38.25,7.5,'',1,1,'C');


        }
        $pdf->Output('I','evaluasi seminar');
    }
}


?>