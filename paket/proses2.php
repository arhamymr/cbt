<?php
	include "../conn.php";
	$nisn=$_POST['nisn'];
	$no_soal=$_POST['no_soal'];
	$jawaban_awal=$_POST['jawaban'];
	$no_paket= $_POST['no_paket'];
	//Cek jawaban benar atau salah di tabel soal
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
	$q=mysqli_query($con,"SELECT COUNT(*) as jawaban FROM $tabel WHERE no_soal='$no_soal' AND jawaban='$jawaban_awal'");
	$r=mysqli_fetch_assoc($q);
	$jawaban=$r['jawaban'];
	//Update di tiap2 masing2 jawaban
	if($no_soal==1)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal1='$jawaban',status1='1',jawab1='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==2)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal2='$jawaban',status2='1',jawab2='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==3)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal3='$jawaban',status3='1',jawab3='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==4)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal4='$jawaban',status4='1',jawab4='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==5)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal5='$jawaban',status5='1',jawab5='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==6)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal6='$jawaban',status6='1',jawab6='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==7)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal7='$jawaban',status7='1',jawab7='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==8)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal8='$jawaban',status8='1',jawab8='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==9)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal9='$jawaban',status9='1',jawab9='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==10)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal10='$jawaban',status10='1',jawab10='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==11)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal11='$jawaban',status11='1',jawab11='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==12)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal12='$jawaban',status12='1',jawab12='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==13)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal13='$jawaban',status13='1',jawab13='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==14)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal14='$jawaban',status14='1',jawab14='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==15)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal15='$jawaban',status15='1',jawab15='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==16)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal16='$jawaban',status16='1',jawab16='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==17)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal17='$jawaban',status17='1',jawab17='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==18)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal18='$jawaban',status18='1',jawab18='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==19)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal19='$jawaban',status19='1',jawab19='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==20)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal20='$jawaban',status20='1',jawab20='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==21)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal21='$jawaban',status21='1',jawab21='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==22)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal22='$jawaban',status22='1',jawab22='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==23)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal23='$jawaban',status23='1',jawab23='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==24)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal24='$jawaban',status24='1',jawab24='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}else if($no_soal==25)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal25='$jawaban',status25='1',jawab25='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==26)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal26='$jawaban',status26='1',jawab26='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}else if($no_soal==27)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal27='$jawaban',status27='1',jawab27='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==28)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal28='$jawaban',status28='1',jawab28='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==29)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal29='$jawaban',status29='1',jawab29='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==30)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal30='$jawaban',status30='1',jawab30='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==31)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal31='$jawaban',status31='1',jawab31='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==32)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal32='$jawaban',status32='1',jawab32='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==33)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal33='$jawaban',status33='1',jawab33='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==34)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal34='$jawaban',status34='1',jawab34='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==35)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal35='$jawaban',status35='1',jawab35='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==36)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal36='$jawaban',status36='1',jawab36='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==37)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal37='$jawaban',status37='1',jawab37='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==38)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal38='$jawaban',status38='1',jawab38='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==39)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal39='$jawaban',status39='1',jawab39='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	else if($no_soal==40)
	{
		mysqli_query($con,"UPDATE tb_jawaban SET soal40='$jawaban',status40='1',jawab40='$jawaban_awal' WHERE nisn='$nisn' AND no_paket='$no_paket'") or die("gagal update");
	}
	
?>