<?php
	session_start();
	if (!isset($_SESSION['username'])){
		$username = "default";	
	} else {
		$username=$_SESSION['username'];	
	}
	require('../fpdf/fpdf.php');
	include "../conn.php";
    //memulai pengaturan output PDF
    class PDF extends FPDF
    {
		//untuk pengaturan header halaman
		function Header()
		{
			//Arial bold 15
			$this->SetFont('Arial','B',12);
			//Title
			$this->Image('../images/logo.jpg',1,1,4,'L');
			$this->Cell(18,1,"LAPORAN HASIL JAWABAN",0,1,'C');
			$this->Cell(18,1,"Computerised Based Testing",0,1,'C');
			$this->SetFont('Arial','',10);
			$this->Ln(1.5);
			$this->SetFont('Arial','B',8);
			//Menampilkan tulisan di halaman
		}
		/*untuk pengaturan footer halaman
		function Footer()
		{
			//Position at 1.5 cm from bottom
			$this->SetY(-7);
			//Arial italic 8
			$this->SetFont('Arial','I',8);
			//Page number
			$this->Cell(0,10,'Hal '.$this->PageNo(),0,0,'C');
		}
		*/
	}
   //pengaturan ukuran kertas P = Portrait
	
    $pdf=new PDF('P','cm','A4');
	$pdf->AliasNbPages();
    $pdf->AddPage();
	$pdf->SetFont('Arial','B','12');
	$nisn=$_GET['nisn'];
	$no_paket=$_GET['no_paket'];
	$nama_sekolah=$_GET['nama_sekolah'];
	$qj=mysqli_query($con,"SELECT * FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
	$rj=mysqli_fetch_assoc($qj);
	$arrayNilai=array();
	for($i=1;$i<=40;$i++)
	{
		$q=mysqli_query($con,"SELECT soal$i AS nilai FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$nilai=$r['nilai'];
		array_push($arrayNilai,$nilai);
	}
	$nilai_total=array_sum($arrayNilai);
	$pdf->Cell(19,1,'Nama siswa : '.$rj['nama_siswa'].'','',1,'L');
	$pdf->Cell(19,1,'No absen : '.$nisn,'',1,'L');
	$pdf->Cell(19,1,'Asal sekolah : '.$rj['nama_sekolah'].'','',1,'L');
	$pdf->Cell(19,1,'Waktu mulai : '.$rj['waktu_awal'].'','',1,'L');
	$pdf->Cell(19,1,'Waktu berakhir : '.$rj['waktu_akhir'].'','',1,'L');
	
	$nilaiAngka = ($nilai_total / 40) * 100;
	$pdf->Cell(19,1,'Nilai : '.$nilaiAngka.'','',1,'L');
	$pdf->SetFont('Arial','','14');
	$pdf->Cell(19,.09,'','',1,'C');
	$pdf->SetFont('Arial','B','10');
	$i=0;
	if($no_paket=="paket1")
	{
		$tabel="tb_soal1";
	}
	else if($no_paket=="paket2")
	{
		$tabel="tb_soal2";
	}
	else if($no_paket=="paket3")
	{
		$tabel="tb_soal3";
	}
	else if($no_paket=="paket4")
	{
		$tabel="tb_soal4";
	}
	else if($no_paket=="paket5")
	{
		$tabel="tb_soal5";
	}
	else if($no_paket=="paket6")
	{
		$tabel="tb_soal6";
	}
	$pdf->Output();
    ?>