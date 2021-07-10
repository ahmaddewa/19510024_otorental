<?php

class LaporanPdf extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->library('pdf');
		$this->load->database();
	}

	function index(){
		$pdf = new FPDF('l', 'mm', 'A3');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(300,4,' DATA MOBIL ',0,1,'C');
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(300,7,' OTO RENTAL ',0,1,'C');
		$pdf->Cell(10,7,'',0,1,'C');
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(40,6,'NAMA',1,0);
		$pdf->Cell(25,6,'WARNA',1,0);
		$pdf->Cell(50,6,'NOPOL',1,0);
		$pdf->Cell(50,6,'JUMLAH KURSI',1,0);
		$pdf->Cell(50,6,'TAHUN',1,0);
		$pdf->Cell(50,6,'MERK',1,0);
		$pdf->Cell(50,6,'GAMBAR',1,1);

		$pdf->SetFont('Arial','',10);
		
		
		$mobil = $this->db->get('mobil')->result();
		foreach ($mobil as $row) {
			$image1 = base_url('img_mobil/'.$row->gambar.'');
			
			$pdf->Cell(40,30,$row->nama_mobil,1,0, 'C');
			$pdf->Cell(25,30,$row->warna,1,0, 'C');
			$pdf->Cell(50,30,$row->nopol,1,0, 'C');
			$pdf->Cell(50,30,$row->jumlah_kursi,1,0, 'C');
			$pdf->Cell(50,30,$row->tahun,1,0, 'C');
			$pdf->Cell(50,30,$row->merk,1,0, 'C');
			//$pdf->Cell(50,6,$pdf->Image($image1),1,1);
			$pdf->Cell( 50, 30, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 33.78), 1,1, 'C', false );
			
			
		}

		$pdf->Output("laporan_otorental.pdf","I");

	}

}

?>