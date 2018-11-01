<?php
	session_start();
	include "conn.php";
	$nisn=$_POST['nisn'];
	$kelas = $_POST['kelas'];
	$nama_siswa=$_POST['nama_siswa'];
	$nama_sekolah=$_POST['nama_sekolah'];
	$no_paket= $_POST['paket'];
	//Cek apakah ada no nisn sebelumnya atau belum
	$q=mysqli_query($con,"SELECT nisn FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket' AND nama_sekolah='$nama_sekolah'");
	if(mysqli_num_rows($q)==0)
	{
		$query = mysqli_query($con,"INSERT INTO tb_jawaban(nisn,kelas,no_paket,nama_siswa,nama_sekolah,waktu_awal) VALUES('$nisn','$kelas','$no_paket','$nama_siswa','$nama_sekolah',CURRENT_TIMESTAMP())") or die("gagal insert");
		if (!$query){
			echo mysqli_error($con);
		}
		$_SESSION['nama']=$_POST['nama_siswa'];
		echo 1;
	}
	else
	{
		echo "Identitas yang dicantumkan sudah ada";
	}
?>