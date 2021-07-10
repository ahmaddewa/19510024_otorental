<?php

class LaporanTransaksi extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->library('pdf');
		$this->load->database();
	}

	function index(){
		$pdf = new FPDF('L', 'mm', 'A4');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(280,4,' DATA TRANSAKSI ',0,1,'C');
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(280,7,' OTO RENTAL ',0,1,'C');
		$pdf->Cell(10,7,'',0,1,'C');
		$pdf->SetFont('Arial','B',5);
		$pdf->Cell(20,6,'NAMA CUSTOMER',1,0);
		$pdf->Cell(25,6,'NO HP CUSTOMER',1,0);
		$pdf->Cell(20,6,'JENIS KELAMIN',1,0);
		$pdf->Cell(40,6,'ALAMAT CUSTOMER',1,0);
		$pdf->Cell(20,6,'MOBIL',1,0);
		$pdf->Cell(30,6,'PERJALANAN',1,0);
		$pdf->Cell(20,6,'JENIS BAYAR',1,0);
		$pdf->Cell(30,6,'HARGA',1,0);
		$pdf->Cell(35,6,'FOTO KTP',1,0);
		$pdf->Cell(20,6,'TGL PINJAM',1,0);
		$pdf->Cell(20,6,'TGL KEMBALI',1,1);

		$pdf->SetFont('Arial','',5);
		
		
		$mobil = $this->db->get('penyewa')->result();
		foreach ($mobil as $row) {
			$image1 = base_url('img_mobil/'.$row->foto_ktp.'');
			
			$pdf->Cell(20,30,$row->nama,1,0, 'C');
			$pdf->Cell(25,30,$row->no_hp,1,0, 'C');
			$pdf->Cell(20,30,$row->jenis_kelamin,1,0, 'C');
			$pdf->Cell(40,30,$row->alamat_penyewa,1,0, 'C');
			$pdf->Cell(20,30,$row->mobil,1,0, 'C');
			$pdf->Cell(30,30,$row->perjalanan,1,0, 'C');
			$pdf->Cell(20,30,$row->jenis_bayar,1,0, 'C');
			$pdf->Cell(30,30,$row->harga,1,0, 'C');
			//$pdf->Cell(50,6,$pdf->Image($image1),1,1);
			$pdf->Cell( 35, 30, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 33.78), 1,0, 'C', false );
			$pdf->Cell(20,30,$row->tgl_pinjam,1,0, 'C');
			$pdf->Cell(20,30,$row->tgl_kembali,1,1, 'C');
			

			
			
		}

		$pdf->Output("laporan_transaksi.pdf","I");

	}

}

?>