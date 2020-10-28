<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cetakpdf_evaluasi_seminar extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('Pdf');

    }

   
	function index()
	{
        $pdf = new FPDF('P', 'mm','A4');

        $pdf->AddPage();
        $pdf->setLeftMargin(20);
        $pdf->SetTopMargin(50);


        $pdf->SetFont('Times','B',10);
        $pdf->SetFillColor(187, 237, 26);
        $pdf->Cell(30,6,'DOKUMEN',0,0,'C',true);

        
        $pdf->Cell(3,5,'',0,0);
        $pdf->SetFont('Times','',8);
        $pdf->Cell(13,6,'No. REG',0,0,'C',true);
        $pdf->Cell(0.5,5,'',0,0,'C');
        $pdf->Cell(8,6,'',0,0,'C',true);
        $pdf->Cell(0.5,5,'',0,0,'C');
        $pdf->Cell(24,6,'TA ANGKATAN',0,0,'C',true);
        $pdf->Cell(0.5,5,'',0,0,'C');
        $pdf->Cell(8,6,'',0,0,'C',true);
        $pdf->Cell(37,5,'',0,0,'C');
        $pdf->Cell(23,5,'NO. FORM',1,0);
        $pdf->Cell(27,5,'',1,1,'C');
        
        $pdf->SetFont('Times','B',10);
        $pdf->Cell(30,5,'SEMINAR TA-II',0,0,'C',true);
        $pdf->Cell(94.5,5,'',0,0,'C');
        $pdf->SetFont('Times','',8);
        $pdf->Cell(23,5,'TGL. BERLAKU',1,0);
        $pdf->Cell(27,5,'',1,1,'C');
        $pdf->Cell(124.5,5,'',0,0,'C');
        $pdf->Cell(23,5,'NO. REVISI',1,0);
        $pdf->Cell(27,5,'',1,1,'C');
        $pdf->Cell(3,2,'',0,1);
        $image1 = "assets/img/form/2.png";
        $pdf->Cell(124,25,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(),120,23),0,0);
        $pdf->Cell(0.5,1,'',0,0);
        $pdf->SetFont('Times','B',45);
        $pdf->Cell(50,15,'P1',1,1,'C');
        $pdf->Cell(124.5,5,'',0,0,'C');
        $pdf->SetFont('Times','B',11);
        $pdf->Cell(50,10,'DOSEN PEMBIMBING 1',1,1,'C');
        $pdf->Cell(5,3,'',0,1);
        $pdf->SetFillColor(25, 28, 27);
        $pdf->SetTextColor(252,252,252);
        $pdf->SetLineWidth(0.5);

        $pdf->Cell(25,8,'TA-F11.A',1,0,'C',true);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFillColor(187, 237, 26);
        $pdf->Cell(149.5,8,'FORM EVALUASI DAN PENILAIAN SEMINAR TA-II',1,1,'C',true);
        $pdf->Cell(5,3,'',0,1);
        $pdf->SetFont('Times','',11);
        $pdf->SetLineWidth(0);
        //$pdf->MultiCell(25,7,'JADWAL SEMINAR',1,1);
        $pdf->Cell(25,14,'JADWAL',1,0,'',true);
        $pdf->Cell(15,7,'HARI',1,0,'C',true);
        $pdf->Cell(30,7,'TGL./BLN./THN.',1,0,'C',true);
        $pdf->Cell(37,7,'WAKTU / TEMPAT',1,0,'C',true);
        $pdf->Cell(68,7,'NOMOR BERITA ACARA',1,1,'C',true);
        $pdf->Cell(25,14,'',0,0);
        $pdf->Cell(15,7,'',1,0);
        $pdf->Cell(30,7,'',1,0,'');
        $pdf->Cell(23,7,'',1,0,'C');
        $pdf->Cell(14,7,'',1,0,'C');
        $pdf->Cell(68,7,'',1,1,'C');
        $pdf->Cell(25,14,'DOSEN REV',1,0,'',true);
        $pdf->Cell(5,7,'1.',1,0);
        $pdf->Cell(77,7,'',1,0);
        $pdf->Cell(10,7,'NID.',1,0,'C',true);
        $pdf->Cell(34,7,'',1,0);
        $pdf->Cell(10,7,'ID.',1,0,'C',true);
        $pdf->Cell(14,7,'',1,1);
        $pdf->Cell(25,14,'',0,0);
        $pdf->Cell(5,7,'2.',1,0);
        $pdf->Cell(77,7,'',1,0);
        $pdf->Cell(10,7,'NID.',1,0,'C',true);
        $pdf->Cell(34,7,'',1,0);
        $pdf->Cell(10,7,'ID.',1,0,'C',true);
        $pdf->Cell(14,7,'',1,1);

        $pdf->Cell(5,3,'',0,1);
        $pdf->Cell(25,50,'DATA MHSW',1,0,'',true);
        $pdf->Cell(40,7,'NIM / NAMA',1,0);
        $pdf->Cell(35,7,'',1,0);
        $pdf->Cell(75,7,'',1,1);
        $pdf->Cell(25,7,'',0,0);
        $pdf->Cell(40,7,'SMT/TA/PEMINATAN',1,0);
        $pdf->Cell(10,7,'',1,0);
        $pdf->Cell(40,7,'',1,0);
        $pdf->Cell(60,7,'',1,1);
        $pdf->Cell(25,14,'',0,0);
        $pdf->Cell(40,14,'DOSEN PEM',1,0);
        $pdf->Cell(64,7,'',1,0);
        $pdf->Cell(10,7,'NID.',1,0,'C',true);
        $pdf->Cell(28,7,'',1,0);
        $pdf->Cell(8,7,'',1,1);
        $pdf->Cell(65,7,'',0,0);
        $pdf->Cell(64,7,'',1,0);
        $pdf->Cell(10,7,'NID.',1,0,'C',true);
        $pdf->Cell(28,7,'',1,0);
        $pdf->Cell(8,7,'',1,1);
        $pdf->Cell(25,14,'',0,0);
        $pdf->Cell(40,22,'JUDUL PENELITIAN',1,0);
        $pdf->Cell(110,22,'',1,1);

        $pdf->Cell(5,3,'',0,1);
        $pdf->SetFont('Times','B',16);
        $pdf->Cell(65,12,'PENILAIAN',1,0,'C');
        $pdf->Cell(110,12,'HASIL EVALUASI',1,1,'C');
        $pdf->Cell(5,3,'',0,1);
        $pdf->SetFont('Times','B',11);
        $pdf->SetFont('Times','',11);
        $pdf->Cell(63,12,'PEMAHAMAN TEORI',1,0,'C',true);
        $pdf->Cell(2,2,'',0,0,'C');
        $pdf->Cell(110,12,'',1,1);
        $pdf->Cell(63,7,'',1,1);
        $pdf->Cell(2,2,'',0,1,'C');
        $pdf->Cell(63,12,'PEMAHAMAN KEBUTUHAN',1,0,'C',true);
        $pdf->Cell(2,2,'',0,0,'C');
        $pdf->Cell(110,12,'',1,1);
        $pdf->Cell(63,7,'',1,1);
        $pdf->Cell(2,2,'',0,1,'C');
        $pdf->Cell(63,12,'PEMAHAMAN PEMBUATAN',1,0,'C',true);
        $pdf->Cell(2,2,'',0,0,'C');
        $pdf->Cell(110,12,'',1,1);
        $pdf->Cell(63,7,'',1,1);
        $pdf->Cell(2,2,'',0,1,'C');
        $pdf->Cell(5,3,'',0,1);

        $pdf->Cell(87.5,7,'HASIL REVIEW / REKOMENDASI SIDANG',1,0,'C',TRUE);
        $pdf->Cell(87.5,7,'',1,1);
        $pdf->Cell(2,2,'',0,1,'C');
        $pdf->SetFont('Times','I',9);
        $pdf->Cell(175,7,'* Dengan mengisi field Persetujuan dibawah ini, berarti Dosen Pembimbing telah sepakat dengan keputusannya.',0,1);
        $pdf->Cell(2,2,'',0,1,'C');
        $pdf->Cell(30,7,'PERSETUJUAN',1,1,'C',true);
        $pdf->Cell(30,7,'',1,1,'C');
        $pdf->Cell(2,7,'',0,1,'C');
        $pdf->Cell(3,3,'',0,0,'C',true);
        $pdf->Cell(3,3,'',0,0,'C');
        $pdf->Cell(90,3,'BERKAS DOKUMEN PELAKSANAAN SEMINAR TUGAS AKHIR - II',0,1);




        

       /* $barang = $this->db->get('barang')->result();
        $no=0;
        foreach ($barang as $data){
            $pdf->Cell(8,6,$no,1,0);
            $pdf->Cell(100,6,$data->nama_barang,1,0);
            $pdf->Cell(35,6,"Rp ".number_format($data->harga, 0, ".", "."),1,0);
            $pdf->Cell(15,6,$data->stok,1,1);
            $no++;
            */
        
        $pdf->Output('I','evaluasi seminar');
	}
}