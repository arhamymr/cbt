<?php
	session_start();
	$username=$_SESSION['username'];
	include "../../conn.php";
	$action=$_POST['action'];
	$no=$_POST['no'];
	$nama=$_POST['nama'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$kabupaten=$_POST['kabupaten'];
	$alamat=$_POST['alamat'];
	$no_telp=$_POST['no_telp'];

	//Cari nama kegiatan yang merupakan username tersebut
	$q=mysql_query("SELECT nama_kegiatan FROM tb_kontingen WHERE username='$username'");
	$r=mysql_fetch_assoc($q);
	$nama_kegiatan=$r['nama_kegiatan'];
	if ($action=="add")
	{
		
		mysql_query("INSERT INTO tb_coach(username,nama_kegiatan,nama,tempat_lahir,tgl_lahir,alamat,kabupaten,no_telp) VALUES('$username','$nama_kegiatan','$nama','$tempat_lahir','$tgl_lahir','$alamat','$kabupaten','$no_telp')") or die("gagal");
		$q=mysql_query("SELECT MAX(no) as hi_no FROM tb_coach");
		$r=mysql_fetch_assoc($q);
		?>
			<script>
				document.location.href="../home.php?page=form_coach&no=<?php echo $r['hi_no'];?>&status=add";
			</script>
		<?php
		exit;
		
	}
	else if ($action=="update")
	{
		mysql_query("UPDATE tb_coach SET
			nama='$nama',
			tempat_lahir='$tempat_lahir',
			tgl_lahir='$tgl_lahir',
			alamat='$alamat',
			kabupaten='$kabupaten',
			no_telp='$no_telp'
			WHERE no='$no'
		") or die("Gagal update tabel coach");
		?>
			<script>
				document.location.href="../home.php?page=form_coach&no=<?php echo $no;?>&status=update";
			</script>
		<?php
		exit;
	}
	else if($_GET['action']=="delete")
	{
		$no=$_GET['no'];
		mysql_query("DELETE FROM tb_coach WHERE no='$no'");
		?>
			<script>
				document.location.href="../home.php?page=coach&no=<?php echo $no;?>&status=error";
			</script>
		<?php
		exit;
	}
?>