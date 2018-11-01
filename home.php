<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
	 <!-- HTML 5 -->
    <title>.: Computerized Based Testing :.</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/bjqs.css" rel="stylesheet" />
	<!-- css disini -->
	<style>
		
		a{color:#fff;}
		
		
		
		</style>
 </head>
<body>

	
	<?php
		include 'nav2.php';

	?>
	<br>
	<div class="container" style="background:#fff;">
		<div class="row">
			
			<hr>
			
					<?php
						include "isi.php";
					?>
		</div>
		
	</div>

	<footer>
		<center><p>&copy; CBT - 2018 - Versi 7.3 </p>
	</footer>
			
</body>	
</html>
<!-- Bootstrap core JavaScript
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/action.js"></script>
