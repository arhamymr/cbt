<?php
	include "../conn.php";
	$no_soal=$_POST['no_soal'];
	$nisn=$_POST['nisn'];
	$no_paket= $_POST['no_paket'];
	if($no_soal==1)
	{
		$q=mysqli_query($con,"SELECT jawab1 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab1'];
		echo $jawaban;
	}
	else if($no_soal==2)
	{
		$q=mysqli_query($con,"SELECT jawab2 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab2'];
		echo $jawaban;
	}
	else if($no_soal==3)
	{
		$q=mysqli_query($con,"SELECT jawab3 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab3'];
		echo $jawaban;
	}
	else if($no_soal==4)
	{
		$q=mysqli_query($con,"SELECT jawab4 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab4'];
		echo $jawaban;
	}
	else if($no_soal==4)
	{
		$q=mysqli_query($con,"SELECT jawab4 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab4'];
		echo $jawaban;
	}
	else if($no_soal==5)
	{
		$q=mysqli_query($con,"SELECT jawab5 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab5'];
		echo $jawaban;
	}
	else if($no_soal==6)
	{
		$q=mysqli_query($con,"SELECT jawab6 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab6'];
		echo $jawaban;
	}
	else if($no_soal==7)
	{
		$q=mysqli_query($con,"SELECT jawab7 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab7'];
		echo $jawaban;
	}
	else if($no_soal==8)
	{
		$q=mysqli_query($con,"SELECT jawab8 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab8'];
		echo $jawaban;
	}
	
	else if($no_soal==9)
	{
		$q=mysqli_query($con,"SELECT jawab9 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab9'];
		echo $jawaban;
	}
	else if($no_soal==10)
	{
		$q=mysqli_query($con,"SELECT jawab10 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab10'];
		echo $jawaban;
	}
	else if($no_soal==11)
	{
		$q=mysqli_query($con,"SELECT jawab11 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab11'];
		echo $jawaban;
	}
	else if($no_soal==12)
	{
		$q=mysqli_query($con,"SELECT jawab12 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab12'];
		echo $jawaban;
	}
	else if($no_soal==13)
	{
		$q=mysqli_query($con,"SELECT jawab13 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab13'];
		echo $jawaban;
	}
	else if($no_soal==14)
	{
		$q=mysqli_query($con,"SELECT jawab14 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab14'];
		echo $jawaban;
	}
	else if($no_soal==15)
	{
		$q=mysqli_query($con,"SELECT jawab15 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab15'];
		echo $jawaban;
	}
	else if($no_soal==16)
	{
		$q=mysqli_query($con,"SELECT jawab16 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab16'];
		echo $jawaban;
	}
	else if($no_soal==17)
	{
		$q=mysqli_query($con,"SELECT jawab17 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab17'];
		echo $jawaban;
	}
	else if($no_soal==18)
	{
		$q=mysqli_query($con,"SELECT jawab18 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab18'];
		echo $jawaban;
	}
	
	else if($no_soal==4)
	{
		$q=mysqli_query($con,"SELECT jawab19 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab19'];
		echo $jawaban;
	}
	else if($no_soal==20)
	{
		$q=mysqli_query($con,"SELECT jawab20 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab20'];
		echo $jawaban;
	}
	else if($no_soal==21)
	{
		$q=mysqli_query($con,"SELECT jawab21 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab21'];
		echo $jawaban;
	}
	
	else if($no_soal==22)
	{
		$q=mysqli_query($con,"SELECT jawab22 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab22'];
		echo $jawaban;
	}
	
	else if($no_soal==29)
	{
		$q=mysqli_query($con,"SELECT jawab29 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab29'];
		echo $jawaban;
	}
	else if($no_soal==30)
	{
		$q=mysqli_query($con,"SELECT jawab30 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab30'];
		echo $jawaban;
	}
	else if($no_soal==31)
	{
		$q=mysqli_query($con,"SELECT jawab31 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab31'];
		echo $jawaban;
	}
	else if($no_soal==32)
	{
		$q=mysqli_query($con,"SELECT jawab32 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab32'];
		echo $jawaban;
	}
	else if($no_soal==33)
	{
		$q=mysqli_query($con,"SELECT jawab33 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab33'];
		echo $jawaban;
	}
	else if($no_soal==34)
	{
		$q=mysqli_query($con,"SELECT jawab34 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab34'];
		echo $jawaban;
	}
	else if($no_soal==4)
	{
		$q=mysqli_query($con,"SELECT jawab4 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab4'];
		echo $jawaban;
	}
	else if($no_soal==35)
	{
		$q=mysqli_query($con,"SELECT jawab35 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab35'];
		echo $jawaban;
	}
	
	else if($no_soal==36)
	{
		$q=mysqli_query($con,"SELECT jawab36 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab36'];
		echo $jawaban;
	}
	else if($no_soal==37)
	{
		$q=mysqli_query($con,"SELECT jawab37 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab37'];
		echo $jawaban;
	}
	else if($no_soal==38)
	{
		$q=mysqli_query($con,"SELECT jawab38 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab38'];
		echo $jawaban;
	}
	else if($no_soal==39)
	{
		$q=mysqli_query($con,"SELECT jawab39 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab39'];
		echo $jawaban;
	}
	else if($no_soal==40)
	{
		$q=mysqli_query($con,"SELECT jawab40 FROM tb_jawaban WHERE nisn='$nisn' AND no_paket='$no_paket'");
		$r=mysqli_fetch_assoc($q);
		$jawaban=$r['jawab40'];
		echo $jawaban;
	}
	
	
?>