<?php
	$page = null;
	if (isset($_GET['page'])){
		$page=$_GET['page'];
	}
	
	
switch($page){
	
	case "paket":
	include "paket/index.php";
	break; 
	
	
	default:
	?>
	
				  	
		  	<div class="col-md-6">

				<form method="POST" action="proses.php" id="form_daftar" class="form-horizontal form-row-seperated">
					<div class="form-group">
					   	<label class="control-label">Nama</label>
					   	<div>
						 	 <input type="text" required class="form-control" value="" placeholder="Nama siswa" name="nama_siswa" required > 
					  	 </div>
					</div>
					

					<div class="form-group">
					   	<label class="control-label">Kelas</label>
					   	<div>
						 	 <select name="kelas" class="form-control" required>
						 	 	
						 	 	<option value="XI TKJ 1">
						 	 	X TKJ 1
						 	 	</option>

						 	 	<option value="X TKJ 2">
						 	 	X TKJ 2
						 	 	</option>

						 	 	<option value="X TKJ 3">
						 	 	X TKJ 3
						 	 	</option>

						 	 	<option value="XI TKJ 4">
						 	 	X TKJ 4
						 	 	</option>

						 	 	<option value="X TKJ 5">
						 	 	X TKJ 5
						 	 	</option>

						 	 	<option value="XI TKJ 1">
						 	 	XI TKJ 1
						 	 	</option>
						 	 	
						 	 	<option value="XI TKJ 2">
						 	 	XI TKJ 2
						 	 	</option>

						 	 	<option value="XI TKJ 3">
						 	 	XI TKJ 3
						 	 	</option>

						 	 	<option value="XI TKJ 4">
						 	 	XI TKJ 4
						 	 	</option>

						 	 	<option value="XI TKJ 5">
						 	 	XI TKJ 5
						 	 	</option>
						 	 	
						 	 	<option value="XII TKJ 1">
						 	 	XII TKJ 1
						 	 	</option>

						 	 	<option value="XII TKJ 2">
						 	 	XII TKJ 2
						 	 	</option>

						 	 	<option value="XII TKJ 3">
						 	 	XII TKJ 3
						 	 	</option>

						 	 	<option value="XII TKJ 4">
						 	 	XII TKJ 4
						 	 	</option>

								<option value="XII TKJ 5">
						 	 	XII TKJ 5
						 	 	</option>
						 	 </select> 
					  	 </div>
					</div>
					
					<div class="form-group">
					   	<label class="control-label">No. Absen</label>
					   	<div >
						 	 <input type="text" required class="form-control" value="" placeholder="No. Absen" name="nisn" required> 
					  	 </div>
					</div>

					<div class="form-group">
					   	<label class="control-label">Nama Sekolah</label>
					   	<div >
						 	 <input type="text" required class="form-control" value="" placeholder="Nama Sekolah" name="nama_sekolah" required> 
					  	 </div>
					</div>

					<div class="form-group">
					   	<label class="control-label">Mata Pelajaran</label>
					   	<div>
						 	 <select name="paket" class="form-control">
						 	 	
						 	 	<option value="paket1">
						 	 	1. Sistem Operasi jaringan
						 	 	</option>
						 	 	
						 	 	<option value="paket2">
						 	 	2. Pemograman Dasar
						 	 	</option>
						 	 	
						 	 	<option value="paket3">
						 	 	3. Teknik Komputer dan Jaringan 
						 	 	</option>

						 	 </select> 
					  	 </div>
					</div>

					
					<div class="form-group">
						<div>
							<input type="submit" value="Daftar" class="btn btn-outline-primary btn-block ">
						</div>
					</div>
		  	</div>
		  	<div class="col-md-6">
				<center>
				<img  style="margin-top:100px" src="images/logo.png" class="img-responsive" width="300px">
				<h2 style="color:#000">Computerized Based Testing</h2>
			<h4 style="color:#000"> FTI UPA Fakultas Teknik dan Informatika </h4>
				<!--<a href="admin/home.php" style="color:#000;text-decoration:underline;">Login Admin</a>-->
				</center>
		  	</div>
		  	
		  
		
	<?php
	break;
}
?>