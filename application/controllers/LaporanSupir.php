<?php

class LaporanSupir extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->library('pdf');
		$this->load->database();
	}

	function index(){
		$pdf = new FPDF('L', 'mm', 'A5');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(200,4,' DATA SOPIR ',0,1,'C');
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(200,7,' OTO RENTAL ',0,1,'C');
		$pdf->Cell(10,7,'',0,1,'C');
		$pdf->SetFont('Arial','B',5);
		$pdf->Cell(20,6,'NAMA SUPIR',1,0);
		$pdf->Cell(25,6,'NO HP SUPIR',1,0);
		$pdf->Cell(20,6,'JENIS KELAMIN',1,0);
		$pdf->Cell(40,6,'ALAMAT SUPIR',1,0);
		$pdf->Cell(20,6,'PENGALAMAN',1,0);
		$pdf->Cell(35,6,'FOTO',1,0);
		$pdf->Cell(30,6,'NIK',1,1);

		$pdf->SetFont('Arial','',5);
		
		
		$mobil = $this->db->get('sopir')->result();
		foreach ($mobil as $row) {
			$image1 = base_url('img_mobil/'.$row->foto.'');
			
			$pdf->Cell(20,50,$row->nama,1,0, 'C');
			$pdf->Cell(25,50,$row->no_hp,1,0, 'C');
			$pdf->Cell(20,50,$row->jenis_kelamin,1,0, 'C');
			$pdf->Cell(40,50,$row->alamat,1,0, 'C');
			$pdf->Cell(20,50,$row->pengalaman,1,0, 'C');
			//$pdf->Cell(50,6,$pdf->Image($image1),1,1);
			$pdf->Cell( 35, 50, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 33.78), 1,0, 'C', false );
			$pdf->Cell(30,50,$row->no_ktp,1,1, 'C');

			
		}

		$pdf->Output("laporan_supir.pdf","I");

	}

}

?>