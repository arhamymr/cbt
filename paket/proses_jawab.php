<?php

	include "../conn.php";
	$nisn=$_POST['nisn'];
	$no_paket= $_POST['no_paket'];
	$nama_sekolah=$_POST['nama_sekolah'];
	$arrayNilai=array();
	for($i=1;$i<=40;$i++)
	{
		$q=mysqli_query($con,"SELECT soal$i AS nilai FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
		$r=mysqli_fetch_assoc($q);
		$nilai=$r['nilai'];
		array_push($arrayNilai,$nilai);
	}

	$nilai_total=array_sum($arrayNilai);

	$query = mysqli_query($con,"UPDATE tb_jawaban SET nilai='$nilai_total',waktu_akhir=CURRENT_TIMESTAMP() WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'") or die("gagal update");
	echo 1;
?>