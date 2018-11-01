<?php
	session_start();
	include "conn.php";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$jenis=$_POST['jenis'];
	
	$q=mysqli_query($con,"SELECT * FROM tb_admin WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($q)==0)
	{
		?>
			<script type="text/javascript">
				alert("Username dan password anda salah");
				document.location.href='index.php'
			</script>
		<?php
	}
	else
	{
		$_SESSION['username']=$_POST['username'];
		header('Location:home.php');
	}

?>