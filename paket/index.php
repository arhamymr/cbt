	
		
		<div class="col-md-3">
		<?php
		
		include "conn.php";
		$no_soal=$_GET['no_soal'];
		$nisn=$_GET['nisn'];
		$no_paket= $_GET['no_paket'];
		$nama_sekolah=$_GET['nama_sekolah'];

		// if paket 
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
		



		echo "<center>";
		echo "<hr />";
		echo "<div id='timer'></div>";

		echo "<hr />";
		$qp=mysqli_query($con,"SELECT * FROM $tabel ORDER BY no_soal ASC LIMIT 40");
		$i=0;
		while($rp=mysqli_fetch_assoc($qp))
		{
			$i++;
			echo "<span id='soal".$rp['no_soal']."' class='no_soal badge badge-primary'><a class='no' href='home.php?page=paket&no_paket=$no_paket&no_soal=".$rp['no_soal']."&nisn=$nisn&nama_sekolah=$nama_sekolah'>$i</a></span> ";
			if($i==5)
			{
				echo "<br />";
			} else if($i==10)
			{
				echo "<br />";
			} else if($i==15)
			{
				echo "<br />";
			} else if($i==20)
			{
				echo "<br />";
			} else if($i==25)
			{
				echo "<br />";
			} else if($i==30)
			{
				echo "<br />";
			} else if($i==35)
			{
				echo "<br />";
			} 
		}
		echo "</center>";
		
		echo "<hr />";
		
	
		?>
		</form>
		<script type="text/javascript">
			
			function showButton(){
				var element = document.querySelector('#jawab').classList;
				element.add('show-button');
				

			}
		</script>


			
			

		</div>
		<div class="col-md-9">
		

	<form method='POST' action="proses_jawab.php" id='form_jawab'>
	<input type='hidden' value='<?php echo $_GET['no_soal'];?>' name='no_soal' id='no_soal'>
	<input type='hidden' value='<?php echo $_GET['nisn'];?>' name='nisn' id="nisn">
	<input type="hidden" value='<?php echo $_GET['no_paket'];?>' name="no_paket">
	<input type="hidden" value="<?php echo $_GET['nama_sekolah'];?>" name="nama_sekolah">

	<!--  bagian card  -->
	
	<?php
		echo "<div class='card' >";
		$q=mysqli_query($con,"SELECT *,RIGHT(lokasi,3) AS media FROM $tabel WHERE no_soal='$no_soal'");
		while($r=mysqli_fetch_assoc($q))
		{
			if($r['media']=='jpg')
			{
				$media=" <img class='card-img-top' src='file/".$r['lokasi']."' alt='soal image'>";
			}
			else if($r['media']=='mp4')
			{
				$media="<video src='file/".$r['lokasi']."' width='500px' controls='controls'>";
			}
			else if($r['media']=='mp3')
			{
				$media="<audio src='file/".$r['lokasi']."' controls='controls'></audio>";
			}
			else
			{
				$media="";
			}
			echo "
			<div class='card-body'>
			<h4>Soal no : $no_soal</h4>
			 <div class='well' style='background:#fff;border-radius:0px;'>
			 	<h4 class='card-title'>".$r['perintah']."</h4>
				<p>$media</p>
				<p class='card-text'>".$r['pertanyaan']."</p>
				
			
				</div>
			</div>
				
			";

			echo "
			  <ul class='list-group list-group-flush'>
			    <li class='list-group-item'>
			    	<input onClick='showButton()' type='radio' class='jawaban' name='jawaban' id='jawab_a' value='a'> A. ".$r['jawaban_a']."</li>
			    <li class='list-group-item'>
			    	<input onClick='showButton()' type='radio' class='jawaban' name='jawaban' id='jawab_b' value='b'> B. ".$r['jawaban_b']."</li>
			    <li class='list-group-item'>
			    	<input onClick='showButton()' type='radio' class='jawaban' name='jawaban' id='jawab_c' value='c'> C. ".$r['jawaban_c']."</li>
			    <li class='list-group-item'>
			    	<input onClick='showButton()' type='radio' class='jawaban' name='jawaban' id='jawab_d' value='d'> D. ".$r['jawaban_d']."</li>
			    <li class='list-group-item'>
			    	<input onClick='showButton()' type='radio' class='jawaban' name='jawaban' id='jawab_e' value='e'> E. ".$r['jawaban_e']."</li>

			  </ul>
		</div>

				<div style='clear:both'></div>
				<div class='text-right'>
				<input type='submit' id='jawab' value='JAWAB' style='font-weight:bold;' class='btn btn-success hidden-button'>
				</div>
				<hr />
		
			";
		}

	
		
		?>
		<input type='hidden' value="<?php echo $_GET['nisn']; ?>">
		<input type='button' id='selesai' value='FINISH' 
		class='btn btn-danger'>
		
   		
	
	<hr>

	
	<!--
	Modal
	-->
		
	</div>
	