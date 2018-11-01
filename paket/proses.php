<?php
	include "../conn.php";
	$nisn=$_POST['nisn'];
	$no_soal=$_POST['no_soal'];
	$no_paket= $_POST['no_paket'];
	$nama_sekolah=$_POST['nama_sekolah'];
	if($no_soal=="soal1")
	{
		$q=mysqli_query($con,"SELECT status1 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status1'];
		echo "status1&$status";
	}
	else if($no_soal=="soal2")
	{
		$q=mysqli_query($con,"SELECT status2 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status2'];
		echo "status2&$status";
	}
	else if($no_soal=="soal3")
	{
		$q=mysqli_query($con,"SELECT status3 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status3'];
		echo "status3&$status";
	}
	else if($no_soal=="soal4")
	{
		$q=mysqli_query($con,"SELECT status4 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status4'];
		echo "status4&$status";
	}
	else if($no_soal=="soal5")
	{
		$q=mysqli_query($con,"SELECT status5 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'  AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status5'];
		echo "status5&$status";
	}
	else if($no_soal=="soal6")
	{
		$q=mysqli_query($con,"SELECT status6 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'  AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status6'];
		echo "status6&$status";
	}
	else if($no_soal=="soal7")
	{
		$q=mysqli_query($con,"SELECT status7 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'  AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status7'];
		echo "status7&$status";
	}
	else if($no_soal=="soal8")
	{
		$q=mysqli_query($con,"SELECT status8 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'  AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status8'];
		echo "status8&$status";
	}
	else if($no_soal=="soal9")
	{
		$q=mysqli_query($con,"SELECT status9 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'  AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status9'];
		echo "status9&$status";
	}
	else if($no_soal=="soal10")
	{
		$q=mysqli_query($con,"SELECT status10 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status10'];
		echo "status10&$status";
	}
	else if($no_soal=="soal11")
	{
		$q=mysqli_query($con,"SELECT status11 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status11'];
		echo "status11&$status";
	}
	else if($no_soal=="soal12")
	{
		$q=mysqli_query($con,"SELECT status12 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status12'];
		echo "status12&$status";
	}
	else if($no_soal=="soal13")
	{
		$q=mysqli_query($con,"SELECT status13 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status13'];
		echo "status13&$status";
	}
	else if($no_soal=="soal14")
	{
		$q=mysqli_query($con,"SELECT status14 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status14'];
		echo "status14&$status";
	}
	else if($no_soal=="soal15")
	{
		$q=mysqli_query($con,"SELECT status15 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status15'];
		echo "status15&$status";
	}
	else if($no_soal=="soal16")
	{
		$q=mysqli_query($con,"SELECT status16 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status16'];
		echo "status16&$status";
	}
	else if($no_soal=="soal17")
	{
		$q=mysqli_query($con,"SELECT status17 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status17'];
		echo "status17&$status";
	}
	else if($no_soal=="soal18")
	{
		$q=mysqli_query($con,"SELECT status18 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status18'];
		echo "status18&$status";
	}
	else if($no_soal=="soal19")
	{
		$q=mysqli_query($con,"SELECT status19 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status19'];
		echo "status19&$status";
	}
	else if($no_soal=="soal20")
	{
		$q=mysqli_query($con,"SELECT status20 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status20'];
		echo "status20&$status";
	}
	else if($no_soal=="soal21")
	{
		$q=mysqli_query($con,"SELECT status21 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status21'];
		echo "status21&$status";
	}
	else if($no_soal=="soal22")
	{
		$q=mysqli_query($con,"SELECT status22 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status22'];
		echo "status22&$status";
	}
	else if($no_soal=="soal23")
	{
		$q=mysqli_query($con,"SELECT status23 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status23'];
		echo "status23&$status";
	}
	else if($no_soal=="soal24")
	{
		$q=mysqli_query($con,"SELECT status24 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status24'];
		echo "status24&$status";
	}
	else if($no_soal=="soal25")
	{
		$q=mysqli_query($con,"SELECT status25 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status25'];
		echo "status25&$status";
	}
	else if($no_soal=="soal26")
	{
		$q=mysqli_query($con,"SELECT status26 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status26'];
		echo "status26&$status";
	}
	else if($no_soal=="soal27")
	{
		$q=mysqli_query($con,"SELECT status27 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status27'];
		echo "status27&$status";
	}
	else if($no_soal=="soal28")
	{
		$q=mysqli_query($con,"SELECT status28 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status28'];
		echo "status28&$status";
	}
	else if($no_soal=="soal29")
	{
		$q=mysqli_query($con,"SELECT status29 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status29'];
		echo "status29&$status";
	}
	else if($no_soal=="soal30")
	{
		$q=mysqli_query($con,"SELECT status30 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status30'];
		echo "status30&$status";
	}
	else if($no_soal=="soal31")
	{
		$q=mysqli_query($con,"SELECT status31 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status31'];
		echo "status31&$status";
	}
	else if($no_soal=="soal32")
	{
		$q=mysqli_query($con,"SELECT status32 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status32'];
		echo "status32&$status";
	}
	else if($no_soal=="soal33")
	{
		$q=mysqli_query($con,"SELECT status33 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status33'];
		echo "status33&$status";
	}
	else if($no_soal=="soal34")
	{
		$q=mysqli_query($con,"SELECT status34 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status34'];
		echo "status34&$status";
	}
	else if($no_soal=="soal35")
	{
		$q=mysqli_query($con,"SELECT status35 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status35'];
		echo "status35&$status";
	}
	else if($no_soal=="soal36")
	{
		$q=mysqli_query($con,"SELECT status36 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status36'];
		echo "status36&$status";
	}
	else if($no_soal=="soal37")
	{
		$q=mysqli_query($con,"SELECT status37 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status37'];
		echo "status37&$status";
	}
	else if($no_soal=="soal38")
	{
		$q=mysqli_query($con,"SELECT status38 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status38'];
		echo "status38&$status";
	}
	else if($no_soal=="soal39")
	{
		$q=mysqli_query($con,"SELECT status39 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status39'];
		echo "status39&$status";
	}
	else if($no_soal=="soal40")
	{
		$q=mysqli_query($con,"SELECT status40 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$status=$r['status40'];
		echo "status40&$status";
	}
?>