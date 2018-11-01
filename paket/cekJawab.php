<?php
	#cek jumlah yang telah dijawab(pokoknya harus sama dengan 50)
	include "../conn.php";
	$no_paket= $_POST['no_paket'];
	$nisn=$_POST['nisn'];
	$array_jawab=array();
	for($i=1;$i<=40;$i++)
	{
		$q=mysqli_query($con,"SELECT status$i FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_row($q);
		$status=$r[0];
		array_push($array_jawab,$status);
		
	}
	$jumlahDijawab=array_sum($array_jawab);
	echo $jumlahDijawab;
?>