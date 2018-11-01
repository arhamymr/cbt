<?php
	session_start();
	$username=$_SESSION['username'];
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
			$this->Image('../images/tut.jpg',1,1,3,'L');
			$this->Cell(20,1,"LAPORAN HASIL JAWABAN",0,1,'C');
			$this->Cell(20,1,"Computerised Based Testing",0,1,'C');
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
	$bulan=$_GET['bulan'];
	$tahun=$_GET['tahun'];
    $pdf=new PDF('P','cm','A4');
	$pdf->AliasNbPages();
    $pdf->AddPage();
	$pdf->SetFont('Arial','B','12');
	$nisn=$_GET['nisn'];
	$no_paket=$_GET['no_paket'];
	$qj=mysqli_query($con,"SELECT * FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
	$rj=mysqli_fetch_assoc($qj);
	$pdf->Cell(19,1,'NISN : '.$nisn,'',1,'L');
	$pdf->Cell(19,1,'Nama siswa : '.$rj['nama_siswa'].'','',1,'L');
	$pdf->Cell(19,1,'Asal sekolah : '.$rj['nama_sekolah'].'','',1,'L');
	$pdf->Cell(19,1,'Waktu mulai : '.$rj['waktu_awal'].'','',1,'L');
	$pdf->Cell(19,1,'Waktu berakhir : '.$rj['waktu_akhir'].'','',1,'L');
	$pdf->Cell(19,1,'Nilai Huruf: '.$rj['nilai'].'','',1,'L');
	if($rj['nilai']>=96)
	{
		$nilaiAngka="A";
	}
	else if($rj['nilai']>=91)
	{
		$nilaiAngka="A-";
	}
	else if($rj['nilai']>=86)
	{
		$nilaiAngka="B+";
	}
	else if($rj['nilai']>=81)
	{
		$nilaiAngka="B";
	}
	else if($rj['nilai']>=75)
	{
		$nilaiAngka="B-";
	}
	else if($rj['nilai']>=70)
	{
		$nilaiAngka="C_";
	}
	else if($rj['nilai']>=65)
	{
		$nilaiAngka="C";
	}
	else if($rj['nilai']>=60)
	{
		$nilaiAngka="C-";
	}
	else if($rj['nilai']>=55)
	{
		$nilaiAngka="D+";
	}
	else 
	{
		$nilaiAngka="D";
	}
	$pdf->Cell(19,1,'Nilai Angka: '.$nilaiAngka.'','',1,'L');
	$pdf->SetFont('Arial','B','14');
	$pdf->Cell(19,1,'Kunci jawaban','B',1,'C');
	$pdf->Cell(19,.09,'','B',1,'C');
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
	$q=mysqli_query($con,"SELECT * FROM $tabel ");
	while($r=mysqli_fetch_array($q)){
		$pdf->SetFont('Arial','','10');
		$i=$i+1;
		$pdf->Cell(18,1,"$i.".$r['pertanyaan']."",'',1,'L');
		$pdf->Cell(18,1,"a. ".$r['jawaban_a'],'',1,'L');
		$pdf->Cell(18,1,"b. ".$r['jawaban_b'],'',1,'L');
		$pdf->Cell(18,1,"c. ".$r['jawaban_c'],'',1,'L');
		$pdf->Cell(18,1,"d. ".$r['jawaban_d'],'',1,'L');
		$pdf->Cell(18,1,"e. ".$r['jawaban_e'],'',1,'L');
		$pdf->SetFont('Arial','IB','10');
		$pdf->Cell(18,1,"Jawaban yang benar : ".$r['jawaban'],'',1,'L');	
	}
	$pdf->Cell(19,1,'Jawaban anda','B',1,'C');
	$q2=mysqli_query($con,"SELECT * FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
	while($r2=mysqli_fetch_array($q2)){
		$pdf->SetFont('Arial','','10');
		$pdf->Cell(4.5,1,"1. ".$r2['jawab1']."",'',0,'L');$pdf->Cell(4.5,1,"2. ".$r2['jawab2']."",'',0,'L');$pdf->Cell(4.5,1,"3. ".$r2['jawab3']."",'',0,'L');$pdf->Cell(4.5,1,"4. ".$r2['jawab4']."",'',1,'L');
		$pdf->Cell(4.5,1,"5. ".$r2['jawab5']."",'',0,'L');$pdf->Cell(4.5,1,"6. ".$r2['jawab6']."",'',0,'L');$pdf->Cell(4.5,1,"7. ".$r2['jawab7']."",'',0,'L');$pdf->Cell(4.5,1,"8. ".$r2['jawab8']."",'',1,'L');
		$pdf->Cell(4.5,1,"9. ".$r2['jawab9']."",'',0,'L');$pdf->Cell(4.5,1,"10. ".$r2['jawab10']."",'',0,'L');$pdf->Cell(4.5,1,"11. ".$r2['jawab11']."",'',0,'L');$pdf->Cell(4.5,1,"12. ".$r2['jawab12']."",'',1,'L');
		$pdf->Cell(4.5,1,"13. ".$r2['jawab13']."",'',0,'L');$pdf->Cell(4.5,1,"14. ".$r2['jawab14']."",'',0,'L');$pdf->Cell(4.5,1,"15. ".$r2['jawab15']."",'',0,'L');$pdf->Cell(4.5,1,"15. ".$r2['jawab15']."",'',1,'L');
		$pdf->Cell(4.5,1,"16. ".$r2['jawab16']."",'',0,'L');$pdf->Cell(4.5,1,"17. ".$r2['jawab17']."",'',0,'L');$pdf->Cell(4.5,1,"18. ".$r2['jawab18']."",'',0,'L');$pdf->Cell(4.5,1,"19. ".$r2['jawab19']."",'',1,'L');
		$pdf->Cell(4.5,1,"20. ".$r2['jawab20']."",'',0,'L');$pdf->Cell(4.5,1,"21. ".$r2['jawab21']."",'',0,'L');$pdf->Cell(4.5,1,"22. ".$r2['jawab22']."",'',0,'L');$pdf->Cell(4.5,1,"23. ".$r2['jawab23']."",'',1,'L');
		$pdf->Cell(4.5,1,"24. ".$r2['jawab24']."",'',0,'L');$pdf->Cell(4.5,1,"25. ".$r2['jawab25']."",'',0,'L');$pdf->Cell(4.5,1,"26. ".$r2['jawab26']."",'',0,'L');$pdf->Cell(4.5,1,"27. ".$r2['jawab27']."",'',1,'L');
		$pdf->Cell(4.5,1,"28. ".$r2['jawab28']."",'',0,'L');$pdf->Cell(4.5,1,"29. ".$r2['jawab29']."",'',0,'L');$pdf->Cell(4.5,1,"30. ".$r2['jawab30']."",'',0,'L');$pdf->Cell(4.5,1,"31. ".$r2['jawab32']."",'',1,'L');
		$pdf->Cell(4.5,1,"33. ".$r2['jawab33']."",'',0,'L');$pdf->Cell(4.5,1,"34. ".$r2['jawab34']."",'',0,'L');$pdf->Cell(4.5,1,"35. ".$r2['jawab35']."",'',0,'L');$pdf->Cell(4.5,1,"36. ".$r2['jawab36']."",'',1,'L');
		$pdf->Cell(4.5,1,"37. ".$r2['jawab37']."",'',0,'L');$pdf->Cell(4.5,1,"38. ".$r2['jawab38']."",'',0,'L');$pdf->Cell(4.5,1,"39. ".$r2['jawab39']."",'',0,'L');$pdf->Cell(4.5,1,"40. ".$r2['jawab40']."",'',1,'L');
		$pdf->Cell(4.5,1,"41. ".$r2['jawab41']."",'',0,'L');$pdf->Cell(4.5,1,"42. ".$r2['jawab42']."",'',0,'L');$pdf->Cell(4.5,1,"43. ".$r2['jawab3']."",'',0,'L');$pdf->Cell(4.5,1,"44. ".$r2['jawab4']."",'',1,'L');
		$pdf->Cell(4.5,1,"45. ".$r2['jawab45']."",'',0,'L');$pdf->Cell(4.5,1,"46. ".$r2['jawab46']."",'',0,'L');$pdf->Cell(4.5,1,"46. ".$r2['jawab46']."",'',0,'L');$pdf->Cell(4.5,1,"47. ".$r2['jawab47']."",'',1,'L');
		$pdf->Cell(4.5,1,"48. ".$r2['jawab48']."",'',0,'L');$pdf->Cell(4.5,1,"49. ".$r2['jawab49']."",'',0,'L');$pdf->Cell(4.5,1,"50. ".$r2['jawab50']."",'',1,'L');
		
		$pdf->SetFont('Arial','IB','10');
	}
	$pdf->Output();
    ?>