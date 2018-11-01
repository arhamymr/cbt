<?php	
	$username=$_SESSION['username'];
	$status=$_GET['status'];
	$no=$_GET['no'];
	if(isset($no) or isset($status))
	{
		if($status=="add" or $status=="update")
		{
			if($status=="add")
			{
				$kata="Data coach berhasil ditambahkan";
			}
			else if($status=="update")
			{
				$kata="Data manajer sudah berhasil diupdate";
			}
			?>
				<script type="text/javascript" src="../js/jquery.js"> </script>
				<script type="text/javascript">
					$(document).ready(function(){
						$("#notifikasi").show();
					});
				</script>
			<?php
			$q=mysql_query("SELECT * FROM tb_coach WHERE no='$no'");
			$r=mysql_fetch_assoc($q);
			$nama=$r['nama'];
			$tempat_lahir=$r['tempat_lahir'];
			$tgl_lahir=$r['tgl_lahir'];
			$alamat=$r['alamat'];
			$kabupaten=$r['kabupaten'];
			$no_telp=$r['no_telp'];
			$action="update";
			$tombol="Update";
			$type="success";
			$header="System Success !";
		}
		else if(isset($no))
		{
			$q=mysql_query("SELECT * FROM tb_coach WHERE no='$no'");
			$r=mysql_fetch_assoc($q);
			$nama=$r['nama'];
			$tempat_lahir=$r['tempat_lahir'];
			$tgl_lahir=$r['tgl_lahir'];
			$alamat=$r['alamat'];
			$kabupaten=$r['kabupaten'];
			$no_telp=$r['no_telp'];
			$action="update";
			$tombol="Update";
			$type="success";
			$header="System Success !";
		}
	}
	else
	{
		$nama="";
		$tempat_lahir="";
		$tgl_lahir="";
		$alamat="";
		$kabupaten="";
		$no_telp="";
		$action="add";
		$tombol="Simpan";
		$type="success";
		$header="System Success !";
	}
	$q1=mysql_query("SELECT nama_kontingen FROM tb_kontingen WHERE username='$username'");
	$r1=mysql_fetch_assoc($q1);
	$nama_tim=$r1['nama_kontingen'];
?>
<h1>Daftar Atlet <span id="tambah_coach"><a href="?page=form_coach"  class="btn btn-lg btn-default">Tambah Baru</a></h1></span>
<div class="alert alert-<?php echo $type;?>" id="notifikasi" style="display:none;">
	<a class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
	<h4><?php echo $header;?></h4>
	<p>
	<?php echo $kata; ?>
	</p>
</div>
<form method="POST" action="coach/proses.php" id="form_check">
	<input type="hidden" value="<?php echo $action;?>" name="action">
	<input type="hidden" value="<?php echo $no;?>" name="no">
	<table class="table table-striped table-bordered table-hover">
		<tr> 
			<td>Nama lengkap</td>
			<td><input type="text" value="<?php echo $nama;?>" class="form-control" name="nama" placeholder="Nama Lengkap" required></td>
		</tr>
		<tr> 
			<td>Tempat lahir</td>
			<td><input type="text" value="<?php echo $tempat_lahir;?>" class="form-control" name="tempat_lahir" placeholder="Tempat lahir coach" required></td>
		</tr>
		<tr> 
			<td>Tanggal lahir</td>
			<td><input type="text" value="<?php echo $tgl_lahir;?>" class="form-control" name="tgl_lahir" placeholder="Tanggal lahir coach" required></td>
		</tr>
		<tr> 
			<td>Jenis kelamin</td>
			<td>
				<select name="jns_kelamin" class="form-control">
					<option value="<?php echo $jns_kelamin;?>"><?php echo $jns_kelamin;?></option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr> 
			<td>Kabupaten</td>
			<td><input type="text" value="<?php echo $kabupaten;?>" class="form-control" name="kabupaten" placeholder="Kabupaten dari coach" required></td>
		</tr>
		<tr> 
			<td>Alamat</td>
			<td><input type="text" value="<?php echo $alamat;?>" class="form-control" name="alamat" placeholder="Alamat coach" required></td>
		</tr>
		<tr> 
			<td>No. Telp</td>
			<td><input type="text" value="<?php echo $no_telp;?>" class="form-control" name="no_telp" placeholder="No. Telp coach" required></td>
		</tr>
		<tr> 
			<td>Nama Tim</td>
			<td><input type="text" value="<?php echo $nama_tim;?>" class="form-control" name="nama_tim" id="nama_team" readonly></td>
		</tr>
		<tr> 
			<td>Kelas yang diikuti</td>
			<td>
				<select name="kelas" class="form-control">
					<option value="<?php echo $kelas;?>"><?php echo $kelas;?></option>
					<?php
						$q=mysql_query("SELECT jenis_kelas FROM tb_kelas");
						while($r=mysql_fetch_assoc($q))
						{
							echo "<option value=\"".$r['jenis_kelas']."\">".$r['jenis_kelas']."</option>";
						}
					?>
				</select>
			</td>
		</tr>
	</table>
	<button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $tombol;?></button>
</form>